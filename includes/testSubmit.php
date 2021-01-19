<?php

include 'connect.php';

session_start();

$var = $_SESSION['username'];

if(isset($_POST['submit'])){
    $primKey=$_POST['movies'];
    $sql = "INSERT INTO `$var` (`id`,`moviesPicked`) VALUES (NULL,'$primKey')";
}

if(isset($_POST['remove'])){
    $primKey=$_POST['movies'];
    $sql = "DELETE FROM `$var` WHERE `moviesPicked` = '$primKey'";
}

$result = mysqli_query($conn,$sql);

header("location: ../pick.php");