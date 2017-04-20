<?php
/**
 * Template Name: Landing Page
 *
*/

get_header('nomenu'); ?>

<div class="bedrock-banner" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/banner-bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="bedrock-tb-format">
				<div class="col-md-7 bedrock-cnt">
					<a href="<?php echo home_url('/home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/bedrock-logo.png"></a>
					<h1>What’s the secret sauce <br />behind CPG success?</h1>
					<h2>Speed up your insights generation and use <br />Bedrock Analytics to tell compelling, <br />data-driven selling stories.</h2> 
				</div>
				<div class="col-md-5 bedrock-form">
					<h2>Experience Bedrock. <br />Schedule a demo now.</h2>
					<?php echo do_shortcode('[contact-form-7 id="256" title="Lead Generation Campaigns Request Demo"]'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section-two text-center">
	<div class="container">
		<h2>Bedrock isn’t simply a data analytics platform. <br />It’s a new way for CPGs to sell to retailers.</h2>
	</div>
</div>
<div class="sec-three">
	<div class="container">
		<div class="col-md-11 ex-center">
		<div class="section-three">
			<div class="sec-img">
			<img src="<?php bloginfo('template_directory'); ?>/images/simple.png">	
			</div>
				<div class="sec-cnt">
				<h3>Simple</h3>
				<p>Uncover the insights you need on your own, without an army of analysts or complex business intelligence software. Use pre-built visualizations to tell data-driven selling stories with just a few clicks.</p>		
				</div>
				
		</div><hr></hr>
		<div class="section-three">
			<div class="sec-img">
			<img src="<?php bloginfo('template_directory'); ?>/images/fast.png">	
			</div>
				<div class="sec-cnt">
				<h3>Fast</h3>
				<p>Getting to insight with Bedrock Analytics takes seconds. We are web-based and easy to use. If you’ve got an iPad or other tablet, we provide full native touch-screen support.</p>		
				</div>
		</div><hr></hr>
		<div class="section-three">
			<div class="sec-img">
			<img src="<?php bloginfo('template_directory'); ?>/images/cpg.png">	
			</div>
				<div class="sec-cnt">
				<h3>CPG Focused</h3>
				<p>We are designed exclusively for the needs of CPG sales managers and teams. We deliver the essential CPG insights that you need to expand distribution, increase sales and grow brands.</p>		
				</div>
		</div><hr></hr>
			<div class="section-three">
			<div class="sec-img">
			<img src="<?php bloginfo('template_directory'); ?>/images/collaborative.png">	
			</div>
				<div class="sec-cnt">
				<h3>Collaborative</h3>
				<p>We break down organizational barriers by creating a centralized retail sales data and insight hub that departments can access and share. With Bedrock, everyone on your sales team can get on the same page, sharing reports and best practices.</p>		
				</div>
		</div><hr></hr>
			<div class="section-three">
			<div class="sec-img">
			<img src="<?php bloginfo('template_directory'); ?>/images/easy.png">	
			</div>
				<div class="sec-cnt">
				<h3>Easy to Implement</h3>
				<p>If you have an IT department, you won’t need their help to use Bedrock. We don’t require any installation or implementation support—all you need is a web browser to access our cloud-based service.</p>		
				</div>
		</div>
		</div>
	</div>
</div>

<?php get_footer('campaign'); ?>