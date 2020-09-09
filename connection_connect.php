<?php 
$hostname="localhost";
$username="db17_14";
$pass = "db17_14";
$dbname="db17_14";
$con=mysql_connect($hostname,$username,$pass)or die(mysql_error ());
mysql_select_db($dbname,$con) or die (mysql_error ());
mysql_query("SET NAMES TIS620");
?>