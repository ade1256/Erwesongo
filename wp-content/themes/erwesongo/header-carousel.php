
<!-- ------- CAROUSEL HEADER -->

<?php 

$header_gambar_1 = get_field('header_gambar_1');
$header_judul_1 = get_field('header_judul_1');
$header_paragraf_1 = get_field('header_paragraf_1');

$header_gambar_2 = get_field('header_gambar_2');
$header_judul_2 = get_field('header_judul_2');
$header_paragraf_2 = get_field('header_paragraf_2');

$header_gambar_3 = get_field('header_gambar_3');
$header_judul_3 = get_field('header_judul_3');
$header_paragraf_3 = get_field('header_paragraf_3');

?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img  src="<?php echo $header_gambar_1;?>" alt="First slide"/>
			<div class="carousel-caption">
				<h3><?php echo $header_judul_1;?></h3>
				<p><?php echo $header_paragraf_1;?></p>
			</div>
		</div>
		<div class="item">
			<img  src="<?php echo $header_gambar_2;?>" alt="First slide"/>
			<div class="carousel-caption">
				<h3><?php echo $header_judul_2;?></h3>
				<p><?php echo $header_paragraf_2;?></p>
			</div>
		</div>
		<div class="item">
			<img  src="<?php echo $header_gambar_3;?>" alt="First slide"/>
			<div class="carousel-caption">
				<h3><?php echo $header_judul_3;?></h3>
				<p><?php echo $header_paragraf_3;?></p>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="fa fa-angle-left"></span></a><a class="right carousel-control"
		href="#carousel-example-generic" data-slide="next"><span class="fa fa-angle-right">
		</span></a>
	</div>


							<!-- ------- END CAROUSEL HEADER -->