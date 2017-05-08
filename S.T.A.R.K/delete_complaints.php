<?php
	include 'db_connection.php';
	include 'reloga.php';
	$query = "DELETE FROM complaints WHERE id = ".$_GET['q'];
	if(mysqli_query($con,$query)){
		echo "ok";
	}
	else{
		echo "not";
	}
?>