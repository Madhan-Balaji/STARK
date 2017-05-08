<?php
session_start();
include 'db.php';
$c = $_POST['complaint'];
$q = "insert into cmt(comment,usr) values ('".$c."','".$_SESSION['id']."')";
if(mysqli_query($con,$q)){
	$q= "update user set cnt = cnt + 1 where id = '".$_SESSION['id']."'";
	mysqli_query($con,$q);
	header("Location:players.php");
}
?>