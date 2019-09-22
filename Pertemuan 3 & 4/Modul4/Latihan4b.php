<?php 

$negara = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php 
 	echo "Daftar Negara ASEAN awal :
 		  <li>$negara[0]</li>
 		  <li>$negara[1]</li>
 		  <li>$negara[2]</li>
 		  <li>$negara[3]</li>
 		  <li>$negara[4]</li>";
   ?>
   <br>
 <?php 
 	echo "Daftar Negara ASEAN baru :";
    array_push($negara,"laos","filipina","vietnam");
 	
 	foreach ($negara as $wew) {
 		echo "<li>$wew</li>";
 	}
 	
 	 ?>
 	 <br>
 	 <button>
		<a href="../">Index</a>
	 </button>
 </body>
 </html>