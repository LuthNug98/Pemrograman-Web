<?php 

$hari = ["senin", "selasa", "rabu"];

echo "array awal :";
print_r($hari);
echo "<hr>";

echo "array setelah di pop :";
$hasil = array_pop($hari);
print_r($hari);
echo "<br>elemen yang ada di pop : $hasil <hr>";

echo "array setelah di push :";
$hasil = array_push($hari, "kamis", "jumat");
print_r($hari);
echo "<hr>";

echo "array setelah di shift :";
$hasil = array_shift($hari);
print_r($hari);
echo "<br>elemen yang ada di shift : $hasil <hr>";

echo "array setelah di unshift : ";
$hasil = array_unshift($hari, "elemen", "ditambahkan");
print_r($hari);

 ?>
 	<br>	
 	 <br>
 	 <button>
		<a href="../">Index</a>
	 </button>