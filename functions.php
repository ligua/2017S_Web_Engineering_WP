<?php

require_once('custom_post_type.php'); 
//require_once('custom-post-type-image-upload.php'); 
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

require_once('basic_setting.php'); 
 require_once('opening_hour.php'); 
 require_once('contacts.php'); 
