<?php 
	// koneksi
	require '../helper/functions.php';
	session_start();
	if ( isset($_SESSION["login"])) {
		header("Location:index.php");
	}
	if (!isset($_POST["username"])|| !isset($_POST["password"])){
		$zong = 1;
	}else if ($_POST["username"] == "admin" && $_POST['password'] == "admin"){
		$_SESSION["login"] = true;
		header("Location: index.php");
	}else{
		$error = true;
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
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
			padding: 50px 30px;
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
		#username {
			background-color: white;
			font-size: 15px;
		}
		#password {
			background-color: white;
			font-size: 15px;
		}
	</style>
</head>
<body>
<div class="login">
	<h1>Login</h1>

	<form action="" method="POST">

		<input type="text" name="username" id="username" placeholder="username">
		<input type="password" name="password" id="password" placeholder="password">
		</br>
		<button type="submit" name="login">Login</button>
		<p style="text-align: center;">admin || admin</p>
	</form>
</div>
</body>
</html>