
 
var t=0;
function changemenu(x)
{



 <?php





    define('WP_USE_THEMES', false);  
    require_once('../../../../wp-load.php');

function get_content_list($field_name)
{

    $menulist=array("appetizers","freshpasta","meatfish","dessert");
    echo "[";
    for ($i=0;$i<4;$i++)
    {
        $teamPosts = new WP_Query('post_type=dish&custom_category='.$menulist[$i]);
        echo "[";
        if ($teamPosts->have_posts()) :
            while ($teamPosts->have_posts()) :
                $teamPosts->the_post(); 
                $custom_fields = get_post_custom();
                echo "\"";
                if ($field_name=="dish_image")
                {
                    echo wp_get_attachment_url($custom_fields[$field_name][0]);
                }
                else
                {
                    echo $custom_fields[$field_name][0];
                }
                echo $email;
                echo "\",";
            endwhile;
        endif;
        $prefix = "'http://localhost/wordpress/wp-content/themes/2017S_Web_Engineering_WP/images/menu/wait.jpg'";
        if ($field_name!="dish_image")
        {
            echo "\"Empty\",\"Empty\",\"Empty\",\"Empty\",\"Empty\",\"Empty\",\"Empty\"]";
        }
        else
        {
            echo $prefix.",".$prefix.",".$prefix.",",$prefix.",".$prefix.",".$prefix."]";
        }
      
        if ($i!=3) echo ",";
    }
    echo "]";
}
    

?>




    
    var menus = <?php get_content_list("dish_image");  ?>;
    var content = <?php get_content_list("dish_description");  ?>;
    var title = <?php get_content_list("dish_pname");  ?>;
    
    
    var img=new Image();

    for (i=1;i<=6;i++)
    {

        var img = document.getElementById("menu-img"+i);
	    img.setAttribute("src",menus[x-1][i-1]);
	    var img2 = document.getElementById("modal_img"+i);
	    img2.setAttribute("src",menus[x-1][i-1]);
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