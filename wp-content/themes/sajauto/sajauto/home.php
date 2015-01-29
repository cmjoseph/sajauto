<?php
/*
Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>

<section id="intro" role="contentinfo">
	<div class="inner clearfix">
		<div class="left hidden-xs">
			<?php the_content() ?>
		</div>
		<div class="right">
			<ul class="rslides">
				<?php 
				global $post; $myposts = get_posts('numberposts=5&category=1&orderby=rand');
				foreach($myposts as $post) : ?>
				<li>
					<?php if (has_post_thumbnail( $post->ID ) ):
				  	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'desktop' ); ?>
					<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $image[0]; ?>"></a>
					<?php else: ?>
					<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg"></a>
					<?php endif; ?>
					<p class="caption"><?php the_field('marque'); ?>&nbsp;<?php the_title(); ?>&nbsp;<?php the_field('annee'); ?><span class="pull-right"><?php the_field('prix'); ?></span></p>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="mobile">
			<?php the_content() ?>
		</div>
	</div>
</section>

<section id="nouveau">
	<div class="inner">
		<h2><?php echo __('Nouveautés','sajauto')?></h2>
		<div id="owl-example" class="owl-carousel">
			<?php 
			global $post; $myposts = get_posts('numberposts=8&category=1&orderby=post_date');
			foreach($myposts as $post) : ?>
				<div class="box">
					<div class="item">
						<?php if (has_post_thumbnail( $post->ID ) ):
					  	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'mobile' ); ?>
						<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $image[0]; ?>"></a>
						<?php else: ?>
						<a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg"></a>
						<?php endif; ?>
						<div class="sub-info"><?php the_field('marque'); ?>&nbsp;<?php the_title(); ?>&nbsp;<?php the_field('annee'); ?></div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="visit">
	<div class="inner clearfix">
		<div class="left">
			<h2><?php echo __('Visitez notre inventaire','sajauto')?></h2>
			<p><?php echo __("Voyez notre fabuleux inventaire d'autos usagées à prix compétitif. Un vaste inventaire de véhicules de toutes les marques dont Honda, BMW, Audi et plusieurs autres.",'sajauto')?></p>
		</div>
		<div class="right">
			<a href="<?php echo home_url( '/inventaire/' ) ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/inv.jpg"></a>
		</div>
	</div>
</section>

<?php endwhile; ?>
