<?php
include 'db_connection.php';
for($i=0;$i<100;$i++){
$query = "select cmt from dummy_comment where id = ".mt_rand(1,71);
$result = mysqli_query($con,$query);
while ($row = mysqli_fetch_assoc($result)) {
	$q = "select user,id,network from user_connection where id=".mt_rand(7,17);
	$rs = mysqli_query($con,$q);
	$d = strtotime("Tomorrow");
	while ($r = mysqli_fetch_assoc($rs)) {
		$qr = "insert into complaints(network,user,numbers,complaint,status,dates) values (".$r['network'].",".$r['user'].",".$r['id'].",'".$row['cmt']."',0,'".date('d/m/Y',$d)."')";
		mysqli_query($con,$qr);
		echo mysqli_error($con);
	}
}
}
?>