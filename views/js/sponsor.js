$( document ).ready(function() {
	$(".team-image-container img").hover(
				function() {	
					$(".team-image-container .caption").css("height", "100%");
					$(".team-image-container .caption-text").css("opacity", "1");
				}, function() {
					$(".team-image-container .caption").css("height", "0%");
					$(".team-image-container .caption-text").css("opacity", "0");
				});
	$(".team-image-container .caption").hover(
				function() {	
					$(".team-image-container .caption").css("height", "100%");
					$(".team-image-container .caption-text").css("opacity", "1");
				}, function() {
					$(".team-image-container .caption").css("height", "0%");
					$(".team-image-container .caption-text").css("opacity", "0");
				});
});