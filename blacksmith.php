<?php include 'header.php';?>

<section class="portfolio-item blacksmith">

<div class="item-header" animation="grow-in" animation-delay="1s">
	<div class="left">
		<div class="image-info">
			<?php echo file_get_contents("img/blacksmith-svg.svg"); ?>
		</div>
	</div>
	<div class="right">
		<h2>Blacksmith Applications</h2>
		<h3>A fully customizable wordpress build for a foodservice management marketing company</h3>
		<ul>
			<li>Responsive frontend build</li>
			<li>Tools used: Gulp, SASS, Block Scope Based CSS</li>
			<li>200 Hour build</li>

		</ul>
	</div>

</div>

<div class="item-content sos" sos="true">
	<div class="container column centered">
		<img src="img/portfolio/blacksmith-desktop.png" />
		<a class="button" href="http://www.blacksmithapplications.com">Check out the live site</a> 
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<h3>Setup</h3>
			<p>Safe had come to T29 with a fairly outdated site, hoping to modernize their look and feel. They were going to integrate it with their own CMS though so I was just in charge of building html pages, blocked out to the point where they could take the templates and integrate it to their own system.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<h3>Approach</h3>
			<p>For this project I opted to leverage gulp to help speed up the process as it was a fairly heavy css build. To that end, gulp helped in a huge way by helping keep the styles modular. Of course I had scoped out the styles so that the common stylings were applied where they needed to be, but I built out the reusable blocks of css to be scoped to themselves; no one selector was scoped to a specific page. </p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-2">
			<h3>Challenges</h3>
			<p>This was my first large project at Three 29 so one of the obvious hurdles was simply getting on board with the development process at a new shop. Once I had acclimated to that the next challenge was just ensuring every page looked and felt exactly how we needed it to. This meant every device size needed to be accounted for and all the more complex layouts needed to scale to whatever screen we needed them to. I was delivered both a Sketch file and an Invision (a prototyping tool) link. So it was clearly defined as far as visuals and interaction goes. Both of these things in conjunction really helped me nail the details of this build.</p>
		</div>
		<div class="col-sm-4">
			<img src="img/portfolio/safe-phone.png"/>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<h3>Quality Assurance</h3>
			<p>Once I had built out the lions share of the site we went into an internal QA process to make sure that the site matched up with what Safe needed. All in all it was super valueable to get the eyes of the designers and the project managers on it to catch the sharp edges that needed rounding out.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-4 col-sm-offset-2">
			<img src="img/portfolio/safe-ipad.png"/>
		</div>
		<div class="col-sm-4">
			<h3>Lessons</h3>
			<p>Safe was a great place for me to learn how to approach a larger business site with the respect and care that it demands while also maintaining a high level of quality and speed on the build side. Safe themselves were highly satisfied and continue to build new projects with Three 29 as a result.</p>
		</div>
	</div>
</div>

</section>
<?php include 'footer.php';?>

