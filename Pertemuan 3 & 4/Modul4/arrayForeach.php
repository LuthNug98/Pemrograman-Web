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

 	foreach ($nama as $absen ) {
 	 	echo "<li>$absen</li>";
 	 } 

 	 ?>
 	 <br>
 	 <button>
		<a href="../">Index</a>
	 </button>

 </body>
 </html>