<?php
/*
Template Name: Inventory Template
*/
?>
<section id="cars">
	<h2><?php echo roots_title(); ?></h2>
	<div class="vehicules clearfix">
		<?php while (have_posts()) : the_post(); ?>
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
			  <div class="car">
				<a class="box" href="<?php the_permalink(); ?>">
					<div class="cover"></div>
					<div class="car-pic clearfix">
						<img class="img-responsive" src="<?php echo $image[0]; ?>" alt="">
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
</section>
