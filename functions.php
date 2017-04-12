<?php

require_once('custom_post_type_dish.php'); 
require_once('custom_post_type_event.php'); 
function remove_bulk_actions( $actions ){
    unset( $actions['inline'] );
    return $actions;
}
function my_disable_quick_edit( $actions = array(), $post = null ) {
    // Remove the Quick Edit link
    if ( isset( $actions['inline hide-if-no-js'] ) ) {
        unset( $actions['inline hide-if-no-js'] );
    }
    // Return the set of links without Quick Edit
    return $actions;
}
add_filter( 'post_row_actions', 'my_disable_quick_edit', 10, 2 );
//require_once('custom-post-type-image-upload.php'); 
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

require_once('basic_setting.php'); 
require_once('opening_hour.php'); 
require_once('contacts.php'); 
