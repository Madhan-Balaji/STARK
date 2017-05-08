<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STARK - Try this</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="bgs/complaint_process.jpg" class="fix-bg">
	<?php include 'relog.php'; include 'db_connection.php'; include 'header.php'; include 'comment_process_func.php'; include 'pattern_matching.php';?>
	<div style="display:block;margin: 0 100px 0 100px; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<h1 align="center" >Try Out This!</h1>
		<div style="margin:0 50px 0 50px;">
			<?php
			$comment = $_POST["comment"];
			$words = explode(" ", $comment);
			$patterns = getPattern($words);
			$pattern = implode(",", $patterns);
			$mark = pattern_match($pattern);
			echo "<h3>".message_display($mark)."</h3>";
			?>
			<form action="submit_complaint.php" method="post">
				<input type="hidden" name="network" value="<?php echo $_POST['nets']; ?>">
				<input type="hidden" name="number" value="<?php echo $_POST['nums']; ?>">
				<input type="hidden" name="ya" value="<?php echo $comment; ?>">
				<center><button type="submit" class="stark-btn">submit</button></center>
			</form>
		</div>
	</div>
</body>
</html>