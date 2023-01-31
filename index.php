<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pengaduan Masyarakat</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>
<body style="background: url(img/veloz.jpg); background-size: cover;">

	<div class="container">
		

	<?php 
		include 'config/koneksi.php';
		if(@$_GET['p']==""){
			include_once 'login.php';
		}
		elseif(@$_GET['p']=="login"){
			include_once 'login.php';
		}
		elseif(@$_GET['p']=="logout"){
			include_once 'logout.php';
		}
	 ?>

	</div>
</body>
</html>