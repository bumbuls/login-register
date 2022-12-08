<?php
require_once "db.php";
if($_GET["task_id"]) {
    $task_id = $_GET['task_id'];

    $db->query("DELETE FROM `task` WHERE `task_id` = $task_id");
    header("location: todo_home.php");
}