<?php 
$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "wicars";
#creating database connection
$conn =mysqli_connect($sname,$uname,$pass,$db_name);
if (!$conn )
{echo "connection failed ! ";}
?>