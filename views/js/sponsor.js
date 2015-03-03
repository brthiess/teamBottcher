$( document ).ready(function() {
	$(".sponsor-image img").hover(
				function() {	
					var string = $(this).attr("src");
					string = string.replace("gray", "colour");
					console.log(string);
					$(this).attr("src", string);
				}, function() {
					var string = $(this).attr("src");
					string = string.replace("colour", "gray");
					$(this).attr("src", string);
				});
});