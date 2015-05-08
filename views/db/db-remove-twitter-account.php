<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'db.php';

	$username = $_POST["username"];

	remove_twitter_account($mysqli, $username);


?>