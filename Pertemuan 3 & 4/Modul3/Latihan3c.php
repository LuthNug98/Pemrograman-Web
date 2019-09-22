<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 


function pangkat ($angka,$pangkat) {
	$hasil = 1;
	for ($i=1; $i<= $pangkat; $i++) { 
		$hasil = $hasil * $angka;
	}
	return "$angka pangkat $pangkat = $hasil";
	}
	echo pangkat(5,4);

 ?>
 <br>
 <br>
 <button>
		<a href="../">Index</a>
</button>
</body>
</html>