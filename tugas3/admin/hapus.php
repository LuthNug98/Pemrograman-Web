<?php 
  // koneksi
  require '../helper/functions.php';
  session_start();
  if (!isset($_SESSION["login"])) {
    header("Location:login.php");
  }
  if ( !isset($_GET["id"]) ) {
  	 header("location: index.php");
  }
  if (hapus($_GET["id"]) > 0) {
     echo "<script>
  		alert ('data berhasil dihapus!');
  		document.location.href = 'index.php'; </script>";
  }

 ?>