<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STARK - Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="fix-bg" style="background:url(/bgs/Light-Bulb-5.jpg);">
	<?php include 'header.php'; ?>
	<div style="margin: 0 250px 0 250px;  padding: 10px;">
		<div style="display:table-row;">
			<div style="display:table-cell;">
				<form action="/signup-b.php" method="post">
					<input class="stark-txt" type="text" name="1_name" placeholder="First Name"><br>
					<input class="stark-txt" type="text" name="email" placeholder="Email ID"><br>
					<input class="stark-txt" type="text" name="numbers" placeholder="Phone Number"><br>
					<select style="width: 330px;" name="network" class="stark-txt">
						<option value="">--select network--</option>
						<option value="1">Airtel</option>
						<option value="2">Aircel</option>
						<option value="3">JIO</option>
						<option value="4">Idea</option>
						<option value="5">Uninor</option>
					</select><br>
					<input class="stark-txt" type="password" name="pass" placeholder="Password"><br>
					<input class="stark-txt" type="password" name="repass" placeholder="Re-enter Password"><br>
					<button style="margin-left:10px;" class="stark-btn" type="submit">Sign up</button><a style="text-align:right;" class="a_style" href="/index.php">  Go to login</a>
				</form>
			</div>
			<div style="border-left:1px solid grey; padding:10px;  margin-left:25px; height:10px; display:table-cell;">
				<div style="background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.5); padding:10px; border-radius:2px;">
					<h4 style="color:white;">Notice</h4>
					<p style="color:white;" align="justify">We would like you to know that you can add any number of mobile numbers to your profile by accessing your dashboard. This application provides a way to communicate with your 
					network company, one can convey their complaints about their network to the concerned company and can be asured that their problems are solved.</p>					
				</div>
				<div style="background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.5); padding:10px; border-radius:2px; margin-top:10px;">
					<h4 style="color:white;">Information</h4>
					<p style="color:white;" align="justify">On Signing up your name will be shown in case if anyone searchs your number in our application, you can switch this feature off on accessing your dashboard. Get the PRO level to know who is searching for you!</p>
				</div>
			</div>
		</div>
	
	</div>
	<?php
		if(isset($_GET['q']) AND $_GET['q']=="already"){
			echo "
				<script>
					alert('Your number has been already connected to an account!');
				</script>
			";
		}
		if(isset($_GET['q']) AND $_GET['q']=="alreadye"){
			echo "
				<script>
					alert('Your email has been already connected to an account!');
				</script>
			";
		}
	?>
</body>
</html>