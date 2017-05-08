<?php
	session_start();
	include 'db_connection.php';
	$n = $_GET['q'];
	$query = "SELECT id, numbers FROM user_connection WHERE network = ".$n." AND user = ".$_SESSION['id'];
	$result = mysqli_query($con,$query);
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<option value='".$row['id']."'>".$row['numbers']."</option>";
	}
?>