<!DOCTYPE html>
<html>
<body>

<?php

session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<br>";
    echo "<h1>";
    echo "Welcome to the Remove Function page: " . $_SESSION['username'] . "!";
    echo "</h1>";
} else {
    header("Location: example.html");
}

?>
    
<form method="post" action="movieRemoveFromList.php">

<label>Movie Title</label><br>
<input type="text" name="title" placeholder="Title" /><br><br>

<input type="submit" name="submit" value="Remove" /> 
</form>
</body>
</html>