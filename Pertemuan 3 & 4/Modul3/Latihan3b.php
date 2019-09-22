<!DOCTYPE html>
<html>
<head>
	<title>Latihan3b</title>
</head>
<body>
	<?php 
	error_reporting(0);
	echo "<h3>Perbedaan ISSET dan EMPTY</h3>";
	"<br>";
	echo "<p>Isset() digunakan untuk menentukan suatu variable yang telah di set atau tidak. jika suatu variable telah di set maka variable tersebut akan mengembalikan nilai true, dan sebaliknya akan bernilai false.Code isset() function akan menghasilkan nilai boolean [true] jika sebuah variable tidak berisi nilai NULL.</p>";
	echo "<p>Contoh penggunaan Isset():</p>";
	echo '<P>$var = NULL; isset($var); // FALSE</P>';
	echo '<p>$var = 0; isset($var); // TRUE</p>';
	echo '<p>$var = FALSE; isset($var); // TRUE</p>';
	echo "<p>$var = ''; isset($var); // TRUE</p>";
	echo '<p>isset($undefined_var); // FALSE</p>';
	echo '<p>maka variable akan bernilai false :</p>';

	echo $var = NULL; isset($var); // FALSE
	echo $var = 0; isset($var); // TRUE
	echo $var = FALSE; isset($var); // TRUE
	echo $var = '';  isset($var); // TRUE
	isset($undefined_var); // FALSE
	echo "<br>";
	echo "<hr>";
	echo '<p>empty(), digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong, Code empty() function akan menghasilkan nilai boolean [true] jika sebuah variable diisi oleh string kosong [""], false, array(), NULL, "0", atau 0.</p>';
	echo "<p>Contoh penggunaan empty():</p>";
		echo "<p>$var = NULL; empty($var); // TRUE</p>";
		echo "<p>$var = 0; empty($var); // TRUE</p>";
		echo "<p>$var = FALSE; empty($var); // TRUE</p>";
		echo "<p>$var = '';  empty($var); // TRUE</p>";
		empty($undefined_var); // TRUE;
		echo "<p>maka akan bernilai true :</p>";
		echo $var = NULL; empty($var); // TRUE
		echo $var = 0; empty($var); // TRUE
		echo $var = FALSE; empty($var); // TRUE
		echo $var = '';  empty($var); // TRUE
		empty($undefined_var); // TRUE;
	 ?>
	<br>
	<br>
<button>
		<a href="../">Index</a>
</button>
</body>
</html>