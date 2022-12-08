<?php

function insert($sql, $db){
    if($db->query($sql)===TRUE){
        return true;
    }else{
        return false;
    }
}
function select($sql, $db){
    $results = $db->query($sql);
    if($results->num_rows > 0){
        return $results;
    }else{
        return false;
    }
}
// if(isset($_GET["mes"])) {
// 				echo"<div class='error'>{$_GET["mes"]}</div>";	
// 			}
?>