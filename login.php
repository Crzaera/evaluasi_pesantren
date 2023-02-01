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
		<div class="card bg-dark text-danger border-danger" style="padding: 50px; width: 40%; margin: 0 auto; margin-top: 12%;">
			<h3 style="text-align: center;" class="blue-text">Login!</h3>
			<br>
			<form method="POST" action="funtion.php">
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
					<input type="submit" name="login" value="Login" class="bg-info" style="width: 100%;">
        			<a href="register.php">
        				<button type="button" class="btn btn-info"
        				style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-top: 5%;">Register </button>
        			</a>
			</form>
		</div>
	</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>