<?php
	function pattern_match($pattern){
		include 'db_connection.php';
		$query = "SELECT msg FROM complaint_pattern WHERE pattern = '".$pattern."'";
		$result = mysqli_query($con,$query);
		$row = mysqli_fetch_assoc($result);
		return $row['msg'];
	}

	function message_display($mark){
		include 'db_connection.php';
		$default = "<h3 align='center'>Sorry we dont have temproary solution for the problem you have mentioned, the solution may be updated in the future!</h3>";
		if(!(is_null($mark))){
			$query = "SELECT message FROM display_message WHERE id = ".$mark;
			$result = mysqli_query($con,$query); echo mysqli_error($con);
			if(mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc($result);
				return $row['message'];
			}
			else{
				return $default;
			}
		}
		else{
			return $default;
		}
	}
?>