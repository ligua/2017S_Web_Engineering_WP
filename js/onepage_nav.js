function readMoreUp(post_id){
	var xmlhttp;
	xmlhttp= new XMLHttpRequest();
	xmlhttp.open("GET", "./wp-content/themes/2017S_Web_Engineering_WP/event_up.php?pid="+post_id, true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState=== 4&&xmlhttp.status=== 200){
			// console.log(xmlhttp.responseText);
			$(".back-grey1").html(xmlhttp.responseText);
			history.pushState(xmlhttp.responseText, null, "event-detail");
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
			// console.log(xmlhttp.responseText);
			$(".back-grey1").html(xmlhttp.responseText);
			history.pushState(xmlhttp.responseText, null, "event-detail");
		}
	}
	xmlhttp.send();
}

window.addEventListener('popstate', function(e) {
  var character = e.state;
  // console.log(e.url);
  // console.log(character);
  if (character != null) {
    $(".back-grey1").html(character);
  }
});

