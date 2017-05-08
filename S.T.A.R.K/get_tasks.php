<?php
	session_start();
	include 'db_connection.php';
	$query = "SELECT id,complaint FROM complaints WHERE status = 0 AND network = ".$_SESSION['net'];
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		$i = 0;
		while (($row = mysqli_fetch_assoc($result)) && ($i < 5) ) {
		echo "<tr><td class='comp-text' style='width: 100%;'>".$row['complaint']."</td><td class='comp-text'><i onclick=\"takejob('".$row['id']."')\" class='fa fa-suitcase fa-2x'></i></td></tr>";
		$i++;
		}
	}
	else{
		echo "<tr><td class='comp-text' style='width:100%'>Sorry currently no task available</td></tr>";
	}
?>