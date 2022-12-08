<?php
session_start();
// if(!isset($_SESSION["id"])) {
// 	echo "<script>window.open('index.php?mes=Access Denied...','_self');</script>";
// }	
    require_once "assets/domain.php";
    if(isset($_POST['add'])) {
        if($_POST['task'] != "") {
            $task = $_POST['task'];

            $db->query("INSERT INTO `task` VALUES('', '$task', '')");
            header("location: index.php");
        }
    }
?>