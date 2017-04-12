<!DOCTYPE HTML>

<html>

	<head>

		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8" />
		<link href="https://fonts.googleapis.com/css?family=Kreon" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ex1.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ex2popup.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ex2hover.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ex3.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/menu.php"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ex2_move.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/event_readmore_ajax.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/onepage_nav.js"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		
		<!-- Navigation -->
		<nav class="navigation">
			<ul>
				<li><a href="#first">About</a></li>
				<li><a href="#menu">Menu</a></li>
				<li><a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a></li>
				<li><a href="#events">Events</a></li>
				<li><a href="#f_h_opening_hour_contracts">Contacts</a></li>
			</ul>
		</nav>

		<!-- Header -->
		<header class="cover">
			<img id="header_image" src="<?php header_image() ?>" alt="">
			<div id="cover_title">
				<h1 id="cover_titleh1"> <?php if(bloginfo( 'name' )) bloginfo( 'name' ); else echo "&nbsp" ?> </h1>
				<h2> <?php bloginfo( 'description' ); ?> </h2>
			</div>
			<div id="cover_book">
				<a href="#h_book">Book a Table</a>
			</div>
		</header>

		<div class="empty" id="first">
		</div>

		<!-- First About-->
		<!-- <div class="h_word" > -->
		<article class="h_word" id="welcome">
			<?php $post = get_post( url_to_postid("http://localhost/wordpress/index/welcome/") ); ?>
			<h2><?php echo $post->post_title; ?></h2>
			<p><?php echo $post->post_content; ?><br/></p>
		</article>

		<!-- Second About -->
		<article id="h_high_quality" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/small1.jpg);">
			<div id="l_high_quality">
				<?php $post = get_post( url_to_postid("http://localhost/wordpress/index/high-quality-cuisine/") ); ?>
				<h2><?php echo $post->post_title; ?></h2>
				<p><?php echo $post->post_content; ?><br/></p>
			</div>
		</article>

		<!-- Third About -->
		<article class="h_word" id="only_best">
			<?php $post = get_post( url_to_postid("http://localhost/wordpress/index/only-the-best-ingredients/") ); ?>
			<h2><?php echo $post->post_title; ?></h2>
			<p><?php echo $post->post_content; ?><br/></p>
		</article>


		<!-- modual part-->
		<section>
			<div id="id01" class="modal">
			<div class="modal-dialog">
			<div class="modal-content">
				<a href="#1" class="closebtn">×</a>
				<div id = "modal_title1" class="modal_title">Bruschetta with Tomatoes</div>
				<a href="index.html"><img class="modal_img" id="modal_img1" src="<?php bloginfo('template_directory'); ?>/images/menu/pic01.jpg" alt=""></a>
				<div class = "modal_c"  id="modal_content1">Tomato bruschetta is great way to get in one of your five a day, with beautifully ripe thickly cut tomatoes our tomato bruschetta recipe is a winner! Tomato bruschetta is great way to get in one of your five a day, with beautifully ripe thickly cut tomatoes our tomato bruschetta recipe is a winner! Tomato bruschetta is great way to get in one of your five a day, with beautifully ripe thickly cut tomatoes our tomato bruschetta recipe is a winner!</div>
			</div>
			</div>
			</div>
			<div id="id02" class="modal">
			<div class="modal-dialog">
			<div class="modal-content">
				<a href="#1" class="closebtn">×</a>
				<div id = "modal_title2" class="modal_title">Green Rolls</div>
				<a href="index.html"><img class="modal_img" id="modal_img2" src="<?php bloginfo('template_directory'); ?>/images/menu/pic02.jpg" alt=""></a>
				<div class = "modal_c"  id="modal_content2">Chilled, these beauties make a refreshing snack. You'll find yourself whipping them up whether you are cleansing or not! Chilled, these beauties make a refreshing snack. You'll find yourself whipping them up whether you are cleansing or not! Chilled, these beauties make a refreshing snack. You'll find yourself whipping them up whether you are cleansing or not!</div>
			</div>
			</div>
			</div>
			<div id="id03" class="modal">
			<div class="modal-dialog">
			<div class="modal-content">
				<a href="#1" class="closebtn">×</a>
				<div id = "modal_title3" class="modal_title">Eggplants</div>
				<a href="index.html"><img class="modal_img" id="modal_img3" src="<?php bloginfo('template_directory'); ?>/images/menu/pic03.jpg" alt=""></a>
				<div class = "modal_c"  id="modal_content3">Eggplant (Solanum melongena), or aubergine, is a species of nightshade grown for its edible fruit. Eggplant is the common name in North America and Australia, but British English uses the French word aubergine. It is known in South Asia, Southeast Asia, and South Africa as brinjal. Eggplant (Solanum melongena), or aubergine, is a species of nightshade grown for its edible fruit. Eggplant is the common name in North America and Australia, but British English uses the French word aubergine. It is known in South Asia, Southeast Asia, and South Africa as brinjal. Eggplant (Solanum melongena), or aubergine, is a species of nightshade grown for its edible fruit. Eggplant is the common name in North America and Australia, but British English uses the French word aubergine. It is known in South Asia, Southeast Asia, and South Africa as brinjal.</div>
			</div>
			</div>
			</div>
			<div id="id04" class="modal">
			<div class="modal-dialog">
			<div class="modal-content">
				<a href="#1" class="closebtn">×</a>
				<div id = "modal_title4" class="modal_title">Bruschetta</div>
				<a href="index.html"><img class="modal_img" id="modal_img4" src="<?php bloginfo('template_directory'); ?>/images/menu/pic04.jpg" alt=""></a>
				<div class = "modal_c"  id="modal_content4">Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil. Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil. Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil.</div>
			</div>
			</div>
			</div>
			<div id="id05" class="modal">
			<div class="modal-dialog">
			<div class="modal-content">
				<a href="#1" class="closebtn">×</a>
				<div id = "modal_title5" class="modal_title">Meatballs</div>
				<a href="index.html"><img class="modal_img" id="modal_img5" src="<?php bloginfo('template_directory'); ?>/images/menu/pic05.jpg" alt=""></a>
				<div class = "modal_c" id="modal_content5">A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce. A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce. A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.</div>
			</div>
			</div>
			</div>
			<div id="id06" class="modal">
			<div class="modal-dialog">
			<div class="modal-content">
				<a href="#1" class="closebtn">×</a>
				<div id = "modal_title6" class="modal_title">Spicy Beans</div>
				<a href="index.html"><img class="modal_img" id="modal_img6" src="<?php bloginfo('template_directory'); ?>/images/menu/pic06.jpg" alt=""></a>
				<div class = "modal_c"  id="modal_content6">This vegetarian dish is delicious and versatile. You can eat it on its own, with rice, as a topping for nachos, or as a filling for tacos or burritos. This vegetarian dish is delicious and versatile. You can eat it on its own, with rice, as a topping for nachos, or as a filling for tacos or burritos. This vegetarian dish is delicious and versatile. You can eat it on its own, with rice, as a topping for nachos, or as a filling for tacos or burritos.</div>
			</div>
			</div>
			</div>
		</section>
		<!-- Menu -->
		<section id="menu">
			<section class="back-grey">
				<article id="menu-texts">
					<header>
						<h2>Our Menu</h2>
						<h3>Appetizers</h3>
					</header>
					<article id="justify">We serve a seasonal tasting menu that focuses on local ingredients. Our appetizers may vary during the year to always ensure the best quality.
						For the appetizers, we are famous for our bruschettas that we serve in several different variants.<span></span></article>
					<section id="menu-choise">
						<a href="#appetizers" id="menu-choise1" >Appetizers</a>
						<a href="#freshpasta" id="menu-choise2">Fresh Pasta</a>
						<a href="#meatfish" id="menu-choise3">Meat - Fish</a>
						<a href="#Dessert" id="menu-choise4" >Dessert</a>
					</section>
				</article>
				














				<figure id="menu-imgs">
					<div class="menu-img">
							<a href="#id01" >
								<img id="menu-img1" src="<?php bloginfo('template_directory'); ?>/images/menu/pic01.jpg" alt="" />
							</a>
							<figcaption> 
								<a id = "menu_title1" href="#id01">
									<span>Bruschetta with Tomatoes</span>
								</a>
							</figcaption>
						</div>
					<div class="menu-img">
						<a href="#id02" >
							<img id="menu-img2" src="<?php bloginfo('template_directory'); ?>/images/menu/pic02.jpg" alt="" />
						</a>
						<figcaption> 
							<a id = "menu_title2" href="#id02"> Green Rolls </a>
						</figcaption>			
					</div>
					<div class="menu-img">
						<a href="#id03" >
							<img id="menu-img3" src="<?php bloginfo('template_directory'); ?>/images/menu/pic03.jpg" alt="" />
						</a>
						<figcaption> 
							<a id = "menu_title3"  href="#id03"> Eggplants  </a>
						</figcaption>
					</div>
					<div class="menu-img">
						<a href="#id04" >
							<img id="menu-img4" src="<?php bloginfo('template_directory'); ?>/images/menu/pic04.jpg" alt="" />
						</a>
						<figcaption> 
							<a id = "menu_title4" href="#id04">Bruschetta</a>
						</figcaption>
					</div>	
					<div class="menu-img">
						<a href="#id05" >
							<img id="menu-img5" src="<?php bloginfo('template_directory'); ?>/images/menu/pic05.jpg" alt="" />
						</a>
						<figcaption> 
							<a id = "menu_title5" href="#id05">Meatballs</a>
						</figcaption>	
					</div>		
					<div class="menu-img">
						<a href="#id06" >
							<img id="menu-img6" src="<?php bloginfo('template_directory'); ?>/images/menu/pic06.jpg" alt="" />
						</a>
						<figcaption> 
							<a id = "menu_title6" href="#id06"> Spicy Beans</a>
						</figcaption>
					</div>
				</figure>
			</div>
			<div class="x-clear"> </div>
		</section>
				
		<!-- Third -->
		<article class="h_word" id="events">
			<?php $post = get_post( url_to_postid("http://localhost/wordpress/index/our-events/") ); ?>
			<h2><?php echo $post->post_title; ?></h2>
			<p><?php echo $post->post_content; ?><br /></p>
		</article>

        <h1>
		<?php
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
		<h1>

		<!-- event -->
		<section>
			<?php  
				function get_abstract($s)
				{
					$ls = strlen($s);
					$i = 150;
					if ($ls<$i) return $s;

					
					while ($i<$ls && $s[$i]!=' ') $i++;
					
					return substr($s,0,$i);
				}




			?>
			<?php if(get_background_color()){ ?>
			<div class="back-grey1">
			<?php } ?>
				<div id="l_events">
				<header class="event-header"><b> Upcoming Events </b></header>
				<article class="events">
					<?php for ($i=0;$i<((count($eventlist_upcoming)>3)?3:count($eventlist_upcoming));$i++)    {?>

						<section class="event">
							<figure>
								<img src=<?php  echo "\"".wp_get_attachment_url($eventlist_upcoming[$i]["event_image"][0])."\"" ?> alt="" />
							</figure>
							<figcaption>
								<?php $sd = new DateTime($eventlist_upcoming[$i]["event_stime"][0]); ?>
								<?php $ed = new DateTime($eventlist_upcoming[$i]["event_etime"][0]); ?>
								<h3><a href="" onclick="readMoreUp(<?php echo $eventlist_upcoming[$i]["pid"][0] ?>); return false;"><?php echo $eventlist_upcoming[$i]["event_pname"][0] ?></a></h3>
								<?php if ($eventlist_upcoming[$i]["event_etime"][0]=="")
								{?>
								<h2><?php echo $sd->format("Y-m-d H:i") ?></h2>
								<?php
								}
								else
								{
								?> 
								<h2><?php echo $sd->format("Y-m-d H:i") ?></br><?php echo $ed->format("Y-m-d H:i") ?></h2>
								<?php }?>
							</figcaption>
							<article class="event-content">
								<p><?php if($eventlist_upcoming[$i]["event_excerpt"][0]) echo $eventlist_upcoming[$i]["event_excerpt"][0]; else print get_abstract($eventlist_upcoming[$i]["event_description"][0]);?> <a href="" onclick="readMoreUp(<?php echo $eventlist_upcoming[$i]["pid"][0] ?>); return false;">[Read More]</a></p>
							</article>
						</section>
					<?php }
					?>
				</article>
				</div>
				<article id="l_past_events">
					<header class="event-header"> <b> Past Events </b> </header>
					<section id="s_l_past_events" class="events">
					<?php for ($i=0;$i<((count($eventlist_past)>4)?4:count($eventlist_past));$i++)    {?>
						<figure  class="past-event">
							<img src=<?php  echo "\"".wp_get_attachment_url($eventlist_past[$i]["event_image"][0])."\"" ?> alt="" />
								<?php $sd = new DateTime($eventlist_past[$i]["event_stime"][0]); ?>
								<?php $ed = new DateTime($eventlist_past[$i]["event_etime"][0]); ?>
								<h3><a href="" onclick="readMorePast(<?php echo $eventlist_past[$i]["pid"][0] ?>); return false;"><?php  echo $eventlist_past[$i]["event_pname"][0] ?></a>
								</h3>
								<?php if ($eventlist_past[$i]["event_etime"][0]=="")
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
						
							
					</section>
					</br> </br>
					<section id = "readmore_se">
						<input type="submit" onclick="hj_readmore()" id="b_readmore" class="x-button" value="See More">
						</input>
					</section>
				</article>
			</div>
		</section>
		<script type="text/javascript">history.replaceState($(".back-grey1").html(), null, "");</script>
		<!-- Basic Elements -->

		<!-- Fourth -->
		<section>
			<article id="h_word_contact">
				<h2>Contact us</h2>
				<p>Feel free to contact us for any kind of issues or questions</p>
			</article>

			<div id="h_contact_father">
			<div id="h_contact">
			
					<form method="post" action="#">
						
							<div class="h_nameemail" id="h_name"><input type="text" placeholder="Name" 
							/></div><div class="h_nameemail" id="h_email"><input type="text" placeholder="Email" 
							/></div>
						
						<div >
							<div id="h_message"><textarea name="message" placeholder="Message"></textarea></div>
						</div>
						<div >

							<div >
								<ul id="h_sendreset">
									<li id="h_send"><input type="submit"  value="Send Message" /></li>
									<li id="h_reset"><input type="reset"  value="Clear Form" /></li>
								</ul>
							</div>

						</div>
					</form>
				
			</div>
			</div>
		</section>
				

		<!-- 5th -->	

		<section id="h_book" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/book-table.jpg);">
			<div id="h_book2">
				<h2  >Book a table</h2>
				<div>
					<form method="post" action="#">
						<div id="h_namephone">
							<div ><input id="h_name2" type="text" placeholder="Name" 
							/></div> <div ><input id="h_phone" type="text" placeholder="Phone" 
							/></div>
						</div>

						<div id="h_datatime">
							<div ><input id="h_date" type="text" placeholder="Date" 
							/></div><div ><input id="h_time" type="text" placeholder="Time" 
							/></div></div>
						<div >
						<div ><textarea name="message" placeholder="Message"></textarea></div>
				
						</br>
						<input type="submit"  value="Book" />
						<div id = "h_aline"></div>
			
					</form>
				</div>
			</div>
		</section>


		<!-- Footer -->
		<section>
			<article id="f_h_opening_hour_contracts">
				<div id="h_opening_hour_contracts">
					<div id="h_l_opening" >
						<h2> Opening Hour </h2>
						<p> </p> </br>

						<p id="monday"> <b>MONDAY : </b><?php echo get_theme_mod("MONDAY") ?></p> </br>
						<p id="tuefri"> <b>TUE-FRI : </b><?php echo get_theme_mod("TUEFRI") ?></p> </br>
						<p id="satsun"> <b>SAT-SUN : </b><?php echo get_theme_mod("SATSUN") ?></p> </br>
						<p id="holidays"> <b>HOLIDAYS : </b><?php echo get_theme_mod("HOLIDAYS") ?></p> </br>
						<p> </p> </br>
						<p> </p> </br>
					</div>
					<div id="h_l_contact" >
						<h2>  Contacts </h2>
						<p> </p> </br>
						<p id="city"> <b>ADDRESS : </b><?php echo get_theme_mod("City") ?></p> </br>
						<p id="street"> <?php echo get_theme_mod("Street") ?></p> </br>
						<p id="phone"> <b>PHONE : </b><?php echo get_theme_mod("PHONE") ?></p> </br>
						<p id="email"> <b>EMAIL : </b><?php echo get_theme_mod("EMAIL") ?></p> </br>
						<p> </p> </br>
						<p> </p> </br>
					</div>	
				</div>	
			</article>
			<div id="h_copy">
				<ul>
					<li>&copy; Untitled. All rights reserved.</li><li>&nbsp;&nbsp;|&nbsp;&nbsp;</li><li>Design: ETH Zurich, Globis Group</li>
				</ul>
			</div>
		</section>
	<?php wp_footer(); ?>
	</body>
</html>