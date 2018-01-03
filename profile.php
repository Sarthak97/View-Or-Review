<?php

if(isset($_POST['log']))
{
	require 'C:\xampp\htdocs\Site\ses_end.php';
}

?>

<html>

<title>Profile</title>

<body>

<form action="profile.php" method="POST">
<input type="submit" value="Log Out!!" name="log">
</form>

</body>