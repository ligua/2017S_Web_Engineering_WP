function readMore(post_id){
	// console.log($(".back-grey1").html());
	// history.replaceState(null, null, 'hello');
	var xmlhttp;
	xmlhttp= new XMLHttpRequest();
	xmlhttp.open("GET", "./wp-content/themes/2017S_Web_Engineering_WP/page-event.php?pid="+post_id, true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState=== 4&&xmlhttp.status=== 200){
			$(".back-grey1").html(xmlhttp.responseText);
		}
	}
	xmlhttp.send();
	history.pushState($(".back-grey1").html(), null, "event-detail");
                /*$.ajax({
                    type: "GET",
                    url: './wp-content/themes/2017S_Web_Engineering_WP/ajax_info.php',
                    data: { postid : post_id },
                    success: function(data){
                        console.log("success!");
                    }
                });*/
}

window.addEventListener('popstate', function(e) {
  var character = e.state;
  console.log(e.url);
  console.log(character);
  if (character != null) {
    $(".back-grey1").html(character);
  }
});
