<?php include 'header.php';?>

<section class="portfolio-item mits">

<div class="item-header" animation="grow-in" animation-delay=".5s">
	<div class="left">
		<div class="image-info">
			<?php echo file_get_contents("img/mits.svg"); ?>
		</div>
	</div>
	<div class="right">
		<h2>Mitsubishi Chemical Carbon Fiber and Composites</h2>
		<h3>A wordpress build for Mitsubishi</h3>
		<ul>
			<li>Customizable wordpress theme</li>
			<li>Integrated with custom post types to display tables of data</li>
			<li>Aggresive timeline</li>

		</ul>
	</div>

</div>

<div class="item-content sos" sos="true">
	<div class="container column centered">
		<img src="img/portfolio/mits-desktop.png" />
		<a class="button" href="http://mccfc.com/">Check out the live site</a> 
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Setup</h3>
			<p>Mitsubishi Chemical came to Three29 with a site in dire need of updating. They arrived in hand with fairly complex data that they needed to display in a way that could communicate specific details about their products. This posed a challenge to the design team and then in turn to myself as well. </p>
		</div>
	</div>
</div>
<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Background</h3>
			<p>Upon seeing the design specs I was given I realized there was a lot of new ground I had to cover. There were a significant amount of slanted backgrounds and layouts (something css doesn’t like to play nice with) and some heavy lifting going on with the proposed way of displaying data.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Approach</h3>
			<p>This was a wordpress build so I began by building out a static version of the site and then hooking it into the wordpress backend. Per usual, Advanced Custom Fields was a lifesaver. In contrast to some of the other builds though, I decided to favor more page templates rather than many custom legos with which to build a page. This allowed for a finer tuned control of what the user would be able to control. For example, here's a screenshot of some of the simpler text content and the corresponding output on the frontend. </p>
		</div>
	</div>
</div>

<div class="item-content sos imagery restrict-height" sos="true">
	<img src="img/portfolio/mits-screenshot_2.png" />
	<img src="img/portfolio/mits-screenshot_1.png" />
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Challenges</h3>
			<p>The largest and most time consuming challenge on this project was figuring out how to not only display the data Mitsubishi wanted to display, but also how to filter those results AND allow Mitsubishi themselves edit said data whenever they needed to. It took quite an attention to detail but I landed on this solution : I would build out custom post types that Mitsubishi could add to when they had a new product they wanted to show off. This would then be pulled into a custom table that would sort through the relevant data and present it as per our design. The filtering required some fancy footwork as far as javascript went, but leveraging data attributes on html saved me a lot of time when it came time to check one products data against anothers. You can see one of the results on this page: <a href="http://mccfc.com/pan-fiber">Mitsubishi Pan Fiber</a></p>
			<p>A secondary challenge that I really appreciate in hindsight is the sheer amount of work with SVGs that were needed on this project. There were a lot of diagonal lines, large logos and triangles on the design. Most of these pose a problem when moving around from one device to another; what might look fine on mobile could look blown out and pixelated on a higher resolution desktop. SVGs helped immensely, being that they can scale to any size and retain their quality. Unlike many other parts of html / css, SVGs tend to not operate in quite the same way, but becoming more familiar with them over the course of the project truly aided in being able to execute on more complex layouts.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Quality Assurance</h3>
			<p>Once I had built out the lions share of the site we went into an internal QA process to make sure that the site matched up with what Safe needed. All in all it was super valueable to get the eyes of the designers and the project managers on it to catch the sharp edges that needed rounding out.</p>
		</div>
	</div>
</div>

<!-- <div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Lessons</h3>
			<p>Safe was a great place for me to learn how to approach a larger business site with the respect and care that it demands while also maintaining a high level of quality and speed on the build side. Safe themselves were highly satisfied and continue to build new projects with Three 29 as a result.</p>
		</div>
	</div>
</div> -->

</section>
<?php include 'footer.php';?>

