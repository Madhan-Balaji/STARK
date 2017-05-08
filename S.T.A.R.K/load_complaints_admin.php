<?php
	include 'db_connection.php';
	include 'reloga.php';
	$query = "SELECT id,complaint,user FROM complaints WHERE network = ".$_SESSION['ida'];
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		$i = 0;
		while (($row = mysqli_fetch_assoc($result)) && ($i < 5)) {
			echo '<tr >
					<td style="width:100%;" class="comp-text">'.$row['complaint'].'</td>
					<td class="comp-text"><i onclick="userDet(\''.$row['user'].'\')" class="fa fa-user fa-2x"></i></td>
					<td class="comp-text"><i onclick="remove(\''.$row['id'].'\')" class="fa fa-close fa-2x"></i></td>
					<td class="comp-text"><i onclick="addtotech(\''.$row['id'].'\')" class="fa fa-users fa-2x"></i></td>
				</tr>';
				$i++;
		}
	}
?>