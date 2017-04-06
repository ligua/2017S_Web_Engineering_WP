<?php
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
?>



