<!DOCTYPE html>
<html>
<head>
	<title>STARK - Connections</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
</head>
<body background="bgs/dashboard.jpg" class="fix-bg">
	<?php include 'relog.php'; ?>
	<?php include 'header.php'; include 'db_connection.php'; ?>
	<div style="display:block; margin: 0 100px 0 100px; height: 100%; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<div id="cnts" style=" margin: 0 50px 0 50px; padding: 50px 0 50px 0;">
			<table style="width: 100%;" id="contents"></table>
			<div onclick="showAddConnection()" id="add-btn" style="background: rgba(0, 0, 0, 0.5); color: white; padding: 5px; cursor: pointer;" align="center"><i class="fa fa-plus-square"> </i> Add a new Connection. </div>
		</div>
		<div align="center" id="cprim" style="padding: 15px;">
			<select onchange="numbers(this.value)" style="width: 330px;" class="stark-txt" id="nets" name="nets">
				<option value="">-Select a Network-</option>
				<?php
					//$query = "SELECT DISTINCT n.id, n.name FROM networks n, user_connection u WHERE n.id = u.network AND u.id =".$_SESSION['id'];
					$query = "SELECT DISTINCT network FROM user_connection WHERE user = ".$_SESSION['id'];
					$result = mysqli_query($con,$query);
					while ($row = mysqli_fetch_assoc($result)) {
						$q = "SELECT id,name FROM networks WHERE id=".$row['network'];
						$r = mysqli_query($con,$q);
						$rs = mysqli_fetch_assoc($r);
						echo "<option value='".$rs['id']."'>".$rs['name']."</option>";
					}
				?>
			</select><br>
			<select style="width: 330px;" class="stark-txt" id="numz">
				<option value="">-Select a Number-</option>
			</select><br>
			<button class="stark-btn" onclick="showcnt()">Back</button><button onclick="savePrime();" class="stark-btn">Submit</button>
		</div>
	</div>
	<script type="text/javascript" src="script.js">
	</script>
	<?php
		if((isset($_GET['q'])) && ($_GET['q'])=='prm' ){
			echo "<script>
				alert('Cannot delete your prime number!');
			</script>";
		}
	?>
</body>
</html>