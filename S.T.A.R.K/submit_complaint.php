<?php
	include 'relog.php';
	include 'db_connection.php';
	$net = $_POST['network'];
	$num = $_POST['number'];
	$c = $_POST['ya'];
	echo $net;
	echo $c;
	echo $num;
	$query = "INSERT INTO complaints (network,user,numbers,complaint,status,dates) VALUES (".$net.",".$_SESSION['id'].",".$num.",'".$c."',0,'".date('d/m/Y')."')";
	if(mysqli_query($con,$query)){
		header("Location:dashboard.php?q=thanks");
	}
?>