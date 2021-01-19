<!DOCTYPE html>
<html>
<body>

<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<br>";
    echo "<h1>";
    echo "Welcome to the movie add page " . $_SESSION['username'] . "!";
    echo "</h1>";
} else {
    header("Location: example.html");
}
?> 

<form method="post" action="movieAddToList.php">

<label>Title</label><br>
<input type="text" name="title" placeholder="Title" /><br><br>

<label>Genre</label><br>
<input type="text" name="genre" placeholder="Genre" /><br><br>

<label>Director</label><br>
<input type="text" name="director" placeholder="Director" /><br><br>

<label>Image</label><br>
<input type="text" name="image" placeholder="Image" /><br><br>

<input type="submit" name="submit" value="Add" /> 
</form>
</body>
</html>