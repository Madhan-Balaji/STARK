<?php
	session_start();
	include 'db_connection.php';
	$name = $_POST['tname'];
	$network = $_SESSION['ida'];
	$mail = $_POST['email'];
	$pwd = md5($_POST['pwd']);
	$query = "SELECT id FROM technician WHERE email = '".$mail."'";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		header("Location:admindashboard.php?q=exist");
	}
	else{
		$query = "INSERT INTO technician (network,name,email,pwd) VALUES (".$network.",'".$name."','".$mail."','".$pwd."')";
		if(mysqli_query($con,$query)){
			header("Location:admindashboard.php?q=added");
		}
	}
?>