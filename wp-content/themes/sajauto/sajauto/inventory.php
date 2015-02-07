<?php
/*
Template Name: Inventory Template
*/
?>


<h2><?php echo roots_title(); ?></h2>
<?php dynamic_sidebar('search-car'); ?>
<div class="vehicules">
	<?php while (have_posts()) : the_post();
		$marque = strtolower(get_field('marque')); ?>
		<div class="car">
			<a class="box" href="<?php the_permalink(); ?>">
				<div class="cover"><span class="icon-<?php echo $marque; ?>"></span></div>
				<?php 
				$imageMain = get_field('image_principale_du_vehicule');
				if( !empty($imageMain) ): ?>
				<div class="car-pic clearfix">
					<?php if( get_field('vehicule_vendu') ) : ?>
					<img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
					<?php endif; ?>
					<img class="img-responsive" src="<?php echo $imageMain['url']; ?>" alt="<?php echo $imageMain['alt']; ?>" />
				</div>
				<?php else: ?>
				<div class="car-pic clearfix">
					<?php if( get_field('vehicule_vendu') ) : ?>
					<img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
					<?php endif; ?>
					<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg">
				</div>
				<?php endif; ?>
			  	<div class="caption">
			  		<h4><?php the_field('marque'); ?>&nbsp;<?php the_title(); ?>&nbsp;<?php the_field('annee'); ?></h4>
					<p><?php the_field('prix'); ?></p>
			  	</div>
			</a>
		</div>
	<?php endwhile; ?>
</div>

