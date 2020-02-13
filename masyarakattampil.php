
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.365bootstrap.com">
	
    <title> Masyarakat Desa Tungkal Selatan</title>
	
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
	 <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	
	<!-- jQuery and Modernizr-->
	<script src="js/jquery-2.1.1.js"></script>
	
	<!-- Core JavaScript Files -->  	 
    <script src="js/bootstrap.min.js"></script>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header>
	<!--Top-->
	<nav id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<strong><h4>Desa Tungkal Selatan</h4></strong>
				</div>
				<div class="col-md-6">
					<ul class="list-inline top-link link">
						<li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="admin/index.php"><i class="fa fa-comments"></i> Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<!--Navigation-->
    <nav id="menu" class="navbar container">
		<div class="navbar-header">
			<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil<i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="sejarahtampil.php">Sejarah Desa</a></li>
								<li><a href="visimisitampil.php">Visi dan Misi</a></li>

							</ul>
						</div>
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Organisasi<i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="strukturtampil.php">Struktur Organisasi</a></li>
								<li><a href="pemerintahantampil.php">Pemerintahan</a></li>
								<li><a href="pkktampil.php">PKK</a></li>
								<li><a href="karangtarunatampil.php">Karang Taruna</a></li>
								<li><a href="masyarakattampil.php">Masyarakat</a></li>
							</ul>
						</div> 
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk<i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="produk.php">Produk Masyarakat</a></li>
								<li><a href="jasa.php">Jasa Masyarakat</a></li>
							</ul>
						</div> 
					</div>
				</li>
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeri<i class="fa fa-arrow-circle-o-down"></i></a>
					<div class="dropdown-menu">
						<div class="dropdown-inner">
							<ul class="list-unstyled">
								<li><a href="galeritampil.php">Galeri</a></li>
								<li><a href="video.php">Video</a></li>
							</ul>
						</div> 
					</div>
				</li>
			</ul>
			<ul class="list-inline navbar-right top-social">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			</ul>
		</div>
	</nav>
</header>	

	
	<!-- /////////////////////////////////////////Content -->
		<div id="page-content" class="index-page container">
		<div class="row">
			<div id="main-content"><!-- background not working -->
				<div class="col-md-9">
					
					<div class="box">
						<div class="box-header header-vimeo">
							<h2>Masyarakat Desa Tungkal Selatan</h2>
						</div>
						<div class="box-content">
							<div class="row">
							<?php 
							include "admin/koneksi.php";							 
							$ambil_data= mysql_query("SELECT * FROM masyarakat");							 
								while($data=mysql_fetch_array($ambil_data))	
								{			 
										echo "<img src='admin/images_masyarakat/" . $data['foto'] . "' width='1000' height='400'></td>";				 
 								}
							?>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
			<div id="sidebar">
				<div class="col-md-3">
					<!---- Start Widget ---->
					
					<!---- Start Widget ---->
					<div class="widget wid-vid">
						<div class="heading"><h4>Aparatur Desa</h4></div>
						
						<div class="zoom-container">
						
											<div class="zoom-caption">
												<span class="vimeo">Kepala Desa</span>				
												<p>Rahayadi Nigrad,S.Pd.I</p>
											</div>	
											<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
											<?php 
												include "admin/koneksi.php";	
																		 
												$ambil_data= mysql_query("SELECT * FROM aparatur");							 
													while($data=mysql_fetch_array($ambil_data))	
													{			 
														echo "<img src='admin/images_aparatur/" . $data['foto'] . "' width='250' height='200'></td>";						 
					 								}
											?>
											
											
											
											</div>
										</div>
						</div>
						
						<div class="content">
						</div>
					</div>
					<!---- Start Widget ---->
					
					<!---- Start Widget ---->
					
				</div>
				<div class="col-md-3">
					<!---- Start Widget ---->
					
					<!---- Start Widget ---->
					
					<!---- Start Widget ---->
					
					<!---- Start Widget ---->
					
					<!---- Start Widget ---->

					<!---- Start Widget ---->
					<div class="widget wid-calendar">
						<div class="heading"><h4>Calender</h4></div>
						<div class="content">
							<center><form action="" role="form">        
								<div class="">
									<div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">                </div>
									<input type="hidden" id="dtp_input2" value="" /><br/>
								</div>
							</form></center>
						</div>
					</div>
					<!---- Start Widget ---->
					
					
				</div>
			</div>
		</div>

	<footer>
		<div class="copy-right">
			<p>Copyright 2018 - Designed by <a href="#">Muslim Technologi</a></p>
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- JS -->
	<script src="owl-carousel/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {
      $("#owl-demo-1").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [400,1]
      });
	  $("#owl-demo-2").owlCarousel({
        autoPlay: 3000,
        items : 3,
        
      });
    });
    </script>
	
	
	<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
</body>
</html>
