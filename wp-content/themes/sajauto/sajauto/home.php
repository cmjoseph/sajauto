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
			<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.sajauto.com%2F&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=1446068852272739" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
		</div>
		<div class="right">
			<ul class="rslides">
				<?php 
				global $post; $myposts = get_posts('numberposts=-1&category=1&orderby=rand');
				foreach($myposts as $post) : ?>
				<li>
					<?php 
					$imageMain = get_field('image_principale_du_vehicule');
					if( !empty($imageMain) ): ?>
					<a href="<?php the_permalink(); ?>">
						<?php if( get_field('vehicule_vendu') ) : ?>
						<img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
						<?php endif; ?>
						<img class="img-responsive" src="<?php echo $imageMain['url']; ?>" alt="<?php echo $imageMain['alt']; ?>" />
					</a>
					<?php else: ?>
					<a href="<?php the_permalink(); ?>">
						<?php if( get_field('vehicule_vendu') ) : ?>
						<img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
						<?php endif; ?>
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg">
					</a>
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
	<div class="inner clearfix">
		<h2><?php echo __('Nouveautés','sajauto')?></h2>
		<div id="owl-example" class="owl-carousel">
			<?php 
			global $post; $myposts = get_posts('numberposts=8&category=1&orderby=post_date');
			foreach($myposts as $post) : ?>
				<div class="box">
					<div class="item">
						<?php 
						$imageMain = get_field('image_principale_du_vehicule');
						if( !empty($imageMain) ): ?>
						<a href="<?php the_permalink(); ?>">
							<?php if( get_field('vehicule_vendu') ) : ?>
							<img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
							<?php endif; ?>
							<img class="img-responsive" src="<?php echo $imageMain['url']; ?>" alt="<?php echo $imageMain['alt']; ?>" />
						</a>
						<?php else: ?>
						<a href="<?php the_permalink(); ?>">
							<?php if( get_field('vehicule_vendu') ) : ?>
							<img class="vendu" src="<?php echo get_template_directory_uri(); ?>/assets/img/vendu.png" alt="">
							<?php endif; ?>
							<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg">
						</a>
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
