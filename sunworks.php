<?php include 'header.php';?>

<section class="portfolio-item sunworks">

<div class="item-header" animation="grow-in" animation-delay=".5s">
	<div class="left">
		<div class="image-info">
			<img src="img/sunworks-logo.png"/>
		</div>
	</div>
	<div class="right">
		<h2>Sunworks</h2>
		<h3>A single page admin application</h3>
		<ul>
			<li>Leveraged Vue.js for build</li>
			<li>Large and complex datasets</li>
			<li>Multiple and large forms for data entry</li>
		</ul>
	</div>

</div>

<div class="item-content sos" sos="true">
	<div class="container column centered">
		<img src="img/portfolio/sunworks_preview.png" />
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Setup</h3>
			<p> Sunworks is a solar company based out of sacramento that had an aging administration process. Their business model depends on sales people traveling to a customer's home, assessing their needs with them, and jotting down a whole bunch of data. That data would then be given from this salesperson to an admin at sunworks. The admin would then manually enter all this data into a obtrusive and difficult to use database. So, sunworks wanted to modernize this process. Three29 offered to do so via an online admin panel that would be available to use for both the sales people and the admins themselves</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Approach</h3>
			<p>As we began the process of mapping out how this application would work, we realized that the build would necessitate some intricate and complex components. The interaction with the database would need to be seperate from the frontend nearly completely, as the actions being taken on the backend would be fairly complicated. The frontend also would need to be usable on both desktop, tablet and mobile. This posed challenges, as large amounts of data entry on mobile devices can lead to frustration UX for the end user.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Action</h3>
			<p>I opted to use Vue.js for the build. A simple vanilla JS or Jquery approach would have led to an increase in complexity but not necessarily velocity on build time. This turned out to be a very helpful decision. The two way data-binding in vue allowed a complex form or table to be modeled in fairly simple javascript. This meant that when it came time to either submit data or display large datasets, that the javascript didn’t need to parse any of the UI layer, it simply displayed or submitted what was already stored in JS. The end result of this decision was both an app that was stable and built in a timely manner.</p>
		</div>
	</div>
</div>

<div class="item-content sos imagery restrict-height" sos="true">
	<img src="img/sunworks_1.jpg" />
	<img src="img/sunworks_2.jpg" />
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Results</h3>
			<p>Sunworks was very pleased with the application that we shipped. It made their business much easier to operate and allowed some of the higher ups to focus on different challenges as the sales folks to have more autonomy. I’m very proud of the work we put out, not only because of the value it brought to our client, but also because we executed such a complex application with finesse and confidence.</p>
		</div>
	</div>
</div>

</section>
<?php include 'footer.php';?>

