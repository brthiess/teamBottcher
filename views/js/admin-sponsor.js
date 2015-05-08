$(document).ready(function(){
	$("body").on("click", ".admin-add-sponsor-btn", function() {
		add_sponsor();
	});
});
//Adds medical image to database and displays it to Radiologist
function add_image() {
	if (typeof imageNumber == "undefined") {
		imageNumber = 1;
	}
	
    var file    = document.querySelector('input[type=file]').files[0];

	//Check if file is image
	var re = /(?:\.([^.]+))?$/;	
	var ext = re.exec(file.name);
	if (ext[1] != 'jpg' 	&& 
		ext[1] != 'jpeg'	&& 
		ext[1] != 'gif' 	&& 
		ext[1] != 'png' 	&& 
		ext[1] != 'bmp' 	&& 
		ext[1] != 'dicom' 	){
		alert("Not an image or image is too large");
		return;
	}
      
	  var reader  = new FileReader();

       reader.onloadend = function () {	   
		   //Append New Image
		   $(".admin-add-image").html('<div class="col-sm-12 admin-sponsor-upload-image">\
															<div class="admin-sponsor-image">\
																<img class="center-block" id="sponsor-image" src="' + reader.result + '">\
																<div class="admin-upload-image-caption text-center"><span class="glyphicon glyphicon-camera"></span> Upload New Image</div>\
															</div>\
														</div>');
			imageNumber += 1;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           $("#img-" + imageNumber).attr("src", "");
       }
}

function add_sponsor(){
	var sponsor_link = $("#sponsor-link").val();
	var sponsor_image = $("#sponsor-image").attr("src");
	
	var target = document.getElementById('admin-console');
	var spinner = new Spinner(opts).spin(target);
	
	$.ajax({type:"post",
			url:"db/db-add-sponsor.php",
			data:{"sponsor_link":sponsor_link, "sponsor_image":sponsor_image},
			success:function(data){
				spinner.stop()
				$(".admin-sponsor-image-container").append('<div class="col-lg-3 col-md-4 col-sm-6 admin-sponsor-info">\
																<div class="admin-sponsor-image">\
																	<img class="center-block" src="' + sponsor_image + '">\
																	<div class="admin-upload-image-caption text-center"><span class="glyphicon glyphicon-camera"></span> Upload New Image</div>\
																</div>\
																<div class="col-sm-12 no-padding">\
																	<input class="admin-sponsor-link form-control" name="sponsor-link-1" value="' + sponsor_link + '"></input>\
																</div>\
																<div class="col-sm-12 no-padding">\
																	<button type="submit" class="pull-right facebook-btn">Save</button>\
																	<button type="submit" class="pull-right facebook-btn facebook-btn-white">Delete</button>\
																</div>\
															</div>');
			}
	});
}