<?php
	function remove_customizer( $wp_customize ) {
		$wp_customize->remove_control('site_icon');
    	$wp_customize->remove_control('header_textcolor');
    	$wp_customize->remove_section('background_image');
    	$wp_customize->remove_section( 'custom_css' );
    	$wp_customize->remove_section( 'static_front_page' );
    	$wp_customize->remove_panel( 'nav_menus');
	}
	add_action( 'customize_register', 'remove_customizer',20 ); // the priority matterss
	function prefix_customizer_register( $wp_customize ) {
    	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
    	$wp_customize->get_setting( 'header_image' )->transport = 'postMessage';
    	$wp_customize->get_setting( 'header_image_data'  )->transport = 'postMessage';
	}
	add_action( 'customize_register', 'prefix_customizer_register' );

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
add_theme_support( 'custom-header', array('default-image' => get_template_directory_uri() . '/images/header.jpg',) );

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
