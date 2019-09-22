<?php 

$mahasiswa = [
		"001" => "Ahmad",
		"002" => "Budi",
		"003" => "Chika",
		"004" => "Dhini",
		"005" => "Erwin"];			

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php foreach ($mahasiswa as $nrp => $nama) : ?>
 		<li><?php echo "$nrp : $nama"; ?></li>
 	 <?php endforeach ?>
 </body>
 	 <br>
 	 <button>
		<a href="../">Index</a>
	 </button>
 </html>