<?php

require_once('../../../wp-load.php');
if(isset($_GET['pid'])){
	$pid = $_GET['pid'];
	$custom_fields = get_post_custom($pid);
	?>
	<header class="event-header"><b> Past Events </b></header>
	<div id="event-detail">
		<div id="event-detail-img">
			<img src = "<?php echo wp_get_attachment_url($custom_fields["event_image"][0]) ?>" alt="" />
			<?php $sd = new DateTime($custom_fields["event_stime"][0]);
			$ed = new DateTime($custom_fields["event_etime"][0]); ?>
		</div>
		<div id="event-detail-text">
			<div>
				<h2><?php echo $custom_fields["event_pname"][0] ?></h2>
			</div>
			<div>
				<?php
				if ($custom_fields["event_etime"][0]=="")
				{
				?>
				<p><?php echo $sd->format("Y-m-d H:i") ?></p>	
				<?php
				} else {?>
				<p><?php echo $sd->format("Y-m-d H:i") ?> - <?php echo $ed->format("Y-m-d H:i") ?></p>
				<?php
				}
				?>
			</div>
			<div>
				<?php echo $custom_fields["event_description"][0] ?>
			</div>
		</div>
	</div>
	<div class="x-clear"></div>
<?php } ?>
