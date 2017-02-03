<?php
/**
 * Template Name: Home Page
 *
*/

get_header(); ?>


<div class="mainContainer">
<div class="ebor-page-wrapper">
<!-- Video Background -->
	<div class="homepage-hero-module">

	        <!-- Start Here (10.04.2016 AC) -->
	        <section class="full row">
	        	<div class="col-sm-12">
			        <section class="hero-slider">
						<ul class="slides">
							<li class="video-header hero-slide">
								<div class="background-image-holder parallax-background" style="background: url('<?php echo the_field('banner_background_image'); ?>')">
								</div>
								<!--
								<div class="video-wrapper">
									<video autoplay muted loop class="hero-video">
										<source src="<?php echo the_field('webm_video_url'); ?>" type="video/webm">
										<source src="<?php echo the_field('mp4_video_url'); ?>" type="video/mp4">
										<source src="<?php echo the_field('ogv_video_url'); ?>" type="video/ogg">	
									</video>
								</div>
								-->
								<div class="container">
									<div class="row">
										<div class="col-md-12 col-sm-12 text-center">
											<div class="title-container">
												<div class="headline">
													<h1><?php the_field('banner_title'); ?></h1>
												</div>
												<div class="description">
													<div class="inner">
														<?php the_field('banner_content'); ?>
													</div>
												</div>

												<div class="vidBtn-container">
											       	<a href="#testimonialSection" class="testimonialAnchorlink"><button type="button" class="btn btn-default pink-btn">Customer Stories</button></a>
											      	<a href="#watchVideo" class="watchvideoAnchorlink"><button type="button" class="btn btn-default pink-btn">Watch Video</button></a>
											      	<a href="#requestDemo" class="demoAnchorlink"><button type="button" class="btn btn-default pink-btn">Request Demo</button></a>
											    </div>

												<div class="arrow-scroll">
													<a href="#watchVideo" class="watchvideoAnchorlink">
												  		<img src="<?php bloginfo('template_directory'); ?>/images/arrow-down.png" alt="" width="42px" height="12px" class="wow bounce"  data-wow-iteration="4">
												  	</a>
												</div>
									        </div>
										</div>
									</div><!--end of row-->
								</div><!--end of container-->
							</li>
						</ul>
					</section>
				</div>
			</section>
	        <!-- End Here (10.04.2016 AC) -->

	</div>

<!-- /Video Background -->

	<!-- CPG Section -->

	<div id="watchVideo" class="container contentSection">
	  <div class="row">
		  <div class="col-md-6">
			  <div class="block-container wow fadeIn">
				  <img src="<?php bloginfo('template_directory'); ?>/images/cpgFact.png" alt="" width="560" height="320">
					<div class="play-btn">
					  <a href="#myModal" role="button" data-toggle="modal" class="toggle-audio"><img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" alt="" width="93" height="93"></a>
					</div>
					
				</div>
				
			</div>
		  <div class="col-md-6">
			  <div class="DescriptionSection">
					<h2><?php the_field('intro_flavor_text'); ?></h2>
					<p><?php the_field('intro_content'); ?></p>
		
					<a href="product"><button type="button" class="btn btn-default light-btn">Learn More About Our Product <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
				</div>
			</div>
		</div>
	</div>

	<!-- /CPG Section -->
</div>

<!-- Insight Section -->
<div id="insight_section" class="InsightSection InsightGradientbg">
	<div class="container">
		<div class="row">
			<h2 class="mainTitle fwhite">From Raw Data to Insights in Seconds</h2>	
			<p class="mainDescription"><?php the_field('raw_content'); ?></p>

			<div class="insightTable">
				<div class="col-md-6">
				  <h6>The Traditional Way</h6>
          			<p><?php the_field('traditional_way'); ?></p>
				</div>
				<div class="col-md-6">
				  <h6>The Bedrock Way</h6>
          			<p><?php the_field('bedrock_way'); ?></p>
				</div>
        <div class="clearfix"></div>
			</div>
		  
			
			  <!-- before and after slider -->
				<div class="beforeandafterSection">
					<div class="ba-slider">
						<img src="<?php bloginfo('template_directory'); ?>/images/bedrock-way.png" alt="">
							<div class=" resize">
								<img src="<?php bloginfo('template_directory'); ?>/images/traditional-way.png" alt="">
							</div>
						 <span class="handle"></span>
					</div>				
				</div>
		</div>
	</div>
</div>
<!-- /Insight Section -->

<!-- DisruptiveCPG -->
<div class="DisruptiveCPG">
	<div class="container">
		<div class="row">
			<h2 class="mainTitle">Why Disruptive CPG Manufacturers Choose Bedrock</h2>	
			<p class="mainDescription"><?php the_field('reasons_content'); ?></p>
			<div class="img-Tablet2 wow fadeIn"><img src="<?php bloginfo('template_directory'); ?>/images/velocity.png" alt="" class"img-responsive"></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="col-4-Section">
				  <span><img src="<?php bloginfo('template_directory'); ?>/images/simplicity-icon.png" alt="" width="89" height="80"></span>
					<h3><?php the_field('reason_1_title'); ?></h3>
					<p><?php the_field('reason_1_content'); ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="col-4-Section">
				  <span><img src="<?php bloginfo('template_directory'); ?>/images/fastandefficient-icon.png" alt="" width="89" height="80"></span>
					<h3><?php the_field('reason_2_title'); ?></h3>
					<p><?php the_field('reason_2_content'); ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="col-4-Section">
				  <span><img src="<?php bloginfo('template_directory'); ?>/images/datademocratization-icon.png" alt="" width="89" height="80"></span>
					<h3><?php the_field('reason_3_title'); ?></h3>
					<p><?php the_field('reason_3_content'); ?></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="col-4-Section">
				  <span><img src="<?php bloginfo('template_directory'); ?>/images/computerintelligence-icon.png" alt="" width="89" height="80"></span>
					<h3><?php the_field('reason_4_title'); ?></h3>
					<p><?php the_field('reason_4_content'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /DisruptiveCPG -->

<!-- Testimonials -->
<div id="testimonialSection" class="skyblue-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="testimonialSection">
					<h2 class="mainTitle fwhite">Our Customers</h2>	
					<p class="mainDescription"><?php the_field('our_customers_content'); ?></p>
					
					<div class="container">
						<div class="testimonials-holder">
							<div id="Carousel" class="carousel slide carousel-fade">
								<!-- <ol class="carousel-indicators">
											<li data-target="Carousel" data-slide-to="0" class="active"></li>
											<li data-target="Carousel" data-slide-to="1"></li>
											<li data-target="Carousel" data-slide-to="2"></li>
										</ol> -->
								<div class="carousel-inner">

									<?php

										$args = array('post_type' => 'testimonials', 'order' => 'ASC');
										$query_testimonials = new WP_Query( $args );

										if ( $query_testimonials->have_posts()) : $c = 0;

								          	while ( $query_testimonials->have_posts() ) : $query_testimonials->the_post(); $c++;

								          		 if ( $c == 1 ):
								          		 	$class = ' active';
												 else: 
												 	$class='';
												 endif; 

							        ?>

												<div class="item <?php echo $class; ?>">
													<div class="testimonials testimonials-quote customer-section">
														<?php 
											                if ( has_post_thumbnail() ): 
											                  the_post_thumbnail('full');
											            	endif; 
											            ?>
														<blockquote>
															<?php the_field('testimonial'); ?>
															<span>— <?php the_field('testimony_by'); ?>, <?php the_title(); ?></span>
														</blockquote>
													</div>
												</div>

									<?php
						          			endwhile;
						          			wp_reset_postdata();
						          	 	endif;
						          	?>

								</div>
								<a class="left carousel-control" href="#Carousel" data-slide="prev">
									<span class="icon-prev">
										<img src="<?php bloginfo('template_directory'); ?>/images/prev-slider-btn.png" alt="" width="17" height="28">
									</span> 
								</a> 
								<a class="right carousel-control" href="#Carousel" data-slide="next">
									<span class="icon-next">
										<img src="<?php bloginfo('template_directory'); ?>/images/next-slider-btn.png" alt="" width="17" height="28">
									</span> 
								</a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Testimonials -->

<!-- Partners -->
<div class="partners">
	<div class="container">
		<div class="row">
			<h2 class="mainTitle">The CPG Industry</h2>	
			<p class="mainDescription"><?php the_field('industry_content'); ?></p>
		</div>
		<div class="row">
			<div class="container logo pulse">

				<?php

		          $args = array('post_type' => 'cpg-industry', 'order' => 'ASC');
		          $query_industry = new WP_Query( $args );

	              if ( $query_industry->have_posts()) : $count = 0;

		          	while ( $query_industry->have_posts() ) : $query_industry->the_post(); $count++; ?>

					<div class="col-md-5ths">
						<?php 
			                if ( has_post_thumbnail() ): 
			                  the_post_thumbnail('full');
			            	endif; 
			            ?>
					</div>
		        	
		        	<?php if ($count == 5) : ?>

				        <div class="clearfix"></div>

				        <?php $count = 0; ?>

					<?php endif; ?>
					
				<?php
		          	endwhile;
		          	$query_industry->reset_postdata();
		          endif;
		        ?>

			</div>
		</div>
		
	</div>
</div>
<!-- /Partners -->

<?php get_footer(); ?>