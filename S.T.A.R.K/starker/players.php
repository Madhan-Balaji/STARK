<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Complaints</title>
</head>
<body>
	<?php
	
		include 'db.php';
		session_start();
		if (!(isset($_SESSION['id']))) {
			header("Location:index.php");
		}
		$quer = "select cnt from user where id = '".$_SESSION['id']."'";
		$result = mysqli_query($con,$quer);
		$row = mysqli_fetch_assoc($result);
		echo "complaints entered: ".$row['cnt'];
	
	?>
	<form method="post" action="act.php">
	<textarea placeholder="Enter your complaint" name="complaint" required></textarea>
	<button type="submit">submit</button>
	</form>
</body>
</html>