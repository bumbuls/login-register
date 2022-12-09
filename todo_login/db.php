<?php
$host = 'root';
$user = 'user';
$pass = 'name';
$dbname = 'name';

$db = new mysqli($host, $user, $pass, $dbname);

if($db->connect_error){
  die("no connection" . $db->connect_error);
}

?>
