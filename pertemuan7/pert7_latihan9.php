<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan In Array</title>
	<style type="text/css">
		h3	{
			color: blue;
		}
	</style>
</head>
<body>
	<h3>Penggunaan In Array</h3>
	<h3>Muchammad BAchrul</h3>

	<?php 
	$program = array("HTML","PHP","CSS","JavaScript");
	print_r($program);
	$cari = "HTML";
	if (in_array($cari, $program)) {
		echo "Program Basis Web $cari ada di dalam array";
	}else{
		echo "Program Basis Web $cari tidak ada di dalam array";
	}
	 ?>
</body>
</html>