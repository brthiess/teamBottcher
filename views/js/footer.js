$( document ).ready(function() {
   $("#facebook-icon").hover(
				function() {
					$(this).attr("src", "images/facebook-icon-color.png");
				}, function() {
					$(this).attr("src", "images/facebook-icon.png");
				});
	$("#twitter-icon").hover(
				function() {
					$(this).attr("src", "images/twitter-icon-color.png");
				}, function() {
					$(this).attr("src", "images/twitter-icon.png");
				});
   $("#email-icon").hover(
				function() {
					$(this).attr("src", "images/email-icon-color.png");
				}, function() {
					$(this).attr("src", "images/email-icon.png");
				});
});