<?php

session_start();
$id=$_SESSION['id'];
$mail=$_SESSION['mail'];

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

<h4>Welcome <?php echo $id."\t"; ?><div style="align:right;"><a href="profile.php" >Profile</a></div></h4><br>

<a href="Loggedin.php"><h1 class="m" marginwidth="0">VIEW OR REVIEW</h1></a>
<nav> 
<ul>     
<li><a href="movies.php">MOVIES</a></li>     
<li  class="dropbutton">
<a>VIDEO GAMES</a>
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
<li class="dropbutton">
<a href="">BUSES</a>
<div class="droplink">
<a href="">VOLVO</a>
<a href="">MERCEDES</a>
<a href="">OTHERS</a>
</div>
</li>
<li><a href="">HOTEL</a></li>   
</ul>
</nav>
<div>
<h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">English Movies</h3>
<figure><div class="adi"><a href="sc.php"><img class="g" src=" Pics\Movies\sc.jpg"/><figcaption class="cap">Suicide squad</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="bvs.html"><img class="g" src=" Pics\Movies\bvs.jpg"/><figcaption class="cap">Batman vs Superman</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="wd.html"><img class="g" src=" Pics\Movies\wd.jpg" /><figcaption class="cap">War Dogs</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="c2.html"><img class="g" src=" Pics\Movies\c2.jpg" /><figcaption class="cap">Conjuring 2</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="h3.html"><img class="g" src=" Pics\Movies\h3.jpg" /><figcaption class="cap">Hangover 3</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="i2.html"><img class="g" src=" Pics\Movies\i2.jpg" /><figcaption class="cap">Independence Day 2</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="ae.html"><img class="g" src=" Pics\Movies\pets.jpg" /><figcaption class="cap">Pets</figcaption></img></a></div></figure>
</div>
<div>
<h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Hindi Movies</h3>
<figure><div class="adi"><a href="ae.php"><img class="g" src=" Pics\Movies\ae.jpg"/><figcaption class="cap">Ae dil hai mushkil</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="shiv.html"><img class="g" src=" Pics\Movies\shiv.jpg"/><figcaption class="cap">Shivaay</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="dh.html"><img class="g" src=" Pics\Movies\dh.jpg" /><figcaption class="cap">M.S. Dhoni</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="pi.html"><img class="g" src=" Pics\Movies\pi.jpg" /><figcaption class="cap">Pink</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="m.html"><img class="g" src=" Pics\Movies\m.jpg" /><figcaption class="cap">Mohenjo Daro</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="air.php"><img class="g" src=" Pics\Movies\air.jpg" /><figcaption class="cap">Airlift</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="neerja.html"><img class="g" src=" Pics\Movies\neerja.jpg" /></img><figcaption class="cap">Neerja</figcaption></a></div></figure></div>
</div>
<div>
<h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Highest Rated Movies</h3>
<figure><div class="adi"><a href="sh.html"><img class="g" src=" Pics\Movies\sh.jpg"/><figcaption class="cap">Shawshank Redempti</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="godfather.html"><img class="g" src=" Pics\Movies\godfather.jpg"/><figcaption class="cap">Godfather</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="inc.html"><img class="g" src=" Pics\Movies\inc.jpg" /><figcaption class="cap">Inception</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="pf.html"><img class="g" src=" Pics\Movies\pf.jpg" /><figcaption class="cap">Pulp Fiction</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="dk.html"><img class="g" src=" Pics\Movies\dk.jpg" /><figcaption class="cap">The Dark Knight</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="fc.html"><img class="g" src=" Pics\Movies\fc.jpg" /><figcaption class="cap">Fight Club</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="int.html"><img class="g" src=" Pics\Movies\int.jpg" /></img><figcaption class="cap">Intersteller</figcaption></a></div></figure>
</div>
</body>
</html>