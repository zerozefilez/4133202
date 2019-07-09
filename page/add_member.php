<?php
include "conDB.php";

$user = $_POST['user'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$fav_P = $_POST['fav_P'];
$fav_N = $_POST['fav_N'];
$province = $_POST['province'];

$fav =$fav_P . "," . $fav_N;

$strSQL = "INSERT INTO tb_member 
            VALUES ('$user','$age','$sex','$fav',$province)";

mysqli_query($link,$strSQL) or die(mysqli_error($link));

?>