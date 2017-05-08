<?php
	include 'db_connection.php';
	include 'comment_process_func.php';
	include 'pattern_matching.php';
	$comment = $_POST["comment"];
	$words = explode(" ", $comment);
	$patterns = getPattern($words);
	$pattern = implode(",", $patterns);
	$mark = pattern_match($pattern);
	echo message_display($mark);
?>