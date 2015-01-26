<header class="banner navbar navbar-static-top" role="banner">
	<div class="container">
		<div class="navbar-header logo">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
		</div>
		<div class="slogan">
			<h1><?php echo __('Service Rapide et vente garantie','sajauto')?></h1>
			<a class="number" href="tel:(514) 963-6233"><h1>(514) 963-6233</h1></a>
		</div>
	</div>
	<div class="menu">
		<div class="container">
			<nav class="collapse navbar-collapse" role="navigation">
				<?php
				if (has_nav_menu('primary_navigation')) :
				  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
				endif;
				?>
			</nav>
		</div>
	</div>
</header>
