<?php 

//koneksi ke database

$conn = mysqli_connect("localhost","root","","aplikasi_lomba");

function query($query){

	global $conn;
	$result= mysqli_query( $conn , $query);
	$rows=[];
	while ($row= mysqli_fetch_assoc($result)) {

		$rows[] = $row;

	}
	return $rows;

}

function tambah($data){

	global $conn;

	var_dump($judul = $data["judul"]);
	$deskripsi = $data["deskripsi"];

	var_dump($_FILES["gambar"]["name"]);

	$gambar = $_FILES["gambar"]["name"];
	$source = $_FILES["gambar"]["tmp_name"];

	$folder = "img/";
	
	move_uploaded_file($source, $folder.$gambar);

//queryinsert data
	$query = "INSERT INTO uploadlomba VALUES(NULL,'$judul','$deskripsi','$gambar')";

	mysqli_query($conn,$query);	

	return mysqli_affected_rows($conn);
	



}





?>