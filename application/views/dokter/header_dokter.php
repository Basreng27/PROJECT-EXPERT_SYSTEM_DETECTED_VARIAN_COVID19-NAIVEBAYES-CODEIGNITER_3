<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sistem Pakar Covid-19 </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.theme.default.min.css">
	<!-- Datatable -->
	<link href="<?php echo base_url(); ?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

	<link href="<?php echo base_url(); ?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/nouislider/nouislider.min.css">

	<!-- Vendor CSS -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/vendor/bootstrap-datepicker/css/datepicker3.css" /> -->

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />

	<!-- Theme CSS -->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/stylesheets/theme.css" /> -->

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="<?php echo base_url(); ?>assets/octopus/vendor/modernizr/modernizr.js"></script>
</head>

<body>
	<div id="preloader">
		<div class="sk-three-bounce">
			<div class="sk-child sk-bounce1"></div>
			<div class="sk-child sk-bounce2"></div>
			<div class="sk-child sk-bounce3"></div>
		</div>
	</div>

	<div id="main-wrapper">

		<div class="nav-header">
			<!-- <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url() ?>assets/images/logo.png" alt="">
                <img class="logo-compact" src="<?php echo base_url() ?>assets/images/logo-text.png" alt="">
                <img class="brand-title" src="<?php echo base_url() ?>assets/images/logo-text.png" alt="">
            </a> -->

			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>

		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
						</div>

						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<i class="mdi mdi-account"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="<?php echo base_url() ?>profile_dokter" class="dropdown-item">
										<i class="icon-user"></i>
										<span class="ml-2">Profile </span>
									</a>
									<a href="<?php echo base_url() ?>logout" class="dropdown-item">
										<i class="icon-key"></i>
										<span class="ml-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div class="quixnav">
			<div class="quixnav-scroll">
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>
					<li><a href="<?php echo base_url() ?>dashboard_admin" aria-expanded="false"><i class="icon icon-home"></i><span class="nav-text">Dashboard Dokter</span></a></li>

					<li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Management Data</span></a>
						<ul aria-expanded="false">
							<!-- <li><a href="<?php echo base_url() ?>data_admin">Data Admin</a></li> -->
							<li><a href="<?php echo base_url() ?>data_virus">Data Virus</a></li>
							<li><a href="<?php echo base_url() ?>data_gejala">Data Gejala</a></li>
							<li><a href="<?php echo base_url() ?>data_kasus">Data Kasus</a></li>
						</ul>
					</li>

					<li><a href="<?php echo base_url() ?>aturan_pakar" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Aturan</span></a></li>
					<li><a href="<?php echo base_url() ?>riwayat" aria-expanded="false"><i class="icon icon-window"></i><span class="nav-text">Riwayat</span></a></li>
					<!-- <li><a href="<?php base_url() ?>sistem_pakar_admin" aria-expanded="false"><i class="icon icon-single-04"></i><span class="nav-text">Sistem Pakar Admin</span></a></li> -->
				</ul>
			</div>


		</div>
