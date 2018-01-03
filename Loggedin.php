<?php

session_start();
require 'C:\xampp\htdocs\Site\connect.php';

$i=$_SESSION['id'];
$m=$_SESSION['mail'];

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

<h4>Welcome <?php echo $i."\t"; ?><a href="profile.php" style="align:right;">Profile</a></h4><br>
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
<a href="">ELECTRONICS</a></li></ul> 
</nav>  

<!--<div class="droplink">
<a href="">MOBILE PHONES</a>
<a href="">LAPTOP</a>
<a href="">PC</a>
<a href="">CAMERA</a>
<a href="">TABLETS</a>
<a href="">WEARABLES</a>
</div>
</li>  -->
</li>    

<div>
<a href="movies.php"><h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;align:center;">Movies</h3></a>
<figure><div class="adi"><a href="sc.php"><img class="g" src="Pics\Movies\sc.jpg"/><figcaption class="cap">Suicide squad</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="bvs.html"><img class="g" src="Pics\Movies\bvs.jpg"/><figcaption class="cap">Batman vs Superman</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="wd.html"><img class="g" src="Pics\Movies\wd.jpg" /><figcaption class="cap">War Dogs</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="c2.html"><img class="g" src="Pics\Movies\c2.jpg" /><figcaption class="cap">Conjuring 2</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="h3.html"><img class="g" src="Pics\Movies\h3.jpg" /><figcaption class="cap">Hangover 3</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="i2.html"><img class="g" src="Pics\Movies\i2.jpg" /><figcaption class="cap">Independence Day 2</figcaption></img></a></div></figure>
<figure><a href="pets.html"><img class="g" src="Pics\Movies\pets.jpg" /><figcaption class="cap">Pets</figcaption></img></a></figure>
</div>
<div>
<a href=" games.html"><h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Video Games</h3></a>
<figure><div class="adi"><a href="gta5.html"><img class="g" src="Pics\Games\gta.jpg"/><figcaption class="cap">Gta 5</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="fifa.html"><img class="g" src="Pics\Games\fifa.jpg"/><figcaption class="cap">Fifa 17</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="tlau.html"><img class="g" src="Pics\Games\tlau.jpg" /><figcaption class="cap">TLAU</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="un.html"><img class="g" src="Pics\Games\un.jpg" /><figcaption class="cap">Uncharted 4</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="forza1.html"><img class="g" src="Pics\Games\forza1.jpg" /><figcaption class="cap">Forza 6</figcaption></img></a></div></figure>
<figure><div class="adi"><a href="b1.html"><img class="g" src="Pics\Games\b1.jpg" /><figcaption class="cap">Battlefield 1</figcaption></img></a></div></figure>
<figure><a href="mk.html"><img class="g" src="Pics\Games\mk.jpg" /></img><figcaption class="cap">Mortal Kombat</figcaption></a></figure>
</div>
<div>
<h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Electronics</h3>
<figure><div class="adi"><a href=" sh.html"><img class="f" src="Pics\Electronics\s7.jpg"/><figcaption class="cap">Galaxy s7 Edge</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" godfather.html"><img class="f" src="Pics\Electronics\i7.jpg"/><figcaption class="cap">Iphone 7</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" inc.html"><img class="f" src="Pics\Electronics\al.jpg" /><figcaption class="cap">Alienware</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" pf.html"><img class="f" src="Pics\Electronics\gi.jpg" /><figcaption class="cap">Gear IconX</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" dk.html"><img class="f" src="Pics\Electronics\ipad.jpg" /><figcaption class="cap">Ipad Mini 4</figcaption></img></a></div></figure>
<figure><a href=" fc.html"><img class="f" src="Pics\Electronics\cam.jpg" /><figcaption class="cap">Canon 1D mk2</figcaption></img></a></figure>
</div>
<div>
<h3 style="color:black;font-family: 'Baloo', cursive;margin-top:5px;">Television Shows</h3>
<figure><div class="adi"><a href=" got.html"><img class="g" src="Pics\TV\got.jpg"/><figcaption class="cap">Game Of Thrones</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" bb.html"><img class="g" src="Pics\TV\bb.jpg"/><figcaption class="cap">Breaking Bad</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" shtv.html"><img class="g" src="Pics\TV\shtv.jpg" /><figcaption class="cap">Sherlock</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" s.html"><img class="g" src="Pics\TV\s.jpg" /><figcaption class="cap">Suits</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" arr.html"><img class="g" src="Pics\TV\arr.jpg" /><figcaption class="cap">Arrow</figcaption></img></a></div></figure>
<figure><div class="adi"><a href=" hoc.html"><img class="g" src="Pics\TV\hoc.jpg" /><figcaption class="cap">House Of Cards</figcaption></img></a></div></figure>
<figure><a href=" td.html"><img class="g" src="Pics\TV\td.jpg" /></img><figcaption class="cap">True Detective</figcaption></a></figure>
</div>

<footer style="padding:4%;background-color:grey;text-align:center;">
<a href=" about.html" style="color:black;text-decoration:bold;">ABOUT US</a>
</footer>
</body>
</html>