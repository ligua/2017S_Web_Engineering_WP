<?php
	require_once('../../../wp-load.php');
	if(isset($_GET['pid'])){
    	$pid = $_GET['pid'];
    	$custom_fields = get_post_custom($pid);
    	?>
    	<div>
			<header class="event-header"><b> Upcoming Events </b></header>
            <div id="event-detail">
                <img src = "<?php  echo wp_get_attachment_url($custom_fields["event_image"][0]) ?>" alt="" />
                <?php $sd = new DateTime($custom_fields["event_stime"][0]);
                $ed = new DateTime($custom_fields["event_etime"][0]); ?>
                <h3>
                    <?php  echo $custom_fields["event_pname"][0] ?>
                </h3>
                <h2><?php  echo $sd->format("Y-m-d h:i") ?> -  <?php  echo $ed->format("Y-m-d h:i") ?> </h2>
                
                <div>
                    <?php  echo $custom_fields["event_description"][0] ?>
                </div>

            </div>
        </div>
    	
    <?php } ?>
	