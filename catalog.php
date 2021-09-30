<?php include("include.php"); ?>

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


<div class="pictures">
	<div><img class="imgcat" src="images/with.png"><p><a href="glassware.php">With recipe</a></p></div>
	<div><img class="imgcat" src="images/without.jpg"><p><a href="Equip.php">Without recipe</a></p></div>	
	
</div>

<br>
<br>
<br>
 <?php 
  if($_COOKIE['user']=='admin'):?>
  	<header class="hd_first">Add to Database</header>
  	<form method ="POST" action="">
	
	<input type="text" placeholder="Type" name="type">
	<input type="text" placeholder="Name of thing" name="nameofthing">
	<input type="text" placeholder="Description" name="des">
	<input type="text" placeholder="Price" name="price">
	<input type="text" placeholder="Image" name="image">
	<hr>
	<input type="submit" value="Add" name="add">

	<?php



	$type=$_POST['type'];
	$nameofthing=$_POST['nameofthing'];
	$des=$_POST['des'];
	$price=$_POST['price'];
	$img=$_POST['image'];

		if($_POST["add"] == true)
		{
		$inb=mysqli_query($connection,"INSERT INTO `$type`   (`name`,`description`,`price`,`image`) VALUES ('$nameofthing','$des', '$price','images/$img')" );

		}


?>
	<?php else: ?>
	<?php endif ?>





	</form>
<?php 
  if($_COOKIE['user']=='admin'):?>

<header class="hd_first">Delete from Database</header>  
<form method ="POST" action="">
	
	<input type="text" placeholder="Type" name="type">
	<input type="text" placeholder="Name of thing" name="nameofthing">
	
	<hr>

	<input type="submit" value="Delete" name="del">

<?php

	$type=$_POST['type'];
	$nameofthing=$_POST['nameofthing'];


  if($_POST["del"] == true)
		{
		$inb=mysqli_query($connection,"DELETE FROM `$type` WHERE `name` = '$nameofthing'");

		}
?>

<?php else: ?>
	<?php endif ?>










</body>
</html>