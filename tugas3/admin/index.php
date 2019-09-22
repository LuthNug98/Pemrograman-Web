<?php 

  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location:login.php");
  }
	require '../helper/functions.php';
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
 	<title>tugas2</title>

      <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/css/Tugas3.css">
 </head>
 <body>
    <div class="zz">
    <a href="tambah.php"><button type="button" class="btn btn-warning">Tambah Data</button></a>
    <a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>
    <form action="" method="GET" align="center" >
    <input type="text" name="keyword" autocomplete="off" class="">
    <button type="submit" name="cari" class="btn-primary">Search</button>
    </form>
    </div>
  <br> 
 	<div class="kotak1"> 
 	<div class="bungkus">	
 	<h1 style="text-align: center;">Pahlawan-Pahlawan Indonesia</h1>
 	</div>

  <div class="col-sm-14"> 
  <table class="table table-bordered table-default ">
  <thead class="bg-active">
    <tr>
      <th scope="col" id="head" width="20px">#</th>
      <th  scope="col" id="head" width="50px">Aksi</th>
      <th scope="col" id="head" width="180px">Nama</th>
      <th scope="col" id="head" width="100px">Gambar</th>
      <th scope="col" id="head" width="200px">Lahir</th>
      <th scope="col" id="head" width="110px">Wafat</th>
      <th scope="col" id="head" width="250px">Sejarah singkat</th>
    </tr>
    </thead>
   <!-- </thead> -->
  <?php $i = 1; ?>
  <?php foreach ($pahlawan as $plw): ?>
  <tbody>
    <tr>
      <th id="head"scope="row"><?php echo $i++; ?></th>
      <td>
      <div class="btn">
      <a href="hapus.php?id=<?php echo $plw["id"]; ?>" onclick ="return confirm('yakin?');"><button type="button" class="btn btn-info">hapus</button></a>
    	<a href="ubah.php?id=<?php echo $plw ["id"]; ?>" style="text-decoration: none"><button type="button" class="btn btn-success">ubah</button></a></td>
      </div>
      </td>
      <td id="head"><?php echo $plw["nama"]; ?></td>
      <td id="head"><img src="../Assets/img/<?= $plw["gambar"]; ?>"></td>
      <td id="head"><?php echo $plw["lahir"]; ?></td>
 	  <td id="head"><?php echo $plw["wafat"]; ?></td>
 	  <td id="wew"><?php echo $plw["sejarah_singkat"]; ?></td>
    </tr>
  </tbody>
  <?php endforeach ?>
</table>
  </div>
  </div>
  </div>
 </body>
 </html>
