<?php
require "conDB.php";
$user = $_GET['user'];

$strSQL = "DELETE FROM tb_member WHERE user='$user'";
mysqli_query($link,$strSQL) or die(mysqli_error($link));

include "show_member.php";

?>