<?php
	session_start();
	include 'db_connection.php';
	$email = $_POST['loginid'];
	$pwd = md5($_POST['pwd']);
	$query = "SELECT id,network,pwd FROM technician WHERE email = '".$email."'";
	$result = mysqli_query($con,$query);
	$value = mysqli_fetch_assoc($result);
	$pass = $value['pwd'];
	if($pass == $pwd){
		$_SESSION['idt'] = $value['id'];
		$_SESSION['net'] = $value['network'];
		header("Location:/techdashboard.php");
	}
	else{
		header("Location:/techlogin.php?q=wrong");
	}
	mysqli_close($con);
?>