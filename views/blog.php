<!DOCTYPE html>
<html lang="en">
<?php include "header.php";?>
<body>

<?php
	$page = "Blog";
	include 'navbar.php';
?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog center-block">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Team Bottcher</h4>		
      </div>
      <div class="modal-body">
        <img class="img-responsive" id="modal-image" src="images/blog/spielplan.png">
      </div>
    </div>
  </div>
</div>

<br><br><br><br>

	<div class="col-sm-12 blog-container">
		<div class="row">
			<div class="blog-title text-center col-sm-12">
					<h1>Blog</h1>
			</div>
			<div class="col-sm-12 blog-line top-buffer">
				<img class="img-responsive center-block" src="images/line-break.png">
			</div>
		</div>
		<div class="row blog-entry" id="2">
			<div class="col-sm-12">
				<div class="col-sm-3 date">
					<div class="day text-right">
						<h1>24</h1>
					</div>
					<div class="month-year text-right">
						<h4>JAN 2015&nbsp </h4>
					</div>				
				</div>
				<div class="col-sm-9 blog-entry-text">
					<div class="col-sm-9 blog-entry-title">
						<h3>We are the German Masters!</h3>
					</div>
					<div class="col-sm-9 blog-entry-text-text">
						<img class="img-responsive" src="images/blog/germany.jpg">
						<br>Well it looks like our trip to Germany was a success.  Not only did we get the chance to eat some delicious wiener schnitzel on the Reeperbahn, but we also won the tournament!  We played a great final against Sven Michel and we were lucky enough to come out on top.  Huge thanks to the ice crew at the Hamburg curling rink for making great ice all week and making us feel at home all the way over in Germany.  Thanks to all the teams there for some great games.  We can't wait to get back there next year!  Now it's off to to the BP Cup in Wainwright for a chance to represent Alberta at the Brier!
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 blog-line top-buffer">
			<img class="img-responsive center-block" src="images/line-break.png">
		</div>
		<div class="row blog-entry" id="1">
			<div class="col-sm-12">
				<div class="col-sm-3 date">
					<div class="day text-right">
						<h1>10</h1>
					</div>
					<div class="month-year text-right">
						<h4>JAN 2015&nbsp </h4>
					</div>				
				</div>
				<div class="col-sm-9 blog-entry-text">
					<div class="col-sm-9 blog-entry-title">
						<h3>We Are Off To Germany!</h3>
					</div>
					<div class="col-sm-9 blog-entry-text-text">
						<img class="img-responsive" src="images/blog/germany-game.jpg">
						<br>We are off to Germany this week with three of us flying out Sunday and the coach and our second flying out later on Tuesday thanks to coaching and school commitments.  Here is the schedule for those following along.<br>
						<div class="col-sm-12">
							<a class="thumbnail" id="1" data-toggle="modal" data-target="#myModal">
								<img class="img-responsive" src="images/blog/spielplan.png"> 
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "footer.php";?>
</body>
</html>
