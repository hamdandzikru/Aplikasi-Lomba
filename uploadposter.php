<?php

//Koneksi ke db
$conn = mysqli_connect("localhost","root","","aplikasi_lomba");

//apakah tombol subit sudah
if(isset($_POST["submit"])){
 // require 'function_tambah_poster.php';

  $judul = $_POST["judul"];
  $deskripsi = $_POST["deskripsi"];

  $gambar = $_FILES["gambar"]["name"];
  $source = $_FILES["gambar"]["tmp_name"];

  $folder = "path/";
  
  move_uploaded_file($source, $folder.$gambar);

//queryinsert data
  $query = "INSERT INTO uploadlomba VALUES(NULL,'$judul','$deskripsi','$gambar')";

  mysqli_query($conn,$query); 

  // return mysqli_affected_rows($conn);

  if (mysqli_affected_rows($conn)) {
   echo "<script> alert('data berhasil ditambah')</script>";
 }else{
  echo "gagal!";
  echo "<script> alert('data berhasil ditambah')</script>";
  


}
}
//cek apakah data berhasil ditambahkan atau tidak
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div>
        <a href="index.html"><img src="img/Logo-EAD.png" width="150" alt="logo"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
</head>
</head>
<body>

  <form style="margin: 100px 20%;" method="POST" action="" enctype="multipart/form-data">
    <h1>Upload Poster</h1>
    <br>  
    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi" rows="5"></textarea>
    </div>
    <div class="form-group">
      <label for="gambar">Gambar poster</label>
      <input type="file" class="form-control" name="gambar" id="gambar" placeholder="Masukkan poster">
    </div>
    
    

    <button class="btn btn-Dark" name="submit">  Upload </button>

    <!-- <button class="btn btn-primary"name="submit" type="submit">  Masukan Daftar </button> -->

  </form>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="jquery-2.1.1.js"></script>

  
</body>
</html>

