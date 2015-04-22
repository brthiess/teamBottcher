<?php 

include_once 'db_connect.php';
include_once 'functions.php';

$new_password = $_POST["new-password"];

sec_session_start();

if (login_check($mysqli) == true) {
	$email = $_SESSION["email"];
	echo $new_password;
	if (change_password($email, $new_password, $mysqli) == true) {
		echo true;
	}
	else {
		echo false;
	}
}
else {
	echo false;
}
	
?>