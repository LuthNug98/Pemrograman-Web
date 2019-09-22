<?php

  require '../helper/functions.php';
   // cek apakah tombol submit sudah ditekan atau belum

  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location:login.php");
  }
  
  if (isset($_POST['tambah'])) {
    if(tambah($_POST) > 0 ) {
      echo "<script>
          alert('Data Berhasil ditambah!');
          document.location.href = 'index.php';
          </script>";
    }else{
      echo "<script>
          alert('Data Gagal ditambah!');
          document.location.href = 'index.php';
          </script>";
    }
  }
  ?>



<!DOCTYPE html>
<html>
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
	<title>Form Tambah Data Pahlawan</title>
</head>
<body>
    <br>
    <h1>Tambah Data Pahlawan</h1>
    <div class="login">

      
  <form action="" method="post">
    		    <input type="text" name="nama" id="nama" required autocomplete="off" placeholder="nama">
    		    <input type="text" name="lahir" id="lahir" required autocomplete="off" placeholder="lahir">
    		    <input type="date" name="wafat" id="wafat" required autocomplete="off" placeholder="wafat">
            <br>
    		    <input type="text" name="sejarah_singkat" id="sejarah_singkat" required placeholder="sejarah singkat" autocomplete="off">
            <input type="file" name="gambar" id="gambar" required autocomplete="off" placeholder="gambar">
    <button type="submit" name="tambah">Tambah</button>
    </form>
      </div>
</body>
</html>