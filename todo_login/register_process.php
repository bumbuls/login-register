<?php
include 'db.php';
include 'insert.php';


$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpass'];


      if($password === $repeatpassword) {
          $sql = "SELECT username FROM js_insert WHERE `name`= '$name' OR username = '$username'"; 
          $result = select($sql,$db);
          if($result){
                echo "username exists";
          } else {
            $password = password_hash($password, PASSWORD_DEFAULT);
          
            $sqls = "INSERT INTO js_insert (`name`,`username`,`password`) VALUES ('$name','$username', '$password')";
          $msg = insert($sqls,$db);
          if($msg === true){
            echo "account created";
            } else {
                echo "failed to create user";   
            }
           
        }      
      }
if(strlen($_POST['password']) > 6) {
    echo "Password must be 6 chars long";
    header("location: register.php");
}
?>