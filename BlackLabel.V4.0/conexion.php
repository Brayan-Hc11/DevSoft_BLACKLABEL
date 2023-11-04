








<?php
header("Content-Type: text/html;charset-utf-8");
$db = new mysqli('localhost', 'root', '','blacklabel');
	$acentos = $db->query("SET NAMES 'utf8'");
if($db->connect_error > 0){
	die('Unable to connect to database [' .  $db->connect_error . ']');
}?>  



