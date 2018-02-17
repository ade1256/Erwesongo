<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<span class="garis"></span>
				<h4>BERITA</h4>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs nav-tabs-tengah">
					<li class="active"><a data-toggle="tab" href="#terbaru">Terbaru</a></li>
					<li><a data-toggle="tab" href="#hasil-rapat">Hasil Rapat</a></li>
					<li><a data-toggle="tab" href="#laporan-keuangan">Laporan Keuangan</a></li>
					<li><a data-toggle="tab" href="#pengumuman">Pengumuman</a></li>
					
				</ul>
			</div>
		</div>
		<div class="tab-content">
			<div id="terbaru" class="tab-pane fade in active">
				<div class="row">
					<?php 
					$terbaru = array(
						'post_type' => 'post',
						// 'posts_per_page' => -1, //Untuk munculin semua post
						// 'category_name' => 'Popular'
						// 'orderby' => 'meta_value_num'
						// 'meta_key' => 'post_views_count',
						// 'orderby' => 'meta_value_num',
						// 'order' => 'DESC',
						// 'posts_per_page' => 1
					);
					$the_query = new WP_Query( $terbaru ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>			
							<div class="col-md-4" id="post-<?php the_ID(); ?>">
								<div class="post-card">
									<!-- THUMBNAIL -->
									<div class="img-card" style="background:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(),'post-thumbnail'); ?>);background-size:cover;"></div>
									<!-- END THUMBNAIL -->
									<div class="desc-card">

										<a href="<?php the_permalink();?>"><?php the_title();?></a>
										<span class="fa fa-calendar fa-lg"></span>
										<p class="tanggal"><?php the_time('j F Y')?></p>
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


						<?php endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->
						
						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div id="hasil-rapat" class="tab-pane fade">
				<div class="row">

					<?php 

					$trending = array(
						'post_type' => 'post',
						'category_name' => 'hasil-rapat',
						'posts_per_page' => 8,
						'order' => 'DESC'

					);


					// the query
					$the_trending = new WP_Query( $trending ); ?>

					<?php if ( $the_trending->have_posts() ) : ?>

						<!-- pagination here -->

						<!-- the loop -->
						<?php while ( $the_trending->have_posts() ) : $the_trending->the_post(); ?>



							<div class="col-md-4" id="post-<?php the_ID(); ?>">
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


						<?php endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

				</div>
			</div>
			<div id="laporan-keuangan" class="tab-pane fade">
				<div class="row">
					<?php 
					$laporan_keuangan = array(
						'post_type' => 'post',
						'category_name' => 'laporan-keuangan',
						'posts_per_page' => 8, //Untuk munculin 8 post
						'orderby' => 'meta_value_num',
						'posts_per_page' => 8
					);
					$the_query = new WP_Query( $laporan_keuangan ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>			
							<div class="col-md-4" id="post-<?php the_ID(); ?>">
								<div class="post-card">
									<!-- THUMBNAIL -->
									<div class="img-card" style="background:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(),'post-thumbnail'); ?>);background-size:cover;"></div>
									<!-- END THUMBNAIL -->
									<div class="desc-card">

										<a href="<?php the_permalink();?>"><?php the_title();?></a>
										<span class="fa fa-calendar fa-lg"></span>
										<p class="tanggal"><?php the_time('j F Y')?></p>
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


						<?php endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Tidak ada laporan keuangan.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
			<div id="pengumuman" class="tab-pane fade">
				<div class="row">
					<?php 
					$pengumuman = array(
						'post_type' => 'post',
						'category_name' => 'pengumuman',
						'posts_per_page' => 8, //Untuk munculin 8 post
						'orderby' => 'meta_value_num',
						'posts_per_page' => 8
					);
					$the_query = new WP_Query( $pengumuman ); ?>
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>			
							<div class="col-md-4" id="post-<?php the_ID(); ?>">
								<div class="post-card">
									<!-- THUMBNAIL -->
									<div class="img-card" style="background:url(<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(),'post-thumbnail'); ?>);background-size:cover;"></div>
									<!-- END THUMBNAIL -->
									<div class="desc-card">

										<a href="<?php the_permalink();?>"><?php the_title();?></a>
										<span class="fa fa-calendar fa-lg"></span>
										<p class="tanggal"><?php the_time('j F Y')?></p>
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


						<?php endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php esc_html_e( 'Tidak ada pengumuman.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- <nav class="halaman">
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
					<a href="#" aria-label="Previous">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
			</ul>
		</nav> -->
	</div>

</div>
