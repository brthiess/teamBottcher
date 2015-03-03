$( document ).ready(function() {
	$(".wrapper img").click(function() {
		var image = $( this ).attr("src");
		$("#modal-image").attr("src", image);
		$(".modal-image").css("opacity", "1");
		$(".modal-image").css("z-index", "99");	

		$(".gallery-wrapper").css("-webkit-filter", "blur(2px)");
		$(".gallery-wrapper").css("-ms-filter", "blur(2px)");
		$(".gallery-wrapper").css("-0-filter", "blur(2px)");
		$(".gallery-wrapper").css("-moz-filter", "blur(2px)");
		$(".gallery-wrapper").css("filter", "blur(2px)");
	});
});