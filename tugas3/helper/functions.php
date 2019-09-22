<?php 
  // conec
  $conn = mysqli_connect("localhost","root","","pw_173040124");
  
  function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }return $rows;
  }

  function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $lahir = htmlspecialchars($data["lahir"]);
    $wafat = htmlspecialchars($data["wafat"]);
    $sejarah_singkat = htmlspecialchars($data["sejarah_singkat"]);  
    $query = "INSERT INTO pahlawan VALUES 
          ('','$nama','$gambar','$lahir','$wafat','$sejarah_singkat')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }


  function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM pahlawan WHERE id=$id");
    return mysqli_affected_rows($conn);
  }


  function ubah($data) {
   global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $lahir = htmlspecialchars($data["lahir"]);
    $wafat = htmlspecialchars($data["wafat"]);
    $sejarah_singkat = htmlspecialchars($data["sejarah_singkat"]);  
    $query = "UPDATE pahlawan SET 
               nama = '$nama',
               gambar = '$gambar',
               lahir = '$lahir',
               wafat = '$wafat',
               sejarah_singkat = '$sejarah_singkat'
               WHERE id = '$id' ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

?>