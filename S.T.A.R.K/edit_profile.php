<?php
	session_start();
	include 'db_connection.php';
	$val = $_GET['q'];
	$typ = $_GET['r'];
	if($typ == "name"){
		$query = "UPDATE user_details SET name = '".$val."' WHERE id = ".$_SESSION['id'];
		if(mysqli_query($con,$query)){
			echo "ok";
		}
	}
	elseif($typ == "mail"){
		$query = "UPDATE user_details SET email = '".$val."' WHERE id = ".$_SESSION['id'];
		if(mysqli_query($con,$query)){
			echo "ok";
		}
	}
	elseif($typ == "district"){
		$dist = $_GET['d'];
		$query = "UPDATE user_details SET dist = ".$dist.", area =".$val." WHERE id = ".$_SESSION['id'];
		if(mysqli_query($con,$query)){
			echo "ok";
		}
		else{
			echo mysqli_error($con);
		}
	}
?>