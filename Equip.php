<?php
include("include.php");
?>

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

	$result=mysqli_query($connection,"SELECT * FROM `without`");
	while($count=mysqli_fetch_assoc($result))
	{
		echo  "<div id='list'>".


		"<div class='glass'>". 
		"<img  src=' ".$count['image']." 'alt='' >".
		"</div>".

		"<div class='name'>".

		"Name:" . $count['name'].'<br/>'."Description:".$count['description']."<br>"."<br>"."Price:".$count['price']."<br>";
		echo  "	<form method ='POST' action=''>".
			"<input type='submit' value='In basket' name='iba'>".
		"</form>" ;

		if($_POST["iba"] == true)
		{
		$nameofuser	=$_COOKIE['user'];
		$nameofthing=$count['name'];
		$pr=$count=$count['price'];
		$inb=mysqli_query($connection,"INSERT INTO `basket`(`nameofuser`,`nameofthing`,`totalprice`) VALUES ('$nameofuser','$nameofthing','$pr')");

		}

		echo "</div>". "</div>";



	}

?>

</body>
</html>