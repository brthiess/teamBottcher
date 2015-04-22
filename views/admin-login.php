<?php
include_once 'db/db_connect.php';
include_once 'db/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
	<?php include "header.php";?>
	<script type="text/JavaScript" src="js/sha512.js"></script> 
	<script type="text/JavaScript" src="js/forms.js"></script> 
	<body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
		<h2 class="col-sm-12 top-buffer text-center">Admin</h2>
		<div class="col-sm-4 col-sm-offset-4">
			<form action="db/process_login.php" method="post" name="login_form">                      
				<input class="form-control" type="text" name="email" placeholder="Email" />
				<input class="form-control" type="password" name="password" id="password" placeholder="Password"/>
				<input type="button" value="Login" class="btn btn-info btn-block" onclick="formhash(this.form, this.form.password);"></input>
				
			</form>
		</div>     
    </body>
</html>