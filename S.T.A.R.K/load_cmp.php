<?php
	session_start();
	include 'db_connection.php';
	$query = "SELECT id,complaint FROM complaints WHERE t_id = ".$_SESSION['idt']." AND status = 1";
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr><td class='comp-text' style='width:100%'>".$row['complaint']."</td><td class='comp-text'><i onclick=\"comtask('".$row['id']."')\" class='fa fa-location-arrow fa-2x'></i></td></tr>";
		}
	}
	else{
		echo "<tr><td class='comp-text' style='width:100%'>Select a Job from the tasks available</td></tr>";
	}
?>