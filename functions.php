<?php
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