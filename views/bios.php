<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<body>
<?php
	$page = 'Bios';
 include 'navbar.php';?>
<br>
<div class="col-sm-12 bio-container">
	<div class="bio-header team-bio">
		<img src="images/team-bio.jpg">
		<div class="bio-title text-center col-sm-12">
			<h1>Our Team</h1>
		</div>
	</div>
	<div class="bio-team-description-first">
		<div class="bio-team-description-first-title col-sm-12 text-center">
			<h2>The Team</h2>
		</div>
		
		<div class="text col-sm-10 col-sm-offset-1 text-center">
			Team Bottcher is a talented curling team working with the U of A to become the best in their sport.  They work hard.  They've built their team with the goal of competing for Olympic Gold in 2018 in South Korea.  
		</div>
	</div>
	<div class="bio-team-description col-sm-12 text-center">
		<div class="col-sm-12">
			<h2>Players</h2>
			<br><br><br><br><br>
		</div>		
		<div class="col-lg-5ths">
			<div class="bio-image-wrapper center-block">
				<a href="#karrick-bio"><img src="images/bios/karrick-gray.jpg"></a>
			</div>
		</div>
		<div class="col-lg-5ths">
			<div class="bio-image-wrapper center-block">
				<a href="#brad-bio"><img src="images/bios/brad-gray.jpg"></a>
			</div>
		</div>
		<div class="col-lg-5ths">
			<div class="bio-image-wrapper center-block">
				<a href="#rob-bio"><img src="images/bios/rob-gray.jpg"></a>
			</div>
		</div>
		<div class="col-lg-5ths">
			<div class="bio-image-wrapper center-block">
				<a href="#tom-bio"><img src="images/bios/tom-gray.jpg"></a>
			</div>
		</div>
		<div class="col-lg-5ths">
			<div class="bio-image-wrapper center-block">
				<a href="#brendan-bio"><img src="images/bios/brendan-gray.jpg"></a>
			</div>
		</div>
	</div>

	<div class="col-sm-12 player-bio brendan-bio" id="brendan-bio">
		<img src="/images/bios/brendan-background.jpg">
		<div class="brendan-text">
			<div class="name">
				<h2>Brendan Bottcher</h2>
			</div>
			<div class="position">
				<h3>Skip | Started Curling: 2002 <br>Resides: Sherwood Park, AB </h3>
			</div>
		</div>
	</div>
	<div class="col-sm-12 player-bio tom-bio" id="tom-bio">
		<img src="/images/bios/tom-background.jpg">
	</div>
	
	<div class="col-sm-12 player-bio brad-bio" id="brad-bio">
		<img src="/images/bios/brad-background.jpg">
	</div>

	<div class="col-sm-12 player-bio karrick-bio" id="karrick-bio">
		<img src="/images/bios/karrick-background.jpg">
		<div class="karrick-text">
			<div class="name">
				<h2>Karrick Martin</h2>
			</div>
			<div class="position">
				<h3>Lead | Started Curling: 2005 <br>Resides: Edmonton, AB </h3>
			</div>
		</div>
	</div>
	<div class="col-sm-12 player-bio rob-bio" id="rob-bio">
		<img src="/images/bios/rob-background.jpg">
		<div class="rob-text">
			<div class="name">
				<h2>Rob Krepps</h2>
			</div>
			<div class="position">
				<h3>Coach | Started Curling: 1887 <br>Resides: Edmonton, AB </h3>
			</div>
		</div>
	</div>

</div>
	<?php include "footer.php";?>
</body>
</html>
