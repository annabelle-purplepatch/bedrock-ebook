<?php
/**
 * The template for displaying pages
 *
*/
get_header(); ?>

<div class="mainContainer">

<!-- Contact Top Section -->
<div class="dashGradientbg-inner blogbg-inner">
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
			  <div class="dashImgholder-inner"><img src="<?php bloginfo('template_directory'); ?>/images/blog-top-img.png" alt="" width="374" height="329"></div>
			</div>
		</div>
	</div>
</div>
<!-- /Contact Top Section -->

<!-- Blog Page -->  
  <div class="blogSection">
	  <div class="container-full">
		  <div class="container">
				<div class="row">

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				// End the loop.
				endwhile;
				?>
				</div>			
			</div>
		</div>
	</div>
<!-- /Blog Page -->  

<?php get_footer(); ?>