                                    <?php
//koneksi
$koneksi = include 'database.php';
 


                                    if(isset($_POST['login']))
                                    {
                                      $email = $_POST["username"];
                                      $pass = $_POST["password"];
                                      $koneksi->query("SELECT * FROM daftar_akun WHERE USERNAME = '$email' AND PASSWORD = '$pass'");

                                      $akunygcocok = $ambil->num_rows;

                                      if($akunygcocok==1){
                                        $akun = $ambil->fetch_assoc();
                                        $_SESSION["daftar_akun"] = $akun;
                                        echo "<script>alert('Login Berhasil');</script>";
                                        echo "<script>location='index.html';</script>";
                                      }else{
                                        echo "<script>alert('Gagal Login');</script>";
                                        echo "<script>location='login.php';</script>";
                                      }
                                      }
                                    
                                    ?>