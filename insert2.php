<?php 
	$con = mysqli_connect("127.0.0.1","root","" , "twitter");
	$sql = mysqli_query($con, "INSERT INTO Followings (name, img, txt) VALUES ('{$_GET['name']}','{$_GET['channel']}','{$_GET['img']}')");
	header("Location: index.php");
	
?>