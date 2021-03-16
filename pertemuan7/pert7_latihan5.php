<!DOCTYPE html>
<html>
<head>
	<title>Penggunaan List</title>
	<style type="text/css">
		h3{
			color: blue;
		}
	</style>
</head>
<body>
	<h3>Fungsi List Array</h3>
	<h3>Muchammad BAchrul</h3>
	<?php 
	$program = array('Bobo','Doraemon','Spiderman');
	list($Majalah,$Komik,$Film) = $program;
	echo "Jenis Buku & Hiburan ";
	echo "<br/>";
	echo "Cerpen : $Majalah";
	echo "<br/>";
	echo "Cerita Bergambar : $Komik";
	echo "<br/>";
	echo "Bioskop : $Film"; 
	 ?>
</body>
</html>