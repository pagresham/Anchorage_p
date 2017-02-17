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
	<!-- End Header -->
	<nav>
		<ul class="main-nav">
			<li ><a href="index.php">Home</a>
			</li>
			<li class="current-page"><a href="anchorage.php">Anchorage</a></li>
			<li class="drop-down"><a href="lake.php">The Lake</a>
				<!-- <ul class="drop-nav">
					<li><a href="fishing.html">Fishing</a></li>
				</ul> -->
			</li>
			<li><a href="local-fun.php">Regional</a></li>	
			<!-- <li><a href="rental-info.html">Rent</a></li> -->
			<!-- <li><a href="more-fun.html">More Fun</a></li>	 -->
		</ul>
	</nav>
		<!-- === Begin Main Section -->
		<div class="left-big">	

			<section class="blogs">
				<h2>A Rustic Adirondack Cabin&hellip;</h2>		
				<div class="about">
					<p>...nestled on a lake in the Adirondacks. The Anchorage provides a quality of life not found easily in today's busy world.</p>
					<p>With it's rustic, old world charm, and it's unmatched lake access, the Anchorage offers guests the opportunity to step out of everyday life and back to a simpler time.</p>
					<img src="img/camp-view.jpg" alt="view of camp and deck">	
				</div>
				<div class="about">
					<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25985.95584899276!2d-73.51370415774306!3d44.46534484374191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cca5e11d61c0903%3A0xf1a07bcb92608f81!2sAcorn+Ln%2C+Keeseville%2C+NY+12944!5e0!3m2!1sen!2sus!4v1471443580807" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>		
				</div>
			</section>
		<div class="about" id="history">
			<h3>Camp History&hellip;</h3>
			<p>Harlow Nichols and his business partner Burt Mace purchased property on the West shore of Lake Auger in the 1920's. The built small camps for themselves, and later build several more "modern" camps to rent as vacation rentals to folks driving up from Albany and New York.</p>
			<p>Over the years, the camps were sold to individuals who had rented them. Some have been rebuild or winterized. The <b>Anchorage</b> is still much the same as it was when it was built in the mid-thirties. </p>
		</div>
		</div>	
		<div class="right-small">	
			<div class="about" id="about">			
				<h2 >Charm <em>and</em> Comfort&hellip;</h2>
				<div class="about">
					<img src="img/couch.jpg" alt="the living room">
					<p>A large comfy couch, an extra long, family style, table, and modern internet and television await visitors to lake the Anchorage.</p>
				</div>
				<div class="about">
					<img src="img/fire-place.jpg" alt="a book by the fire place">
					<p>A good book and a cozy fire are never far away. With fire wood onsite, and the Keeseville free Library not far away, guests can stay comfortable and content.</p>
				</div>
				<div class="about">
					<img src="img/bed.jpg" alt="the master bed room">
					<p>Two bedrooms, one with a king size bed and a lake view, and another with two twin built-ins provide a restful night's sleep.</p>
				</div>			
			</div>
		</div>
		<!-- End Main Section -->		
	
<?PHP 
include "anchorage_footer.php"
?>	