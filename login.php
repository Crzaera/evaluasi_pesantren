<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<link rel="shortcut icon" href="https://cepatpilih.com/image/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">

</head>
<body style="background: url(img/veloz.jpg); background-size: cover;">
<div class="container">
<div class="card bg-secondary text-white border-danger" style="padding: 50px; width: 40%; margin: 0 auto; margin-top: 12%;">
<h3 style="text-align: center;" class="blue-text">Login!</h3>
<br>
	<form method="POST">
		<div class="input_field">
			<label for="email">Email : </label>
            <br>
			<input type="email" name="email" size="50" placeholder="Email@gmail.com" />
		</div>
        <br>
		<div class="input_field">
			<label for="password">Password : </label>
            <br>
			<input type="password" name="password" size="50" placeholder="Password" />
		</div>
        <br>
		<input type="submit" name="login" value="Login" class="bg-primary" style="width: 100%;">
        <a href="register.php">
        <button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-top: 5%;">
        Register </button>
        </a>
	</form>
</div>
</div>
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
</body>
</html>