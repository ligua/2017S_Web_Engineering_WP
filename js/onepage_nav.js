function loadXMLDoc(){
	var xmlhttp;
	xmlhttp= new XMLHttpRequest();
	xmlhttp.open("GET", "./wp-content/themes/2017S_Web_Engineering_WP/ajax_info.php", true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState=== 4&&xmlhttp.status=== 200){
			$(".event-content").html(xmlhttp.responseText);
		}
	}
	xmlhttp.send();
}

function readMore(post_id){
	var xmlhttp;
	xmlhttp= new XMLHttpRequest();
	xmlhttp.open("GET", "./wp-content/themes/2017S_Web_Engineering_WP/ajax_info.php?pid="+post_id, true);
	xmlhttp.onreadystatechange= function(){
		if(xmlhttp.readyState=== 4&&xmlhttp.status=== 200){
			$(".event-content").html(xmlhttp.responseText);
		}
	}
	xmlhttp.send();
                /*$.ajax({
                    type: "GET",
                    url: './wp-content/themes/2017S_Web_Engineering_WP/ajax_info.php',
                    data: { postid : post_id },
                    success: function(data){
                        console.log("success!");
                    }
                });*/
}
