<?php 
 # Install PSR-0-compatible class autoloader
spl_autoload_register(function($class){
	require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\Markdown;
?>

<div class="col-sm-12">
	<div class="news-container">
		<div class="news-entry">
			<div class="news-entry-title">
				Team Bottcher Wins the German Masters!
			</div>
			
			<div class="news-entry-date">
				January 24, 2015
			</div>
			<div class="news-entry-text">
				<?php echo Markdown::defaultTransform("![German Masters](https://pbs.twimg.com/media/B8NMUewIYAEz7hU.jpg)  
	As the 2015 Scotties Tournament of Hearts takes place in Moose Jaw, Saskatchewan we’d like to thank all of our fans for their support throughout the season.  
	We encourage you to follow our adventure across all of our social channels while we’re here at the Scotties.  
	You can post messages to our Facebook page, get up to the minute and non-TV game updates from our Twitter page, read a collection of articles laid out in a magazine format by subscribing to our Flipboard or follow us on Instagram for our photos.  We are trying to bring you closer than every before to the Scotties action through all of our social channels throughout the event.  
	
	TSN and the Canadian Curling Association also provide updates.  The full Scotties draw schedule can be found here.  The full TSN television schedule can be found here.  
	  
	We are currently 6-4 with our next Scotties game coming up on Thursday, February 20th at 9 a.m. CT against Team Northern Ontario.  
  	
	We want to thank everyone back home for their warm words of encouragement and also for their generosity. Ahead of the opening rock, several fans gathered at our home club for a special Sandra Schmirler Foundation fundraiser.  The Ottawa Curling Club hosted a breakfast/brunch buffet on Saturday, February 14th. Proceeds from a raffle prize for a Team Canada jacket signed by all of us, along with the breakfast proceeds tallied $1,500 and was donated to the Sandra Schmirler Foundation Telethon on Sunday, February 15th.  
	  
	This year's telethon raised over $325,000!  Thank you to all who donated and who continue to support this wonderful foundation.  
		 ");?>
			</div>
		</div>
		<div class="news-entry">
			<div class="news-entry-title">
				Team Bottcher Heading Off To Germany to Prepare For Provincials
			</div>
			
			<div class="news-entry-date">
				January 13, 2015
			</div>
			<div class="news-entry-text">
			<?php echo Markdown::defaultTransform("EDMONTON - It almost feels like Brendan Bottcher’s Saville Centre rink of Tom Appelman, Brad Thiessen and Karrick Martin is doing it backward.

While most teams earn a trip overseas by winning a Canadian title, Bottcher opted to take a trip to Europe so he could hopefully win the Boston Pizza Cup Alberta men’s curling championship Feb. 4-8 at Wainwright.

Bottcher entered the German Masters, which starts Friday at Hamburg, Germany, to play some competitive games.

“We’re going there mostly for preparation because it’s the week before provincials,” Bottcher said. “Because we got the direct bye into provincials, we had a month and a half, two months where we don’t have any games.”

Unless teams qualify for the Continental Cup or Pinty’s Skins Game, there aren’t any events in Canada featuring good ice and top-calibre competition from early to mid-December until after the provincials in early February.

It certainly didn’t hurt that Bottcher, a University of Alberta student, won enough money ($44,750) on the World Curling Tour this season to cover the rink’s expenses.

“Last year, we tried to practise as much as we could,” said Bottcher, who also had a bye to the 2014 championship.

“We threw a ton of rocks, but we didn’t throw a ton of rocks in curling games and there is a bit of a difference there. We were out here (at the Saville Community Sports Centre) three or four times a week with Rob (Krepps, their coach) and much more than that by ourselves.

“We got to provincials and we just didn’t have that game practice that we needed. We were just a little bit slow, we didn’t have our systems down, it was a bit of a struggle for us.

“We wanted to build that in this year and make sure that we were prepared,” Bottcher said about the trip to Germany.");?>
			</div>
		</div>
	</div>
</div>