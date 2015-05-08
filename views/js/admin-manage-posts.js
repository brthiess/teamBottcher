var admin_blog_posts = "";
var all_posts;
$(document).ready(function() {	
	//Edit Post Click Handler
	$("body").on("click", ".admin-edit-post-icon", function(){
		admin_blog_posts = $(".admin-console").html();
		$(".admin-console").html("");
		var target = document.getElementById('admin-console');
		var spinner = new Spinner(opts).spin(target);
		
		var current_post_id = $(this).attr("id");
		current_post_id = current_post_id.split("-")[3];
		$(".admin-console").load("admin-add-post.php?update='true'", function() {
			spinner.stop();
			//Get the div id
			for (var i = 0; i < all_posts.length; i++){
				var html_id = -1;
				if (all_posts[i][0] == current_post_id){
					html_id = i;
					break;
				}
			}
			$("#post-title").val(all_posts[html_id][1]);
			$("#post-content").val(all_posts[html_id][2]);
			$("#post-date").val(all_posts[html_id][3]);
			//Check if post is a draft or real
			if (all_posts[html_id][4] == 1){
				draft_id = current_post_id;
			}
			else {
				publish_id = current_post_id;
			}
		});
	});
	
	//Delete Post Click Handler
	$("body").on("click", ".admin-delete-post-icon", function(){
		var post_number = $(this).attr("id");
		post_number = post_number.split("-")[3];
		
		console.log(post_number);
		
		display_confirmation("admin-console", "Delete Post?", "delete", post_number);
	});
	
	//Go Back Click Handler
	$("body").on("click", ".admin-back-btn", function(){
		load_page("admin-manage-posts");
	});
});

function print_posts(all_posts){
	$(".blog-post-container").html("");
	for (var i = 0; i < all_posts.length; i++){
		draft = "";
		if (all_posts[i][4] == 1){
			draft = "<div class='red-text bold pull-right'>Draft</div>";
		}
		 var color = "white";
		 if(i % 2 == 0) {
			 color = "silver"
		 }
		$(".blog-post-container").append('\
			<div class="blog-post '  + color + ' col-sm-12" id="admin-blog-entry-' + all_posts[i][0] +'">\
				<div class="col-sm-8">\
					' + draft + '<div class="title">' + all_posts[i][1] + '</div><div class="date">' + all_posts[i][3] + '</div>\
					<div class="short-preview">' + escapeHtml(all_posts[i][2].substring(0,75)) + '...</div>\
				</div>\
				<div class="col-sm-4 text-right">\
					<span class="glyphicon glyphicon-pencil admin-edit-post-icon admin-manage-icon" id="admin-blog-edit-' + all_posts[i][0] + '"></span>&nbsp&nbsp\
					<span class="glyphicon glyphicon-trash admin-delete-post-icon admin-manage-icon" id="admin-blog-delete-' + all_posts[i][0] + '"></span>\
				</div>\
			</div>\
		');
	}
}

function get_and_print_all_posts(){
	$.ajax({type:"post",
			url:"db/db-get-all-posts.php",
			success: function(data){
				all_posts = JSON.parse(data);
				print_posts(all_posts);
			}
	});	
}

function escapeHtml(unsafe) {
    return unsafe
         .replace(/&/g, "&amp;")
         .replace(/</g, "&lt;")
         .replace(/>/g, "&gt;")
         .replace(/"/g, "&quot;")
         .replace(/'/g, "&#039;");
 }
 
