<?php

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
        <form id="test" class="register-form">
            <input type="text" placeholder="name" id="name" name="name">
            <input type="text" placeholder="username" id="username" name="username">
            <input type="password" placeholder="password" id="password" name="password">
            <input type="password" placeholder="password again" id="repeatpass" name="repeatpass">
            <button onclick="getValue()">Register</button>
            <p class="message">Already registered? <a href="login.php">Sign in</a></p>
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
            msg.innerHTML = this.responseText;
            }
            
        };
        xhttp.open("POST", "register_process.php", true);
        xhttp.send(formData);       
    }
    </script>
</body>
</html>