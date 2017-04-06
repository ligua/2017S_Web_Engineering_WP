<?php
// This tells WordPress to call the function named
// "setup_theme_admin_menu"
// when it's time to create the menu pages
add_action('admin_menu', 'setup_theme_admin_menu');
    function setup_theme_admin_menu() {
    add_menu_page(
        'Openning Hour Settings', // page title
        'Openning Hour', // menu title
        'manage_options', // minimum user capability
        'opening_hour_settings', // menu slug
        'opening_hour_settings_page' // function for settings page
        );
    }
?>


<?php
function opening_hour_settings_page() { ?>

<?php
if (isset($_POST["update_settings"])) {
    $MONDAY = esc_attr($_POST["MONDAY"]);
    update_option("MONDAY", $MONDAY);


    $TUEFRI = esc_attr($_POST["TUEFRI"]);
    update_option("TUEFRI", $TUEFRI);

    $SATSUN = esc_attr($_POST["SATSUN"]);
    update_option("SATSUN", $SATSUN);

    $HOLYDAYS = esc_attr($_POST["HOLYDAYS"]);
    update_option("HOLYDAYS", $HOLYDAYS);
?>
<div id="message" class="updated">Settings saved</div>
<?php } ?>



<div>


<form method="POST" action="">
    <input type="hidden" name="update_settings" value="Y" />
    <table class="form-table">
        <h2> Opening Hour </h2>
        <tr>
            <th><label for="MONDAY">MONDAY</label></th> 
            <td>
                <input type="text" name="MONDAY"
                value="<?php print get_option("MONDAY"); ?>"
                size ="25" />
            </td>
            
        </tr>
        <tr>
            <th><label for="TUEFRI">TUE-FRI</label></th>
            <td>
                <input type="text" name="TUEFRI"
                value="<?php print get_option("TUEFRI"); ?>"
                size ="25" />
            </td>
        </tr>
        <tr>
            <th><label for="SATSUN">SAT-SUN </label></th>
            <td>
                <input type="text" name="SATSUN"
                value="<?php print get_option("SATSUN"); ?>"
                size ="25" />
            </td>
        </tr>
        <tr>
            <th><label for="HOLYDAYS">HOLYDAYS</label></th>
            <td>
                <input type="text" name="HOLYDAYS"
                value="<?php print get_option("HOLYDAYS"); ?>"
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



