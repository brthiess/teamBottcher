<div class="col-sm-6 col-sm-offset-3">
		<div class="twitter-container">
			<h2 class="text-center">Twitter Manager</h2>
			<p class="admin-twitter-description text-center">Add or remove twitter accounts from your website twitter feed</p>
			<div class="top-buffer add-twitter">
				<p class="col-md-1">@</p><input class="col-md-7 form-control admin-twitter-name-input" name="twitter-name" placeholder="Username"></input><button class="col-md-4 btn btn-info btn-block add-user-btn">Add User</button>
			</div>
			<br><br>
			<?php include_once "db/db-get-twitter-accounts.php";
			foreach ($twitter_accounts as $username){
				echo '<div class="top-buffer twitter-user text-center center-block" id="' . $username[0] . '">
				<p>@' . $username[0] . '</p> <div class="remove-user-btn"><span class="glyphicon glyphicon-remove-circle remove-user-btn"></span> Remove</div>
			</div>';
			}
			?>
		</div>		
	</div>