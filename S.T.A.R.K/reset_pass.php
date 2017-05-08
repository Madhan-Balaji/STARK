<?php
session_start();
include 'db_connection.php';
$o = md5($_GET['o']);
$n = md5($_GET['n']);
$query = "SELECT pwd FROM user_details WHERE id = ".$_SESSION['id'];
if($result = mysqli_query($con,$query)){
	$row = mysqli_fetch_assoc($result);
	if($row['pwd'] == $o){
		$query = "UPDATE user_details SET pwd = '".$n."' WHERE id = ".$_SESSION['id'];
		if(mysqli_query($con,$query)){
			echo "ok";
		}
	}
	else{
		echo "mismatch";
	}
}
echo mysqli_error($con);
?>
