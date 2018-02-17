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
$email = get_field('email',75);
$nohp = get_field('nohp',75);
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
				<!-- <p>+6285786860530</p> -->
				<p><?php echo $nohp; ?></p>
				<span class="fa fa-envelope fa-lg"></span>
				<p><?php echo $email; ?></p>
			

				<div class="kanan">
					
					<a href="<?php echo home_url();?>/wp-login.php">Masuk</a>
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
				<a class="navbar-brand" href="<?php echo home_url();?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/logo_erwesongo.png"/>
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			

				<?php wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
						'menu_class' => 'nav navbar-nav navbar-right',
						'container_class' => 'collapse navbar-collapse',
						'container_id' => 'bs-example-navbar-collapse-1'
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

		
		</div><!-- /.container-fluid -->
	</nav>
	<!-- -- END NAVBAR -- -->



				
