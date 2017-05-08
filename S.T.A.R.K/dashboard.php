<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STARK - Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
	<script type="text/javascript">
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
    	function numbers(str){
    		var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("nums").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET", "getnumbers.php?q="+str, true);
	        xmlhttp.send();
    	}
	</script>
</head>
<body background="bgs/dashboard.jpg" class="fix-bg">
	<?php include 'relog.php'; ?>
	<?php include 'header.php'; include 'db_connection.php'; ?>
	<div style="display:block;margin: 0 100px 0 100px; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<center>
			<div class="tab-box"><a href="user_profile.php" style="text-decoration:none; color:black;"><i class="fa fa-user fa-5x"></i><br><label>Profile</label></a></div>
			<div class="tab-box"><a href="connections.php" style="text-decoration:none; color:black;"><i class="fa fa-phone fa-5x"></i><br><label>Connections</label></a></div>
			<!--div class="tab-box"><a href="#" style="text-decoration:none; color:black;"><i class="fa fa-gear fa-5x"></i><br><label>Settings</label></a></div-->
			<div class="tab-box"><a href="logout.php" style="text-decoration:none; color:black;"><i class="fa fa-sign-out fa-5x"></i><br><label>Sign out</label></a></div>
		</center>
		<?php
			$query = "SELECT area FROM user_details WHERE id = ".$_SESSION['id'] ;
			$result = mysqli_query($con,$query);
			$row = mysqli_fetch_assoc($result);
			if(empty($row['area'])){
				echo '
					<div align="center" id="temp">
						<h3>Please fill the following</h3>
						<form method="post" action="save_area.php">
							<select class="stark-txt" name="dist" onchange="areas(this.value)">
								<option value="">--Select District--</option>
								<option value="1">Chennai</option>
							</select>
							<select id="area" class="stark-txt" name="area">
							</select><br>
							<button class="stark-btn" type="submit">Submit</button>
						</form>
					</div>
				';
			}
		?>
		<div style="margin:40px 50px 0 50px; display:table;border-collapse:separate;border-spacing:15px;">
			<div style="display:table-row">
				<div style="margin-left:10px;border:1px solid white; border-radius:10px; display:table-cell;">
					<div style="background-color:white; border-radius:10px 10px 0 0;;border-bottom:1px solid white; padding:10px;"><center>Check out your complaints</center></div>
					<br>
					<div style="padding:0 10px 10px 10px;">
						<lable class="cmts">I have a problem in my area, I am facing a very bad network problem in my area. Please rectify this problem as soon as possible.</lable>
						<p class="cmts">I am facing a bad internet connection in my area. Please help me with this issue.</p>
					</div>
				</div>
				<div style="border-spacing:10px 10px;border:1px solid white; border-radius:10px; display:table-cell;">
					<div style="background-color:white; border-radius:10px 10px 0 0;border-bottom:1px solid white; padding:10px;"><center>Offers for you</center></div>
					<br>
					<div style="padding:0 10px 10px 10px;">
						<lable class="cmts">Now recharge with Rs.100 talktime and get Rs.10 extra on you balance.</lable>
						<p class="cmts">Recharge with Rs.50 and get full talk time.</p>
						<p class="cmts">Recharge with Rs.110 and get 50 TT, 5GB internet for a month.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="bts" onclick="showtxt();" style="background-color:white; padding:40px; margin:40px 60px 20px 60px; border:1px solid white; border-radius:10px;">
			<center><i class="fa fa-plus fa-5x"></i><br><label>Enter a new Complaint!</label></center>
		</div>
		<form method="post" action="process_complaint.php">
		<div id="conn" style="padding:40px; margin:40px 60px 20px 60px; border:1px solid white; border-radius:10px;">
			<h3 align="center">Choose one connection</h3>
			<center>
			<select id="nets" onchange="numbers(this.value)" class="stark-txt" name="nets">
				<option value="">--select network--</option>
				<?php
					$query = "SELECT DISTINCT network FROM user_connection WHERE user = ".$_SESSION['id'];
					$result = mysqli_query($con,$query);
					while ($row = mysqli_fetch_assoc($result)) {
						$q = "SELECT id,name FROM networks WHERE id=".$row['network'];
						$r = mysqli_query($con,$q);
						$rs = mysqli_fetch_assoc($r);
						echo "<option value='".$rs['id']."'>".$rs['name']."</option>";
					}
				?>
			</select>
			<select name="nums" class="stark-txt" id="nums">
				
			</select><br>
			<div onclick="showent()" style="border:1px solid white; background-color:black; display:inline; cursor:pointer; padding:3px 10px; border-radius:10px; color:white">SET</div>
			</center>
		</div>
		<div id="entry" style="padding:40px 40px 0 40px;  margin:40px 60px 20px 60px; border:1px solid white; border-radius:10px;">
			
				<textarea name="comment"  rows="10" style="width:100%;"></textarea>
				<center><button style="margin:10px 0 10px 0;" class="stark-btn">Process</button></center>
		</div>
		</form>
		<div>.</div>
	</div>
	<script type="text/javascript">
		var entry = document.getElementById('entry');
		var cons = document.getElementById('conn');
		cons.style.display = "none";
		entry.style.display = "none";
		function showtxt(){
			cons.style.display = "block";
			document.getElementById('bts').style.display = "none";
		}
		function showent(){
			cons.style.display = "none";
			entry.style.display = "block";
		}
	</script>
	<?php
		if((isset($_GET['q'])) && ($_GET['q'] == "area")){
			echo "<script>
				alert('Your loaction details has been added!');
			</script>";
		}
		if((isset($_GET['q'])) && ($_GET['q'] == "thanks")){
			echo "<script>
				alert('Your Complaint has been registered');
			</script>";
		}
	?>
</body>
</html>