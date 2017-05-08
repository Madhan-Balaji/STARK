
<?php
include 'db_connection.php';
$query = "SELECT id,names FROM areas WHERE dist = ".$_GET['q'];
$result = mysqli_query($con,$query);
echo "<option value=''>--select area--</option>";
while ($row = mysqli_fetch_assoc($result)) {
	echo "<option value = '".$row['id']."'>".$row['names']."</option>";
}
?>