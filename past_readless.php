<?php
require_once('../../../wp-load.php');
            $now = new DateTime("NOW");
            $eventlist_upcoming = array();
            $eventlist_past = array();
            $teamPosts = new WP_Query('post_type=event');
            if ($teamPosts->have_posts()) :
                while ($teamPosts->have_posts()) :
                    $teamPosts->the_post(); 
                    $custom_fields = get_post_custom();

                    $d = new DateTime($custom_fields["event_stime"][0]); 
                    if ($d>$now)
                    {
                        array_push($eventlist_upcoming,$custom_fields);
                    }
                    else
                    {
                        array_push($eventlist_past,$custom_fields);
                    }

                endwhile;
            endif;
            
            function cmp($aa,$bb)
            {
                $a = new DateTime($aa["event_stime"][0]);
                $b = new DateTime($bb["event_stime"][0]);
                if ($a == $b) {
                return 0;
                }   
                return ($a > $b) ? -1 : 1;
            }
            usort($eventlist_past,"cmp");
            function cmp2($aa,$bb)
            {
                $a = new DateTime($aa["event_stime"][0]);
                $b = new DateTime($bb["event_stime"][0]);
                if ($a == $b) {
                return 0;
                }   
                return ($a < $b) ? -1 : 1;
            }
            usort($eventlist_upcoming,"cmp2");
            
            
?>


<?php for ($i=0;$i<((count($eventlist_past)>4)?4:count($eventlist_past));$i++)    {?>
                        <figure  class="past-event">
                            <img src=<?php  echo "\"".wp_get_attachment_url($eventlist_past[$i]["event_image"][0])."\"" ?> alt="" />
                            <a href="">
                                <?php $sd = new DateTime($eventlist_past[$i]["event_stime"][0]); ?>
                                <?php $ed = new DateTime($eventlist_past[$i]["event_etime"][0]); ?>
                                <h3><a href="event-detail" onclick="readMorePast(<?php echo $eventlist_past[$i]["pid"][0] ?>); return false;"><?php  echo $eventlist_past[$i]["event_pname"][0] ?></a>
                                </h3>
                                <?php  if ($eventlist_past[$i]["event_etime"][0]=="")
                                {?>
                                <h2><?php echo $sd->format("Y-m-d H:i") ?></h2>
                                <?php
                                }
                                else
                                {
                                ?> 
                                <h2><?php echo $sd->format("Y-m-d H:i") ?></br><?php echo $ed->format("Y-m-d H:i") ?></h2>
                                <?php }?>
                            </a>
                        </figure>
                    <?php } ?>
                        
