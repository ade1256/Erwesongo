<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Erwesongo
 */

?>

<div class="col-md-5" id="post-<?php the_ID(); ?>">
	<div class="post-card">
		<!-- THUMBNAIL -->
		<div class="img-card" style="background:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(),'post-thumbnail'); ?>);background-size:cover;"></div>
		<!-- END THUMBNAIL -->
		<div class="desc-card">

			<a href="<?php the_permalink();?>"><?php the_title();?></a>
			<span class="fa fa-calendar fa-lg"></span>
			<p class="tanggal"><?php the_time('j F Y') ?></p>
		</div>

		<div class="hover-card">
			<a href="<?php the_permalink();?>"><?php the_excerpt();?></a>
			<div class="hover-tanggal">
				<span class="fa fa-calendar fa-lg"></span>
				<p class="tanggal"><?php the_time('j F Y') ?></p>
				<a href="<?php the_permalink();?>" class="read-more">Baca</a>
			</div>
		</div>
	</div>
</div>