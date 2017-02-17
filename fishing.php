<!DOCTYPE html>

<!-- Pierce Gresham
Assignment ##
"example blog page with SEO"
8/8/16 -->

<html lang="en">
<head>
	<title>Project-1151 Pierce Gresham</title>
	
	<meta charset="utf-8">
	

	<!-- I chose to use Video.js here instead of the medialelement fallback, because it does not load by default on my browser which does support html5. I will test this site on older browsers to see how it performs. -->


	<link href="http://vjs.zencdn.net/5.10.8/video-js.css" rel="stylesheet">
	<!-- If you'd like to support IE8 -->
  	<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
	
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	
	<!-- meta command to set viewport width to the same as the device width -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Insert SEO description HERE! -->
	<meta name="description" content="An information page for the Anchorage at Auger Lake. Hiking, Fishing, Boating, Swimming, Camping and many more activities await you when you stay at the Anchorage.">
	<!-- Insert SEO keywords HERE! -->
	<meta name="keywords" content="boat, fish, fishing, camping, lake, bass, pan fish, bluegill, kayak, cliff jumping, cabin, Anchorage, Lake Auger, Rental Pok-o-moonshine, Ausable Falls">
	<meta name="author" content="pierce gresham">
	
	<!-- Link CSS Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/project-test.css">
	
	<!-- Link Google Fonts -->
	<link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Courgette">
	<link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Open Sans">
</head>

<!-- ===== Begin Body ===== -->

<body>

<!-- Add code for FB like/share button -->

<!-- Fix this FB button!!! -->
<!-- <div id="fb-root"></div> -->
<!-- <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->
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
		<nav>
				<ul class="main-nav">
					<li ><a href="index.html">Home</a>
					</li>
					<li ><a href="anchorage.html">Anchorage</a></li>
					<li class="drop-down"><a href="lake.html">The Lake</a>
						<!-- <ul class="drop-nav">
							<li><a href="fishing.html">Fishing</a></li>
						</ul> -->
					</li>
					<li><a href="local-fun.html">Local Fun</a></li>	
					<li><a href="rental-info.html">Rental Info</a></li>
					<!-- <li><a href="more-fun.html">More Fun</a></li> -->	
				</ul>
			</nav>
	</header>
	<!-- End Header -->
		
		<!-- === Begin Main Section -->
		<div class="center">	

			<section class="blogs">
				<h2>See Whats Biting&hellip;</h2>		
				
			
			<div class="about" id="fishing-form">
				<h3>Fishing at Lake Auger&hellip;</h3>
				<p>Lake Auger offers great fishing for many species of fish. Panfish, large and small-mouth bass, pike, perch and even carp populate the lake.</p>
				<p>Make sure to bring your fishing gear, or borrow some of ours here at the camp.</p>
				<h3>Guided Fishing&hellip;</h3>

				<!-- Create fishing.html and it's form! -->

				<p>See our calendar below for fishing trip availability.</p>
				<p><a href="https://calendar.google.com/calendar/embed?src=58j0nvm4a4ul8mk7enbeq58sc0%40group.calendar.google.com&ctz=America/New_York" title="">Open this calendar in a seperate window.</a></p>
				<div class="responsiveCal">
					<iframe src="https://calendar.google.com/calendar/embed?src=58j0nvm4a4ul8mk7enbeq58sc0%40group.calendar.google.com&ctz=America/New_York" style="border: 0" width="600" height="400" frameborder="0" scrolling="no"></iframe>
				</div>	
				<p>Then <span class="large">Fill out and submit  </span>   the form below to request information on scheduling of our guided fishing trips. These trips can be booked with or without a cabin rental. Schedule permitting of course.</p>
				
				<!-- Google form for fishing information -->
				<div class="fishing-form">
					<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScczY--ERyOAeRRrAge0EpqTLeUd3oJ4vtn5SBnjr7r8zfy4g/viewform?embedded=true" width="80%" height="800" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
				</div>
			</div>
			</section>
		</div>	
		<div class="right-small">	
		</div>
		<!-- End Main Section -->		
	<!-- === Begin Footer === -->
	<footer>

		<div class="header-border" id="footer">
			<h1 class="welcome-txt">Come Back Soon</h1>
			<ul class="social-sites">
			<li><a class="web_symbolsregular" href="https://twitter.com/pierceanson">t</a></li>
			<li><a class="web_symbolsregular" href="https://www.facebook.com/augerlake.anchorage/">f</a></li>
		</ul>
		</div>	
	</footer>
	<!-- End Footer -->
</div>


<!-- I chose to use Video.js here instead of the medialelement fallback, because it does not load by default on my browser which does support html5. I will test this site on older browsers to see how it performs. -->
<script src="http://vjs.zencdn.net/5.10.8/video.js"></script>


<!-- Add script to activate the mediaelementplayer for both video and audio players -->
<!-- <script type="text/javascript">
	$('audio,video').mediaelementplayer();
</script> -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82857977-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
