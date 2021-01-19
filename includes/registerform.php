<?php
include 'connect.php'; // Include Login Script

if ((isset($_SESSION['username']) != '')) 
{
header('Location: registerform.php');
}
error_reporting(-1);
?>
<form method="post" action="register.php">
<label>Username:</label><br>
<input type="text" name="username" placeholder="username" /><br><br>
<label>Password:</label><br>
<input type="password" name="password" placeholder="password" />  <br><br>
<input type="submit" name="submit" value="Register" /> 
</form>