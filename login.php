<?php

include 'includes/connect.php';

$error = "";

if(isset($_POST["submit"])) {
    if(empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "Both fields are required.";
    } else {
        $username=$_POST['username'];
        $password=$_POST['password'];
    }

    $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);


    if(mysqli_num_rows($result) == 1)
    {
    session_start();
    $_SESSION['loggedin'] = true; // Initializing Session
    $_SESSION['username'] = $username;
    header("location: pick.php"); // Redirecting To Other Page
    echo "success message";
    } else
    {
    $error = "Incorrect username or password.";
    echo "Failure to login, invalid password and/or username.";
    }

}




