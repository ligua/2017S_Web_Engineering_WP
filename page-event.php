<?php
	require_once('../../../wp-load.php');
	if(isset($_GET['pid'])){
    	$pid = $_GET['pid'];
    	$custom_fields = get_post_custom($pid);
    	?>
    	<img src = "<?php  echo wp_get_attachment_url($custom_fields["event_image"][0]) ?>" alt="" />
    <?php } ?>
	