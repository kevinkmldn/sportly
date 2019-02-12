<?php foreach ($artikel->result()as $row): ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title><?php echo $row->judul;?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/dasbor/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/dasbor/images/favicon.png">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="<?php echo base_url();?>assets/utama/common-css/bootstrap.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/utama/common-css/ionicons.css" rel="stylesheet">


	<link href="<?php echo base_url();?>assets/utama/single-post-2/css/styles.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/utama/single-post-2/css/responsive.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="http://localhost/sportly/" class="logo"><img src="<?php echo base_url();?>assets/dasbor/images/logo.png" alt="Logo Image"></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="http://localhost/sportly">Home</a></li>
				<li><a href="http://localhost/sportly/login/masuk">Login</a></li>
			</ul><!-- main-menu -->

			<div class="src-area">
				<form action="<?php echo base_url('welcome/mencari/');?>" method="post">
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					<input class="src-input" name="katakunci" type="text" placeholder="Masukkan kata kunci...">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>

	<div class="slider">

	</div><!-- slider -->

	<section class="post-area">
		<div class="container">

			<div class="row">

				<div class="col-lg-1 col-md-0"></div>
				<div class="col-lg-10 col-md-12">

					<div class="main-post">

						<div class="post-top-area">

							<h5 class="pre-title"><?php echo $row->kategori;?></h5>

							<h3 class="title"><a href="#"><b><?php echo $row->judul;?></b></a></h3>

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="<?php echo base_url();?>assets/utama/images/avatar.png" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $row->penulis;?></b></a>
									<h6 class="date">on <?php echo $row->tanggal;?></h6>
								</div>

							</div><!-- post-info -->


						</div><!-- post-top-area -->

						<div class="post-image"><img src="<?php echo $row->gambar;?>" alt="Blog Image"></div>

						<div class="post-bottom-area">

							<p class="para"><?php echo $row->isi;?></p>

							<ul class="tags">
								<li><a href="#"><?php echo $row->kategori;?></a></li>
							</ul>

							<div class="post-footer post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="<?php echo base_url();?>assets/utama/images/avatar.png" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $row->penulis;?></b></a>
									<h6 class="date">on <?php echo $row->tanggal;?></h6>
								</div>

							</div><!-- post-info -->

						</div><!-- post-bottom-area -->

					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- post-area -->

	<footer>
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<a class="logo" href="#"><img src="<?php echo base_url();?>assets/dasbor/images/logo.png" alt="Logo Image"></a>
						<p class="copyright">Kevin @ 2019. All rights reserved.</p>
						<p class="copyright">Designed by <a href="#" target="_blank">Kevin Kamaluddin</a></p>
						<ul class="icons">
							<li><a href="http://www.facebook.com/vinz.nolimit"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="http://www.twitter.com/kevinkmldn"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="http://www.instagram.com/kevinkmkldn"><i class="ion-social-instagram-outline"></i></a></li>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
						<div class="footer-section">
						<h4 class="title"><b>KATEGORI</b></h4>
						<ul>
							<li><a href="<?php echo base_url('welcome/sepakbola/');?>">SEPAKBOLA</a></li>
							<li><a href="<?php echo base_url('welcome/basket/');?>">BASKET</a></li>
						</ul>
						<ul>
							<li><a href="<?php echo base_url('welcome/bulutangkis/');?>">BULUTANGKIS</a></li>
							<li><a href="<?php echo base_url('welcome/motogp/');?>">MOTOGP</a></li>
							<li><a href="<?php echo base_url('welcome/voli/');?>">VOLI</a></li>
						</ul>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/scripts.js"></script>

</body>
</html>
<?php endforeach;?>
