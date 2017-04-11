<?php


function contact_customizer_register( $wp_customize ) {
    $wp_customize->add_section( 'contacts_section', array(
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Contacts', 'textdomain' ),
        'description' => '',
    ) );
    $wp_customize->add_setting( 'City', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        
        ) );
    $wp_customize->add_control( 'City', array(
        'type' => 'text',
        'section' => 'contacts_section',
        'label' => __( 'City', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'Street', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',        
        ) );
    $wp_customize->add_control( 'Street', array(
        'type' => 'text',
        'section' => 'contacts_section',
        'label' => __( 'Street', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'PHONE', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        
        ) );
    $wp_customize->add_control( 'PHONE', array(
        'section' => 'contacts_section',
        'label' => __( 'Phone', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'EMAIL', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        ) );
    $wp_customize->add_control( 'EMAIL', array(
        'section' => 'contacts_section',
        'label' => __( 'Email', 'textdomain'),
        'description' => '',
    ) );








}
add_action( 'customize_register', 'contact_customizer_register' );