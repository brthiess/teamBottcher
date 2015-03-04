<?php 
 # Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\Markdown;
?>
<div class="col-sm-12 news-container">
<br><br><br>
	<div class="blog-header text-center">
		<h2>Blog</h2>
	</div>
	<div class="col-sm-12 blog-line">
		<img class="img-responsive center-block" src="images/line-break.png">
	</div>
	<div class="news-entry top-buffer col-sm-12">
		<div class="news-entry-image col-sm-4">
			<img src="https://pbs.twimg.com/media/B8NMUewIYAEz7hU.jpg">
		</div>
		<div class="news-entry-substance col-sm-8">
			<div class="row">
				<div class="news-entry-title col-sm-12">
					Team Bottcher Wins the German Masters!
				</div>
			</div>
			<div class="row">
				<div class="news-entry-text col-sm-12">
					<?php echo Markdown::defaultTransform("As the 2015 Scotties Tournament of Hearts takes place in Moose Jaw, Saskatchewan we’d like to thank all of our fans for their support throughout the season.  
					We encourage you to follow our adventure across all of our social channels while we’re here at the Scotties.  
					You can post messages to our Facebook page, [...]");?>
				</div>
			</div>
		</div>
		<div class="row">		
			<div class="news-entry-date col-sm-6">
					January 24, 2015 <a href='#' class="news-entry-link">Read More</a>
			</div>
		</div>
	</div>	

	<div class="col-sm-12 blog-line top-buffer">
		<img class="img-responsive center-block" src="images/line-break.png">
	</div>
	<div class="news-entry top-buffer col-sm-12">
		<div class="news-entry-image col-sm-4">
			<img src="http://www.edmontonjournal.com/cms/binary/10749459.jpg">
		</div>
		<div class="news-entry-substance col-sm-8">
			<div class="row">
				<div class="news-entry-title col-sm-12">
					We are off to Germany!
				</div>
			</div>
			<div class="row">
				<div class="news-entry-text col-sm-12">
					<?php echo Markdown::defaultTransform("As the 2015 Scotties Tournament of Hearts takes place in Moose Jaw, Saskatchewan we’d like to thank all of our fans for their support throughout the season.  
					We encourage you to follow our adventure across all of our social channels while we’re here at the Scotties.  
					You can post messages to our Facebook page, [...]");?>
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="news-entry-date col-sm-6">
				January 14, 2015 <a href='#' class="news-entry-link">Read More</a>
			</div>
		</div>
	</div>	
</div>