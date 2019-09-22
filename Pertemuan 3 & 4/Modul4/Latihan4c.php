<?php 
$ibukota = [
	"indonesia" => "D.K.I jakarta",
	"Singapura" => "Singapura",
	"Malaysia" => "Kuala lumpur",
	"Brunei" => "Bandar Seri begawan",
	"Thailand" => "Bangkok",
	"Laos" => "Vientiane",
	"Filipina" => "Manila",
	"Myanmar" => "Naypydaw"];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	echo "Daftar Negara ASEAN dan Ibukota :";
	foreach ($ibukota as $negara => $ibukota) {
		echo "<li>$negara : $ibukota</li>";
	}



	 ?>
	 <br>
	 <button>
		<a href="../">Index</a>
	 </button>

</body>
</html>