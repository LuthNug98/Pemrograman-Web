<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<link href="../assets/css/tugas1.css" rel="stylesheet">
<body>
	<p>Pengulangan untuk mencari kategori bilangan :</p>
	<?php
	for ($j=1; $j <=20 ; $j++) { 
	$awal = 0;

		for ($k=1; $k <=$j; $k++) {
			if ($j % $k == 0) {
				$awal++;
		}	
	}
	
	if ($awal == 2 && $k % 2 == 0) {
		echo "<li id = 'li'>Angka $j adalah bilangan ganjil sekaligus bilangan prima</li>";
	}elseif ($awal == 2 && $k % 2 == 1) {
		echo "<li id = 'li'>Angka $j adalah bilangan genap sekaligus bilangan prima</li>";
	}elseif ($k % 2 == 0) {
		echo "<li id = 'li'>Angka $j adalah bilangan ganjil</li>";
	}elseif ($k % 2 == 1) {
		echo "<li id = 'li'>Angka $j adalah bilangan genap</li>";
	}
	}
	 ?>
	 <br>
 <button>
		<a href="../">Index</a>
</button>

</body>
</html>