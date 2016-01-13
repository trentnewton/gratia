<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

if (!function_exists('gratia_scripts')) :
  function gratia_scripts() {

    //deregister styles
    wp_deregister_style( 'contact-form-7' );

    // Enqueue the main stylesheet
    wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/css/app.css' );

    // Deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    wp_deregister_script( 'contact-form-7' );

    // do not load the file: wp-embed.min.js (used since WordPress 4.4)

    wp_dequeue_script( 'wp-embed' );

    // Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
    //wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

    // If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
    // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
    wp_register_script( 'app-js', get_template_directory_uri()."/assets/js/min/app-min.js", array(), '5.5.1', true );

    // Enqueue all registered scripts
    wp_enqueue_script('app-js');

  }

  add_action( 'wp_enqueue_scripts', 'gratia_scripts' );
endif;

?>