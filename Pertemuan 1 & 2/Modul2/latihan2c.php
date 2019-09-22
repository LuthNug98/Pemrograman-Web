<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 1</title>
	<link href="../assets/css/latihan2c.css" rel="stylesheet">
</head>
<body>
	<?php 
	for ($i=1; $i <= 5; $i++) { 
	  for ($j=1; $j<=$i; $j++)
		if ($i % 2 == 0) {
			echo "<div class='kotak genap'>$j</div>";
		}else {
			echo "<div class ='kotak ganjil'>$j</div>";
		}
		echo "<div class= 'clear'></div>";
	}
	
?>
		<br>
 <button>
		<a href="../">Index</a>
</button>

</body>
</html>