<?php


function queue_scripts() {

	// Remove Unnecessary Code
	// http://www.themelab.com/2010/07/11/remove-code-wordpress-header/
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link');

	if(!wp_script_is('jquery')) wp_enqueue_script("jquery");

	$themejs = get_template_directory_uri() . '/js/marty.js';
	wp_register_script('themejs',$themejs);
	wp_enqueue_script( 'themejs',array('jquery'));

	$fontscss = get_template_directory_uri() . '/fonts/fonts.css';
	wp_register_style('fontscss',$fontscss);
	wp_enqueue_style( 'fontscss');

	$defaultstyle = get_bloginfo('stylesheet_url'); 
	wp_register_style('defaultstyle',$defaultstyle);
	wp_enqueue_style( 'defaultstyle');

}

add_action('wp_enqueue_scripts', 'queue_scripts');

// Pagination
// http://sltaylor.co.uk/blog/better-wordpress-pagination/

function pagination( $query, $baseURL = '' ) {
	if ( ! $baseURL ) $baseURL = get_bloginfo( 'url' ) . '/';
	$page = $query->query_vars["paged"];
	if ( !$page ) $page = 1;
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";
	// Only necessary if there's more posts than posts-per-page
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {
		echo '<ul class="paging">';
		// Previous link?
		if ( $page > 1 ) {
			echo '<li class="previous"><a href="'.$baseURL.'page/'.($page-1).'/'.$qs.'">&larr;</a></li>';
		}
		// Loop through pages
		for ( $i=1; $i <= $query->max_num_pages; $i++ ) {
			// Current page or linked page?
			if ( $i == $page ) {
				echo '<li class="active">'.$i.'</li>';
			} else {
				echo '<li><a href="'.$baseURL.'page/'.$i.'/'.$qs.'">'.$i.'</a></li>';
			}
		}
		// Next link?
		if ( $page < $query->max_num_pages ) {
			echo '<li><a href="'.$baseURL.'page/'.($page+1).'/'.$qs.'">&rarr; </a></li>';
		}
		echo '</ul>';
	}
}


// Featured Images / Post Thumbnails
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
	   // set_post_thumbnail_size( 125 ); // Normal post thumbnails
	  //  add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size
} 


?>