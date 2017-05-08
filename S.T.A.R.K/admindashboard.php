<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STARK - Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
	
</head>
<body background="bgs/dashboard.jpg" class="fix-bg">
	<?php include 'reloga.php'; ?>
	<?php include 'header.php'; ?>
	<div style="display:block;margin: 0 100px 0 100px; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<center>
			<!--div class="tab-box"><a href="#" style="text-decoration:none; color:black;"><i class="fa fa-user fa-5x"></i><br><label>Profile</label></a></div>
			<div class="tab-box"><a href="#" style="text-decoration:none; color:black;"><i class="fa fa-group fa-5x"></i><br><label>Technicians</label></a></div-->
			<div class="tab-box"><a href="word_cloud.php" style="text-decoration:none; color:black;"><i class="fa fa-cloud fa-5x"></i><br><label>Word Cloud</label></a></div>
			<div class="tab-box"><a href="logout-a.php" style="text-decoration:none; color:black;"><i class="fa fa-sign-out fa-5x"></i><br><label>Sign out</label></a></div>
		</center>
		<div style="margin:5px 50px 5px 50px; border:1px solid black; border-radius:10px;">
			<div style="background-color:white; border-radius:10px 10px 0 0; padding:3px; border-bottom:1px solid black;">
				<i style="cursor: pointer;float: right;" onclick="loadComplaints();" style="float:right;" class="fa fa-refresh"></i>
				<center>Complaints to Count</center>
			</div>
			<div style="padding:10px;">
				<table id="complaints">
					
				</table>
			</div>
		</div>
		<br>
		<div style="margin:0 50px 0 50px;">
			<center>
				<form action="create_tech.php" method="post">
					<h3>Create a new Technician</h3>
					<input type="text" class="stark-txt" name="tname" placeholder="Technician Name" required>
					<input type="text" class="stark-txt" name="email" placeholder="Email id" required>
					<input type="password" class="stark-txt" name="pwd" placeholder="Password" required>
					<input type="password" class="stark-txt" name="repwd" placeholder="Re-enter Password" required><br>
					<button style="margin:10px 0 10px 0;" class="stark-btn" type="submit">Create</button>
				</form>
			</center>
		</div>
	</div>
	<?php
		if((isset($_GET['q'])) && ($_GET['q'] == "added")){
			echo '
				<script>
					alert("The Technician has been added!");
				</script>
			';
		}
		if((isset($_GET['q'])) && ($_GET['q'] == "exist")){
			echo '
				<script>
					alert("The Technician trying to be added already exists!");
				</script>
			';
		}
	?>
	<script type="text/javascript">
		function loadComplaints(){
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	            	document.getElementById('complaints').innerHTML = this.responseText;
	            }
	        }
	        xmlhttp.open("GET", "load_complaints_admin.php", true);
	        xmlhttp.send();
		}
		loadComplaints();
		function remove(str){
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	            	if(this.responseText == "ok"){
	            		loadComplaints();
	            	}
	            	else{
	            		alert("something went wrong on deleting!");
	            	}
	            }
	        }
	        xmlhttp.open("GET", "delete_complaints.php?q="+str, true);
	        xmlhttp.send();
		}
	</script>
</body>
</html>