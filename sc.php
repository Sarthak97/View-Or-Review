<?php

require 'C:\xampp\htdocs\Site\connect.php';
if(isset($_POST['submit']))
{
	if(!empty($_POST['r']))
	{
		$name="Suicide Squad";
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



<html>
<head>
<link rel="stylesheet" type="text/css" href="new.css">
<link rel="stylesheet" type="text/css" href="new1.css">
<link href="https://fonts.googleapis.com/css?family=Anton|Russo+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Da" rel="stylesheet">
<title> View Or Review </title>
</head>
<body>
<!--<div class="box">
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
<li><a href="movies.html">MOVIES</a></li>     
<li  class="dropbutton">
<a href="games.html">VIDEO GAMES</a>
<div class="droplink">
<a href="">PS4</a>
<a href="">PS3</a>
<a href="">XBOX ONE</a>
<a href="">XBOX 360</a>
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
<img class="i" src="Pics\Movies\sc.jpg" align="left"></a>
<br/>
<br/>
<h1 style="color:black;margin-top:40px;font-size:45px;">Suicide Squad</h1>
<h3>Year: 2016</h3>
<h3>Genre: Science Fiction/Superhero</h3>
<form action="sc.php" method="POST">
<textarea placeholder="Write Review!" style="font-size:20px;width:50%;height: 150px;padding: 12px 20px;box-sizing: border-box;border: 2px solid #ccc;border-radius: 4px;resize: none;"></textarea>
<br/>
<input type="submit" name="submit">
</form>
</div>
</body>
</html>