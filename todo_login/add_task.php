<?php

require_once "db.php";
if(isset($_POST['add'])) {
    if($_POST['task'] != "") {
        $task = $_POST['task'];

        $db->query("INSERT INTO `task` VALUES('', $task, '')");
        header("location: todo_home.php");
    }
}