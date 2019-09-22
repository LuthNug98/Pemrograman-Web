<?php 
	
	require '../helper/functions.php';


  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location:login.php");
  }

	$id = $_GET["id"];
	$plw = query("SELECT * FROM pahlawan WHERE id = $id")[0];
	if (isset($_POST['ubah'])) {
		if(ubah($_POST) > 0 ) {
			echo "<script>
					alert('Data Berhasil diubah!');
					document.location.href = 'index.php';
				</script>";
		}else{
			echo "<script>
					alert('Data Gagal diubah!');
					document.location.href = 'ubah.php';
				</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <style>
    body{
      margin: 0;
      padding: 0;
      font-size: 15px;
      background: url(../assets/img/kk.jpg);
      background-size: cover;
    }
    .login{
      width: 320px;
      height: 275px;
      color: white;
      background-color: rgba(0,0,0,0.3);
      top: 50%;
      left: 50%;
      position: absolute;
      transform: translate(-50%,-50%);
      padding: 80px 50px;
      border-radius: 10px;
    }
    h1{
      background-color: transparent;
      margin-top: -10px;
      margin-bottom: 50px;
      text-align: center;
      font-weight: bold;
      border-radius: 7px;
    }
    input{
      color: black;
      display: block;
      border: none;
      outline: none;
      background: transparent;
      width: 100%;
      height: 30px;
    }
    input[type="text"]{
      margin-bottom: 20px;
    }
    button{
      margin-top: 30px;
      color: white;
      width: 100%;
      border: 1px solid white;
      background-color: #333;
      height: 40px;
      border-radius: 3px;
      font-size: 15px;
    }
    button:hover{
      font-weight: bold;
      background-color: transparent;
      border: 1px solid #333;
      color: black;
      cursor: pointer;
      box-shadow: 0px 0px 5px white; 
    }
    #nama {
      background-color: white;
      font-size: 15px;
    }
   /* #gambar {
      background-color: white;
      font-size: 15px;
    }*/
    #lahir {
      background-color: white;
      font-size: 15px;
    }
    #wafat {
      background-color: white;
      font-size: 15px;
    }
    #sejarah_singkat {
      background-color: white;
      font-size: 15px;
    }
    #lahir {
      background-color: white;
      font-size: 15px;
    }
    h1 {
      color: white;
      padding-bottom: 100px;

    }
    p {
      font-size: 30px;
      padding-left: 500px;
      color: white;
      padding-bottom: 30px;
      
    }
    
  </style>
	<meta charset="UTF-8">
	<title>Form Ubah Data</title>
</head>
<body>
	<br>
	<h1>Ubah Data Pahlawan</h1>
		<div class="login">
	<form action="" method="POST">
		<input type="hidden" name="id" value="<?php echo $plw['id'] ?>">
	<!-- 	<ul>
			<li>
				<label for="nama">Nama : </label> -->
				<input type="text" name="nama" id="nama" required autocomplete="off" value="<?php echo $plw['nama'] ?>">
			<!-- </li>
			<li> -->
			<!-- 	<label for="nrp">NRP : </label> -->
			<!-- </li>
			<li> -->
<!-- 				<label for="umur">Umur : </label>
 -->				<input type="text" name="lahir" id="lahir" value="<?php echo $plw['lahir'] ?>">
<!-- 			</li>
			<li>
				<label for="email">Email : </label> -->
				<input type="date" name="wafat" id="wafat" value="<?php echo $plw['wafat'] ?>"><br>
			<!-- </li>
			<li>
				<label for="jurusan">Jurusan : </label> -->
				<input type="textfield" name="sejarah_singkat" id="sejarah_singkat" value="<?php echo $plw['sejarah_singkat'] ?>">
			<!-- </li>
			<li> -->
				<br>
				<input type="file" name="gambar" id="gambar" value="<?php echo $plw['gambar'] ?>" class="btn btn-info">

				<button type="submit" name="ubah">Ubah Data!</button>
		<!-- 	</li>
		</ul> -->
	</form>
	</div>

</body>
</html>