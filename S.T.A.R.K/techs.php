<!DOCTYPE html>
<html>
<head>
	<title>STARK - Technicians</title>
</head>
<body background="bgs/dashboard.jpg" class="fix-bg">
	<?php include 'reloga.php'; ?>
	<?php include 'header.php'; include 'db_connection.php'; ?>
	<div style="display:block; margin: 0 100px 0 100px; height: 100%; background: rgb(204, 204, 204); background: rgba(204, 204, 204, 0.7);">
		<div id="cnts" style=" margin: 0 50px 0 50px; padding: 50px 0 50px 0;">
			<table style="width: 100%;" id="contents"></table>
		</div>
	</div>
	<script type="text/javascript">
		function loadTechs(){
			var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("numz").innerHTML = this.responseText;
	            }
	        }
	        xmlhttp.open("GET", "getnumbers.php", true);
	        xmlhttp.send();
		}
	</script>
</body>
</html>