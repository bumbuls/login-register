<?php
$host = 'fdb34.awardspace.net';
$user = '3931080_bumbuls';
$pass = 'akmens123';
$dbname = '3931080_bumbuls';

$db = new mysqli($host, $user, $pass, $dbname);

if($db->connect_error){
  die("nav svienojuma" . $db->connect_error);
}

?>