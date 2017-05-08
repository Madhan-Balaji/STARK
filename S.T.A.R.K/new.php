<!DOCTYPE html>
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>STARK - word cloud generator</title>
	<style type="text/css" media="screen">
		/*<![CDATA[*/
		.tag_cloud { padding: 3px; text-decoration: none; }
		.tag_cloud:link  { color: #81d601; }
		.tag_cloud:visited { color: #019c05; }
		.tag_cloud:hover { color: #ffffff; background: #69da03; }
		.tag_cloud:active { color: #ffffff; background: #ACFC65; }
		.wordcloud {
			border: 1px solid #036;
			margin: 0.5in auto;
			padding: 0;
			page-break-after: always;
			page-break-inside: avoid;
			width: 7in;
		}
		/*]]>*/
	</style>
</head>

<?php
 include 'reloga.php';
 include 'db_connection.php';

$freqData = array(); 
$lorem ="";
if((isset($_GET['q'])) && ($_GET['q'] == "ys")){
	$d = strtotime("Yesterday");
	$query = "SELECT complaint FROM complaints WHERE dates = '".date("d/m/Y",$d)."' AND network = ".$_SESSION['ida'];
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$lorem = $lorem." ".$row['complaint'];
		}
	}
	else {
		header("Location:word_cloud.php?t=not&s=".date("d/m/Y",$d));
	}
}
elseif((isset($_GET['q'])) && ($_GET['q'] == "lm")){
	$d = strtotime("Last Month");
	$query = "SELECT complaint FROM complaints WHERE dates LIKE '%".date("m/Y",$d)."' AND network = ".$_SESSION['ida'];
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$lorem = $lorem." ".$row['complaint'];
		}
	}
	else {
		header("Location:word_cloud.php?t=not");
	}
}
elseif((isset($_POST['ps'])) && ($_POST['ps'] == "byloc")){
	$area = $_POST['area'];
	$query = "SELECT c.complaint FROM complaints c, user_details u WHERE u.area = ".$area." AND c.user = u.id AND network = ".$_SESSION['ida'];
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$lorem = $lorem." ".$row['complaint'];
		}
	}
	else {
		header("Location:word_cloud.php?t=not");
	}
}
elseif ((isset($_POST['pd'])) && ($_POST['pd'] == "bydate")) {
	$da = $_POST['d'];
	$mn = $_POST['m'];
	$yy = $_POST['y'];
	$dates = $da."/".$mn."/".$yy;
	$query = "SELECT complaint FROM complaints WHERE dates = '".$dates."' AND network = ".$_SESSION['ida'];
	$result = mysqli_query($con,$query);
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$lorem = $lorem." ".$row['complaint'];
		}
	}
	else {
		header("Location:word_cloud.php?t=not");
	}
}

foreach( str_word_count( $lorem, 1 ) as $word )
{
	array_key_exists( $word, $freqData ) ? $freqData[ $word ]++ : $freqData[ $word ] = 0;
}
 
function getCloud( $data = array(), $minFontSize = 12, $maxFontSize = 100 )
{
	$minimumCount = min( array_values( $data ) );
	$maximumCount = max( array_values( $data ) );
	$spread       = $maximumCount - $minimumCount;
	$cloudHTML    = '';
	$cloudTags    = array();
 
	$spread == 0 && $spread = 1;
 
	foreach( $data as $tag => $count )
	{
		$size = $minFontSize + ( $count - $minimumCount ) 
			* ( $maxFontSize - $minFontSize ) / $spread;
		$cloudTags[] = '<a style="font-size: ' . floor( $size ) . 'px' 
		. '" class="tag_cloud" href="http://www.google.com/search?q=' . $tag 
		. '" title="\'' . $tag  . '\' returned a count of ' . $count . '">' 
		. htmlspecialchars( stripslashes( $tag ) ) . '</a>';
	}
 
	return join( "\n", $cloudTags ) . "\n";
}	
?>

 
<body>
	<div class="wordcloud" id="wrapper">
		<?php 
		echo getCloud( $freqData );
		 ?>
	</div>
</body>
</html>