
function readMoreUp(post_id){
	var xmlhttp;
	xmlhttp= new XMLHttpRequest();
	xmlhttp.open("GET", "./wp-content/themes/2017S_Web_Engineering_WP/event_up.php?pid="+post_id, true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState=== 4&&xmlhttp.status=== 200){
			$("#l_events").html(xmlhttp.responseText);
			$("#l_events").css('animation','none');
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
			$("#l_past_events").html(xmlhttp.responseText);
			$("#l_past_events").css('animation','none');
			history.pushState($(".back-grey1").html(), null, "");
		}
	}
	xmlhttp.send();
}

window.addEventListener('popstate', function(e) {
	var character = e.state;
	if (character != null) {
		$(".back-grey1").html(character);
		if($("#l_events")){
			$("#l_events").css('animation','none');
		}
		if($("#l_past_events")){
			$("#l_past_events").css('animation','none');
		}
	}
});