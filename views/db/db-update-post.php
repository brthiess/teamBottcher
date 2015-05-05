<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();

if (login_check($mysqli) == true){
	$post_title = $_POST["post_title"];
	$post_date = $_POST["post_date"];
	$post_content = $_POST["post_content"];
	$post_id = $_POST["post_id"];
	$draft = $_POST["draft"];
		
	include_once 'db.php';
	$id = array("post_id" => update_post($mysqli, $post_id, $post_title, $post_content, $post_date, $draft));
	echo json_encode($id);
}