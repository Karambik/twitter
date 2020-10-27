<?php 
 $con = mysqli_connect("127.0.0.1","root","" , "twitter");
 $sql = mysqli_query($con, "INSERT INTO twits(author, twit, img) VALUES ('{$_GET['log']}','{$_GET['txt']}','img/1.jpg')");
 header("Location: index.php");
 ?>