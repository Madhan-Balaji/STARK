<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STARK - Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="/bgs/bokeh-lightbulb-1.jpg">
	<?php include 'header.php'; ?>
	<div style="margin:50px 250px 0 250px; border:1px solid grey; border-radius:10px; padding:20px; display:table">
		<div style="display:table-row;">
			<div style="display:table-cell;">
				<form action="forget.php" method="post">
					<input class="stark-txt" type="text" placeholder="Enter Email ID" name="email">
					<input class="stark-txt" type="text" placeholder="Enter Primary mobile number" name="phn"><br>
					<button style="margin-left:10px;" class="stark-btn" type="submit">Send</button><a class="a_style" href="index.php">  Go to login</a>
				</form>
			</div>	
			<div style="display:table-cell; border-left:1px solid grey; padding-left:20px;">
				<div style="background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.5); padding:10px; border-radius:2px;">
					<h4 style="color:white;">Notice</h4>
					<p style="color:white;" align="justify">An Email containing your new auto generated password would be sent to your registered E-mail address if in case of success</p>
				</div>
			</div>
		</div>
	</div>
	<?php
	if(isset($_GET['q']) AND $_GET['q'] == "fail"){
		echo'
			<script>
				alert("Content Mis-match!");
			</script>
		';
	}
	?>
</body>
</html>