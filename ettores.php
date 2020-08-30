<?php include 'header.php';?>

<section class="portfolio-item ettores">

<div class="item-header" animation="grow-in" animation-delay=".5s">
	<div class="left">
		<div class="image-info">
			<?php echo file_get_contents("img/ettores.svg"); ?>
		</div>
	</div>
	<div class="right">
		<h2>Ettores Bakery</h2>
		<h3>A large wordpress build integrated with custom ecommerce platform</h3>
		<ul>
			<li>Dynamic content integrated with Square</li>
			<li>Pages fully customizable with wordpress backend</li>
			<li>200 Hour build</li>

		</ul>
	</div>

</div>

<div class="item-content sos" sos="true">
	<div class="container column centered">
		<img src="img/portfolio/ettores-laptop.png" />
		<a class="button" href="http://ettores.com/">Check out the live site</a> 
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Setup</h3>
			<p>Ettores Bakery came to Three29 with hopes of not only updating their website but also integrating that with a custom ordering system and a new POS system for their in house staff. This was a fairly large undertaking and required most of the staff at T29 to become involved in it in some way. My role was to build out our wordpress portion of the site and have that hook into the custom API that was being built by another of our developers. That portion of the site would then integrate with a custom ecommerce platform that was integrated with square.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Approach</h3>
			<p> On the surface, integrating a website with some ecommerce elements isn’t an insane prospect but the real challenge was ensuring that it would play nicely with wordpress AND allow the client to edit certain aspects of the page. To that end, the site needed to seamlessly blend from the more simple frontend sections to the more complex ecommerce section.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Action</h3>
			<p> I opted to build out the functionality in simpler forms at first and then abstract those out to reusable and editable elements. This meant putting a lot of the components into wordpress ‘legos’ which would be able to be included on a page via Advanced Custom Fields. A great example is a listing page for one of the categories of cakes. By including the lego that pulls in data from square, it comes with a function to do that built it. The user simply needs to input what category ID is on the backend. Usually, these IDs were short numbers like 5 or 37. From there the lego would automatically format and display data on the frontend, all with a simple number included. The links displayed on that page would then link out to the ecommerce portion of the site that would allow someone to order that specific product. You can take a look at <a href="https://ettores.com/bakery/cakes/">the result here</a></p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Result</h3>
			<p>Once the site went live Ettore’s immediately started having significant traffic ordering from their online store. This was integrated well with the POS so that once the order was placed that the production staff was notified and would be able to immediately get to work on it. </p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Lessons</h3>
			<p>Safe was a great place for me to learn how to approach a larger business site with the respect and care that it demands while also maintaining a high level of quality and speed on the build side. Safe themselves were highly satisfied and continue to build new projects with Three 29 as a result.</p>
		</div>
	</div>
</div>

</section>
<?php include 'footer.php';?>

