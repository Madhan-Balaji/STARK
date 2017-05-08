<?php
	include 'db_connection.php';
	include 'relog.php';
	$query = "SELECT numbers FROM user_connection WHERE id = ".$_GET['q']." AND primary_num = 1";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		header("Location:connections.php?q=prm");
	}
	else{
		$query = "DELETE FROM user_connection WHERE id = ".$_GET['q'];
		if(mysqli_query($con,$query)){
			header("Location:connections.php");
		}
	}
?>