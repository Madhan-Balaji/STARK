<?php
	include 'db_connection.php';
	session_start();
	$mail = $_POST['loginid'];
	$pwd = md5($_POST['pwd']);
	$query = "SELECT id,pwd FROM networks WHERE name_a = '".$mail."'";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result)){
		$row = mysqli_fetch_assoc($result);
		if ($row["pwd"] == $pwd) {
			$_SESSION['ida'] = $row['id'];
			header("Location:/admindashboard.php");
		}
	}
	else{
		header("Location:/adminlogin.php?q=wrong");
	}
?>