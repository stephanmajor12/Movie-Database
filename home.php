<?php
include 'login.php';

if ((isset($_SESSION['username']) != '')) 
{
header('Location: home.php');
}
error_reporting(-1);
?>
<form method="post" action="login.php">
<label>Username:</label><br>
<input type="text" name="username" placeholder="username" /><br><br>
<label>Password:</label><br>
<input type="password" name="password" placeholder="password" />  <br><br>
<input type="submit" name="submit" value="Login" /> 
</form>
<p>Don't have an account <a href="includes/registerform.php">get one here!</a></p>