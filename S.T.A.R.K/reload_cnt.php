<?php
session_start();
include 'db_connection.php';
$query = "SELECT * FROM user_details WHERE id = ".$_SESSION['id'];
		if ($result = mysqli_query($con,$query)) {
			while ($row = mysqli_fetch_assoc($result)) {
				$name = $row['name'];
				$mail = $row['email'];
				$dist = $row['dist'];
				$area = $row['area'];
			}
		}
?>
<tr>
				<td  style=" background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Your Name:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php echo $name; ?></u></h3>
				</td>
			</tr>
			<tr>
				<td  style="background: rgba(0, 0, 0, 0.3);padding: 10px; " align="right">
					<h2 style="color: white;">Your Email-id:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php echo $mail; ?></u></h3>
				</td>
			</tr>
			<tr>
				<td  style="padding: 10px; background: rgba(0, 0, 0, 0.3);" align="right">
					<h2 style="color: white;">Your District:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php 
					$query = "SELECT names FROM district WHERE id = ".$dist;
					$result = mysqli_query($con,$query);
					 	$row = mysqli_fetch_assoc($result);
					 	echo $row['names'];
					 ?></u></h3>
				</td>
			</tr>
			<tr>
				<td  style="padding: 10px; background: rgba(0, 0, 0, 0.3);" align="right">
					<h2 style="color: white;">Your Area:</h2>
				</td>
				<td  style="padding: 10px;  background: rgba(204, 204, 204, 0.7);">
					<h3><u><?php
						$query = "SELECT names FROM areas WHERE id =".$area;
					 	$result = mysqli_query($con,$query);
					 	$row = mysqli_fetch_assoc($result);
					 	echo $row['names'];
					 ?></u></h3>
				</td>
			</tr>
			<tr>
				<td style="padding: 10px; ">
					<button onclick="resPass()" class="stark-btn">Reset Password</button>
				</td>
				<td style="padding: 10px; ">
					<button onclick="showedit()" class="stark-btn">Edit</button>
				</td>
			</tr>