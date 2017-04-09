<?php

function open_customizer_register( $wp_customize ) {
    $wp_customize->add_section( 'open_section', array(
        // 'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Opening Hour', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'MONDAY', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        
        ) );
    $wp_customize->add_control( 'MONDAY', array(
        // 'priority' => 10,
        'type' => 'text',
        'section' => 'open_section',
        'label' => __( 'MONDAY', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'TUEFRI', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        
        ) );
    $wp_customize->add_control( 'TUEFRI', array(
        // 'priority' => 10,
        'type' => 'text',
        'section' => 'open_section',
        'label' => __( 'TUE-FRI', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'SATSUN', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        
        ) );
    $wp_customize->add_control( 'SATSUN', array(
        // 'priority' => 10,
        'type' => 'text',
        'section' => 'open_section',
        'label' => __( 'SAT-SUN', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'HOLIDAYS', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => 'postMessage',
        
        ) );
    $wp_customize->add_control( 'HOLIDAYS', array(
        // 'priority' => 10,
        'type' => 'text',
        'section' => 'open_section',
        'label' => __( 'HOLIDAYS', 'textdomain' ),
        'description' => '',
    ) );

}
add_action( 'customize_register', 'open_customizer_register' );




