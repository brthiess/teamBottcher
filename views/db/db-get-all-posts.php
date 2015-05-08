<?php
include_once 'db_connect.php';
include_once 'functions.php';
include_once 'db.php';

	echo json_encode(get_all_posts($mysqli));

?>

