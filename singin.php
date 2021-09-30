<?php
include("include.php");

$login=$_POST["Login"];
$password=$_POST["Password"];



$count=mysqli_query($connection,"SELECT * FROM `privatedata` WHERE `login` = '$login' AND `password` = '$password' ");
$user=mysqli_fetch_assoc($count);
if(mysqli_num_rows($count)==0)
{
	echo "U are not registered";
	exit();
}

setcookie('user',$user['name'],time()+3600,"/");

header('Location: /index.php');