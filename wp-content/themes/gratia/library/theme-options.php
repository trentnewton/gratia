<?php
/**
 * Initialize the options before anything else.
 */
add_action( 'admin_init', 'custom_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'main_settings',
        'title'       => __( 'Main Settings', 'gratia' ),
      ),
      array(
        'id'          => 'front_page_slider',
        'title'       => __( 'Front Page Slider', 'gratia' ),
      ),
	  array(
        'id'          => 'front_page_subjects',
        'title'       => __( 'Front Page Subjects', 'gratia' ),
      ),
	  array(
        'id'          => 'front_page_contact',
        'title'       => __( 'Front Page Contact', 'gratia' ),
      ),
	  array(
        'id'          => 'front_page_about',
        'title'       => __( 'Front Page About', 'gratia' ),
      )
    ),
    'settings'        => array(
	  array(
        'id'          => 'facebook_page_link',
        'label'       => __( 'Facebook Page Link', 'gratia' ),
        'desc'        => __( 'Enter your Facebook page link here', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'copyright_footer',
        'label'       => __( 'Copyright Footer', 'gratia' ),
        'desc'        => __( 'Enter your copyright here, e.g. (&copy; 2020 Company Name Inc). Will override the current one that\'s generated.', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'main_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_text1',
        'label'       => __( 'Slider Text 1', 'gratia' ),
        'desc'        => __( 'Enter text for the first slider, fallback is the \'Tagline\' under General Settings', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_image1',
        'label'       => __( 'Slider Image 1', 'gratia' ),
        'desc'        => __( 'Upload an image for the first slider, fallback is the default image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_text2',
        'label'       => __( 'Slider Text 2', 'gratia' ),
        'desc'        => __( 'Enter text for the second slider (left blank removes whole slide)', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'slider_image2',
        'label'       => __( 'Slider Image 2', 'gratia' ),
        'desc'        => __( 'Upload an image for the second slider, fallback is the default image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_text3',
        'label'       => __( 'Slider Text 3', 'gratia' ),
        'desc'        => __( 'Enter text for the third slider (left blank removes whole slide)', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_image3',
        'label'       => __( 'Slider Image 3', 'gratia' ),
        'desc'        => __( 'Upload an image for the third slider, fallback is the default image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_text4',
        'label'       => __( 'Slider Text 4', 'gratia' ),
        'desc'        => __( 'Enter text for the fourth slider (left blank removes whole slide)', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_image4',
        'label'       => __( 'Slider Image 4', 'gratia' ),
        'desc'        => __( 'Upload an image for the fourth slider, fallback is the default image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_text5',
        'label'       => __( 'Slider Text 5', 'gratia' ),
        'desc'        => __( 'Enter text for the fifth slider (left blank removes whole slide)', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_image5',
        'label'       => __( 'Slider Image 5', 'gratia' ),
        'desc'        => __( 'Upload an image for the fifth slider, fallback is the default image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_text6',
        'label'       => __( 'Slider Text 6', 'gratia' ),
        'desc'        => __( 'Enter text for the sixth slider (left blank removes whole slide)', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'slider_image6',
        'label'       => __( 'Slider Image 6', 'gratia' ),
        'desc'        => __( 'Upload an image for the sixth slider, fallback is the default image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'subject_section_title',
        'label'       => __( 'Subject Section Title', 'gratia' ),
        'desc'        => __( 'Enter the title for the subjects section', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_subjects',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'first_subject_image',
        'label'       => __( 'First Subject Image', 'gratia' ),
        'desc'        => __( 'Upload image for the first subject image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_subjects',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'second_subject_image',
        'label'       => __( 'Second Subject Image', 'gratia' ),
        'desc'        => __( 'Upload image for the second subject image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_subjects',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'third_subject_image',
        'label'       => __( 'Third Subject Image', 'gratia' ),
        'desc'        => __( 'Upload image for the third subject image', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_subjects',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'subject_section_text',
        'label'       => __( 'Subject Section Text', 'gratia' ),
        'desc'        => __( 'Enter the text for the subjects section (left blank removes whole section)', 'gratia' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'front_page_subjects',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'contact_section_title',
        'label'       => __( 'Contact Section Title', 'gratia' ),
        'desc'        => __( 'Enter the title for the contact section (left blank removes whole section)', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'vcard_name',
        'label'       => __( 'Vcard Name', 'gratia' ),
        'desc'        => __( 'Show the company name in the vcard', 'gratia' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'front_page_contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'vcard_phone',
        'label'       => __( 'Vcard Phone', 'gratia' ),
        'desc'        => __( 'Enter the phone number for the vcard', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'vcard_address',
        'label'       => __( 'Vcard Address', 'gratia' ),
        'desc'        => __( 'Enter the address for the vcard', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'vcard_web',
        'label'       => __( 'Vcard Web Address', 'gratia' ),
        'desc'        => __( 'Show the company web address in the vcard', 'gratia' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'front_page_contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'vcard_email',
        'label'       => __( 'Vcard Email', 'gratia' ),
        'desc'        => __( 'Show the admin email address link in the vcard', 'gratia' ),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'front_page_contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'about_us_section_title',
        'label'       => __( 'About Us Section Title', 'gratia' ),
        'desc'        => __( 'Enter the title for the about us section (left blank removes whole section)', 'gratia' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'front_page_about',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'first_person_about_us_image',
        'label'       => __( 'First Person Image', 'gratia' ),
        'desc'        => __( 'Upload image for the first person in the about us section', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_about',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'first_person_about_us_text',
        'label'       => __( 'First Person Text', 'gratia' ),
        'desc'        => __( 'Enter the text for the first person in the about us section (left blank removes section)', 'gratia' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'front_page_about',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'second_person_about_us_image',
        'label'       => __( 'Second Person Image', 'gratia' ),
        'desc'        => __( 'Upload image for the second person in the about us section', 'gratia' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'front_page_about',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'second_person_about_us_text',
        'label'       => __( 'Second Person Text', 'gratia' ),
        'desc'        => __( 'Enter the text for the second person in the about us section (left blank removes section)', 'gratia' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'front_page_about',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}