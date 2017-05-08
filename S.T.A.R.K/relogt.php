<?php
	session_start();
	if(!(isset($_SESSION['idt']))){
		header("Location:techlogin.php");
	}
?>