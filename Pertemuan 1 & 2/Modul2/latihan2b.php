<!DOCTYPE html>
<html>
<head>
	<title>Modul 2 - Latihan 1</title>
	<link href="../assets/css/latihan2c.css" rel="stylesheet">
</head>
<body>
	<?php for ($i=1; $i <= 5 ; $i++) { 
		echo "<div class = 'clear'><div>";
		for ($k=1; $k <= $i; $k++) { 
			echo "<div class = 'kotak'>$k</div>";
		}
	} 
	?>
<br>
 <button>
		<a href="../">Index</a>
</button>

</body>
</html>