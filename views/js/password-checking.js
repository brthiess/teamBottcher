var LOADING = 2;

$(document).ready(function() {
	$(".form-control").keyup(function() {
		checkPasswords();		
	});	
	
	//Check to see if the old db password matches the input
	$("#old-password").change(function() {
		var oldPassword = $("#old-password").val();
		var oldPasswordHash = hex_sha512(oldPassword);
		setCorrect("#old-password", LOADING);
		$.ajax({method: "post",
				url: "db/check-password.php",
		data: {"old-password" : oldPasswordHash},
				success: function(data){
					if (data == true){
						setCorrect("#old-password", true);
						if (allFieldsCorrect()) {
							$(".change-password-container").html('<button type="submit" class="change-password-btn top-buffer-small btn btn-block btn-info">Change Password</button>');
						}
						else {
							$(".change-password-container").html('<fieldset disabled><button type="submit" class="change-password-btn top-buffer-small btn btn-block btn-info">Change Password</button></fieldset>');
						}
					}
					else {
						setCorrect("#old-password", false);
						if (allFieldsCorrect()) {
							$(".change-password-container").html('<button type="submit" class="change-password-btn top-buffer-small btn btn-block btn-info">Change Password</button>');
						}
						else {
							$(".change-password-container").html('<fieldset disabled><button type="submit" class="change-password-btn top-buffer-small btn btn-block btn-info">Change Password</button></fieldset>');
						}
					}
				}
			});
	});
	
	$("body").on("click", ".change-password-btn", function() {
		event.preventDefault();
		changePassword();
		console.log("change password btn clicked");
	});
	
});

//Check the password inputs to make sure they match and that the old password matches as well
function checkPasswords() {	
	var oldPassword = $("#old-password").val();
	var newPassword = $("#new-password").val();
	var newPasswordConfirm = $("#new-password-confirm").val();
	
	//If the fields match
	if (newPassword == newPasswordConfirm && newPassword.length > 8) {
		setCorrect("#new-password", true);
		setCorrect("#new-password-confirm", true);
	}
	else if (newPassword.length > 0 && newPasswordConfirm.length > 0) {
		setCorrect("#new-password", false);
		setCorrect("#new-password-confirm", false);
	}
	
		console.log( $("#old-password").attr("class"));
		console.log( $("#new-password").attr("class"));
		console.log( $("#new-password-confirm").attr("class"));
	
	if (allFieldsCorrect()) {
		$(".change-password-container").html('<button type="submit" class="change-password-btn top-buffer-small btn btn-block btn-info">Change Password</button>');
	}
	else {
		$(".change-password-container").html('<fieldset disabled><button type="submit" class="change-password-btn top-buffer-small btn btn-block btn-info">Change Password</button></fieldset>');
	}
}

function changePassword() {
	var newPassword = $("#new-password").val();
	var newPasswordHash = hex_sha512(newPassword);
	newPassword = '';
	$.ajax ({
		url: "db/change-password.php",
		method: "post",
		data: {"new-password" : newPasswordHash},
		success: function(data){
			console.log(data);
		}
	});
	
}

//Set the input to the correct view or false view
function setCorrect(id, correct){
	input = "input-wrong";
	opposite_one = "input-correct";
	opposite_two = "input-loading";
	
	if (correct){
		input = "input-correct";
		opposite_one = "input-wrong";
		opposite_two = "input-loading";
	}
	if (correct == LOADING) {
		input = "input-loading";
		opposite_one = "input-wrong";
		opposite_two = "input-correct";
		
	}
	$(id).addClass(input); 
	$(id).removeClass(opposite_one); 
	$(id).removeClass(opposite_two); 
}

function allFieldsCorrect() {
	var correct = true;
	$('.form-control').each(function() {
		if ($(this).attr("class").indexOf("input-correct") == -1){
			correct = false;
		}
	});
	
	return correct;
}