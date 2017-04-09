<?php
	function prefix_customizer_register( $wp_customize ) {
    $wp_customize->remove_control('site_icon');
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->add_panel( 'panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Example Panel', 'textdomain' ),
        'description' => __( 'Description of what this panel does.', 'textdomain' ),
    ) );

    $wp_customize->add_section( 'section_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Example Section', 'textdomain' ),
        'description' => '',
        // 'panel' => 'panel_id',
    ) );
    $wp_customize->add_setting( 'url_field_id', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => 'postMessage',
    'sanitize_callback' => 'esc_url',
) );
$wp_customize->add_control( 'url_field_id', array(
    'type' => 'url',
    'priority' => 10,
    'section' => 'section_id',
    'label' => __( 'URL Field', 'textdomain' ),
    'description' => '',
) );
}
add_action( 'customize_register', 'prefix_customizer_register' );

add_action( 'customize_preview_init', wp_enqueue_script( 
          'mytheme-themecustomizer',            //Give the script an ID
          get_template_directory_uri() . '/js/theme-customizer.js',//Point to file
          array( 'jquery','customize-preview' ),    //Define dependencies
          '',                       //Define a version (optional) 
          true                      //Put script in footer?
    ));

// if(wp_script_is( 'mytheme-themecustomizer', $list = 'enqueued' ))
//     echo 'a';
// else
//     echo 'b';

// function mytheme_customizer_live_preview(){
//     // print get_template_directory_uri() . '/js/theme-customizer.js';
//     wp_enqueue_script( 
//           'mytheme-themecustomizer',            //Give the script an ID
//           get_template_directory_uri() . '/js/theme-customizer.js',//Point to file
//           array( 'jquery','customize-preview' ),    //Define dependencies
//           '',                       //Define a version (optional) 
//           true                      //Put script in footer?
//     );
// }

	// $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
