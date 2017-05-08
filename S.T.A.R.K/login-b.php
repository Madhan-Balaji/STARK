<?php
	session_start();
	include 'db_connection.php';
	$email = $_POST['loginid'];
	$pwd = md5($_POST['pwd']);
	$query = "SELECT id,pwd FROM user_details WHERE email = '".$email."'";
	$result = mysqli_query($con,$query);
	$value = mysqli_fetch_assoc($result);
	$pass = $value['pwd'];
	if($pass == $pwd){
		$_SESSION['id'] = $value['id'];
		header("Location:/dashboard.php");
	}
	else{
		header("Location:/index.php?q=wrong");
	}
	mysqli_close($con);
?>