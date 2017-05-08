<?php
	include 'db_connection.php';
	include 'relog.php';
	$net = $_GET['n'];
	$num = $_GET['q'];
	$query = "SELECT numbers FROM user_connection WHERE numbers = ".$num;
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		echo "not";
	}
	else{
		$query = "INSERT INTO user_connection (user, numbers, network, primary_num) VALUES (".$_SESSION['id'].", ".$num.", ".$net.", 0)";
		if(mysqli_query($con,$query)){
			echo "ok";
		}
	}
?>