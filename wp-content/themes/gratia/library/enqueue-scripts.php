<?php

if (!function_exists('gratia_scripts')) :
  function gratia_scripts() {

    // Deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    wp_deregister_script( 'contact-form-7' );

    // Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
    wp_register_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', false );

    // CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2', false );

    // Self hosted jQuery placed in the footer. (Comment the script above and uncomment the script below if you want to switch).
    //wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.1.3', true );

    // If you'd like to cherry-pick the foundation components you need in your project, head over to Gruntfile.js and see lines 67-88
    // It's a good idea to do this, performance-wise. No need to load everything if you're just going to use the grid anyway, you know :)
    wp_register_script( 'app', get_template_directory_uri()."/js/min/app-min.js", array('jquery'), '5.5.1', true );

    // Enqueue all registered scripts
    wp_enqueue_script('modernizr');
    wp_enqueue_script('jquery');
    wp_enqueue_script('app');

  }

  add_action( 'wp_enqueue_scripts', 'gratia_scripts' );
endif;

?>