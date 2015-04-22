<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<body>
<?php include 'navbar.php';?>
<div class="wrapper parallax">
<!--Check for IE-->
<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false  || 
		strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:10.0') !== false ||
		strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:9.0') !== false ||
		strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:8.0') !== false ||
		strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:7.0') !== false ||
		strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:6.0') !== false
		) {
			echo '
					<div class="jumbotron-wrapper">
						<div class="col-sm-12 main-image">
							<img src="images/front-page/brendan-background.jpg" alt="">
							<div class="title">Team Bottcher</div>
							<div class="players">Brendan | Tom | Brad | Karrick</div>
						</div>
					</div>';
		}
		else {
			echo '
				<div class="jumbotron-wrapper parallax__group">
					<div class="col-sm-12 main-image parallax__layer parallax__layer--back">
						<img src="images/front-page/brendan-background.jpg" alt="">
						<div class="title">Team Bottcher</div>
						<div class="players">Brendan | Tom | Brad | Karrick</div>			
					</div>
				</div>';			
		}

	?>
	
	


	<?php include 'team.php';?>


	<?php include 'news.php';?>

	<?php include "videos.php";?>

	<?php include "sponsors-section.php";?>


	<?php include "footer.php";?>
</div>
</body>
</html>