<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 *
*/

get_header(); ?>

<div class="mainContainer">

<!-- Blog Page -->  
<?php
// Start the loop.
while ( have_posts() ) : the_post(); ?>

	<!-- Contact Top Section -->
	<div class="dashGradientbg-inner blogbg-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="DescriptionSection custom innerTopbanner">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<br/>
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


	<div class="blogSection">
		<div class="container-full">
			  <div class="container">

				<div class="row">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->
							<div class="custom-post-meta">
								<span class="date-month"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('F j, Y'); ?></span> 
								| <span class="author"><i class="fa fa-pencil" aria-hidden="true"></i> <?php the_author(); ?></span> 

								<?php 
								$hastags = get_the_tags();
								if ( $hastags ) {
								?>
								| <span class="tags"><i class="fa fa-tag" aria-hidden="true"></i> <?php the_tags(''); ?></span>
								<?php
								}
								?>

							</div>

							<div class="custom-post-content">
								<div class="img-responsive">
									<?php 
										if ( has_post_thumbnail() ): 
								          the_post_thumbnail('full');
								    	endif;
									?>
								</div>

								<div class="entry-content">
									<?php
										the_content();
									?>
								</div><!-- .entry-content -->
							</div>
						</div>

						<div class="navigation">
							<?php
							// Bring $wp_query into the scope of the function
							global $wp_query;

							// Backup the original property value
							$backup_page_total = $wp_query->max_num_pages;

							// Copy the custom query property to the $wp_query object
							$wp_query->max_num_pages = max_num_pages;
							?>

							<!-- now show the paging links -->
							<div class="alignleft"><?php previous_posts_link('Next Ideas'); ?></div>
							<div class="alignright"><?php next_posts_link('Previous Ideas'); ?></div>

							<?php
							// Finally restore the $wp_query property to it's original value
							$wp_query->max_num_pages = $backup_page_total;
							?>
						</div>

					</article><!-- #post-## -->
				</div>		
			</div>
		</div>
	</div>

	<div class="custom-comments-area col-md-12 col-sm-12 col-xs-12">
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
	</div>
	<div class="clearfix"></div>

<?php
// End the loop.
endwhile;
?>	
<!-- /Blog Page -->  

<?php get_footer(); ?>