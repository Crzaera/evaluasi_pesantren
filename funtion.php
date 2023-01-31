<?php
include 'config/koneksi.php';
?>
<?php
				if(isset($_POST['submit'])){

					$password = md5($_POST['password']);

					$query=mysqli_query($koneksi,"INSERT INTO user VALUES ('".$_POST['id']."','".$_POST['nama']."','".$_POST['email']."','".$password."')");
					if($query){
						echo "<script>alert('Berhasil Mendaftar')</script>";
						header("location:login.php");
					}
				}
?>