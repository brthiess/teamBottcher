$(document).ready(function() {
	$("body").on("click", ".add-user-btn", function(){
		add_twitter_account($(".admin-twitter-name-input").val());
	});
	
	$("body").on("click", ".remove-user-btn", function(){
		remove_twitter_account($(this).parent().attr("id"));
	});
});

function add_twitter_account(username){
	var target = document.getElementById('admin-console');
	var spinner = new Spinner(opts).spin(target);
	$.ajax({type:"post",
			url: "db/db-add-twitter-account.php",
			data: {"username": username},
			success:function(data){
				console.log(data);
				spinner.stop();
				$(".twitter-container").append('<div class="top-buffer twitter-user text-center center-block" id="' + username + '">\
										<p>@' + username + '</p> <div class="remove-user-btn"><span class="glyphicon glyphicon-remove-circle remove-user-btn"></span> Remove</div>\
										</div>');
			}
			});
}


function remove_twitter_account(username){
	var target = document.getElementById('admin-console');
	var spinner = new Spinner(opts).spin(target);
	$.ajax({type:"post",
			url: "db/db-remove-twitter-account.php",
			data: {"username": username},
			success:function(data){
				spinner.stop();
				$("#" + username).remove();
			}
			});
}