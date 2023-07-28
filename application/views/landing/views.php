<!DOCTYPE html>
<html lang="en">

<head>
	<title>Web Monitoring Diskominfo Jawa Barat</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/diskominfo-jabar.png"/>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/aos.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/owl.theme.default.min.css">
	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets\css\style.css">

	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets-landing/css/templatemo-digital-trend.css">

	<!-- SCRIPTS -->
	<script src="<?php echo base_url() ?>assets-landing/js/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>assets-landing/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets-landing/js/aos.js"></script>
	<script src="<?php echo base_url() ?>assets-landing/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>assets-landing/js/smoothscroll.js"></script>
	<script src="<?php echo base_url() ?>assets-landing/js/custom.js"></script>

	<style>
		html,
		body {
			margin: 0;
			height: 100%;
			width: 100%;
			padding: 0;
		}

		section {
			display: block;
			height: 100%;
			width: 100%;
			padding: 60px;
			padding-left: 120px;
			box-sizing: border-box;
		}
	</style>
</head>

<body>

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="<?php echo base_url() ?>assets-landing/images/diskominfo-jabar.png" class="d-flex justify-content-center" alt="logo umprop inti" width="40"/>
		</a>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="<?php echo site_url('Home'); ?>" class="nav-link">Home</a>
				</li>
				<?php
				if (empty($session)) {
					?>
					<li class="nav-item">
						<a href="<?php echo site_url('Auth'); ?>" class="nav-link contact">Masuk</a>
					</li>
					<?php
				} else {
					?>
					<li class="nav-item">
						<a href="<?php echo site_url('Dashboard'); ?>" class="nav-link contact">Dashboard</a>
					</li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>
</nav>


<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<div class="welcome-text" style="margin-left: -60px; margin-top: -70px;">
					<div class="hero-text mt-30" style="position:relative;color:#fff;z-index:90">
						<h4 class="hero-text">Dinas Komunikasi dan Informatika Jawa Barat</h4>
						<h1 class="text-white">Web Monitoring Sebaran Wifi Gratis <br> Jawa Barat</h1>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
<footer class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12">
				<h4 class="my-4">Contact Info</h4>

				<p class="mb-1">
					<i class="fa fa-phone mr-2 footer-icon"></i>
					082125675017 (Whatsapp)
				</p>

				<p>
					<a href="#">
						<i class="fa fa-envelope mr-2 footer-icon"></i>
						data@jabarprov.go.id
					</a>
				</p>
			</div>

			<div class="col-lg-4 col-md-6 col-12">
				<h4 class="my-4">Office</h4>

				<p class="mb-1">
					<i class="fa fa-home mr-2 footer-icon"></i>
					Jl. Tamansari No.55 Kelurahan Lebak Siliwangi Kecamatan Coblong Kota Bandung 40132
				</p>
			</div>

			<div class="mx-lg-auto text-center col-12">
				<p class="copyright-text">Copyright &copy;  Jabar Open Data 2023. All rights reserved
				</p>
			</div>

		</div>
	</div>
</footer>
</body>

</html>
