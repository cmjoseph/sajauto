<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);
 
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
function my_acf_json_save_point( $path ) {
	// update path
	$path = get_stylesheet_directory() . '/acf_json';
	// return
	return $path;
}

add_filter( 'gettext', 'change_post_to_article' );
add_filter( 'ngettext', 'change_post_to_article' );

function change_post_to_article( $translated ) {  
    $translated = str_replace( 'Post', 'Véhicule', $translated );
    $translated = str_replace( 'post', 'véhicule', $translated );
    return $translated;
}

function replace_admin_menu_icons_css() {
    ?>
    <style>
       #adminmenu .dashicons-admin-post:before, .dashicons-format-standard:before {
		    content: '\f311';
		}
    </style>
    <?php
}

add_action( 'admin_head', 'replace_admin_menu_icons_css' );



