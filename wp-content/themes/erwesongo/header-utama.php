<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Erwesongo
 */

?> 
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<!-- STICKY TOP -->
	<div class="sticky-top">
		<div class="container">
			<div class="col-md-12">
				<span class="fa fa-phone fa-lg"></span>
				<p>+6285786860530</p>
				<span class="fa fa-envelope fa-lg"></span>
				<p>erwesongo@gmail.com</p>
			

				<div class="kanan">
					
					<a href="wp-login">Masuk</a>
					<span class="fa fa-sign-in fa-lg"></span>
					
					<!-- <a href="daftar.html">Daftar</a>
					<span class="fa fa-upload fa-lg"></span> -->
				</div>

			</div>
		</div>
	</div>
	<!-- ---- -->

	<!-- -- NAVBAR -- -->
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/logo_erwesongo.png"/>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
						'menu_class' => 'nav navbar-nav navbar-right',
						'container_class' => 'collapse navbar-collapse'
						)
						) ;?>
				<!-- <ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.html">Home</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengurus <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Struktur Pengurus</a></li>
							<li><a href="#">Agenda Harian</a></li>
							<li><a href="#">Keuangan</a></li>
							<li><a href="#">Data Penduduk</a></li>
							
						</ul>
					</li>
					<li><a href="tentang-kami.html">Tentang Kami</a></li>
					<li><a href="#">Hubungi Kami</a></li>
					<form class="navbar-form navbar-right">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</ul> -->

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<!-- -- END NAVBAR -- -->


	<!-- ------- CAROUSEL HEADER -->


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img  src="<?php echo get_template_directory_uri();?>/assets/img/fabian-irsara-92113.jpg" alt="First slide"/>
				<div class="carousel-caption">
					<h3>
						Erwesongo</h3>
						<p>
							
							Sebuah website perumahan Griya Satriya yang memudahkan warga mendapatkan informasi secara cepat</p>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/fabian-irsara-92113.jpg" alt="Second slide">
						<div class="carousel-caption">
							<h3>
								Second slide</h3>
								<p>
									Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
								</div>
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/fabian-irsara-92113.jpg" alt="Third slide">
								<div class="carousel-caption">
									<h3>
										Third slide</h3>
										<p>
											Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
										</div>
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
									<span class="fa fa-angle-left"></span></a><a class="right carousel-control"
									href="#carousel-example-generic" data-slide="next"><span class="fa fa-angle-right">
								</span></a>
							</div>


							<!-- ------- END CAROUSEL HEADER -->

						</body>
