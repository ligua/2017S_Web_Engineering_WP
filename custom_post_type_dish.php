<?php
    function load_admin_things() {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_style('thickbox');
    }

    add_action( 'admin_enqueue_scripts', 'load_admin_things' );
    
    function create_dish_post_type() {

        $labels = array(
            'name' => __( 'Dishes' ),
            'singular_name' => __( 'Dishes' ),
            'menu_name' => __( 'Dishes' ),
            'add_new' => __( 'Add dishes' ),
            'all_items' => __( 'All Dishes' ),
            'add_new_item' => __( 'Add dishes' ),
            'edit_item' => __( 'Edit dishes' ),
            'new_item' => __( 'New dish' ),
            'view_item' => __( 'View dish' ),
            'search_items' => __( 'Search dishes' ),
            'not_found' => __( 'No dishes found' ),
            'not_found_in_trash' => __( 'No dishs found in trash' ),
            'parent_item_colon' => __( 'Parent dish' )
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
            'supports' => array(
                    //'title',
                    'thumbnail',
                    //'editor',
                    //'author',
                    //'excerpt',
                    //'trackbacks',
                    //'custom-fields',
                    //'comments',
                    //'revisions',
                    //'page-attributes',
                    //'post-formats',
                    ),
            'menu_position' =>5,
            'register_meta_box_cb' => 'add_dish_post_type_metabox'
        );
        register_post_type( 'dish', $args );
        register_taxonomy( 'custom_category', 'dish',
            array(
                'hierarchical' => true,
                'label' => 'Categorization'
                )
        );
    }

    function dish_post_save_meta( $post_id, $post ) {
        // is the user allowed to edit the post or page?
        if( ! current_user_can( 'edit_post', $post->ID )){
            return $post->ID;
        }
        $dish_post_meta['dish_pname'] = $_POST['pname'];
        $dish_post_meta['dish_description'] = $_POST['description'];
        $dish_post_meta['dish_image'] = $_POST['upload_image_id'];
        // add values as custom fields
        //update_post_meta($post->ID, "title", $_POST['pname']);
        //update_option("title", $_POST['pname']);
        foreach( $dish_post_meta as $key => $value ) {
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
    add_action( 'save_post', 'dish_post_save_meta', 1, 2 );

    function add_dish_post_type_metabox() {
        add_meta_box( 'dish_metabox', 'dish Data', 'dish_metabox', 'dish', 'normal' );
    }
    function dish_metabox() {
        global $post;
        $custom = get_post_custom($post->ID);
        $pname = $custom['dish_pname'][0];
        $description = $custom['dish_description'][0];
        $image = $custom['dish_image'][0];
        

        $image_src = '';
        $image_id = get_post_meta( $post->ID, '_image_id', true );
        $image_src = wp_get_attachment_url( $image_id );
 
        ?>
        
        <img id="book_image" src="<?php echo $image_src ?>" style="max-width:100%;" />
        <input type="hidden" name="upload_image_id" id="upload_image_id" value="<?php echo $image_id; ?>" />
        <p>
            <a title="<?php esc_attr_e( 'Set dishes image' ) ?>" href="#" id="set-book-image"><?php _e( 'Set book image' ) ?></a>
            <a title="<?php esc_attr_e( 'Remove dishes image' ) ?>" href="#" id="remove-book-image" style="<?php echo ( ! $image_id ? 'display:none;' : '' ); ?>"><?php _e( 'Remove book image' ) ?></a>
        </p>

        <div class="dish">
        <p> <label>Dish Name<br> <input type="text" name="pname" size="20"
        value="<?php echo $pname; ?>"> </input></label>
        </p>
        <p> <label>Description<br> <textarea  name="description" rows="3" cols="50"
          ><?php echo $description; ?></textarea>
        </label>
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
    add_action( 'init', 'create_dish_post_type' );
?>