<?php 
		
	$no=1;
	require '../helper/functions.php';
  $id = $_GET['id'];
	$plw = query("SELECT * FROM pahlawan WHERE id = $id")[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 5c</title>

	
	<!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <!-- Style -->
   <link rel="stylesheet" href="../assets/css/idx2.css"> 
</head>
<body>
	
<div class="header">
	<h1 class="text-center">Pahlawan</h1>
	</br>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="container">
			<div class="wew">
		<table border="top" cellpadding="10" cellspacing="0" class="table">
			<tr>
				<th width="160px">Nama</th>
				<th>Gambar</th>
				<th>Lahir</th>
				<th>Wafat</th>
				<th>Sejarah_Singkat</th>
			</tr>
			<tr>
				<td><?= $plw["nama"]; ?></td>
				<td><img src="../assets/img/<?php echo $plw['gambar']; ?>"></td>
				<td><?= $plw["lahir"]; ?></td>
				<td><?= $plw["wafat"]; ?></td>
				<td><?= $plw["sejarah_singkat"]; ?></td>
			</tr>
		</table>
			</div>
	
	<a href="../index.php"><button type="button" class="btn btn-dark">Kembali	</button></a>

	</div>
</div>
</div>


</body>
</html>