<?php


function register_my_styles(){

	wp_deregister_style( 'contact-form-7' );

	wp_register_style('app', get_template_directory_uri()."/stylesheets/app.css",'screen');

  wp_enqueue_style(array('app'));
}

add_action('wp_print_styles', 'register_my_styles');

?>