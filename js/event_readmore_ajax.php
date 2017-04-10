<?php define('WP_USE_THEMES', false);  
      require_once('../../../../wp-load.php');
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
          return ($a < $b) ? -1 : 1;
          }
          usort($eventlist_past,"cmp");
          function cmp2($a,$b)
          {
            $a = new DateTime($aa["event_stime"][0]);
            $b = new DateTime($bb["event_stime"][0]);
            if ($a == $b) {
            return 0;
          } 
          return ($a > $b) ? -1 : 1;
          }
          usort($eventlist_upcoming,"cmp2");
          
?>
function hj_readless()
{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var pe = document.getElementById('s_l_past_events');
      pe.innerHTML= "<?php
      
        for ($i=0;$i<((count($eventlist_past)>4)?4:count($eventlist_past));$i++)  
          {?><figure  class='past-event'> <img src=<?php  echo '\''.wp_get_attachment_url($eventlist_past[$i]["event_image"][0])."\'" ?> alt='' /> <a href=''> <?php $sd = new DateTime($eventlist_past[$i]["event_stime"][0]); ?><?php $ed = new DateTime($eventlist_past[$i]["event_etime"][0]); ?><h3><?php  echo $eventlist_past[$i]["event_pname"][0] ?> </h3><h2><?php  echo $sd->format("Y-m-d h:i") ?> -  <?php  echo $ed->format("Y-m-d h:i") ?> </h2> </a></figure><?php }?>"  


        var br = document.getElementById('b_readmore');
        br.setAttribute("onclick","hj_readmore()");
        br.setAttribute("value","See more");
    }
  };
  xhttp.open("GET", "http://localhost/wordpress/", true);
  xhttp.send();
}





function hj_readmore() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var pe = document.getElementById('s_l_past_events');
      pe.innerHTML= "<?php
     
        for ($i=0;$i<((count($eventlist_past)>8)?8:count($eventlist_past));$i++)  
          {?><figure  class='past-event'> <img src=<?php  echo '\''.wp_get_attachment_url($eventlist_past[$i]["event_image"][0])."\'" ?> alt='' /> <a href=''> <?php $sd = new DateTime($eventlist_past[$i]["event_stime"][0]); ?><?php $ed = new DateTime($eventlist_past[$i]["event_etime"][0]); ?><h3><?php  echo $eventlist_past[$i]["event_pname"][0] ?> </h3><h2><?php  echo $sd->format("Y-m-d h:i") ?> -  <?php  echo $ed->format("Y-m-d h:i") ?> </h2> </a></figure><?php }?>"  


        var br = document.getElementById('b_readmore');
        br.setAttribute("onclick","hj_readless()");
        br.setAttribute("value","Hidden");

    }
  };
  xhttp.open("GET", "http://localhost/wordpress/", true);
  xhttp.send();
}
