<?php
$host="localhost"; // biasanya localhost
$username="root";
$password="";
$db="aplikasi_lomba"; 
 
 
mysql_connect("$host", "$username", "$password")or die("koneksi gagal");
mysql_select_db("$db")or die("database tidak bisa dipilih");
$username=$_POST['username'];
$password=$_POST['password'];

 
$sql="SELECT * FROM daftar_akun WHERE USERNAME='$username' AND PASSWORD='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
$level=mysql_query("SELECT `LEVEL` FROM `daftar_akun` WHERE `USERNAME`='$username'");
$row = mysql_fetch_assoc($level);
// print_r($row['LEVEL']);
if($count==1){
$_SESSION['daftar_akun']=$sql->fetch_assoc();
	if($row['LEVEL']=="admin") {
		echo "Selamat Datang, Admin";
		echo "<script>location='index.html';</script>";
	}else{
		echo "Selamat Datang, User";
		echo "<script>location='index.html';</script>";
	}
}
else {
echo "Username atau Password yang anda masukkan salah";
}
?>