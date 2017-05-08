<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STARK - Admin Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="fix-bg" style="background:url(/bgs/Light-Bulb-5.jpg);">
	<?php include 'header.php'; ?>
	<div style="margin: 0 250px 0 250px;  padding: 10px;">
		<div style="display:table-row;">
			<div style="display:table-cell;">
				<form action="/a-signup.php" method="post">
					<input class="stark-txt" type="text" name="name" placeholder="Network Name"><br>
					<input class="stark-txt" type="text" name="email" placeholder="Network Email ID"><br>
					<input class="stark-txt" type="text" name="numbers" placeholder="Contact Number"><br>
					<textarea placeholder="Description" name="des" class="stark-txt"></textarea>
					<input class="stark-txt" type="password" name="pass" placeholder="Password"><br>
					<input class="stark-txt" type="password" name="repass" placeholder="Re-enter Password"><br>
					<button style="margin-left:10px;" class="stark-btn" type="submit">Sign up</button><a style="text-align:right;" class="a_style" href="/adminlogin.php">  Go to login</a>
				</form>
			</div>
			<div style="border-left:1px solid grey; padding:10px;  margin-left:25px; height:10px; display:table-cell;">
				<div style="background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.5); padding:10px; border-radius:2px;">
					<h4 style="color:white;">Notice</h4>
					<p style="color:white;" align="justify">We kindly inform the admin that any problems related to confidentiality of the network company caused after signing up into our website will not be the problem of ours, because we can ensure that all the datas available in the this websites are of highly encrypted and secured manner, Hence we wont be assuring that the problem was caused by us.</p>					
				</div>
				<div style="background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.5); padding:10px; border-radius:2px; margin-top:10px;">
					<h4 style="color:white;">Information</h4>
					<p style="color:white;" align="justify">The admin will be able to create any number of technician logins once access to their dashboard has been available. Entire control of the technician login from granting permission to removing techicians are available in the dashboard. plus word cloud generation tool is beign added to the dashboard.</p>
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