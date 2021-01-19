<?php 

include 'connect.php';

$error = "";

if(isset($_POST["submit"])) {
    if(empty($_POST["title"]) || empty($_POST["genre"]) || empty($_POST["director"]) || empty($_POST["image"])) {
        $error = "All fields are required.";
    } else {
        $title=$_POST['title'];
        $genre=$_POST['genre'];
        $director=$_POST['director'];
        $image=$_POST['image'];
    }

    $sql = "INSERT INTO `movies`(`title`, `genres`,`director`,`image`) VALUES ('$title','$genre','$director','$image')";

    $result = mysqli_query($conn,$sql); 
    if($result) {
        echo "Success new movie added to the website!";
        header("location: ../pick.php");
    }  else {
        echo "Something went wrong";
    }

}