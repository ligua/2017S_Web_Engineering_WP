<?php

require_once('custom_post_type.php'); 

add_theme_support( 'custom-header' );
function change_custom_background_cb() {
    $background = get_background_image();
    $color = get_background_color();

    if ( ! $background && ! $color )
        return;
 
    $style = $color ? "background-color: #$color;" : '';
 
    if ( $background ) {
        $image = " background-image: url('$background');";
 
        $repeat = get_theme_mod( 'background_repeat', 'repeat' );
 
        if ( ! in_array( $repeat, array( 'no-repeat', 'repeat-x', 'repeat-y', 'repeat' ) ) )
            $repeat = 'repeat';
 
        $repeat = " background-repeat: $repeat;";
 
        $position = get_theme_mod( 'background_position_x', 'left' );
 
        if ( ! in_array( $position, array( 'center', 'right', 'left' ) ) )
            $position = 'left';
 
        $position = " background-position: top $position;";
 
        $attachment = get_theme_mod( 'background_attachment', 'scroll' );
 
        if ( ! in_array( $attachment, array( 'fixed', 'scroll' ) ) )
            $attachment = 'scroll';
 
        $attachment = " background-attachment: $attachment;";
 
        $style .= $image . $repeat . $position . $attachment;
    }
?>
<style type="text/css">
.back-grey { <?php echo trim( $style ); ?> }
.back-grey1 { <?php echo trim( $style ); ?> }
</style>
<?php
}
add_theme_support( 'custom-background', array('default-color' => '#443333', 'wp-head-callback'=>'change_custom_background_cb', ) );
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function prefix_customizer_register( $wp_customize ) {
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
        'panel' => 'panel_id',
    ) );
    $wp_customize->add_setting( 'url_field_id', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
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

function mytheme_customizer_live_preview()
{
    wp_enqueue_script( 
          'mytheme-themecustomizer',            //Give the script an ID
          get_template_directory_uri().'/js/theme-customizer.js',//Point to file
          array( 'jquery','customize-preview' ),    //Define dependencies
          '',                       //Define a version (optional) 
          true                      //Put script in footer?
    );
}
add_action( 'customize_preview_init', 'mytheme_customizer_live_preview' );

require_once('opening_hour.php'); 
require_once('contacts.php'); 

