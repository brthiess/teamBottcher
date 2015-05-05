<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();

if (login_check($mysqli) == true){
	$post_id = $_POST["post_id"];
		
	include_once 'db.php';
	remove_post($mysqli, $post_id);
	echo $post_id;

}