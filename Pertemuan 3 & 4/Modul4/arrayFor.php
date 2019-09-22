<?php 

$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Looping for Array</title>
 </head>
 <body>
 	<?php 

 	for ($i=0; $i <count($nama) ; $i++) { 
 		echo "<li>$nama[$i]</li>";
 	}

 	 ?>
 	 <br>
 	 <button>
		<a href="../">Index</a>
	 </button>

 </body>
 </html>