<?php
session_start();
if(!isset($_SESSION['ida'])){
	header("Location:adminlogin.php");
}
?>