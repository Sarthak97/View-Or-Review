<?php
session_start();

require 'C:\xampp\htdocs\Site\connect.php';
$name="ADHM";
$id=$_SESSION['id'];
$user=$_SESSION['mail'];
if(isset($_POST['submit']))
{
	if(!empty($_POST['r']))
	{
		$rev=$_POST['r'];
		$sql="insert into review values('$name','$rev','$user','$id')";
		$res=$conn->query($sql);
		if($res)
		{	
			echo "<script>alert('Review Successfully Submitted.');</script>";
			header('location:movies.php');
		}
		else
			echo "Try again.";
	}
}

$sql="SELECT rev,id FROM review where name='$name'";
$res=$conn->query($sql);
if($res)
{
	if($res->num_rows>0)
		{
			$row = $res->fetch_assoc();
			$user=$row['id'];
			$rev=$row['rev'];
		}
		else
			$rev="NO REVIEWS YET.";

}


?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="new.css">
<link rel="stylesheet" type="text/css" href="new1.css">
<link href="https://fonts.googleapis.com/css?family=Anton|Russo+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Da" rel="stylesheet">
<title> View Or Review </title>
</head>
<body>

<h4>Welcome <?php echo $id."\t"; ?><div style="align:right;"><a href="profile.php" >Profile</a></div></h4><br>


<!--
<div class="box">
	<h5 align="right"><a style="color:black" class="button" href="#popup1">Login/Signup</a></h5>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<h2 align="center" style="color:#424242">Sign In</h2>
		<a class="close" href="#">&times;</a>
		<form class="content">
		<div>
			<input class="a" type="text" align="left" name="username" placeholder="Username" required/><br/><br/>
            <input class="a" type="password" align="left" name="password" placeholder="Password" required/><br/><br/>
            <a href=""><input style="font-size:20px;background-color:#2E7D32;color:white;width:285px;border:0;" type="submit" value="Sign In"/></a><br/>
			<input type="checkbox" checked="checked">Remember me  <a class="c" href="">Forgot password</a><br/><br/><br/>
            <p>Dont have an account?<a href="file:///C:/Program%20Files/Notepad++/signup.html">Sign Up</a></p>
		</div>
		</form>
    </div>
</div>-->
<a href="vor.php"><h1 class="m" marginwidth="0">VIEW OR REVIEW</h1></a>
<nav> 
<ul>     
<li><a href="movies.php">MOVIES</a></li>     
<li  class="dropbutton">
<a href="games.html">VIDEO GAMES</a>
<div class="droplink">
<a href="games.html">PS4</a>
<a href="games.html">PS3</a>
<a href="games.html">XBOX ONE</a>
<a href="games.html">XBOX 360</a>
</li>
</div>     
<li><a href="">TV SHOWS</a></li>     
<li class="dropbutton">
<a href="">ELECTRONICS</a>
<div class="droplink">
<a href="">MOBILE PHONES</a>
<a href="">LAPTOP</a>
<a href="">PC</a>
<a href="">CAMERA</a>
<a href="">TABLETS</a>
<a href="">WEARABLES</a>
</div>
</li>     
<!--<li class="dropbutton">
<a href="">BUSES</a>
<div class="droplink">
<a href="">VOLVO</a>
<a href="">MERCEDES</a>
<a href="">OTHERS</a>
</div>
</li>
<li><a href="">HOTEL</a></li>-->   
</ul>
</nav>
<div>
<img class="i" src="Pics\Movies\ae.jpg" align="left"></a>
<br/>
<br/>
<h1 style="color:black;margin-top:40px;font-size:45px;">Ae Dil Hai Mushkil</h1>
<h3>Year: 2016</h3>
<h3>Genre: Romantic/Drama/Musical</h3>
<h6><?php 
	if(!empty($user)) 
	{	
		while($user!=Null)
		{
			echo $user." submitted:<br>"; 
			echo $rev."<br>"; 	
			if($res->num_rows>0)
			{
				$row = $res->fetch_assoc();
				$user=$row['id'];
				$rev=$row['rev'];
			}
		}
	}		
		?></h6>
<!--<p>// echo $rev;</p><br>-->
<hr>
<form action="ae.php" method="POST">
<textarea name="r" placeholder="Write Review!" style="font-size:20px;width:50%;height: 150px;padding: 12px 20px;box-sizing: border-box;border: 2px solid #ccc;border-radius: 4px;resize: none;"></textarea>
<br/>
<input style="background-color:#2E7D32;
	border:0px;
	font-size:24px;
	border-radius:2px/2px;
	color:white;
	font-family:'Russo One', sans-serif;align:center;" type="submit" name="submit">
</form>
</div>
</body>
</html>