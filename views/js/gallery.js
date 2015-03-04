$( document ).ready(function() {
	$(".wrapper img").click(function() {
		var image = $( this ).attr("src");
		$("#modal-image").attr("src", image);
		$("#modal-image").attr("class", "center-block img-responsive");
	});

});