<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<body>
<?php
	$page = "Contact";
	include 'navbar.php';?>
<div class="wrapper">
	<div class="row top-buffer">
	</div>
	<div class="col-sm-6" id="patient-login-form"> 
		<div class="col-sm-12 contact-header text-center">
			<h1>Contact Us</h1>
		</div>
		<div class="col-sm-8 login-form col-sm-offset-2">
			<form class="form-group" action="send-message.php" method="post">
				<div class="row top-buffer-small">
					<input type="text" class="form-control" id="name" name="name" placeholder="Name">
				</div>
				<div class="row top-buffer-small">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email">
				</div>
				<div class="row top-buffer-small">
					<textarea class="form-control" id="input" name="input" placeholder="Questions, Comments or Anything" rows="5"></textarea>
				</div>
				<input type="hidden" name="type" value="patient"/>
				<div class="row top-buffer-small">
					<button type="submit" class="btn btn-block btn-info"><h3>Send<h3></button> 
				</div>
			</form>
		</div>
	</div>
	<div class="col-sm-6 contact-icons-container">
		<div class="col-sm-12 contact-icon">
			<img src="images/facebook-icon-color.png"> facebook.com/teambottcher
		</div>
		<div class="col-sm-12 contact-icon">
			<img src="images/twitter-icon-color.png"> @TeamBottcher
		</div>
		<div class="col-sm-12 contact-icon">
			<img src="images/email-icon-color.png"> contact@teambottcher.ca
		</div>
	</div>
</div>

	<?php include "footer.php";?>

</body>
</html>