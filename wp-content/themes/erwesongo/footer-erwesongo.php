</div><!-- #content -->

<?php 
$facebook = get_field('facebook',75);
$google_plus = get_field('google_plus',75);
$youtube = get_field('youtube',75);
?>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="logo-footer">
					<img src="<?php echo get_template_directory_uri();?>/assets/img/logo_erwesongo.png"/>
				</div>
				<div class="menu-footer">
					<ul>
						<li><a href="<?php echo home_url('');?>">Tentang Kami</a></li>
						<li><a href="<?php echo get_template_directory_uri();?>">Kontak</a></li>
						<li><a href="<?php echo get_template_directory_uri();?>">Terms of Service</a></li>
						<li><a href="<?php echo get_template_directory_uri();?>">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<div class="social-media">
				<a href="<?php echo $youtube;?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/youtube.png"/></a>
				<a href="<?php echo $google_plus;?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/google-plus.png"/></a>
				<a href="<?php echo $facebook;?>"><img src="<?php echo get_template_directory_uri();?>/assets/img/facebook.png"/></a>
			</div>
			<span class="footer-garis"></span>
			<p>&copy; 2017. All right reserved by <a href="<?php echo home_url('');?>">Erwesongo</a></p>

		</div>
	</div>
</div>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>