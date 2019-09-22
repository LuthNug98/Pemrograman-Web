<?php 

	if ($_POST["username"] != "admin" || $_POST['password'] != "admin"){
		echo "<script>
				alert('Username atau Password Salah!!');
				document.location.href='login.php';
			</script>";
		die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman | Admin</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			font-size: 15px;
			background: url(../assets/img/bg.jpg);
			background-size: cover;
		}
		.login-box{
			width: 320px;
			color: white;
			background-color: rgba(0,0,0,0.5);
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			padding: 30px 30px;
			border-radius: 10px;
		}
		h1{
			margin-top: -10px;
			text-align: center;
			font-weight: bold;
		}
		.isi{
			border-radius: 10px;
			font-size: 20px;
			background-color: #fff;
			color: black;
			text-align: center;
			padding: 1px;
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
			background-color: white;
			border: 1px solid #333;
			color: black;
			cursor: pointer;
			box-shadow: 0px 0px 5px white; 
		}
	</style>
</head>
<body>

	<div class="login-box">
		<h1>Selamat Datang, Admin</h1>
		<div class="isi">
			<p>Ini adalah halaman Admin</p>
		</div>
		<a href="login.php"><button type="submit" name="logout" onclick="return confirm('Apakah anda yakin akan keluar ?')">Logout</button></a>
	</div>

</body>
</html>