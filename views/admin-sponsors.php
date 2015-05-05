<?php
include_once 'db/db_connect.php';
include_once 'db/functions.php';
 
sec_session_start();
if (login_check($mysqli) == true) : ?>
	<div class="col-sm-12 admin-sponsor-container">
		<div class="col-md-6 col-md-offset-3">
			<div class="col-sm-12 admin-add-sponsor-container">
				<h2 class="text-center">Sponsor Manager</h2>
				<p class="admin-twitter-description text-center">Add or remove sponsor images and links from your website</p>
				<div class="admin-add-image text-center">
					<p><span class="glyphicon glyphicon-plus"></span> Upload Sponsor Photo</p>
				</div>
				<input class="top-buffer-small form-control" name="sponsor-link" placeholder="Sponsor Website"></input>
				<button type="submit" class="center-block top-buffer-small btn btn-info">Add Sponsor</button>
			</div>
		</div>	
		<div class="col-sm-12 admin-sponsor-image-container">
			<div class="col-lg-3 col-md-4 col-sm-6 admin-sponsor-info">
				<div class="admin-sponsor-image">
					<img class="center-block" src="images/admin/sponsor/big-top-logo-colour.png">
					<div class="admin-upload-image-caption text-center"><span class="glyphicon glyphicon-camera"></span> Upload New Image</div>
				</div>
				<div class="col-sm-12 no-padding">
					<input class="admin-sponsor-link form-control" name="sponsor-link-1" value="http://www.bigtoptentrentals.com"></input>
				</div>
				<div class="col-sm-12 no-padding">
					<button type="submit" class="pull-right facebook-btn">Save</button>
					<button type="submit" class="pull-right facebook-btn facebook-btn-white">Delete</button>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 admin-sponsor-info">
				<div class="admin-sponsor-image">
					<img class="center-block" src="images/admin/sponsor/homestead-logo-colour.png">
					<div class="admin-upload-image-caption text-center"><span class="glyphicon glyphicon-camera"></span> Upload New Image</div>
				</div>
				<div class="col-sm-12 no-padding">
					<input class="admin-sponsor-link form-control" name="sponsor-link-1" value=""></input>
				</div>
				<div class="col-sm-12 no-padding">
					<button type="submit" class="pull-right facebook-btn">Save</button>
					<button type="submit" class="pull-right facebook-btn facebook-btn-white">Delete</button>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 admin-sponsor-info">
				<div class="admin-sponsor-image">
					<img class="center-block" src="images/admin/sponsor/u-of-a-logo-colour.png">
					<div class="admin-upload-image-caption text-center"><span class="glyphicon glyphicon-camera"></span> Upload New Image</div>
				</div>
				<div class="col-sm-12 no-padding">
					<input class="admin-sponsor-link form-control" name="sponsor-link-1" value="http://www.ualberta.ca"></input>
				</div>
				<div class="col-sm-12 no-padding">
					<button type="submit" class="pull-right facebook-btn">Save</button>
					<button type="submit" class="pull-right facebook-btn facebook-btn-white">Delete</button>
				</div>
			</div>
		</div>		
	</div>
<?php else : ?>
	<p>
    <span class="error">You are not authorized to access this page.</span> Please <a href="admin-login.php">login</a>.
    </p>
<?php endif; ?>