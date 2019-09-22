<?php 
$negara = [

	["Indonesia", "D.K.I jakarta", "+62"],
	["Singapura", "Singapura", "+65"],
	["Malaysia", "Kuala lumpur", "+60"],
	["Brunei", "Bandar Seri begawan", "+673"],
	["Thailand", "Bangkok", "+66"],
	["Laos", "Vientiane", "+856"],
	["Filipina", "Manila", "+63"],
	["Myanmar", "Naypydaw", "+95"]
]

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<table border="3">
 		<tr>
 			<th>Negara</th>
 			<th>Ibukota</th>
 			<th>Kode Telepon</th>
 		</tr>

 		<tr>
			<?php 
				for ($i=0; $i <	count($negara);	$i++) { 
					for ($j=0; $j < 3; $j++) {
						echo "<td>".$negara[$i][$j]."</td>";
					}
					echo "</tr>";
				}
			 ?>	
	</table>
	<br>
	<button>
		<a href="../">Index</a>
	</button>
 </body>
 </html>