<?php
/*
Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section id="intro" role="contentinfo">
	<div class="inner clearfix">
		<div class="left">
			<?php the_content() ?>
		</div>
		<div class="right">
			<ul class="rslides">
				<li>
					<img src="http://placehold.it/800x400/CBFF08/000000">
					<p class="caption">First Caption</p>
				</li>
				<li>
					<img src="http://placehold.it/800x400/1de5f7/000000">
					<p class="caption">Second Caption</p>
				</li>
				<li>
					<img src="http://placehold.it/800x400">
					<p class="caption">Third Caption</p>
				</li>
			</ul>
		</div>
	</div>
</section>

<section id="nouveau">
	<div class="inner">
		<h2><?php echo __('Nouveautés')?></h2>
		<div id="owl-example" class="owl-carousel">
	  		<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/CBFF08/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
		  	<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/CBFF08/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
		  	<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/CBFF08/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
		  	<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/CBFF08/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
		  	<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/1de5f7/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
		  	<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/1de5f7/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
		  	<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/1de5f7/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
			<div class="box">
				<div class="item">
					<img src="http://placehold.it/280x140/1de5f7/000000">
					<div class="sub-info">
						Car
					</div>
				</div>
		  	</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
