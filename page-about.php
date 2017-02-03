<?php
/**
 * Template Name: About Page
 *
*/

get_header(); ?>

<div class="mainContainer">


<!-- About Top Section -->
<div class="dashGradientbg-inner aboutbg-inner">
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
			  <div class="dashImgholder-inner icon"><img src="<?php bloginfo('template_directory'); ?>/images/about-top-img.png" alt="" width="374" height="329"></div>
			</div>
		</div>
	</div>
</div>
<!-- /About Top Section -->

<!-- Our Mission -->  
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
<!-- /Our Mission -->

<!-- Our Team -->
<div class="ourTeam">
	<div class="container">
	
		<div class="row">
			<h2 class="mainTitle">Our Team</h2>

			<?php

	          $args = array('post_type' => 'team', 'order' => 'ASC');
	          $query = new WP_Query( $args );

              if ( $query->have_posts()) : $count = 0;

	          	while ( $query->have_posts() ) : $query->the_post(); $count++; ?>

				<div class="col-md-4 memberSec">
					<?php 
		                if ( has_post_thumbnail() ): 
		                  the_post_thumbnail('full');
		            	endif; ?>
					<h3><?php the_title(); ?>, <?php the_field('position'); ?></h3>
					<a href="<?php the_field('profile_link'); ?>" target="_blank" class="btn btn-linkedin fa fa-linkedin" role="button"></a>
					<p><?php the_field('biography'); ?></p>
				</div>
	        	
	        	<?php if ($count == 3) : ?>

			        <div class="clearfix"></div>

			        <?php $count = 0; ?>

				<?php endif; ?>
				
			<?php
	          	endwhile;
	          endif;
	        ?>

		</div>	
	</div>	
</div>	
<!-- /Our Team -->

<!-- Our Investor -->
<div class="investorSection">
	<div class="container-full">
		<div class="container">
			<div class="row">
					<h2 class="mainTitle fwhite">Our Investors</h2>
					<?php

			          $args = array('post_type' => 'investor', 'order' => 'ASC');
			          $query_investor = new WP_Query( $args );

		              while ( $query_investor->have_posts() ) : $query_investor->the_post();
			        ?>

						<div class="investorLogo">
							<a href="<?php the_field('investors_link'); ?>">
								<?php 
					                if ( has_post_thumbnail() ): 
					                  the_post_thumbnail('full');
					            	endif; 
					            ?>
				        	</a>
						</div>
						
					<?php
			          	endwhile;
			          	wp_reset_postdata();
			        ?>
			</div>
		</div>
	</div>
</div>
<!-- /Our Investor -->

<!-- Work With Us -->  
<div class="Default-bg-gray bgWhite">
	<div class="container-full">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="mainTitle">Work with us</h2>
					<p class="mainDescription">
						<?php the_field('work_intro'); ?> <a href="mailto:careers@bedrockanalytics.com"><?php the_field('work_email'); ?></a>
					</p>
					<!-- Accordion -->
						<div class="customAccordion">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<?php

						          $args = array('post_type' => 'career', 'order' => 'ASC');
						          $query_career = new WP_Query( $args );

						          while ( $query_career->have_posts() ) : $query_career->the_post();
						        ?>

									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading<?php the_ID(); ?>">
											<h4 class="panel-title"> 
											  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_ID(); ?>" aria-expanded="true" aria-controls="collapse<?php the_ID(); ?>"><?php the_title(); ?></a> 
											</h4>
										</div>
										<div id="collapse<?php the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php the_ID(); ?>">
											<div class="panel-body">
												<p><?php the_content(); ?></p>
												
												<button type="button" class="btn btn-default light-btn">
												  Apply Now
													<i class="fa fa-angle-right" aria-hidden="true"></i>
												</button>
												
											</div>
										</div>
									</div>
									
								<?php
						          endwhile;
						        ?>
							</div>
						</div>
					</div>
					<!-- /Accordion -->
					
				</div>	
			</div>			
			
		</div>
		</div>
		
</div>

<!-- /Work With Us -->

<?php get_footer(); ?>