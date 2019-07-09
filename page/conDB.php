<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_4133202";


$link =mysqli_connect($host,$user,$pass,$db);

echo $link?"Connected...":"Error...";

$strSQL = "SET NAMES utf8";
mysqli_query($link,$strSQL);



?>