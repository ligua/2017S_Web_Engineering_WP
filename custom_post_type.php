<?php

    
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
        $dish_post_meta['dish_image'] = $_POST['image'];
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
        ?>

        <div class="dish">
        <p> <label>Dish Name<br> <input type="text" name="pname" size="50"
        value="<?php echo $pname; ?>"> </label>
        </p>
        <p> <label>Description<br> <input type="text" name="description" rows="3" cols="50"
        value="<?php echo $description; ?>"> </label>
        </p>
        <p> <label>Image<br> <input type="text" name="image" size="50"
        value ="<?php echo $image; ?>"> </label>
        </p>
        </div>

        <?php
    }
    add_action( 'init', 'create_dish_post_type' );
?>