<?php
/*
This file contains all of the functions for basic db management
*/


/******************
Blog Post Functions
*******************/

//Adds the specified post and returns its id
function add_post($mysqli, $title, $content, $post_date, $draft){
		$stmt = $mysqli->prepare("INSERT INTO post (title, content, post_date, draft) VALUES (?, ?, ?, ?)");
		$stmt->bind_param('sssi', $title, $content, $post_date, $draft);
		$stmt->execute();
		return $mysqli->insert_id;
}

function remove_post($mysqli, $id){
	$stmt = $mysqli->prepare("DELETE FROM post WHERE id = ?");
	$stmt->bind_param('i', $id);
	$stmt->execute();
}

//Updates the post and returns its id
function update_post($mysqli, $id, $title, $content, $post_date, $draft){
	
	$stmt = $mysqli->prepare("UPDATE post SET content = ?, 
											  post_date = ?,
											  title = ?,
											  draft = ?
										WHERE id = ?");
		$stmt->bind_param('sssii',$content, $post_date, $title, $draft, $id);
		$stmt->execute();
		return $id;		
}

function get_post($mysqli, $id){
	$stmt = $mysqli->prepare("SELECT * FROM post WHERE id = ?");
	$stmt->bind_param("s",$id);
	$stmt->execute();
	return $stmt->mysqli_fetch_all();
}

function add_twitter_account($mysqli, $username){
	$stmt = $mysqli->prepare("INSERT INTO twitter_accounts (username) VALUES(:username)" );
	$stmt->bindParam(":username", $username);
	$stmt->execute();
}

function remove_twitter_account($mysqli, $id){
	$stmt = $mysqli->prepare("DELETE FROM twitter_accounts WHERE id = :id");
	$stmt->bindParam(':id', $id);
	$stmt->execute();
}

function add_image($mysqli, $image){
	
}


?>