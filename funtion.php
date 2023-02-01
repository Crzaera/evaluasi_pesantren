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

<?php
	if (ISSET($_POST['login'])) {
		$email = $_POST['email'];
		$password = md5($_POST['password']);
 
		$login = mysqli_query($koneksi, "select * from user where email='$email' and password='$password'");
		$cek = mysqli_num_rows($login);
 
		if($cek > 0){
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['status'] = "login";
			header("location:todo/index.php");
		}else{
		header("location:login.php");	
		}
	}
?>

