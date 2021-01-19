<!DOCTYPE html>
<html>

<style>
* {
margin: 0;
padding: 0;
  box-sizing: border-box;
}

table {
  width:100%;
  }

td {
  float: left;
  width: 33.333%;
}
</style>

<body>
<?php

include 'includes/connect.php';

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<br>";
    echo "<h1>";
    echo "Welcome to your movies list: " . $_SESSION['username'] . "!";
    echo "</h1>";
} else {
    header("Location: example.html");
}

$error = "";

//Have to make it so for every variable not going to be shown a 0 is subbed in.

$var = $_SESSION['username'];

$sql1 = "SELECT moviesPicked FROM `$var`";

$result1 = mysqli_query($conn,$sql1);
$new_array = array();
while($row = mysqli_fetch_assoc($result1)) {
    $new_array[] = $row['moviesPicked'] . " ";
}
?>

<table>
<?php
foreach ($new_array as $data) {
    $sql2 = "SELECT * FROM `movies` WHERE movieid = $data";
    $result2 = mysqli_query($conn,$sql2); 
    while($row = mysqli_fetch_array($result2)) {
        echo "<td>";
        echo $row['title']; 
        echo "<br>";
        echo $row['genres']; 
        echo "<br>";
        echo $row['director'];
        echo "<br>";
        $theImage = $row['image'];
        ?>
        <img src="<?=$theImage?>" width="200" height ="300"></img>
        <?php
        echo "</td>";
        echo "<br>";
    }
}
?>
</table>
</body>
</html>