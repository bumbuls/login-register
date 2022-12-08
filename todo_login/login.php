<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/register.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
        <form class="login-form" id="test" action="todo_home.php">
            <input type="text" name="username1" placeholder="username">
            <input type="password" name="password1" placeholder="password">
            <button type="submit" name="poga" onclick="getValue()">Login</button>
            <p class="message">Not registered? <a href="index.php">Create an account</a></p>
            <p id="msg"></p>
        </form>
        </div>
    </div>
    <script>
        function getValue() {
    event.preventDefault();           
            let form = document.getElementById('test');
            let msg = document.getElementById('msg');
            let formData = new FormData(form);
            let xhttp = new XMLHttpRequest();
             xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if(this.responseText = "true") {
                    window.location.replace("todo_home.php");
                } else {
                    msg.innerHTML = this.responseText;
                }
            }           
        };
        xhttp.open("POST", "login_process.php", true);
        xhttp.send(formData);       
    }
    </script>
</body>
</html>