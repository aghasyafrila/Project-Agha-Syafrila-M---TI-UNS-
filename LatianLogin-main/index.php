<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pujut Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
		<h1><a href="index.html"></a>DESA PUJUT</h1>
		<ul>
			<li class="active"><a>HOME</a></li>
			<li><a>DATA PENDUDUK</a></li>
			<li><a>ABOUT</a></li>
			<li><a>CONTACT</a></li>
			<li><a href="action-logout.php">LOGOUT</a></li>
		</ul>
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>SELAMAT DATANG DI WEBSITE KAMI</h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>PUJUT</h3>
			<p> <strong>Kami siap melayani masyarakat dengan santun dan profesional.</strong> Silahkan menuju halaman Contact untuk melakukan pengaduan.</p>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
			<small> &copy; Pujut Website 2021</small>
		</div>
	</footer>
</body>
</html>[/php]