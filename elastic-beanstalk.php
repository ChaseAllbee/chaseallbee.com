<?php include 'header.php';?>

<section class="portfolio-item aws">

<div class="item-header" animation="grow-in" animation-delay=".5s">
	<div class="left">
		<div class="image-info">
			<img src="img/aws.png"/>
		</div>
	</div>
	<div class="right">
		<h2>AWS - Elastic Beanstalk</h2>
		<h3>AWS Service Console</h3>
		<ul>
			<li>Large scale enterprise console and cli</li>
			<li>Implemented new features to delight customers</li>
			<li>Migrated large portions of code to modern framework</li>

		</ul>
	</div>

</div>


<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Overview</h3>
			<p>Elastic Beanstalk is the AWS service I've had the pleasure of working on since 2018. At a high level, Elastic Beanstalk is a service that orchestrates other AWS services together to provide a seamless and unified experience for folks just getting started in the AWS ecosystem. My contribution was to both the console and the client line interface.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Console</h3>
			<p>Elastic Beanstalk is one of the older services among the many services within AWS (legend tells that Jeff himself named it). As such, the codebase uses a framework that was popular back when it was just getting off the ground: AngularJS! Before coming on board to this job I had minimal experience with Angular so the first few months were a crash course. I was able to quickly adapt to this environment and get moving.</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Traffic Splitting</h3>
			<p>The first console based project I had worked on was adding the ability for customers to use something called Traffic Splitting in their beanstalk environments. Traffic Splitting is the option to deploy to an environment little-by-little, so rather than just uploading your new code and moving everything to a production immediately, this allowed customers to take incremental steps. The value here was that customers who were risk averse could deploy their code slowly and see how a certain subset of their user base reacted. If something was broken, they could abort the deployment and start over. </p>
			<br/>
			<p>On this project I was in charge of the console implementation which meant connecting our console to a RESTful API that took in relevant information about a customers environment and then digesting if that user wanted to use traffic splitting and how exactly they wanted to do that. On my end, I needed to figure out how best to display those options, what would make for good UX and UI and all the logistics surrounding these things. </p>
			<br/>
			<p>I opted to group these options with existing configuration options that related to deployments. The options themselves were best served as a handful of numerical inputs and dropdowns. Which is what we went with. The tricky parts of this project were in fact the validation and ensuring that our customers' environments were set up properly to use this feature. </p>
			<br/>
			<p>At the end of it all, we saw a 10% uptick in usage of this feature and some of our larger clients expressed delight about being able to safely deploy their new code!</p>
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Client Line Interface</h3>
			<p>One of the first major efforts that I worked on with the CLI was making our codebase public on Github. We had a really active customer base so making the cli open source was a good way to get more folks involved and interested in the project. This of course meant that we needed to ensure our codebase was in a good enough spot to be made public. To that end, I also needed to get up to speed about what it would take to maintain a good community of developers on our Github page.</p>
			<br/>
			<p>Initially the work consisted of scrubbing the project for any sensitive data and also ensuring the quality of the code was up to par with other open source projects. I also read up on how best to interact with the community and how to ensure that folks felt valuable for submitting things like pull requests. After our prep work, we went public with the repo on March 13th of 2019. It was quite rewarding to see folks contributing and being active with a project that had previously been the sole responsibility of just a few folks. As of today we have had 10+ PRs and consistently get valuable reports from folks who use the project the most.</p>
			<a class="button" target="_blank" href="https://github.com/aws/aws-elastic-beanstalk-cli">Check out the repo here!</a> 
		</div>
	</div>
</div>

<div class="item-content sos" sos="true">
	<div class="container">
		<div class="col-sm-18 col-sm-offset-3">
			<h3>Spot Integration</h3>
			<p>One of the more major projects that I produced with the CLI was the option for beanstalk customers to enable something called ‘spot’ with their environments. Spot itself was the option to take advantage of unused EC2 instances for your environment. So for customers who had environments that did not need to be public facing (say something like a development application or fault tolerant websites) they could get a significant price reduction in their EC2 usage. </p>
			<p>What this meant for the cli was that we needed to offer this configuration as an option both through our non-interactive and our interactive flow. For the non-interactive we have a setup wherein folks can specify their configuration settings through a .yaml file that allows them to configure whatever settings they like. So this was fairly simple to just add the new parameters we’d need to support Spot. The interactive flow was a little more involved.</p>
			<p>The solution that I had come to was that we wanted to make the interactive flow as frictionless as possible to add Spot. As such I added a handful of prompts that asked for simple answers to if a customer wanted to use spot, what kind of instance they’d like and then assumed a handful of default options to make their life easier. As with any environment in beanstalk, the customer could opt to make changes to any of these configuration details after setup, but I wanted to ensure that getting up and running with this new feature was simple.</p>
			<p>After launch we saw a great deal of our customers trying this feature out and implementing it with their development environments. The launch through the cli was straightforward and allowed our existing customer base to enjoy the experience they had come to expect and Spot interested customers to try out a couple of cost saving measures.</p>
		</div>
	</div>
</div>

</section>
<?php include 'footer.php';?>

