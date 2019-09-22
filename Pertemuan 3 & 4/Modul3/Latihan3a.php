<!DOCTYPE html>
<html>
<head>	
	<title></title>
	<style type="text/css">
	.ganti {

		font-size: 28px;
		font-family: arial;
		color: #1A0547;
		font-style: italic;
		font-weight: border;

	}	

	</style>
</head>
<body>

<?php 

$tulisan = "Hello world! Here I come!";
$Kelas = "gantiStyle";

function gantiStyle($tulisan,$Kelas) {
	echo "<h1 class = 'ganti'>$tulisan</h1>";

}
	
echo gantiStyle($tulisan, $Kelas);

 ?>
<button>
		<a href="../">Index</a>
</button>
</body>
</html>


