<!DOCTYPE html>
<html>
<body>


<a href="includes/movieAdd.php">Add a movie to the List!</a>
<br>

<a href="includes/movieRemove.php">Remove a movie from the List!</a>

<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<br>";
    echo "Welcome to the page user:" . $_SESSION['username'] . "!";
} else {
    header("Location: example.html");
}

include 'includes/connect.php';

$sql1 = "SELECT title FROM movies";
$result1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM `movies`";
$result2 = mysqli_query($conn,$sql2); 

$array_title = array();
while($row = mysqli_fetch_assoc($result1)) {
    $array_title[] = $row['title']. " ";
}

?>
<form method="post" action="includes/testSubmit.php">
        <label for="options">Choose a movie:</label>
        <select name="movies" id="movies">
        <?php 
        global $numData;
        $numData = 1;
        foreach ($array_title as $data) {
            ?><option value="<?=$numData?>"><?=$data?></option>
            <?php
            $numData = $numData + 1;
        }
?>
</select>
<input type="submit" name="submit" value="submit">
<input type="submit" name="remove" value="remove">
</form>
<form method="post" action="movies.php">
<input type="submit" name="final" value="final">
</form>

<br>


<table>
<?php
while($row = mysqli_fetch_array($result2)) {
    echo "<td>";
    echo "<br>";
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
    $theTitle = $row['title'];
}

?>
</table>
</body>
</html>