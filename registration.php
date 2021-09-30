<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>HimPhPlab</title>
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
	<link rel="manifest" href="images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>
<div id="mainpic"></div>
<hr>

<header class="hd">
	<nav class="menu">
		<ul>
			<li><a href="index.php"><img src="">Home</a></li>
			<li><a href="catalog.php"><img src="">Catalog</a><ul>
				<li><a href="glassware.php">With recipe</a></li>
				<li><a href="Equip.php">Without recipe</a></li>
			</ul>
			</li>
			<li><a href="basket.php"><img src="">Basket</a></li>
			<li><a href="contacts.php"><img src="">Contacts</a></li>
			<li><a href="registration.php"><img src="">Registration/Sing In</a></li>
	</nav>
</header>
<hr>

<?php

include("include.php");
if($_COOKIE['user']==''):
?>
<div id="back_of_hd_second">
<header class="hd_first">SING IN</header>
<header class="hd_second">Enter your personal login and password</header>
<form method ="POST" action="/singin.php">
	
	<input type="text" placeholder="Your Email" name="Login">
	<input type="text" placeholder="Your Password" name="Password">

	<hr>
	<input type="submit" value="Send">
</form>
</div>

<br>
<br>
<br>

<div id="back_of_hd_third">
<header class="hd_first">Regisration</header>
<header class="hd_second">Enter your personal dates for registration</header>
<form method ="POST" action="/authorization.php">
	
	<input type="text" placeholder="Your Email" name="Login">
	<input type="text" placeholder="Your Password" name="Password">
	<input type="text" placeholder="Your Name" name="Name">
	<hr>
	<input type="submit" value="Send">
</form>
</div>

<br>
<br>
<br>

<div>
	<header class="hd_first">Sing in as admin</header>
	<header class="hd_second">Enter your personal dates for registration</header>

<form method ="POST" action="/avtoadmin.php">
	
	<input type="text" placeholder="Your Email" name="Login">
	<input type="text" placeholder="Your Password" name="Password">
	<input type="text" placeholder="Your Name" name="Name">
	<hr>
	<input type="submit" value="Send">

</form>





</div>










<?php else: 

	if($_COOKIE['user']=='admin'): ?>
	<p>Welcome <?=$_COOKIE['user']?></p><br>
	If u want to exit,tap here: <a href="exit.php">EXIT</a>
 <?php else:?>
	<p>Welcome <?=$_COOKIE['user']?></p><br>
	If u want to exit,tap here: <a href="exit.php">EXIT</a>

<?php endif;?>
<?php endif;?>





</body>
</html>