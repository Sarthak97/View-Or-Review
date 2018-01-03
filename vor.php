<?php

session_start();
require 'C:\xampp\htdocs\Site\connect.php';

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$pass=$_POST['password'];
	$pass_enc=md5($pass);
	$sql="SELECT id,mail from sample where mail='$id' and pass='$pass_enc'";
	$result=$conn->query($sql);
	if($result)
	{	
		if($result->num_rows>0)
		{
			$row = $result->fetch_assoc();
			$user=$row['id'];
			$mail=$row['mail'];
			$_SESSION['id']=$user;
			$_SESSION['mail']=$mail;
			header("location:http://localhost/Site/Updated/Loggedin.php");
		}
		else
			echo "Invalid Username/password!!";

	}
	else
		echo "<script>window.alert('ERROR');<script>";
	
	$conn->close();
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
<body bgcolor="#BDBDBD">
<div class="box">
	<h5 align="right"><a style="color:black" class="button" href="#popup1">Login/Signup</a></h5>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<h2 align="center" style="color:#424242">Sign In</h2>
		<a class="close" href="#">&times;</a>
		<form class="content" method="POST" action="http://localhost/Site/updated/vor.php">
		<div>
			<input class="a" type="text" align="left" name="id" placeholder="Registered E-Mail" required/><br/><br/>
            <input class="a" type="password" align="left" name="password" placeholder="Password" required/><br/><br/>
            <input style="font-size:20px;background-color:#2E7D32;color:white;width:285px;border:0;" type="submit" name="submit" value="Sign In"/><br/>
			
            <p>Dont have an account?<a href="http://localhost/Site/signup.php">Sign Up</a></p>
		</div>
		</form>
    </div>
</div>
<a href="vor.php"><h1 class="m" marginwidth="0">VIEW OR REVIEW</h1></a>
<nav> 
<ul>     
<li><a href="">MOVIES</a></li>     
<li  class="dropbutton">
<a href="">VIDEO GAMES</a>
<div class="droplink">
<a href="http://localhost/Site/updated/vor.php#popup1">PS4</a>
<a href="http://localhost/Site/updated/vor.php#popup1">PS3</a>
<a href="http://localhost/Site/updated/vor.php#popup1">XBOX ONE</a>
<a href="http://localhost/Site/updated/vor.php#popup1">XBOX 360</a>
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
<li><a href="about.html">ABOUT US</a></li>     
<!--<li class="dropbutton">
<a href="">BUSES</a>
<div class="droplink">
<a href="">VOLVO</a>
<a href="">MERCEDES</a>
<a href="">OTHERS</a>
</div>
</li>
<li><a href="">HOTEL</a></li> -->  
</ul>
</nav>
<div>
<a href="movies.php"><h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;align:center;">Movies</h3></a>
<figure><div class="adi"><a href=""><img class="g" src=" Pics\Movies\sc.jpg"/><figcaption class="cap">Suicide squad</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=""><img class="g" src=" Pics\Movies\bvs.jpg"/><figcaption class="cap">Batman vs Superman</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=""><img class="g" src=" Pics\Movies\wd.jpg" /><figcaption class="cap">War Dogs</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=""><img class="g" src=" Pics\Movies\c2.jpg" /><figcaption class="cap">Conjuring 2</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=""><img class="g" src=" Pics\Movies\h3.jpg" /><figcaption class="cap">Hangover 3</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=""><img class="g" src=" Pics\Movies\i2.jpg" /><figcaption class="cap">Independence Day 2</figcaption></img></a></div></figure>
<figure><a href=""><img class="g" src=" Pics\Movies\pets.jpg" /><figcaption class="cap">Pets</figcaption></img></a></figure>
</div>
<div>
<a href=" games.html"><h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Video Games</h3></a>
<figure><div class="adi"><a href="games.html"><img class="g" src=" Pics\Games\gta.jpg"/><figcaption class="cap">Gta 5</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="games.html"><img class="g" src=" Pics\Games\fifa.jpg"/><figcaption class="cap">Fifa 17</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="games.html"><img class="g" src=" Pics\Games\tlau.jpg" /><figcaption class="cap">TLAU</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="games.html"><img class="g" src=" Pics\Games\un.jpg" /><figcaption class="cap">Uncharted 4</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="games.html"><img class="g" src=" Pics\Games\forza1.jpg" /><figcaption class="cap">Forza 6</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="games.html"><img class="g" src=" Pics\Games\b1.jpg" /><figcaption class="cap">Battlefield 1</figcaption></img></a></div></figure>
<figure><a href="games.html"><img class="g" src=" Pics\Games\mk.jpg" /></img><figcaption class="cap">Mortal Kombat</figcaption></a></figure>
</div>
<div>
<h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Electronics</h3>
<figure><div class="adi"><a href=" sh.html"><img class="f" src=" Pics\Electronics\s7.jpg"/><figcaption class="cap">Galaxy s7 Edge</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" godfather.html"><img class="f" src=" Pics\Electronics\i7.jpg"/><figcaption class="cap">Iphone 7</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" inc.html"><img class="f" src=" Pics\Electronics\al.jpg" /><figcaption class="cap">Alienware</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" pf.html"><img class="f" src=" Pics\Electronics\gi.jpg" /><figcaption class="cap">Gear IconX</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" dk.html"><img class="f" src=" Pics\Electronics\ipad.jpg" /><figcaption class="cap">Ipad Mini 4</figcaption></img></a></div></figure>
<figure><a href=" fc.html"><img class="f" src=" Pics\Electronics\cam.jpg" /><figcaption class="cap">Canon 1D mk2</figcaption></img></a></figure>
</div>
<div>
<h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Television Shows</h3>
<figure><div class="adi"><a href=" got.html"><img class="g" src=" Pics\TV\got.jpg"/><figcaption class="cap">Game Of Thrones</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" bb.html"><img class="g" src=" Pics\TV\bb.jpg"/><figcaption class="cap">Breaking Bad</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" shtv.html"><img class="g" src=" Pics\TV\shtv.jpg" /><figcaption class="cap">Sherlock</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" s.html"><img class="g" src=" Pics\TV\s.jpg" /><figcaption class="cap">Suits</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" arr.html"><img class="g" src=" Pics\TV\arr.jpg" /><figcaption class="cap">Arrow</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" hoc.html"><img class="g" src=" Pics\TV\hoc.jpg" /><figcaption class="cap">House Of Cards</figcaption></img></a></div></figure>
<figure><a href="td.html"><img class="g" src=" Pics\TV\td.jpg" /></img><figcaption class="cap">True Detective</figcaption></a></figure>
</div>

<footer style="padding:4%;background-color:grey;text-align:center;">
<a href="about.html" style="color:black;text-decoration:bold;">ABOUT US</a>
</footer>
</body>
</html>