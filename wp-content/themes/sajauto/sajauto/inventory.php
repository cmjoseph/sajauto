<?php
/*
Template Name: Inventory Template
*/
?>
<section id="cars">
	<div class="inner clearfix">
		<h2><?php echo roots_title(); ?></h2>
		<div class="vehicules">
			<?php while (have_posts()) : the_post(); ?>
				<?php 
				$imageMain = get_field('image_principale_du_vehicule');
				if( !empty($imageMain) ): ?>
				<div class="car">
					<a class="box" href="<?php the_permalink(); ?>">
						<div class="cover"><span class="icon-<?php the_field('marque'); ?>"></span></div>
						<div class="car-pic clearfix">
							<?php if( get_field('vehicule_vendu') ) : ?>
							<img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
							<?php endif; ?>
							<img class="img-responsive" src="<?php echo $imageMain['url']; ?>" alt="<?php echo $imageMain['alt']; ?>" />
						</div>
					  	<div class="caption">
					  		<h4><?php the_field('marque'); ?>&nbsp;<?php the_title(); ?>&nbsp;<?php the_field('annee'); ?></h4>
							<p><?php the_field('prix'); ?></p>
					  	</div>
					</a>
				</div>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>
