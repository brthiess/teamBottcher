<?php
include_once 'db/db_connect.php';
include_once 'db/functions.php';
 
sec_session_start();
if (login_check($mysqli) == true) : ?>

<div class="col-sm-10 col-sm-offset-1">
	<div class="blog-post-container">
		<div class="blog-post-header col-sm-12">
			Manage Blog Posts
		</div>
		<div class="blog-post silver col-sm-12">
			<div class="col-sm-8">
				<div class="title">Blog Title</div><div class="date">03/01/1990</div>
				<div class="short-preview">This is a short preview blah blah blah ...</div>
			</div>
			<div class="col-sm-4 text-right">
				<span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp
				<span class="glyphicon glyphicon-trash"></span>
			</div>
		</div>
		<div class="blog-post white col-sm-12">
			<div class="col-sm-8">
				<div class="title">Blog Title</div><div class="date">03/01/1990</div>
				<div class="short-preview">This is a short preview blah blah blah ...</div>
			</div>
			<div class="col-sm-4 text-right">
				<span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp
				<span class="glyphicon glyphicon-trash"></span>
			</div>
		</div>
		<div class="blog-post silver col-sm-12">
			<div class="col-sm-8">
				<div class="title">Blog Title</div><div class="date">03/01/1990</div>
				<div class="short-preview">This is a short preview blah blah blah ...</div>
			</div>
			<div class="col-sm-4 text-right">
				<span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp
				<span class="glyphicon glyphicon-trash"></span>
			</div>
		</div>
	</div>
</div>

<?php else : ?>
	<p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="admin-login.php">login</a>.
    </p>
<?php endif; ?>