<?php 

include 'connect.php';

$error = "";

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

if(isset($_POST["submit"])) {
    if(empty($_POST["title"])) {
        $error = "All fields are required.";
    } else {
        $title=$_POST['title'];
    }

    $sql = "DELETE FROM `movies` WHERE `movies`.`title` = '$title'";

    $result = mysqli_query($conn,$sql); 
    if($result) {
        echo "Success movie remove from the website!";
        header("location: ../pick.php");
    }  else {
        echo "Something went wrong";
    }

}