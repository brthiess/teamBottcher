<?php
include_once 'db/db_connect.php';
include_once 'db/functions.php';
 
sec_session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once "header.php";?>
<body>

        <?php if (login_check($mysqli) == true) : ?>
			<?php include 'navbar-admin.php';?>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="admin-login.php">login</a>.
            </p>
        <?php endif; ?>
</body>
</html>