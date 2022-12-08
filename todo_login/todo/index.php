<?php

include "db.php";
session_start();
// if(!isset($_SESSION["id"])) {
// 	echo "<script>window.open('index.php?mes=Access Denied...','_self');</script>";
// }	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="assets/style.css">
    
    <script src="https://kit.fontawesome.com/cf36edb550.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <h1>ToDo App</h1>
       <div class="date"> <? echo date("d.M.Y/D"); ?> </div>
       <?php echo '<h3 id="username">' . $_SESSION['name'] . '</h3>'; ?>
       <a href="logout.php">Logout</a>
    </nav>
<div class="wrapper">
    <div class="container">
    <form action="add_task.php"  method="post" id="test">
        <div class="task">
            <input type="text" name="task" placeholder="Ko pabeigt?" required>
            <button class="make" name="add">Pievieno</button>
        </div>
    </form>
        <table>
            <thead>
                <tr>
                    <th>N.p.k</th>
                    <th>Uzdevums</th>
                    <th>Status</th>
                    <th>Darbības</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                 $sql = $db->query("SELECT * FROM `task` ORDER BY `task_id` ASC");
                 $count = 1;
                 while($fetch = $sql->fetch_assoc()) {
                ?>
                <tr id="msg">
                    <td><? echo $count++ ?></td>
                    <td><? echo $fetch['task']; ?></td>
                    <td><? echo $fetch['status']; ?></td>
                    <td >
                <!-- <?php
                    if($fetch['status'] != "Done") {
                        echo
                        '<a class="success" href="update_task.php?task_id='. $fetch['task_id'].'">go</a>';
                    } 
                ?>  -->
                <a  href="delete_task.php?task_id=<?php echo $fetch['task_id']?>"><i class="fa-sharp fa-solid fa-trash"></i></a>
                 
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</div>

</body>
</html>