<?php
	include 'db_connection.php'; include 'relog.php';
	$query = "SELECT * FROM user_connection WHERE user = ".$_SESSION['id'];
	if ($result = mysqli_query($con,$query)) {
		echo '<tr align="center" style="background: rgba(0, 0, 0, 0.7);">
					<td style="color: white; padding: 5px;">Network</td>
					<td style="color: white; padding: 5px;">Numbers</td>
					<td style="color: white; padding: 5px;">Actions</td>
				</tr>';
		while ($row = mysqli_fetch_assoc($result)) {
			$query = "SELECT name FROM networks WHERE id = ".$row['network'];
			$rsult = mysqli_query($con,$query);
			$rw = mysqli_fetch_assoc($rsult);
			if($row['primary_num'] == 1){
				echo '

					<tr align="center" style="background: rgba(204, 204, 204, 0.7);">
						<td>'.$rw['name'].'</td>
						<td>'.$row['numbers'].' <i style="color: green;" class="fa fa-key"></i></td>
						<td><a href="delet_number.php?q='.$row['id'].'"><i style="color: red;" class="fa fa-window-close"></i></a> <i onclick="changePrime()" style="color: red;" class="fa fa-key"></i></td>
					</tr>
					
				';
			}
			elseif ($row['primary_num'] == 0) {
				echo '

					<tr align="center" style="background: rgba(204, 204, 204, 0.7);">
						<td>'.$rw['name'].'</td>
						<td>'.$row['numbers'].'</td>
						<td><a href="delet_number.php?q='.$row['id'].'"><i style="color: red;" class="fa fa-window-close"></i></a></td>
					</tr>
					
				';
			}
			
		}
		$query = "SELECT name,id FROM networks";
			$rs = mysqli_query($con,$query);
			echo '<tr id="add" align="center" style=" display:none; background: rgba(204, 204, 204, 0.7);">
					<td><select id="net">';
			while ($rw = mysqli_fetch_assoc($rs)) {
							echo "<option value='".$rw['id']."'>".$rw['name']."</option>";
						}			
			echo '</select></td>
					<td><input type="text" placeholder="Number" id="num"></td>
					<td><i onclick="addConnection()" style="cursor: pointer; color: green;" class="fa fa-plus-square"></i></td>
				</tr>';
	}	
?>