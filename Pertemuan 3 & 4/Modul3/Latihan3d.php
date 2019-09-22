<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	function faktorial($b){
		$a = $b;
		$hasil = $b;

		for ($i= 1; $i < $b ; $i++) { 
			$a--;
			$hasil *=$a;
		}
		return "Faktorial dari $b = $hasil";
		}
	echo faktorial(5);

?>
<br>
<br>
 <button>
		<a href="../">Index</a>
</button>
</body>
</html>