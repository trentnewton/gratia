<?php

if ( ! function_exists( 'gratia_theme_support' ) ) :
function gratia_theme_support() {
	// Add language support
	load_theme_textdomain( 'gratia', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size(150, 150, false);

	// rss thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

	function gratia_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'gratia' ), max( $paged, $page ) );
	}

	return $title;
	}

	add_filter( 'wp_title', 'gratia_title', 10, 2 );

	if ( ! isset( $content_width ) ) {
		$content_width = 970;
	}

	add_action('wp_head', 'add_header_styles');

	function add_header_styles() {
	  if ( is_admin_bar_showing() ) {?>
	    <style>
	    @media screen and (max-width: 600px){
	      #wpadminbar {position: fixed !important; }
	    }
	    </style>
	  <?php }
	}

	function limit_words($string, $word_limit) {
 
	// creates an array of words from $string (this will be our excerpt)
	// explode divides the excerpt up by using a space character
 
	$words = explode(' ', $string);
 
	// this next bit chops the $words array and sticks it back together
	// starting at the first word '0' and ending at the $word_limit
	// the $word_limit which is passed in the function will be the number
	// of words we want to use
	// implode glues the chopped up array back together using a space character
 
	return implode(' ', array_slice($words, 0, $word_limit));
 
	}

	function searchfilter($query) { if ($query->is_search) { $query->set('post_type',array('post')); }
	return $query; }
	add_filter('pre_get_posts','searchfilter');

	}

add_action( 'after_setup_theme', 'gratia_theme_support' );
endif;
?>