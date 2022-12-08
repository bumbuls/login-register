<?php

require_once "db.php";

if($_GET['task_id' != ""]) {
    $task_id = $_GET['task_id'];

    $db->query("UPDATE `task` SET `status` = `Done` WHERE `task_id` = $task_id");
    header("location: todo_home.php");
}