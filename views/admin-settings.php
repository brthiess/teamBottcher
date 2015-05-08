<?php
include_once 'db/db_connect.php';
include_once 'db/functions.php';
 
sec_session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once "header.php";?>
<link rel="stylesheet" href="css/admin-styles.css">
<script src="js/password-checking.js"></script>
<script src="js/sha512.js"></script>

<body>

        <?php if (login_check($mysqli) == true) : ?>
			<?php include 'navbar-admin.php';?>
			
			<h2 class="col-sm-12 text-center">
				Admin Settings
			</h2>
			
			<div class="top-buffer col-sm-4 col-sm-offset-4">
				<div id="password-form" class="general-form">
					<form class="form-group" method="post">
						<input class="top-buffer-small form-control" type="password" id="old-password" name="old-password" placeholder="Old Password">
						<input class="top-buffer-small form-control" type="password" id="new-password" name="new-password" placeholder="New Password">
						<input class="top-buffer-small form-control" type="password" id="new-password-confirm" name="new-password-confirm" placeholder="Confirm New Password">
						<div class="change-password-container"><fieldset disabled><button type="submit" class="change-password-btn top-buffer-small btn btn-block btn-info">Change Password</button><fieldset></div>
					</form>
				</div>
			</div>
				<div class="top-buffer col-sm-4 col-sm-offset-4">
					<h2>Password Rules:</h2>
					<ul>
					<li class="admin-black">Must be greater than 8 characters</li>
					</ul>
					
				</div>
				
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="admin-login.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>