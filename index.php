
<?PHP 
include "anchorage_header.php"; 
?>

<div class="page">
	
	<!-- === Begin Header === -->
	<header class="main-header">
		<div class="header-border">
		<h1 class="welcome-txt">Welcome Home to the Anchorage</h1>
		<!-- Make trout larger as page viewer gets larger -->
		<img class="loon-img" src="img/loon-art-small.png" alt="the amazing loon">
		<!-- Lower case "Social Icons" are the round symbols
		and upper case are the other.  -->
		<ul class="social-sites">
			<li><a class="web_symbolsregular" href="https://twitter.com/pierceanson">t</a></li>
			<li><a class="web_symbolsregular" href="https://www.facebook.com/augerlake.anchorage/">f</a></li>
		</ul>
		<!-- Add facebook like and share button. Thanks to https://developers.facebook.com/docs/plugins/like-button#configurator for this! -->
		<!-- <div class="fb-like" data-href="https://www.facebook.com/augerlake.anchorage/" data-width="150" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div> -->
		</div>
		
	</header>
	<nav>
		<ul class="main-nav">
			<li class="current-page"><a href="index.php">Home</a>
			</li>
			<li><a href="anchorage.php">Anchorage</a></li>
			<li class=""><a href="lake.html">The Lake</a>
				<ul class="drop-nav">
					<li><a href="fishing.php">Fishing</a></li>
				</ul>
			</li>
			<li><a href="local-fun.php">Regional</a></li>	
			<!-- <li><a href="rental-info.html">Rent</a></li> -->
			<!-- <li><a href="project-test-results.html">Test Results</a></li> -->
		</ul>
	</nav>
	<!-- End Header -->
		
		<!-- === Begin Main Section -->
			<div class="main right-big">	
				<section class="blogs">
					<h2>The Anchorage at Auger Lake&hellip;</h2>		
					<div class="feature">
						<img src="img/lake-front.jpg" alt="a lovely camp by a lake">
						<div class="about">	
							<p><span class="larger">The Camp  </span> is located on the shore of <a href="https://www.google.com/maps/place/Augur+Lake/@44.4607866,-73.5363626,13z/data=!3m1!4b1!4m5!3m4!1s0x4cca5e122582aaad:0x82fd74b340a70019!8m2!3d44.4587608!4d-73.5002682">Auger Lake</a>, or Auger Pond as some locals still call it. Nestled between Lake Champlain and the Adirondacks, it's location allows easy access to both the civilized and not so civilized world.</p>
							<p>Come and take a look around at what this camp has to offer. It's rustic charm and peaceful evenings will not cease to delight.  <a href="rental-info.html">Check our availability</a>, or <a href="rental-info.html">request informaiton.</a></p>
							<p>The camp has been in the <a href="anchorage.html">family</a> for over three generations, and has been loved by many family, friends, and neighbors over the years.</p>
							<p>The camp and the surrounding area have much to offer. Come explore and stay a while.</p>
						</div>	
					</div>
					
				</section>
			</div>

			<div class="left-small">	
				<div class="about" id="about">			
					<div class="center">
					<img class="center" src="img/boats.jpg" alt="a pair of boats tied near shore">
					</div>	
					<p>Nothing is more peaceful than a boat on the <a href="lake.html">lake</a> in the evening. A sunset cruise or an evening swim are fantastic ways to end a day.</p>	
					<p>We have several small boats to choose from. Any and all of them can get you to some great spots for fishing, swimmin, jumping, or lounging around.</p>
					<p>While you're here, be sure to check out the <a href="http://outboard-boat-motor-repair.com/Evinrude%203%20HP%20Lightwin%20Outboard%20Boat%20Motor/default.htm" title="">Evinrude Light Twin!</a> It was cutting edge in it's time to be sure. </p>		
				</div>
				<div class="weather">
					<div class="center" style="width: 300px; max-width:100%;"><iframe style="display: block;" src="http://cdnres.willyweather.com/widget/loadView.html?id=55538" width="300" height="228" frameborder="0" scrolling="no"></iframe><a style="height: 20px;text-indent: -9999em;z-index: 1;margin: -20px 0 0 0;position: relative;display: block" href="http://www.willyweather.com/ny/essex-county/keeseville.html">keeseville weather information</a></div>
					
				</div>		
			</div>
		
		<!-- End Main Section -->		
<?PHP 
include "anchorage_footer.php"
?>

