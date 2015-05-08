<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'db.php';

	$post_title = $_POST["post_title"];
	$post_date = $_POST["post_date"];
	$post_content = $_POST["post_content"];
	$draft = $_POST["draft"];
	

	$id = array('post_id' => add_post($mysqli, $post_title, $post_content, $post_date, $draft));

	echo json_encode($id);


?>