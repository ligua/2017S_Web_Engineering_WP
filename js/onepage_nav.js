function readMoreUp(post_id){
	var xmlhttp;
	xmlhttp= new XMLHttpRequest();
	xmlhttp.open("GET", "./wp-content/themes/2017S_Web_Engineering_WP/event_up.php?pid="+post_id, true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState=== 4&&xmlhttp.status=== 200){
			$(".back-grey1").html(xmlhttp.responseText+$("#l_past_events").html());
			// $("#l_events").removeAttr('id');
			// console.log(xmlhttp.responseText+$("#l_past_events").html());
			history.pushState($(".back-grey1").html(), null, "");
		}
	}
	xmlhttp.send();
}

function readMorePast(post_id){
	var xmlhttp;
	xmlhttp= new XMLHttpRequest();
	xmlhttp.open("GET", "./wp-content/themes/2017S_Web_Engineering_WP/event_past.php?pid="+post_id, true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState=== 4&&xmlhttp.status=== 200){
			$(".back-grey1").html($("#l_events").html()+xmlhttp.responseText);
			// $("#l_past_events").removeAttr('id');
			history.pushState($(".back-grey1").html(), null, "");
		}
	}
	xmlhttp.send();
}

window.addEventListener('popstate', function(e) {
  var character = e.state;
  if (character != null) {
    $(".back-grey1").html(character);
  }
});

