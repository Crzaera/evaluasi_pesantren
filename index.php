<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body style="background: url(img/veloz.jpg); background-size: cover;">
	<div class="container">
		<div class="card bg-secondary border-danger text-center" style="padding: 50px; width: 50%; margin: 0 auto; margin-top: 12%;">
			<div class="card-header bg-dark">
				<a href="login.php">
					<img src="img/admin.png" class="card-img-top avatar-img rounded-circle" style="width: 10%;" alt="...">
				</a>
			<br>
				<h4 class="text-info">Selamat Datang di Aplikasi Todo</h4>
			</div>
			<br>
			<div class="card-body">
				<h5 class="text-info">Silahkan Terlebih Dahulu Login Untuk Mengakses Aplikasi</h5>
			</div>
			<br>
			<div class="card-footer">
				<a href="login.php" class="btn btn-danger" style="width: 60%;">Login Now!</a>
			</div>
		</div>
	</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>