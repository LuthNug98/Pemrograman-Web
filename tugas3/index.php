<?php 

	require 'helper/functions.php';
	$pahlawan = query("SELECT * FROM pahlawan");

	if (isset($_GET["cari"])) {
		$keyword = $_GET["keyword"];
		$query = "SELECT * FROM pahlawan
					WHERE nama LIKE '%$keyword%' OR 
						  lahir LIKE '%$keyword%' OR
						  wafat LIKE '%$keyword%'";
		$pahlawan = query($query);
	}else{
		$pahlawan = query("SELECT * FROM pahlawan");
	}
?>
<!DOCTYPE html>
<html>
<head>

	<title>Latihan 5b</title>

	<!-- Bootstrap CSS -->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!-- Style -->
   <link rel="stylesheet" href="assets/css/idx.css">

</head>
<body>

<div class="header">
	<a href="admin/login.php"><button type="submit" class="btn btn-secondary">login</button></a>
	<h1 class="text-center">Pahlawan</h1>
	<form action="" method="GET" align="center">
	<input type="text" name="keyword" autocomplete="off">
	<button type="submit" name="cari" class="btn btn-primary">Search</button>
	</form>
	</br>
</div>
<div class="container-fluid">
	
	<div class="row">
		<div class="col-6 col-md-4"></div>
  		<div class="col-6 col-md-4">
			<div class="paper">
			<?php 

				foreach ($pahlawan as $plw) :

			?>
				<div class="kotak">
					<a href="php/profil.php?id=<?= $plw['id']; ?> ">
						<img src="assets/img/<?php echo $plw['gambar']; ?>" class="rounded-circle">
					</a>
					<a href="php/profil.php?id=<?= $plw['id']; ?> ">
						<p class="nama"><b><?php echo $plw["nama"] ?></b></p>
					</a>
					<a href="php/profil.php?id=<?= $plw['id']; ?> ">
						<p class="lahir">(<?php echo $plw["lahir"] ?>)</p>
					</a>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
		</div>
  <div class="col-6 col-md-4"></div>
	</div>
</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>