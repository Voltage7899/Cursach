<?php
include("include.php");



$login=$_POST["Login"];
$password=$_POST["Password"];
$name=$_POST["Name"];



$count=mysqli_query($connection,"INSERT INTO `privatedata` (`login`,`password`,`name`)VALUES('$login','$password','$name')");



header('Location: /index.php');
