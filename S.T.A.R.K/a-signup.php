<?php
	include 'db_connection.php';
	$num = $_POST['numbers'];
	$email = $_POST['email'];
	$pwd = md5($_POST['pass']);
	$net = $_POST['des'];
	$name = $_POST['name'];
	$query = "SELECT id FROM networks WHERE numbers = ".$num;
	$result = mysqli_query($con,$query);echo mysqli_error($con);
	if(mysqli_num_rows($result) > 0){
		header("Location:adminsignup.php?q=already");
	}
	else{
		$query = "SELECT id FROM networks WHERE name_a = '".$email."'";
		$result = mysqli_query($con,$query);echo mysqli_error($con);
		if(mysqli_num_rows($result) > 0){
			header("Location:adminsignup.php?q=alreadye");
		}
		else{
			$query = "SELECT id FROM networks WHERE name = '".$name."'";
			$result = mysqli_query($con,$query);echo mysqli_error($con);
			if(mysqli_num_rows($result) > 0){
				header("Location:adminsignup.php?q=name");
			}
			else{
				$query = "INSERT INTO networks (name,name_a,pwd,des,numbers) VALUES ('".$name."','".$email."','".$pwd."','".$net."',".$num.")";				
				if(mysqli_query($con,$query)){echo mysqli_error($con);
					header("Location:admindashboard.php");
				}
				mysqli_close($con);
			}
		}
	}
?>