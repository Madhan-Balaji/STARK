<?php
	session_start();
	include 'db_connection.php';
	$query = "UPDATE complaints SET status = 3 WHERE id = ".$_GET['q'];
	if(mysqli_query($con,$query)){
		echo "ok";
	}
	else{
		echo "not";
	}
?>