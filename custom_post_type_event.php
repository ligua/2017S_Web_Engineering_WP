<?php
    function load_admin_things2() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
    }

    add_action( 'admin_enqueue_scripts', 'load_admin_things2' );
    
    function create_event_post_type() {

        $labels = array(
            'name' => __( 'Events' ),
            'singular_name' => __( 'Events' ),
            'menu_name' => __( 'Events' ),
            'add_new' => __( 'Add Event' ),
            'all_items' => __( 'All Events' ),
            'add_new_item' => __( 'Add Events' ),
            'edit_item' => __( 'Edit Events' ),
            'new_item' => __( 'New Event' ),
            'view_item' => __( 'View Event' ),
            'search_items' => __( 'Search Events' ),
            'not_found' => __( 'No Events found' ),
            'not_found_in_trash' => __( 'No Events found in trash' ),
            'parent_item_colon' => __( 'Parent Event' )
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_in_nav_menus' => true,
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'register_meta_box_cb' => 'add_event_post_type_metabox',
            'supports' => array(
                    //'title',
                    'excerpt',
                    'thumbnail',
                    //'editor',
                    //'author',
                    
                    //'trackbacks',
                    //'custom-fields',
                    //'comments',
                    //'revisions',
                    //'page-attributes',
                    //'post-formats',
                    ),
            'menu_position' =>5
            
        );
        register_post_type( 'event', $args );
        
    }

    function event_post_save_meta( $post_id, $post ) {
        if ($post->post_type != 'event'){
            return $post->ID;
        }
        // is the user allowed to edit the post or page?
        global $wpdb;
        if( ! current_user_can( 'edit_post', $post->ID )){
            return $post->ID;
        }
        $event_post_meta['pid'] = $post->ID;
        $event_post_meta['event_pname'] = $_POST['pname'];
        $event_post_meta['event_description'] = $_POST['description'];
        $event_post_meta['event_excerpt'] = $_POST['excerpt'];
        $event_post_meta['event_image'] = $_POST['upload_image_id'];
        $event_post_meta['event_stime'] = $_POST['stime'];
        $event_post_meta['event_etime'] = $_POST['etime'];
        
        $title = $_POST['pname'];
        $where = array( 'ID' => $post_id );
        $wpdb->update( $wpdb->posts, array( 'post_title' => $title ), $where );
        // add values as custom fields
        //update_post_meta($post->ID, "title", $_POST['pname']);
        //update_option("title", $_POST['pname']);
        foreach( $event_post_meta as $key => $value ) {
            if( get_post_meta( $post->ID, $key, FALSE ) ) {
                // if the custom field already has a value
                update_post_meta($post->ID, $key, $value);
            } else {
                // if the custom field doesn't have a value
                add_post_meta( $post->ID, $key, $value );
            }
            if( !$value ) {
                // delete if blank
                delete_post_meta( $post->ID, $key );
            }
        }
        update_post_meta( $post->ID, '_image_id', $_POST['upload_image_id'] );






    }
    add_action( 'save_post', 'event_post_save_meta', 1, 2 );

    function add_event_post_type_metabox() {
        add_meta_box( 'event_metabox', 'Event Data', 'event_metabox', 'event', 'normal' );
    }
    function event_metabox() {
        global $post;
        $custom = get_post_custom($post->ID);
        $pname = $custom['event_pname'][0];
        $description = $custom['event_description'][0];
        $image = $custom['event_image'][0];
        $stime = $custom['event_stime'][0];
        $etime = $custom['event_etime'][0];



        

        $image_src = '';
        $image_id = get_post_meta( $post->ID, '_image_id', true );
        $image_src = wp_get_attachment_url( $image_id );
 
        ?>
        <img id="book_image" src="<?php echo $image_src ?>" style="max-width:100%;" />
        <input type="hidden" name="upload_image_id" id="upload_image_id" value="<?php echo $image_id; ?>" />
        <p>
            <a title="<?php esc_attr_e( 'Set eventes image' ) ?>" href="#" id="set-book-image"><?php _e( 'Set event image' ) ?></a>
            <a title="<?php esc_attr_e( 'Remove eventes image' ) ?>" href="#" id="remove-book-image" style="<?php echo ( ! $image_id ? 'display:none;' : '' ); ?>"><?php _e( 'Remove event image' ) ?></a>
        </p>

        <div class="event">
        <p> <label>Event Name<br> <input type="text" name="pname" size="20"
        value="<?php echo $pname; ?>"> </label>
        </p>
        <p><label>Description<br> <textarea  name="description" rows="3" cols="50"
          ><?php echo $description; ?></textarea>
        </label></p>
         <p> <label>Start Time<br> <input type="datetime-local" name="stime" rows="3" cols="50"
        value="<?php echo $stime; ?>"> </label>
        </p>
         <p> <label>End Time<br> <input type="datetime-local" name="etime" rows="3" cols="50"
        value="<?php echo $etime; ?>"> </label>
        </p>

        </div>

        <script type="text/javascript">
        jQuery(document).ready(function($) {
            
            // save the send_to_editor handler function
            window.send_to_editor_default = window.send_to_editor;
    
            $('#set-book-image').click(function(){
                
                // replace the default send_to_editor handler function with our own
                window.send_to_editor = window.attach_image;
                tb_show('', 'media-upload.php?post_id=<?php echo $post->ID ?>&amp;type=image&amp;TB_iframe=true');
                
                return false;
            });
            
            $('#remove-book-image').click(function() {
                
                $('#upload_image_id').val('');
                $('img').attr('src', '');
                $(this).hide();
                
                return false;
            });
            
            // handler function which is invoked after the user selects an image from the gallery popup.
            // this function displays the image and sets the id so it can be persisted to the post meta
            window.attach_image = function(html) {
                
                // turn the returned image html into a hidden image element so we can easily pull the relevant attributes we need
                $('body').append('<div id="temp_image">' + html + '</div>');
                    
                var img = $('#temp_image').find('img');
                
                imgurl   = img.attr('src');
                imgclass = img.attr('class');
                imgid    = parseInt(imgclass.replace(/\D/g, ''), 10);
    
                $('#upload_image_id').val(imgid);
                $('#remove-book-image').show();
    
                $('img#book_image').attr('src', imgurl);
                try{tb_remove();}catch(e){};
                $('#temp_image').remove();
                
                // restore the send_to_editor handler function
                window.send_to_editor = window.send_to_editor_default;
                
            }
    
        });
        </script>



        <?php
    }
    add_action( 'init', 'create_event_post_type' );
?>