<!DOCTYPE html>
<html>
<head>
	<title>Modul 2- Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>kolom 1</th>
			<th>kolom 2</th>
			<th>kolom 3</th>
			<th>kolom 4</th>
			<th>kolom 5</th>
		</tr>
		<?php for ($i=1; $i <=15 ; $i++) { 
			echo "<tr>";
			for ($k=1; $k <=5 ; $k++) { 
			echo "<td> baris $i kolom $k</td>";
			}
		}
		 ?>

	</table>
	<br>
 <button>
		<a href="../">Index</a>
</button>
</body>
</html>