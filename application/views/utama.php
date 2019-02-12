<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Sportly - Portal Berita Olahraga</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">

	<link rel="apple-touch-icon" href="<?php echo base_url();?>assets/dasbor/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/dasbor/images/favicon.png">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="<?php echo base_url();?>assets/utama/common-css/bootstrap.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/utama/common-css/swiper.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/utama/common-css/ionicons.css" rel="stylesheet">


	<link href="<?php echo base_url();?>assets/utama/front-page-category/css/styles.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/utama/front-page-category/css/responsive.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="http://localhost/sportly" class="logo"><img src="<?php echo base_url();?>assets/dasbor/images/logo.png" alt="Logo Image"></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="http://localhost/sportly">Home</a></li>
				<li><a href="http://localhost/sportly/login/masuk">Login</a></li>
			</ul><!-- main-menu -->

			<div class="src-area">
				<form action="<?php echo base_url('welcome/mencari/');?>" method="post">
					<button class="src-btn" type="submit"><i class="ion-ios-search-strong" ></i></button>
					<input class="src-input" name="katakunci" type="text" placeholder="Masukkan kata kunci...">
				</form>
			</div>

		</div><!-- conatiner -->
	</header>

	<div class="main-slider">
		<div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
			data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
			data-swiper-breakpoints="true" data-swiper-loop="true" >
			<div class="swiper-wrapper">

				<div class="swiper-slide">
					<a class="slider-category" href="<?php echo base_url('welcome/sepakbola/');?>">
						<div class="blog-image"><img src="https://3.bp.blogspot.com/-KZPQjWPzTXY/V9Dji5GL47I/AAAAAAAAAbg/Phocz5WKBwwBJdP14Z6NiZ025DEaiqSHgCLcB/s1600/985afc3830f6726e4dbd85a02b34f3cc5642b8963fbdb3f7ba530bde2ee6ff3b_large.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>SEPAKBOLA</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide">
					<a class="slider-category" href="<?php echo base_url('welcome/basket/');?>">
						<div class="blog-image"><img src="https://farm4.static.flickr.com/3867/33316655466_ccf977e6bc_b.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>BASKET</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide">
					<a class="slider-category" href="<?php echo base_url('welcome/bulutangkis/');?>">
						<div class="blog-image"><img src="http://1.bp.blogspot.com/-YaVxRkrTJqU/VUduhtZvcGI/AAAAAAAAACc/G86a-0OA3Co/s1600/ananda_-pertandingan-bulu-tangkis-djarum-sirnas-gor-rudy-resnawan-banjarbaru4.jpg"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>BULUTANGKIS</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide">
					<a class="slider-category" href="<?php echo base_url('welcome/motogp/');?>">
						<div class="blog-image"><img src="https://cdns.klimg.com/kapanlagi.com/wallpaper/img/ducati-motogp.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>MOTOGP</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

				<div class="swiper-slide">
					<a class="slider-category"href="<?php echo base_url('welcome/voli/');?>">
						<div class="blog-image"><img src="https://tribratanews.jateng.polri.go.id/wp-content/uploads/2017/07/20170730_191337-1024x768.jpg" alt="Blog Image"></div>

						<div class="category">
							<div class="display-table center-text">
								<div class="display-table-cell">
									<h3><b>VOLI</b></h3>
								</div>
							</div>
						</div>

					</a>
				</div><!-- swiper-slide -->

			</div><!-- swiper-wrapper -->

		</div><!-- swiper-container -->

	</div><!-- slider -->


	<section class="blog-area section">
		<div class="container">
			<div class="row">

				<?php foreach($artikel->result() as $row): ?>

				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><a href="<?php echo base_url('welcome/detail') ?>/<?php echo $row->idartikel;?>" class="logo"><img src="<?php echo $row->gambar; ?>" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="<?php echo base_url();?>assets/utama/images/avatar.png" alt="Profile Image"></a>

							<div class="blog-info">

								<h4 class="title"><a href="<?php echo base_url('welcome/detail') ?>/<?php echo $row->idartikel;?>"><b><?php echo $row->judul; ?></b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><?php echo $row->tanggal; ?></a></li>
									<li><a href="#">Oleh : <?php echo $row->penulis; ?></a></li>
								</ul>
							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->

				<?php endforeach; ?>
	</section><!-- section -->


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

	<script src="<?php echo base_url();?>assets/utama/common-js/jquery-3.1.1.min.js"></script>

	<script src="<?php echo base_url();?>assets/utama/common-js/tether.min.js"></script>

	<script src="<?php echo base_url();?>assets/utama/common-js/bootstrap.js"></script>

	<script src="<?php echo base_url();?>assets/utama/common-js/swiper.js"></script>

	<script src="<?php echo base_url();?>assets/utama/common-js/scripts.js"></script>

</body>
</html>
