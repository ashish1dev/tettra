<?php
include 'config.php';

$conn = mysql_connect($host,$user,$pass);
$dbname="tettra";
$dbconnect=mysql_select_db($dbname, $conn);

//echo "is db connected = ".$dbconnect;


?>