<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to STARK</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body background="/bgs/bokeh-lightbulb-1.jpg">
		<!--header-->
		<?php include 'header.php'; ?>
		<!--eof header-->
		<!--login section-->
		<center>
			<div style="margin-top:100px; z-index:1001;" class="small-box">
				<h3 style="color:white;">Please Login!</h3>
				<form method="post" action="/login-tech.php">
				<input class="stark-txt" type="text" name="loginid" placeholder="Enter E-mail ID"><br>
				<input class="stark-txt" type="password" name="pwd" placeholder="Enter password"><br>
				<button class="stark-btn" type="submit">Login</button><br>
				</form>
			</div>
		</center>
		<!--eof login section-->
	</body>
	<?php
		if(isset($_GET['q']) AND $_GET['q']=="mailed"){
			echo "
				<script>
					alert('Your password has been mailed');
				</script>
			";
		}
		if(isset($_GET['q']) AND $_GET['q']=="wrong"){
			echo "
				<script>
					alert('Details mismatched or wrong!');
				</script>
			";
		} 
	?>
</html>