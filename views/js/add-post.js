var publish_id = -1;
var draft_id = -1;
var post_id = -1;

$(document).ready(function() {
	
	//Initializing date field
	$( "#post-date" ).datepicker({dateFormat: 'yy-mm-dd'});
	
	//For initializing text editor
	var editor = new wysihtml5.Editor("post-content", { // id of textarea element
	  toolbar:      "add-post-toolbar", // id of toolbar element
	  parserRules:  wysihtml5ParserRules, // defined in parser rules set 
	  stylesheets: ["http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css", "css/admin-text-editor.css"]
	});
	
	//Activated when user clicks to save their blog post
	$(".save-post-btn").click(function(){
		modify_post("save_draft");
		});
	$(".preview-post-btn").click(function(){
		preview_post();
		});
	$(".publish-post-btn").click(function(){
		modify_post("publish");
		});
	$(".delete-post-btn").click(function(){
		modify_post("delete");
		});
	
});

function modify_post(mod_type){
	var target = document.getElementById('admin-console');
	var spinner = new Spinner(opts).spin(target);
	
	var post_content = $("#post-content").val();
	var post_title = $("#post-title").val();
	var post_date = $("#post-date").val();
	var draft = 1;
	

	var type = "update";
	
	var success_message = "Default Message";
	//Check type of post (Draft, Publish, Preview Or Delete)
	if (mod_type == "save_draft"){
		draft = 1;
		//If this is a new post, add it to the DB.  Otherwise only update
		if (draft_id == -1){
			type = "add";
		}
		else {
			type = "update";
			post_id = draft_id;
		}
		success_message = "Draft Saved <span class='glyphicon glyphicon-ok'></span>";
	}
	else if (mod_type == "publish"){
		draft = 0;
		//If this is a new post, add it to the DB.  Otherwise only update
		if (publish_id == -1){
			type = "add";
		}
		else {
			type = "update";
			post_id = publish_id;
		}
		success_message = "Post Published <span class='glyphicon glyphicon-ok'></span>";
	}
	else if (mod_type == "delete"){
		draft = 0;
		type = "delete";
		success_message = "Post Deleted <span class='glyphicon glyphicon-trash'></span>";
		post_id = publish_id;
		publish_id = -1;
		spinner.stop();
		delete_post(success_message, post_id);
		return;
	}
		$.ajax({type: "post",
				url: "db/db-" + type + "-post.php",
				data: {"post_content":post_content, "post_title":post_title, "post_date": post_date, "draft": draft, "post_id": post_id},
				success:function(data){
					$(".error-log").html(data);						
					spinner.stop();
					//Get Post data (such as title, content, date)
					post_data = JSON.parse(data);
					if (mod_type == 'publish'){
						publish_id = post_data.post_id;
					}
					if (mod_type == 'save_draft'){
						draft_id = post_data.post_id;
					}
					display_confirmation("admin-console", success_message);
				}
		});
}

function preview_post(){
	var post_content = $("#post-content").val();
	var post_title = $("#post-title").val();

	var post_date = new Date($("#post-date").val());
	var post_month = month_to_string(post_date.getMonth());
	var post_year = post_date.getFullYear();
	var post_day = post_date.getUTCDate();
	
	
	$(".post-preview").html('<div class="col-sm-12 blog-line top-buffer">\
				<img class="img-responsive center-block" src="images/line-break.png">\
			</div>\
			<div class="row blog-entry" id="2">\
				<div class="col-sm-12">\
					<div class="col-sm-3 date">\
						<div class="day text-right">\
							<h1>' + post_day + '</h1>\
						</div>\
						<div class="month-year text-right">\
							<h4>' + post_month + ' ' + post_year + ' &nbsp </h4>\
						</div>				\
					</div>\
					<div class="col-sm-9 blog-entry-text">\
						<div class="col-sm-9 blog-entry-title">\
							<h3>' + post_title + '</h3>\
						</div>\
						<div class="col-sm-9 blog-entry-text-text">\
							<br>' + post_content + '\
						</div>\
					</div>\
				</div>\
			</div>');
}

function delete_post(success_message, id){
	display_confirmation("admin-console", success_message, "delete");
}

function month_to_string(month_number){
	if (month_number == 0)
		return "JAN";
	else if (month_number == 1){
		return "FEB"
	}
	else if (month_number == 2){
		return "MAR"
	}
	else if (month_number == 3){
		return "APR"
	}
	else if (month_number == 4){
		return "MAY"
	}
	else if (month_number == 5){
		return "JUN"
	}	
	else if (month_number == 6){
		return "JUL"
	}
	else if (month_number == 7){
		return "AUG"
	}
	else if (month_number == 8){
		return "SEP"
	}
	else if (month_number == 9){
		return "OCT"
	}
	else if (month_number == 10){
		return "NOV"
	}
	else if (month_number == 11){
		return "DEC"
	}
}