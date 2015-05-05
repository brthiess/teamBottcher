$(document).ready(function() {

	//Upon loading, load default page
	load_page("admin-add-post");

	$(".admin-option").click(function(event){
		load_page($(this).attr("id"));
	});
});

//Displays a quick confirmation to inform the user of an event
//location = class of div
function display_confirmation(location, message, type){
	//If type is delete, add a question modal to confirm deletion
	if (type == "delete"){
		$(".confirmation-modal").remove();
		$("." + location).append("<div class='confirmation-modal'><div class='center-block text-center modal-message'><p>Delete Post? <button class='delete-post-modal-btn facebook-btn'>Delete</button><button class='cancel-deletion-modal-btn facebook-btn-white facebook-btn'>Cancel</button></p></div></div>");
		$(".confirmation-modal").css("opacity","1");
		//When they click delete
		$("body").on("click", ".delete-post-modal-btn", function(){
			$(".confirmation-modal").css("opacity","0");
			//Delete Post
			$.ajax({type: "post",
				url: "db/db-delete-post.php",
				data: {"post_id": post_id},
				success:function(data){
					display_confirmation("admin-console", "Post Deleted");
					$("#post-content").val("");
					$("#post-title").val("");
					$("#post-date").val("");
				}
			});
		});
		$("body").on("click", ".cancel-deletion-modal-btn", function(){
			$(".confirmation-modal").css("opacity","0");
		});
	}
	else {
		$(".confirmation-modal").remove();
		$("." + location).append("<div class='confirmation-modal'><div class='center-block text-center modal-message'><p>" + message + "</p></div></div>");
		$(".confirmation-modal").css("opacity","1");
		setTimeout(function() {
			$(".confirmation-modal").css("opacity","0");
		}, 2000);
	}
}


//Loads the given admin page
function load_page(id){
	$(".admin-console").html("");
	var target = document.getElementById('admin-console');
	var spinner = new Spinner(opts).spin(target);
	$(".admin-option").removeClass("active");
	$("#" + id).addClass("active");
	
	$(".admin-console").load(id + ".php", function() {
		spinner.stop();
	});
}