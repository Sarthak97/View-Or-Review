<?php

require 'C:\xampp\htdocs\Site\connect.php';
if(isset($_POST['submit']))
{
	if(!empty($_POST['r']))
	{
		$name="ADHM";
		//$name=$_SESSION['n'];
		$id="sarthak97";
		//$id=$_SESSION['id'];
		$user="sarthaksuperman@gmail.com";
		//$user=$_SESSION['mail'];
		$rev=$_POST['r'];
		$sql="insert into review values('$name','$rev','$user','$id')";
		$res=$conn->query($sql);
		if($res)
		{	
			echo "<script>alert('Review Successfully Submitted.');</script>";
			header('location:movies.html');
			
		}
		else
			echo "Try again.";
	}
}

?>