<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<body>
<div class="modal-image">	

	<div class="modal-image-wrapper">
		<img id="modal-image" class="img-responsive center-block" src="images/gallery/1.jpg">
		<div class="close-modal">X
		</div>
	</div>
</div>
<div class="gallery-wrapper">
<?php
	$page = "Gallery";
	include 'navbar.php';?>
	

<div class="wrapper">
	<div class="row top-buffer">
	</div>
	<div class="row top-buffer">
	</div>

	  <div class="col-sm-3">
		<a class="thumbnail" id="1">
		  <img src="images/gallery/1.jpg">
		</a>
	  </div>
	  <div class="col-sm-3">
		<a class="thumbnail">
		  <img src="images/gallery/2.jpg">
		</a>
	  </div>
	  <div class="col-sm-3">
		<a class="thumbnail">
		  <img src="images/gallery/3.jpg">
		</a>
	  </div>
	  <div class="col-sm-3">
		<a class="thumbnail">
		  <img src="images/gallery/1.jpg">
		</a>
	  </div>
	  <div class="col-sm-3">
		<a class="thumbnail">
		  <img src="images/gallery/2.jpg">
		</a>
	  </div>
	  <div class="col-sm-3">
		<a class="thumbnail">
		  <img src="images/gallery/3.jpg">
		</a>
	  </div>
</div>
<?php include "footer.php"?>
</div>
</body>

</html>
