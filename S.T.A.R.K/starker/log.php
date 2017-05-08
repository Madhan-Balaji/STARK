<?php
session_start();
$n = $_POST['nm'];
$p = $_POST['pw'];
if(($n == "PJD") && ($p == "PJD")){
	$_SESSION['id'] = "PJD";
	header("Location:players.php");
}
elseif(($n == "SNP") && ($p == "SNP")){
	$_SESSION['id'] = "SNP";
	header("Location:players.php");
}
elseif(($n == "MD") && ($p == "MD")){
	$_SESSION['id'] = "MD";
	header("Location:players.php");
}
else{
	echo 'something went wrong!';
}
?>