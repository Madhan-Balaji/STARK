<!DOCTYPE html>
<html>
<head>
	<title>STARK - word cloud generator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
</head >
<body background="bgs/dashboard.jpg" class="fix-bg">
	<?php include 'reloga.php'; ?>
	<?php include 'header.php'; ?>
	<div style="display:block;margin: 0 100px 0 100px; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<h2 align="center">Welcome to Word Cloud generator</h2>
		<div>
			<center>
				<div style="border: 1px solid white; padding: 15px; border-radius: 10px; margin-bottom: 15px; display: inline-block;">
					<h3 align="center">Quick Selection</h3>
					<a href="new.php?q=ys"><button class="stark-btn">Yesterday</button></a>
					<a href="new.php?q=lm"><button class="stark-btn">Last Month</button></a>
				</div><br>
				<div style="border: 1px solid white; padding: 15px; border-radius: 10px; margin-bottom: 15px; display: inline-block;">
					<form method="post" action="new.php">
						<input type="hidden" name="ps" value="byloc">
						<h3 align="center">Select by Area</h3>
						<select class="stark-txt" name="dist" onchange="areas(this.value)">
							<option value="">--Select District--</option>
							<option value="1">Chennai</option>
						</select>
						<select id="area" class="stark-txt" name="area">
						</select><br>
						<button class="stark-btn" type="submit">Submit</button>
					</form>
				</div>
				<div style="border: 1px solid white; padding: 5px; border-radius: 10px; margin-bottom: 15px; display: inline-block;">
					<h3 align="center">Select by Date</h3>
					<form method="post" action="new.php">
						<input type="hidden" name="pd" value="bydate">
						<select class="stark-txt" name="d">
							<option value="">Select date</option>
							<option value="01">1</option>
							<option value="02">2</option>
							<option value="03">3</option>
							<option value="04">4</option>
							<option value="05">5</option>
							<option value="06">6</option>
							<option value="07">7</option>
							<option value="08">8</option>
							<option value="09">9</option>
							<?php
								for($i=10;$i<=31;$i++){
									echo "<option value='".$i."'>".$i."</option>";
								}
							?>
						</select>
						<select class="stark-txt" name="m">
							<option value="">Select month</option>
							<option value="01">Jan</option>
							<option value="02">Feb</option>
							<option value="03">Mar</option>
							<option value="04">Apr</option>
							<option value="05">May</option>
							<option value="09">Jun</option>
							<option value="07">Jul</option>
							<option value="08">Aug</option>
							<option value="09">Sep</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
						</select>
						<select class="stark-txt" name="y">
							<option value="">Select Year</option>
							<?php
								for($i=1995;$i<=date('Y');$i++){
									echo "<option value='".$i."'>".$i."</option>";
								}
							?>
						</select><br>
						<button class="stark-btn">Submit</button>
					</form>
				</div>
			</center>
		</div>
	</div>
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
	</script>
	<?php
	if(isset($_GET['t'])){
		echo "<script>
			alert('The requested data is not available');
		</script>";
	}
	?>
</body>
</html>