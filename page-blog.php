<?php
/**
 * Template Name: Blog Page
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
			  <div class="dashImgholder-inner icon"><img src="<?php bloginfo('template_directory'); ?>/images/blog-top-img.png" alt="" width="374" height="329"></div>
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

					$args = array('post_type' => 'post', 'order' => 'ASC');
			        $query_blog = new WP_Query( $args );
				// Start the loop.
					while ( $query_blog->have_posts() ) : $query_blog->the_post();

                    $excerpt = get_the_excerpt();
                    $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
                    $excerpt = strip_shortcodes($excerpt);
                    $excerpt = strip_tags($excerpt);
                    $excerpt = substr($excerpt, 0, 180); 
                    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
                    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
                    $excerpt = $excerpt.'...';

					// Include the page content template.
				?>
					<div class="col-md-4">
					  <a href="<?php the_permalink(); ?>/#post-<?php the_ID(); ?>">
					  	<?php 
			                if ( has_post_thumbnail() ): 
			                  the_post_thumbnail('full');
			            	endif; 
			            ?>
						<div class="titleSec"><h2><?php the_title(); ?></h2></div></a>
						<p><?php echo $excerpt; ?></p>
						<a href="<?php echo get_the_permalink(); ?>/#post-<?php the_ID(); ?>" class="btn btn-default light-btn" role="button">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
					</div>	

				<?php

				// End the loop.
					endwhile;
				?>

				</div>			
			</div>
		</div>
	</div>
<!-- /Blog Page -->  

<?php get_footer(); ?>