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
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("l_high_quality");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("only_best");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).ready(
	function() {
		var ele = document.getElementById("welcome");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).ready(
	function() {
		var ele = document.getElementById("l_high_quality");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).ready(
	function() {
		var ele = document.getElementById("only_best");
		if (isInPartViewportVertical(ele)) {
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
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("l_events");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("l_past_events");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("h_contact");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("h_book2");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);

$(document).scroll(
	function() {
		var ele = document.getElementById("h_opening_hour_contracts");
		if (isInPartViewportVertical(ele)) {
			ele.style.animationPlayState = "running";
		}
	}
);