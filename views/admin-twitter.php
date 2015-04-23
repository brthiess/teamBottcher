<?php
include_once 'db/db_connect.php';
include_once 'db/functions.php';
 
sec_session_start();
if (login_check($mysqli) == true) : ?>
	
	<div class="col-sm-6 col-sm-offset-3">
		<div class="twitter-container">
			<h2 class="text-center">Twitter Manager</h2>
			<p class="admin-twitter-description text-center">Add or remove twitter accounts from your website twitter feed</p>
			<div class="top-buffer add-twitter">
				<p class="col-xs-1">@</p><input class="col-xs-7 form-control" name="twitter-name" placeholder="Username"></input><button class="col-xs-4 btn btn-info btn-block">Add User</button>
			</div>
			<br><br>
			<div class="top-buffer twitter-user text-center center-block">
				<p>@bradcurler</p> <div><span class="glyphicon glyphicon-remove-circle"></span> Remove</div>
			</div>
			<div class="top-buffer text-center  twitter-user center-block">
				<p>@swiftchaser</p> <div><span class="glyphicon glyphicon-remove-circle"></span> Remove</div>
			</div>
			<div class="top-buffer text-center  twitter-user center-block">
				<p>@teambottcher</p> <div><span class="glyphicon glyphicon-remove-circle"></span> Remove</div>
			</div>
			<div class="top-buffer text-center twitter-user center-block">
				<p>@akotylak</p> <div><span class="glyphicon glyphicon-remove-circle"></span> Remove</div> 
			</div>
		</div>		
	</div>

<?php else : ?>
	<p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="admin-login.php">login</a>.
    </p>
<?php endif; ?>