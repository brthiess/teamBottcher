<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
	<body>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Team Bottcher</h4>		
      </div>
      <div class="modal-body">
        <img class="img-responsive" id="modal-image" src="images/gallery/1.jpg">
      </div>
    </div>
  </div>
</div>

			<?php
				$page = "Gallery";
				include 'navbar.php';?>
				<div class="wrapper">
					<div class="row top-buffer">
					</div>
					<div class="row top-buffer">
					</div>

					  <div class="col-sm-3">
						<a class="thumbnail" id="1" data-toggle="modal" data-target="#myModal">
						  <img src="images/gallery/1.jpg">
						</a>
					  </div>
					  <div class="col-sm-3">
						<a class="thumbnail" id="2" data-toggle="modal" data-target="#myModal">
						  <img src="images/gallery/2.jpg" >
						</a>
					  </div>
					  <div class="col-sm-3">
						<a class="thumbnail" data-toggle="modal" data-target="#myModal">
						  <img src="images/gallery/3.jpg">
						</a>
					  </div>
				</div>
			<?php include "footer.php"?>
	</body>
</html>
