$( document ).ready(function() {
	$(".player-social-icons img").hover(
				function() {	
					var string = $(this).attr("src");
					string = string.replace("white", "color");
					console.log(string);
					$(this).attr("src", string);
				}, function() {
					var string = $(this).attr("src");
					string = string.replace("color", "white");
					$(this).attr("src", string);
				});
});