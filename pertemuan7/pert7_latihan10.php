<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan In Array dengan Type Data</title>
	<style type="text/css">
		h3	{
			color: blue;
		}
	</style>
</head>
<body>
	<h3>Penggunaan In Array dengan Type Data</h3>
	<h3>Muchammad BAchrul</h3>

	<?php 
	$tipe = array('1.10',5.0,1.13);
	if (in_array('5.0', $tipe, TRUE)) {
		echo "String \"5.0\" ada di dalam array";
	}else{
		echo "String \"5.0\" tidak ada di dalam array";
	}
	echo "<br/>";
	if (in_array(1.13, $tipe, TRUE)) {
		echo "Bilangan 1.13 ada di dalam array";
	}else{
		echo "Bilangan 1.13 tidak ada didalam array";
	}
	 ?>
</body>
</html>