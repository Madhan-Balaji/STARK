<?php
	session_start();
	include 'db_connection.php';
	$area = $_POST['area'];
	$dist = $_POST['dist'];
	$query = "UPDATE user_details SET area = '".$area."', dist = '".$dist."' WHERE id = ".$_SESSION['id'];
	if (mysqli_query($con,$query)) {
		header("Location:dashboard.php?q=area");
	}
?>