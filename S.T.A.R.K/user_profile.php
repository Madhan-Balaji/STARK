<!DOCTYPE html>
<html>
<head>
	<title>STARK - User Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		
		function reloadcnt(){
    		var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById('shows').innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET", "reload_cnt.php?", true);
	        xmlhttp.send();
    	}
		function saveDetails(str,type){
    		var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                if(this.responseText == 'ok'){
	                	alert("Your new "+type+" has been saved");
	                }
	            }
	        };
	        xmlhttp.open("GET", "edit_profile.php?q="+str+"&r="+type, true);
	        xmlhttp.send();
    	}
    	function areas(strs){
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("area").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET", "chennai_areas.php?q="+strs, true);
	        xmlhttp.send();
    	}
    	function saveArea(str,type){
			var xmlhttp = new XMLHttpRequest();
			var dist = document.getElementById('towz').value;
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                if(this.responseText == 'ok'){
	                	alert("Your new "+type+" has been saved");
	                }
	            }
	        };
	        xmlhttp.open("GET", "edit_profile.php?q="+str+"&r="+type+"&d="+dist, true);
	        xmlhttp.send();
    	}
    	function changepass(){
			var xmlhttp = new XMLHttpRequest();
			var o = document.getElementById('old').value;
			var n =document.getElementById('new').value;
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                if(this.responseText == 'ok'){
	                	alert("Your new password has been reset");
	                }
	                else{
	                	alert("Old password mismatched!");
	                }	             
	            }
	        };
	        xmlhttp.open("GET", "reset_pass.php?o="+o+"&n="+n, true);
	        xmlhttp.send();
    	}
    	
	</script>
</head>
<body background="bgs/dashboard.jpg" class="fix-bg">
	<?php include 'relog.php'; include 'header.php'; include 'db_connection.php'; ?>
	<?php
		$query = "SELECT * FROM user_details WHERE id = ".$_SESSION['id'];
		if ($result = mysqli_query($con,$query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$name = $row['name'];
				$mail = $row['email'];
				$dist = $row['dist'];
				$area = $row['area'];
			}
		}
	?>
	<div style="display:block; margin: 0 100px 0 100px; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<table id="shows" style="padding: 150px;" align="center">
			<tr>
				<td  style=" background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Your Name:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php echo $name; ?></u></h3>
				</td>
			</tr>
			<tr>
				<td  style="background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Your Email-id:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php echo $mail; ?></u></h3>
				</td>
			</tr>
			<tr>
				<td  style="padding: 10px; background: rgba(0, 0, 0, 0.3);" align="right">
					<h2 style="color: white;">Your District:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php 
					$query = "SELECT names FROM district WHERE id = ".$dist;
					$result = mysqli_query($con,$query);
					 	$row = mysqli_fetch_assoc($result);
					 	echo $row['names'];
					 ?></u></h3>
				</td>
			</tr>
			<tr>
				<td  style="padding: 10px; background: rgba(0, 0, 0, 0.3);" align="right">
					<h2 style="color: white;">Your Area:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php
						$query = "SELECT names FROM areas WHERE id =".$area;
					 	$result = mysqli_query($con,$query);
					 	$row = mysqli_fetch_assoc($result);
					 	echo $row['names'];
					 ?></u></h3>
				</td>
			</tr>
			<tr>
				<td style="padding: 10px; ">
					<button onclick="resPass()" class="stark-btn">Reset Password</button>
				</td>
				<td style="padding: 10px; ">
					<button onclick="showedit()" class="stark-btn">Edit</button>
				</td>
			</tr>
		</table>
		<table id="edits" style="padding: 150px;" align="center">
			<tr>
				<td  style=" background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Your Name:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<input class="stark-txt" type="text" value="<?php echo $name;?>" onchange="saveDetails(this.value,'name')">
				</td>
			</tr>
			<tr>
				<td  style="background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Your Email-id:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<input class="stark-txt" type="text" value="<?php echo $mail;?>" onchange="saveDetails(this.value,'mail')">
				</td>
			</tr>
			<tr>
				<td  style="padding: 10px; background: rgba(0, 0, 0, 0.3);" align="right">
					<h2 style="color: white;">Your District:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<select onchange="areas(this.value)" id="towz" class="stark-txt">
					<option value="">--select district--</option>
					<?php 
					$query = "SELECT id,names FROM district";
					$result = mysqli_query($con,$query);
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<option value='".$row['id']."'>".$row['names']."</option>";
						}
					 ?>
					 </select>
				</td>
			</tr>
			<tr>
				<td  style="padding: 10px; background: rgba(0, 0, 0, 0.3);" align="right">
					<h2 style="color: white;">Your Area:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<select class="stark-txt" onchange="saveArea(this.value,'district')" id="area"></select>
				</td>
			</tr>
			<tr>
				<td align="right">
					Information:
				</td>
				<td>
					Just edit the contents, it will get saved automatically!
				</td>
			</tr>
			<tr>
				<td style="padding: 10px; ">
					<button onclick="resPass()" class="stark-btn">Reset Password</button>
				</td>
				<td style="padding: 10px; ">
					<button onclick="showcnt()" class="stark-btn">Back</button>
				</td>
			</tr>
			
		</table>
		<table id="pass" style="padding: 150px;" align="center">
			<tr>
				<td  style=" background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Enter old password:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<input type="password" class="stark-txt" type="text" id="old">
				</td>
			</tr>
			<tr>
				<td  style=" background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Enter new password:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<input type="password" class="stark-txt" type="text" id="new">
				</td>
			</tr>
			<tr>
				<td><button style="padding: 10px;" class="stark-btn" onclick="changepass()">Reset</button></td>
				<td><button onclick="showcnt();" style="padding: 10px;" class="stark-btn" >Back</button></td>
			</tr>
		</table>
		
	</div>
	<script type="text/javascript">
		var show = document.getElementById('shows');
    	var edit = document.getElementById('edits');
    	var pass = document.getElementById('pass');
    	edit.style.display = "none";
    	pass.style.display = "none";
		function resPass(){
    		edit.style.display = "none";
    		show.style.display = "none";
    		pass.style.display = "flex";
    	}
    	function showcnt(){
    		reloadcnt();
    		edit.style.display = "none";
    		show.style.display = "flex";
    		pass.style.display = "none";	
    	}
    	function showedit(){
    		edit.style.display = "flex";
    		show.style.display = "none";
    		pass.style.display = "none";
    	}
	</script>
</body>
</html>