// function isInViewport(element) {
// 	var rect = element.getBoundingClientRect();
// 	var html = document.documentElement;
// 	return (
// 		rect.top >= 0 &&
// 		rect.left >= 0 &&
// 		rect.bottom <= (window.innerHeight || html.clientHeight) &&
// 		rect.right <= (window.innerWidth || html.clientWidth)
// 	);
// }

function isInPartViewportVertical(element) {
	var rect = element.getBoundingClientRect();
	var html = document.documentElement;
	return (
		rect.bottom >= 0 &&
		rect.top <= (window.innerHeight || html.clientHeight)
	);
}

// var newEle = ele.cloneNode(true);
// ele.parentNode.replaceChild(newEle, ele);

$(document).scroll(
	function() {
		var ele = document.getElementById("welcome");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("l_high_quality");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("only_best");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).ready(
	function() {
		var ele = document.getElementById("welcome");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).ready(
	function() {
		var ele = document.getElementById("l_high_quality");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).ready(
	function() {
		var ele = document.getElementById("only_best");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

// $(document).scroll(
// 	function() {
// 		var ele = document.getElementById("menu-texts");
// 		console.log(isInPartViewportVertical(ele));
// 		if (isInPartViewportVertical(ele)) {
// 			ele.style.animationPlayState = "running";
// 		}
// 	}
// );

// $(document).scroll(
// 	function() {
// 		var ele = document.getElementById("menu-imgs");
// 		console.log(isInPartViewportVertical(ele));
// 		if (isInPartViewportVertical(ele)) {
// 			ele.style.animationPlayState = "running";
// 		}
// 	}
// );

$(document).scroll(
	function() {
		var ele = document.getElementById("events");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("l_events");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("l_past_events");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("h_contact");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("h_book2");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("h_opening_hour_contracts");
		if (ele != null && isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);