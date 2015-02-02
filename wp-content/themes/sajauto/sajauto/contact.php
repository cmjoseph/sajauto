<?php
/*
Template Name: Contact Template
*/
?>

<section id="contact">
	<div class="inner">
		<h2><?php echo __('Pour nous joindre','sajauto')?></h2>
		<div class="top">
			<a class="address" target="_blank" href="https://goo.gl/maps/NxVWZ"><h3>969-c boulevard Terrebonne, Terrebonne j6w 5h8</h3></a>
			<div id="map-canvas"></div>
		</div>
		<div class="bottom">
			<h2><?php echo __('Pour vendre ou acheter un véhicule ou informations, contactez-nous!','sajauto')?></h2>
			<div class="form">
				<?php dynamic_sidebar('Contact Form'); ?>
			</div>
		</div>
	</div>
</section>

