<?php 

include_once 'db_connect.php';
include_once 'functions.php';

$old_password = $_POST["old-password"];

sec_session_start();

if (login_check($mysqli) == true) {
	$email = $_SESSION["email"];
	
	if (login($email, $old_password, $mysqli) == true) {
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