document.write("
					<?php
						$teamPosts = new WP_Query('post_type=dish&Categorization=a');
						if ($teamPosts->have_posts()) :
						while ($teamPosts->have_posts()) :
						$teamPosts->the_post(); ?>
						
						<div><?php the_title(); echo '<br/>';
						$custom_fields = get_post_custom();
						foreach ( $custom_fields as $field_key => $field_values ) {
						if(!isset($field_values[0])) continue;
						if(in_array($field_key,array("_edit_lock","_edit_last"))) continue;
						echo $field_values[0]; echo '<br/>'; } ?>
						</div>
						
						<?php endwhile;
						endif;

")




					?>
var t=0;
function changemenu(x)
{
    
    var menus = ["pic0", "pasta", "meat","dessert"];
    var content = [ 
        ["Tomato bruschetta is great way to get in one of your five a day, with beautifully ripe thickly cut tomatoes our tomato bruschetta recipe is a winner! Tomato bruschetta is great way to get in one of your five a day, with beautifully ripe thickly cut tomatoes our tomato bruschetta recipe is a winner! Tomato bruschetta is great way to get in one of your five a day, with beautifully ripe thickly cut tomatoes our tomato bruschetta recipe is a winner!",
    "Chilled, these beauties make a refreshing snack. You'll find yourself whipping them up whether you are cleansing or not! Chilled, these beauties make a refreshing snack. You'll find yourself whipping them up whether you are cleansing or not! Chilled, these beauties make a refreshing snack. You'll find yourself whipping them up whether you are cleansing or not!",
    "Eggplant (Solanum melongena), or aubergine, is a species of nightshade grown for its edible fruit. Eggplant is the common name in North America and Australia, but British English uses the French word aubergine. It is known in South Asia, Southeast Asia, and South Africa as brinjal. Eggplant (Solanum melongena), or aubergine, is a species of nightshade grown for its edible fruit. Eggplant is the common name in North America and Australia, but British English uses the French word aubergine. It is known in South Asia, Southeast Asia, and South Africa as brinjal. Eggplant (Solanum melongena), or aubergine, is a species of nightshade grown for its edible fruit. Eggplant is the common name in North America and Australia, but British English uses the French word aubergine. It is known in South Asia, Southeast Asia, and South Africa as brinjal.",
    "Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil. Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil. Pronounced “brusketta”, this classic Italian appetizer is a perfect way to capture the flavors of garden ripened tomatoes, fresh basil, garlic, and olive oil.",
    "A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce. A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce. A meatball is ground or minced meat rolled into a small ball, sometimes along with other ingredients, such as bread crumbs, minced onion, eggs, butter, and seasoning. Meatballs are cooked by frying, baking, steaming, or braising in sauce.",
    "This vegetarian dish is delicious and versatile. You can eat it on its own, with rice, as a topping for nachos, or as a filling for tacos or burritos. This vegetarian dish is delicious and versatile. You can eat it on its own, with rice, as a topping for nachos, or as a filling for tacos or burritos. This vegetarian dish is delicious and versatile. You can eat it on its own, with rice, as a topping for nachos, or as a filling for tacos or burritos."]
    ,
    ["Penne is traditionally cooked al dente and served with pasta sauces such as pesto, marinara, or arrabbiata. Penne is a popular ingredient in pasta salads. Penne is a versatile pasta for many applications because of its practical design; the hollow center and ridges allow it to hold sauce, while the angular ends act as scoops.",
    "Spaghetti (Italian pronunciation: [spaˈɡetti]) is a long, thin, cylindrical, solid pasta.[2] It is a staple food of traditional Italian cuisine. Like other pasta, spaghetti is made of milled wheat and water. Italian spaghetti is made from durum wheat semolina, but elsewhere it may be made with other kinds of flour.",
    "Originally spaghetti was notably long, but shorter lengths gained in popularity during the latter half of the 20th century and now spaghetti is most commonly available in 25–30 cm (10–12 in) lengths. A variety of pasta dishes are based on it.",
    "In Italy, penne are produced in two main variants: \"penne lisce\" (smooth) and \"penne rigate\" (furrowed), the latter having ridges on each penna. Pennoni (\"big quills\) is a wider version of penne.",
    "In the United States, the same or similar shape of pasta, usually slightly larger, is called mostaccioli (meaning \"little mustache\" in some Italian dialects; it can also be either smooth or ridged in texture).",
    "The first written record of pasta comes from the Talmud in the 5th century AD and refers to dried pasta that could be cooked through boiling, which was conveniently portable. Some historians think that Arabs introduced pasta to Europe during a conquest of Sicily. In the West, it may have first been worked into long, thin forms in Sicily around the 12th century, as the Tabula Rogeriana of Muhammad al-Idrisi attested, reporting some traditions about the Sicilian kingdom."]
,
["roasted until moist and tender, with a crispy surface. The accompanying vegetables are cooked in Szechuan hot sauce and savory black bean paste, with pickled peppers, to impart a pungent and spicy flavor. A party for the eyes and the taste buds comes together in a single dish.",
    "Larimichthys polyactis, called the redlip croaker, small yellow croaker, little yellow croaker or yellow corvina, is a species of croaker native to the western Pacific, generally in temperate waters such as the East China Sea and the Yellow Sea. They are benthopelagic feeders that remain in shallow waters above 120 m but avoid brackish conditions. Individual males can reach 42 cm.",
    "Mei Cai Kou Rou, a dish of braised and then steamed pork belly, holds a high position on the Chinese comfort food list. A dish that makes you miss the motherland if you’re Chinese, a dish that makes you miss your childhood if you’re me, and a dish that makes you miss Yong He Da Wang (a fast food chain in China that does a pretty good job with this dish) if you’re Kaitlin.",
    "Beijing Roasted Duck, also called Peking Duck, is a famous duck dish from Beijing, China that has been prepared since the imperial era, and is now considered one of China's national foods.",
    "Sweet and Sour Rib (Tang Cu Pai Gu)is a quite popular dish in China. However, mostly people will eat it in restaurant rather than at home since restaurant version is quite hard to achieve at home.",
    "Steak tartare is a meat dish made from finely chopped or minced raw beef or horsemeat. It is often served with onions, capers and seasonings (the latter typically incorporating fresh ground pepper and Worcestershire sauce), sometimes with a raw egg yolk, and often on rye bread."]
,
["A brownie is a square baked dessert. It is a cross between a cake and a soft cookie in texture and comes in a variety of forms. Depending on its density, it may be either fudgy or cakey and may include chocolate chips, nuts, or other ingredients. A variation made with brown sugar and chocolate bits but without melted chocolate in the batter is called a blonde brownie or blondie. The brownie was developed in the United States at the end of the 19th century and popularized in the U.S. and Canada during the first half of the 20th century.",
    "A cupcake is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup. As with larger cakes, icing and other cake decorations, such as candy, may be applied.",
    "The gracious thing about mini cheesecakes in muffin cups is that you can’t really over-do it. Especially when you’re only making a small batch. This recipe makes just 4 mini cheesecakes. Two for you, two for me, and then none for tomorrow when we should get back to our January diets.",
    "An ice cream cake is a cake that incorporates ice cream. A popular form is a three-layer cake, with a layer of ice cream between two layers of cake, although not all versions contain cake.",
    "Although elegantly spiraled cake rolls might look hard to make, they're wonderfully easy to whip up in just a few steps.",
    "Chocolate balls are a spherical confection made of or dipped into chocolate. Other ingredients may include peanut butter or marzipan."]
];
    title = [
    ["Bruschetta with Tomatoes","Green Rolls","Eggplants","Bruschetta","Meatballs","Spicy Beans"],
    ["Penne 1","Spaghetti 1","Spaghetti 2","Penne 2","Penne 3","Spaghetti 3"],
    ["Fish 1","Fish 2","Elbow","Roasted Duck","Ribs","Beef"],
    ["Brownie","Cupcake","Little Cake","Cream Cake","Cake Roll","Chocolate"]
      
    ]
    
    
    var img=new Image();

    for (i=1;i<=6;i++)
    {

        var img = document.getElementById("menu-img"+i);
	    img.setAttribute("src","http://localhost/wordpress/wp-content/themes/2017S_Web_Engineering_WP/images/menu/"+menus[x-1]+i+".jpg");
	    var img2 = document.getElementById("modal_img"+i);
	    img2.setAttribute("src","http://localhost/wordpress/wp-content/themes/2017S_Web_Engineering_WP/images/menu/"+menus[x-1]+i+".jpg");
    }
    for (i=1;i<=6;i++)
    {
        var tmp = document.getElementById("modal_content"+i);
	    tmp.innerHTML=content[x-1][i-1];
	    var tmp2 = document.getElementById("modal_title"+i);
	    tmp2.innerHTML=title[x-1][i-1];
	    
	    var tmp3 = document.getElementById("menu_title"+i);
	    tmp3.innerHTML=title[x-1][i-1];
    }
    
    
    for (i=1;i<=4;i++)
    {
        var label = "#menu-choise"+i;
        if (i==x)
            $(label).addClass("hover1");
        else
            $(label).removeClass("hover1");
    }
}
var p = 2;
var timenow=0;



setInterval(function(){
    pp=true
    
    for (i=1;i<=6;i++)
    {
        if ($("#"+"id0"+i).css("display")!="none") {pp=false;};
    }
   // alert(pp)
   // return
    if(!pp){
        document.documentElement.style.overflow='hidden';}
    else
        {document.documentElement.style.overflow='scroll';}
    
},100);



function loopmenu()
{

    var el = document.getElementById("menu-choise1");
    var viewportOffset = el.getBoundingClientRect();
    var top = viewportOffset.top;

    var el2 = document.getElementById("menu-choise2");
    var viewportOffset2 = el2.getBoundingClientRect();
    var top2 = viewportOffset2.top;
    //alert(top+" "+top2)



    var el3 = document.getElementById("menu-img1");
    //alert()
    

    //$("#welcome").attr("width","10px")
    //alert($("#welcome").attr("width"))
    //if ($(".modal").attr("display")=="none")
    
    //if (timenow<5)
       // alert(($('.modal').css("display")=="none"));
    pp=true
    
    for (i=1;i<=6;i++)
    {
        if ($("#"+"id0"+i).css("display")!="none") {pp=false;};
    }

     if (p==2 && top==top2 && pp  ) 
     {
        timenow=(timenow+1)%4;
        changemenu(timenow % 4 +1);
     }

    setTimeout("loopmenu()",3000);

}


$(document).ready(function(){

    
   
    
    
    
    $("#menu-choise1").hover(function(evt){
        p=1;
        changemenu(1);
     
    },function(evt)
    {
        p=2;
    });
    $("#menu-choise2").hover(function(evt){
        p=1;
        changemenu(2);
     
    },function(evt)
    {
        p=2;
    });
    $("#menu-choise3").hover(function(evt){
        p=1;
        changemenu(3);
     
    },function(evt)
    {
        p=2;
    });
    $("#menu-choise4").hover(function(evt){
        p=1;
        changemenu(4);
     
    },function(evt)
    {
        p=2;
    });
    setTimeout("loopmenu()",1000);
    changemenu(1);
});



$("#menu-choise1").hover(function(){
    alert('s')
    $("#menu-choise1").css("background-color","yellow");
},function(){
    $("#menu-choise1").css("background-color","pink");
});

$(document).scroll(function(evt)
{
    if (p==1) return;
    var allh = window.screen.availHeight;
	t=t+1
	var el = document.getElementById("menu-choise1");
	var viewportOffset = el.getBoundingClientRect();
	var top = viewportOffset.top;

    var el2 = document.getElementById("menu-choise2");
    var viewportOffset2 = el2.getBoundingClientRect();
    var top2 = viewportOffset2.top;
    //alert(top+" "+top2)

    pp=true
    
    for (i=1;i<=6;i++)
    {
        if ($("#"+"id0"+i).css("display")!="none") {pp=false;};
    }
    if (!pp) return;


    if (top==top2) return;


	if (top<allh*2/9)
	{
	   changemenu(4);
	}
	else if (top<allh/9*3)
	{
	   changemenu(3);
	}
	else if (top<allh/9*4)
	{
	    changemenu(2);
	}
	else
	   changemenu(1);
});