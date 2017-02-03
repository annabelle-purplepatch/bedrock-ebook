<?php
/**
 * Template Name: Contact Page
 *
*/

get_header(); ?>

<div class="mainContainer">


<!-- Contact Top Section -->
<div class="dashGradientbg-inner contactbg-inner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="DescriptionSection custom innerTopbanner">
					<h1><?php the_field('banner_title'); ?></h1>
					<p><?php the_field('banner_catchline'); ?></p>
				  <div class="iconSection"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-down2.png" alt="" width="25" height="42"></div>
				</div>
			</div>
		  <div class="col-md-6">
			  <div class="dashImgholder-inner icon"><img src="<?php bloginfo('template_directory'); ?>/images/contact-top-img.png" alt="" width="374" height="329"></div>
			</div>
		</div>
	</div>
</div>
<!-- /Contact Top Section -->

<!-- Contact Info -->  
  <div class="Default-bg-gray custom">
	  <div class="container-full">
		  <div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="mainTitle"><?php the_field('intro_title'); ?></h2>
						<p class="mainDescription"><?php the_field('intro_content'); ?></p>
					</div>	
				</div>			
			</div>
		</div>
	</div>
<!-- /Contact Info -->

<!-- Contact Form -->
<div class="contactFormsection">
  <div class="container-full">
    <div class="container">
		  <div class="row">
			  <div class="contactMainform">
				<h4>TELL US SOMETHING</h4>
				<div class="form-group">
					<?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?>
				</div>
				</div>
				<p>Contact us to discuss how we can help your organization achieve its goals.</p>
				<p>Address: 344 20th Street, Suite 102, Oakland CA 94612</p>
				<p>Contact Info: 1-800-646-7641</p>
				<p>Email: <a href="mailto:info@bedrockanalytics.com">info@bedrockanalytics.com</a></p>
				
			</div>
		</div>	
	</div>
</div>
<!-- /Contact Form -->

<?php get_footer(); ?>