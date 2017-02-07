<?php
/**
 * Template Name: Request Ebook Page
 *
*/

get_header(); ?>

<div class="mainContainer">

<!-- Ebook Top Section -->
<?php if(get_field('page_banner_image')): ?>
	<div class="dashGradientbg-inner ebook-inner" style="background:url(<?php echo the_field('page_banner_image'); ?>) no-repeat center; background-size: cover;">
<?php else: ?>
	<div class="dashGradientbg-inner ebook-inner">
<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="DescriptionSection custom innerTopbanner">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		  <div class="col-md-6">
			  	<div class="dashImgholder-inner">
			  		<img src="<?php bloginfo('template_directory'); ?>/images/ebook-top-img.png" alt="">
			  	</div>
			</div>
		</div>
	</div>
</div>
<!-- /Ebook Top Section -->

<!-- Ebook form -->  
  <div class="ebookSection">
	  <div class="container">
		  <div class="row">
			  <h2 class="mainTitle customEdit"><?php the_field('page_header_text'); ?></h2>       
				<p class="ebookLabel"><?php the_field('page_sub_text'); ?></p>
			  <div class="col-md-5">
				  <div class="bedrock-Ebook">
					  <img src="<?php bloginfo('template_directory'); ?>/images/bedrock-EBOOK.png" alt="">
					</div>
				</div>
				<div class="col-md-7">
				  	<div class="ebook-form-section">
					  <h3> Please fill in this form and we will send you the e-book link right away. 
(Note: A work email ID is required to register)</h3>
            			<?php
						// Start the loop.
							while ( have_posts() ) : the_post();
							//eBook Form
								//echo do_shortcode('[contact-form-7 id="235" title="Request Ebook"]'); 
								the_content();
							//eBook Form 
							endwhile;
						?>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- /Ebook form -->  

<?php get_footer(); ?>