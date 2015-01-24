<?php
/*
Template Name: Contact Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('sajauto/page', 'header'); ?>
  <?php get_template_part('sajauto/content', 'page'); ?>
<?php endwhile; ?>
