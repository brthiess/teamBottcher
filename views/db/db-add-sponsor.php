<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'db.php';

	$sponsor_image = $_POST["sponsor_image"];
	$sponsor_link = $_POST["sponsor_link"];

	$id = array("sponsor_id" => add_sponsor($mysqli, $sponsor_image, $sponsor_link));
	echo json_encode($id);

?>