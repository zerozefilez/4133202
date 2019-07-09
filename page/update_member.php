<?php 
    require "conDB.php";

    $province = $_POST['province'];

    
    $fav = array();

    if(isset($_POST['fav_P'])) array_push($fav, $_POST['fav_P']);
    if(isset($_POST['fav_N'])) array_push($fav, $_POST['fav_N']);

    
    $fav = implode(" , ", $fav);
    
    $result = mysqli_query($conDB, "SELECT * FROM tb_member WHERE user = '{$_GET['user']}' ");
    $rows = mysqli_fetch_assoc($result);
    
    if(!isset($_POST['sex'])) $sex = $rows['sex'];
    else $sex = $_POST['sex'];
    
    if(!isset($_POST['fav_P']) && !isset($_POST['fav_N'])) $fav = $rows['favorite']; 


    $sql = "UPDATE tb_member 
            SET user= '{$_POST['user']}', age='{$_POST['age']}'
            ,sex='$sex', favorite='$fav', province='$provice' WHERE user = '{$_GET['name']}' ";
    
    mysqli_query($con, $sql);

    include "show_member.php";
?>