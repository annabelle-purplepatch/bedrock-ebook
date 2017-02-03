<?php
/**
 * Template Name: Home Page
 *
*/

get_header(); ?>


<div class="mainContainer">
<!-- Video Background -->
<div class="homepage-hero-module">
    <div class="video-container">
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
					  <img src="<?php bloginfo('template_directory'); ?>/images/arrow-down.png" alt="" width="42px" height="12px" class="wow bounce"  data-wow-iteration="4">
					</div>
        </div>
			
        <div class="filter"></div>
		<video autoplay loop class="fillWidth hero-video" poster="http://example.com/path/poster.jpg" onClick="playPause();">
          <?php if( get_field('video_url') ): ?>

          		<source src="<?php echo the_field('video_url'); ?>" />

      	  <?php else: ?>

          		<source src="/wp-content/uploads/2016/09/Bedrock-Analytics.mp4" />

		  <?php endif; ?>

			<img src="<?php bloginfo('template_directory'); ?>/images/bigstock-Business-On-The-Go-91635956.jpg" alt=""> <!-- option for safari browser -->
			<!-- Your browser does not support the video tag. I suggest you upgrade your browser. -->
			
		</video>
        <div class="poster hidden">
        </div>
    </div>
</div>

<!-- /Video Background -->

<!-- CPG Section -->
<div id="watchVideo" class="container contentSection">
  <div class="row">
	  <div class="col-md-6">
		  <div class="block-container wow fadeIn">
			  <img src="<?php bloginfo('template_directory'); ?>/images/cpgFact.png" alt="" width="560" height="320">
				<div class="play-btn">
				  <a href="#myModal" role="button" data-toggle="modal"><img src="<?php bloginfo('template_directory'); ?>/images/play-btn.png" alt="" width="93" height="93"></a>
				</div>
				
			</div>
			
		</div>
	  <div class="col-md-6">
		  <div class="DescriptionSection">
				<h2><?php the_field('intro_flavor_text'); ?></h2>
				<p><?php the_field('intro_content'); ?></p>
	
				<a href="product"><button type="button" class="btn btn-default light-btn">Learn More <i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
			</div>
		</div>
	</div>
</div>

<!-- /CPG Section -->


<!-- Insight Section -->
<div class="InsightSection InsightGradientbg">
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
			<div class="img-Tablet wow fadeIn"><img src="<?php bloginfo('template_directory'); ?>/images/velocity.png" alt="" width="719" height="540"></div>
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

									  $c = 0;

							          $args = array('post_type' => 'testimonials', 'order' => 'ASC');
							          $query_testimonials = new WP_Query( $args );

							          	while ( $query_testimonials->have_posts() ) : $query_testimonials->the_post(); $c++;

							          		 if ( $c == 1 ){ $class = ' active';}
											 else{ $class='';} 

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
						          	?>

								</div>
								<a class="left carousel-control" href="#Carousel" data-slide="prev"><span class="icon-prev"><img src="<?php bloginfo('template_directory'); ?>/images/prev-slider-btn.png" alt="" width="17" height="28"></span> </a> <a class="right carousel-control" href="#Carousel" data-slide="next"> <span class="icon-next"><img src="<?php bloginfo('template_directory'); ?>/images/next-slider-btn.png" alt="" width="17" height="28"></span> </a> </div>
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
			<p class="mainDescription">
			  The consumer packaged goods industry is estimated to generate over $2 trillion in the US alone. 
				There are thousands of CPG manufacturers, tens of thousands of brands, and hundreds of thousands 
				of SKUs attempting to sell into 300 retailers. A manufacturer's top 5 selling retailers tend to 
				make up more than half of its total sales.
			</p>
			<p class="mainDescription">
			  Retailers are demanding more information, insights and direction from manufacturers in order to improve 
				product assortments and increase sales across product categories. While larger CPG manufacturers have the in-house 
				resources to deliver these insights, most small and mid-sized manufacturers do not.
			</p>
			<p class="mainDescription"><?php echo get_field('cpg_industry_section'); ?></p>
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
		          endif;
		        ?>

			</div>
		</div>
		
	</div>
</div>
<!-- /Partners -->

<?php get_footer(); ?>