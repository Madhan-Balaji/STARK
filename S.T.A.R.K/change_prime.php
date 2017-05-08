<?php
	include 'db_connection.php';
	include 'relog.php';
	$num = $_GET['q'];
	$query = "UPDATE user_connection SET primary_num = 0 WHERE user = ".$_SESSION['id']." AND primary_num = 1";
	if(mysqli_query($con,$query)){
		$query = "UPDATE user_connection SET primary_num = 1 WHERE id = ".$num;
		if(mysqli_query($con,$query)){
			echo "ok";
		}
	}
?>