<?php
/*
Template Name: Service Template
*/
?>
<section id="service">
	<div class="inner">
		<h2><?php echo roots_title(); ?></h2>
		<div class="top-image">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/handshake.jpg" alt="">
		</div>
		<div class="bottom-info clearfix">
		<?php while (have_posts()) : the_post(); ?>
			<?php the_content() ?>
		<?php endwhile; ?>
		</div>
	</div>
</section>

