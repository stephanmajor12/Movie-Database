<?php

include 'connect.php';

$error = "";

if(isset($_POST["submit"])) {
    if(empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "Both fields are required.";
    } else {
        $username=$_POST['username'];
        $password=$_POST['password'];
    }

    $sql1 = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";

    $result1 = mysqli_query($conn,$sql1); 

    if($result1) {
        echo "Success new user Created!";
        header("location: ../home.php");
    }  else {
        echo "Something went wrong";
    }

// sql to create table
/*
$sql2 = "CREATE TABLE MyMans (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    moviesPicked INT(6) NOT NULL, <= 
    )";
    */

$sql2 = "CREATE TABLE `$username` (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    moviesPicked INT(6) NOT NULL
    )";

    if(mysqli_query($conn, $sql2)) {
        echo "Table created";
    } else {
        echo "Error creating table";
    }
}
?>