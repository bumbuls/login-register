<?php
include "db.php";
include "insert.php";

$user = $_POST['username1'];
$pass = $_POST['password1'];

$sql = "SELECT * FROM js_insert WHERE username = '$user'";

$eggs = select($sql,$db);

if($eggs) {
    while($row=$eggs->fetch_assoc()) {
        if($user == $row["username"] && password_verify($pass, $row["password"])) {
           $lietotajs = "logged in";
        } else {
            $lietotajs = "failed to login"; 
        }
       
    }
} else {
    $lietotajs ="user not exists";
}
echo $lietotajs;

if($res->num_rows>0){
    $ro=$res->fetch_assoc();
    $_SESSION["id"]=$ro["id"];
    $_SESSION["name"]=$ro["name"];
    echo "<script>window.open('todo_home.php','_self');</script>";
}

?>