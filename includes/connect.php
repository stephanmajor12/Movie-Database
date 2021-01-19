<?php
//Author: Stephan Major, 000828066

///<summary>
///This file connects to the database for the files.
///</summary>

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "userList";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

