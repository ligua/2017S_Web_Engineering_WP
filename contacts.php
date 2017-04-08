<?php


function contact_customizer_register( $wp_customize ) {
    $wp_customize->add_panel( 'contacts_panel', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Contacts', 'textdomain' ),
        'description' => __( 'Description of what this kpanel does.', 'textdomain' ),
    ) );

    $wp_customize->add_section( 'contacts_address_section', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'ADDRESS', 'textdomain' ),
        'description' => '',
        'panel' => 'contacts_panel',
    ) );
    $wp_customize->add_setting( 'City', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        
        ) );
    $wp_customize->add_control( 'City', array(
        'priority' => 10,
        'type' => 'text',
        'section' => 'contacts_address_section',
        'label' => __( 'City', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_setting( 'Street', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        
        ) );
    $wp_customize->add_control( 'Street', array(
        'priority' => 10,
        'type' => 'text',
        'section' => 'contacts_address_section',
        'label' => __( 'Street', 'textdomain' ),
        'description' => '',
    ) );


    $wp_customize->add_section( 'contacts_phone_section', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'PHONE', 'textdomain' ),
        'description' => '',
        'panel' => 'contacts_panel',
    ) );
    $wp_customize->add_setting( 'PHONE', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        
        ) );
    $wp_customize->add_control( 'PHONE', array(
        'priority' => 10,
        'section' => 'contacts_phone_section',
        'label' => __( 'Phone', 'textdomain' ),
        'description' => '',
    ) );

    $wp_customize->add_section( 'contacts_email_section', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'EMAIL', 'textdomain' ),
        'description' => '',
        'panel' => 'contacts_panel',
    ) );
    $wp_customize->add_setting( 'EMAIL', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        
        ) );
    $wp_customize->add_control( 'EMAIL', array(
        'priority' => 10,
        'section' => 'contacts_email_section',
        'label' => __( 'Email', 'textdomain' ),
        'description' => '',
    ) );








}
add_action( 'customize_register', 'contact_customizer_register' );



/*
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



// This tells WordPress to call the function named
// "setup_theme_admin_menu"
// when it's time to create the menu pages
add_action('admin_menu', 'setup_theme_admin_menu2');
    function setup_theme_admin_menu2() {
    add_menu_page(
        'Contacts Settings', // page title
        'Contacts', // menu title
        'manage_options', // minimum user capability
        'contacts_settings', // menu slug
        'contacts_settings_page' // function for settings page
        );
    }
?>


<?php
function contacts_settings_page() { ?>


<?php
if (isset($_POST["update_settings"])) {
    $ADDRESS1 = esc_attr($_POST["ADDRESS1"]);
    update_option("ADDRESS1", $ADDRESS1);
    $ADDRESS2 = esc_attr($_POST["ADDRESS2"]);
    update_option("ADDRESS2", $ADDRESS2);

    $PHONE = esc_attr($_POST["PHONE"]);
    update_option("PHONE", $PHONE);

    $EMAIL = esc_attr($_POST["EMAIL"]);
    update_option("EMAIL", $EMAIL);
?>
<div id="message" class="updated">Settings saved</div>
<?php } ?>

<div>


<form method="POST" action="">
    <input type="hidden" name="update_settings" value="Y" />
    <table class="form-table">
        <h2> Opening Hour </h2>
        <tr>
            <th><label for="ADDRESS1">ADDRESS</label></th> 
            <td>
                <input type="text" name="ADDRESS1"
                value="<?php print get_option("ADDRESS1"); ?>"
                size ="25" />
                <input type="text" name="ADDRESS2"
                value="<?php print get_option("ADDRESS2"); ?>"
                size ="25" />
            </td>
            
        </tr>
        <tr>
          
                
          
        <tr>
            <th><label for="PHONE">PHONE </label></th>
            <td>
                <input type="text" name="PHONE"
                value="<?php print get_option("PHONE"); ?>"
                size ="25" />
            </td>
        </tr>
        <tr>
            <th><label for="EMAIL">EMAIL</label></th>
            <td>
                <input type="text" name="EMAIL"
                value="<?php print get_option("EMAIL"); ?>"
                size ="25" />
            </td>
        </tr>
    <!-- specify rest of input fields -->
    </table>

    <p>
    <input type="submit" value="Save settings" class="button-primary"/>
    </p>
</form>
</div>






<?php }
?>*/
?>


