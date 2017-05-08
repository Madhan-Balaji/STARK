<?php
	include 'db_connection.php';
	$num = $_POST['numbers'];
	$email = $_POST['email'];
	$pwd = md5($_POST['pass']);
	$net = $_POST['network'];
	$name = $_POST['1_name'];
	$query = "SELECT id FROM user_connection WHERE numbers = ".$num;
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		header("Location:signup.php?q=already");
	}
	else{
		$query = "SELECT id FROM user_details WHERE email = '".$email."'";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result) > 0){
			header("Location:signup.php?q=alreadye");
		}
		else{
			$query = "INSERT INTO user_details (name,email,pwd) VALUES ('".$name."','".$email."','".$pwd."')";
			mysqli_query($con,$query);echo mysqli_error($con);
			$query = "SELECT id FROM user_details WHERE email ='".$email."'";
			$result = mysqli_query($con,$query);echo mysqli_error($con);
			$row = mysqli_fetch_assoc($result);
			$query = "INSERT INTO user_connection (user,network,numbers,primary_num) VALUES (".$row['id'].",".$net.",".$num.",1)";
			if(mysqli_query($con,$query)){echo mysqli_error($con);
				header("Location:dashboard.php");
			}
			mysqli_close($con);
		}
	}
?>