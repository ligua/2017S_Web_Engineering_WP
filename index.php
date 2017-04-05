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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ex2_move.js"></script>
		<?php wp_head(); ?>
	</head>

	<body>
		
		<!-- Navigation -->
		<nav class="navigation">
			<ul>
				<li><a href="#first">About</a></li>
				<li><a href="#menu">Menu</a></li>
				<li><a href="index.html"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a></li>
				<li><a href="#events">Events</a></li>
				<li><a href="#f_h_opening_hour_contracts">Contacts</a></li>
			</ul>
		</nav>

		<!-- Header -->
		<header class="cover">
			<?php $header = get_header_image();
				if($header){?>
					<img src="<?php header_image() ?>" alt="">
				<?php }else{?>
					<div style="background-image: url(<?php bloginfo('template_directory'); ?>/images/header.jpg); background-size: 100vw 40vw; background-repeat: no-repeat; width: 100vw; height: 40vw; position: initial;"></div>
				<?php } ?>
			<div id="cover_title">
				<h2> <?php bloginfo( 'description' ); ?> </h2>
				<h1> <?php bloginfo( 'name' ); ?> </h1>
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
			<?php $post = get_post( 15 ); ?>
			<h2><?php echo $post->post_title; ?></h2>
			<p><?php echo $post->post_content; ?><br/></p>
		</article>

		<!-- Second About -->
		<article id="h_high_quality" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/small1.jpg);">
			<div id="l_high_quality">
				<?php $post = get_post( 17 ); ?>
				<h2><?php echo $post->post_title; ?></h2>
				<p><?php echo $post->post_content; ?><br/></p>
			</div>
		</article>

		<!-- Third About -->
		<article class="h_word" id="only_best">
			<?php $post = get_post( 11 ); ?>
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
			<?php $post = get_post( 4 ); ?>
			<h2><?php echo $post->post_title; ?></h2>
			<p><?php echo $post->post_content; ?><br /></p>
		</article>


		<!-- event -->
		<section>
			<?php if(get_background_color()){ ?>
			<div class="back-grey1">
			<?php } ?>
				<div id="l_events">
				<header class="event-header"><b> Upcoming Events </b></header>
				<article class="events">
					<section class="event">
						<figure>
							<img src="<?php bloginfo('template_directory'); ?>/images/cooking.jpg" alt="" />
						</figure>
						<figcaption>
							<h3>Learning to Cook</h3>
							<h2>12/03/2017</br>10:30 a.m.</h2>
						</figcaption>
						<article class="event-content">
						<p>Get the basic skills every home cook needs to be successful and happy in the kitchen. Ditch recipes by learning basic cooking formulas. Come and learn how to <a href=""> [Read More]</a></p>
						</article>		
					</section>
					<section class="event">
						<figure>
							<img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" alt="" />
						</figure>
						<figcaption>
							<h3>Pasta Day</h3>
							<h2>11/03/2017</br>18:00 - 23:00</h2>
						</figcaption>
						<article class="event-content">
							<p>The fresh pastas offered at LaPlace are made right in our restaurant. And if you've only ever had boxed pastas, you are truly missing out! Once evert two months we celebrate Pasta with an event <a href=""> [Read More]</a></p>
						</article>
					</section>
					<section class="event">
						<figure>
							<img src="<?php bloginfo('template_directory'); ?>/images/3.png" alt="" />
						</figure>
						<figcaption>
							<h3>Happy Hour</h3>
							<h2>03/03/2017</br>18:00 - 23:00</h2>
						</figcaption>
						<article class="event-content">
							<p>It's Friday!!! Come and enjoy the start of the weekend with us. Our Happy Hours offer the best combination of nice drinks and food. To reserve a sit please register to the event <a href=""> [Read More]</a> </p>
						</article>
					</section>
				</article>
				</div>
				<article id="l_past_events">
					<header class="event-header"> <b> Past Events </b> </header>
					<section class="events">
						<figure  class="past-event">
							<img src="<?php bloginfo('template_directory'); ?>/images/4.jpg" alt="" />
							<a href="">
								<h3>10th Anniversary</h3>
								<h2>01/12/2016 18:00 - 23:00</h2>
							</a>
						</figure>
						<figure class="past-event">
							<img src="<?php bloginfo('template_directory'); ?>/images/2.jpg" alt="" />
							<a href="">
								<h3>Pasta Day</h3>
								<h2>20/11/2016 18:00 - 23:00</h2>
							</a>
						</figure>
						<figure  class="past-event">
							<img src="<?php bloginfo('template_directory'); ?>/images/3.png" alt="" />
							<a href="">
								<h3>Happy Hour</h3>
								<h2>11/11/2016 18:00 - 23:00</h2>
							</a>
						</figure>
						<figure  class="past-event">
							<img src="<?php bloginfo('template_directory'); ?>/images/cooking.jpg" alt="" />
							<a href="">
								<h3>Salsa</h3>
								<h2>01/11/2016 18:00 - 23:00</h2>
							</a>
						</figure>		
					</section>
					</br> </br>
					<section>
						<div class="x-button">
							<a href="#second" >See More</a>
						</div>
					</section>
				</article>
			</div>
		</section>
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
						<p> <b> MONDAY : </b>Closed </p> </br>
						<p> <b>TUE-FRI : </b>8am - 12am</p> </br>
						<p> <b>SAT-SUN : </b>7am - 1am</p> </br>
						<p> <b>HOLYDAYS : </b>12pm-12am</p> </br>
						<p> </p> </br>
						<p> </p> </br>
					</div>
					<div id="h_l_contact" >
						<h2>  Contacts </h2>
						<p> </p> </br>
						<p> <b>ADDRESS : </b>4578 Zurich</p> </br>
						<p> Badenerstrasse 500</p> </br>
						<p> <b>PHONE : </b>(606) 144-0100 </p> </br>
						<p> <b>EMAIL : </b>admin@laplace.com</p> </br>
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
	</body>
</html>