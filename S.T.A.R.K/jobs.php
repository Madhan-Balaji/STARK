<!DOCTYPE html>
<html>
<head>
	<title>STARK - Tech Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
</head>
<body background="bgs/dashboard.jpg" class="fix-bg">
	<?php
		include 'relogt.php';
		include 'db_connection.php';
		include 'header.php';
	?>
	<div style="display:block;margin: 0 100px 0 100px; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<center>
			<div class="tab-box"><a href="techdashboard.php" style="text-decoration:none; color:black;"><i class="fa fa-tasks fa-5x"></i><br><label>Jobs</label></a></div>
			<div class="tab-box"><a href="techlogout.php" style="text-decoration:none; color:black;"><i class="fa fa-sign-out fa-5x"></i><br><label>Sign out</label></a></div>
		</center>
		<div style="margin:5px 50px 5px 50px; border:1px solid black; border-radius:10px;">
			<div style="background-color:white; border-radius:10px 10px 0 0; padding:3px; border-bottom:1px solid black;">
				<a style="text-decoration:none; color:black;" href="#"><i onclick="loadComp()" style="float:right;" class="fa fa-refresh"></i></a>
				<center>Your Tasks</center>
			</div>
			<div style="padding:10px;">
				<table id="tabz">
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function loadComp(){
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("tabz").innerHTML = this.responseText;
	            }
	        }
	        xmlhttp.open("GET", "get_tasks.php", true);
	        xmlhttp.send();
		}
		loadComp();
		function takejob(str){
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                if(this.responseText == "ok"){
	                	loadComp();
	                }
	                else{
	                	alert("Something went wrong!");
	                }
	            }
	        }
	        xmlhttp.open("GET", "add_tasks.php?q="+str, true);
	        xmlhttp.send();
		}
	</script>
</body>
</html>