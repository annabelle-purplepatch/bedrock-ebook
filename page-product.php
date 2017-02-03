<?php
/**
 * Template Name: Product Page
 *
*/

get_header(); ?>

<div class="mainContainer">
	
<!-- Dashboard Section -->
<div class="dashGradientbg-inner">
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
			  <div class="dashImgholder-inner"><img src="<?php bloginfo('template_directory'); ?>/images/bedrock-dash.png" alt="" width="860" height="502"></div>
			</div>
		</div>
	</div>
</div>
<!-- /Dashboard Section -->


<!-- Services -->
<div class="services">
	<div class="container">
		
		<div class="row">
			<div class="col-md-4">
				<div class="col-4-Section custom product-services">
					<a href="#ourSolutions"  class="productAnchorlink">
						<span class="wow fadeInUp"><img src="<?php bloginfo('template_directory'); ?>/images/oursolutions-icon.png" alt="" width="89" height="80"></span>
						<h3>Our Solution</h3>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-4-Section custom product-services">
					<a href="#pathstoInsight" class="productAnchorlink">
						<span class="wow fadeInUp"><img src="<?php bloginfo('template_directory'); ?>/images/straightpathstoinsight-icon.png" alt="" width="89" height="80"></span>
						<h3>Straight Paths to Insight</h3>
					</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="col-4-Section custom product-services">
					<a href="#bedrockTechnology" class="productAnchorlink">
						<span class="wow fadeInUp"><img src="<?php bloginfo('template_directory'); ?>/images/ourtechnology-icon.png" alt="" width="89" height="80"></span>
						<h3>Our Technology</h3>
					</a>
				</div>
			</div>
		</div>		
			
	</div>
</div>
<!-- /Services -->

<!-- Solutions -->
<div class="midBlue-bg">
	<div class="container">
		<div id="ourSolutions" class="row">
			<div class="solutions">
				<h2 class="mainTitle fwhite">Our Solution: <?php the_field('solutions_title'); ?></h2>	
				<p class="mainDescription"><?php the_field('solutions_content'); ?></p>
			</div>
		</div>
	</div>
	<div class="container-full five-col-custom">
		<div class="row">
			<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-7 five-three">
							<div class="row">
								<div class="col-sm-4 col-5-Section">
									<span><img src="<?php bloginfo('template_directory'); ?>/images/simple-icon.png" alt="" width="89" height="80"></span>
									<h3><?php the_field('characteristic_1_title'); ?></h3>
									<p><?php the_field('characteristic_1_content'); ?></p>
								</div>
								<div class="col-sm-4 col-5-Section">
									<span><img src="<?php bloginfo('template_directory'); ?>/images/fast-icon.png" alt="" width="89" height="80"></span>
									<h3><?php the_field('characteristic_2_title'); ?></h3>
									<p><?php the_field('characteristic_2_content'); ?></p>
								</div>
								<div class="col-sm-4 col-5-Section">
									<span><img src="<?php bloginfo('template_directory'); ?>/images/cpg-focused-icon.png" alt="" width="89" height="80"></span>
									<h3><?php the_field('characteristic_3_title'); ?></h3>
									<p><?php the_field('characteristic_3_content'); ?></p>
								</div><!-- end inner row -->
							</div>
						</div>
						<div class="col-sm-5 five-two">
							<div class="row">
								<div class="col-sm-6 col-5-Section">
									<span><img src="<?php bloginfo('template_directory'); ?>/images/collaborative-icon.png" alt="" width="89" height="80"></span>
									<h3><?php the_field('characteristic_4_title'); ?></h3>
									<p><?php the_field('characteristic_4_content'); ?></p>
								</div>
								<div class="col-sm-6 col-5-Section">
									<span><img src="<?php bloginfo('template_directory'); ?>/images/easytoimplement-icon.png" alt="" width="89" height="80"></span>
									<h3><?php the_field('characteristic_5_title'); ?></h3>
									<p><?php the_field('characteristic_5_content'); ?></p>
								</div>
							</div><!-- end inner row -->
						</div>
					</div>​<!-- end outer row -->
			 </div>
		</div>
  </div>

</div>
<!-- /Solutions -->

<!--  Straight Path Insight -->
  <div class="straightpathInsight">
	  <div class="container-full">
		  <div class="container">
				<div id="pathstoInsight" class="row">
					<h2 class="mainTitle">Straight Paths to Insight</h2>
					<p class="mainDescription"><?php the_field('intro_text'); ?></p>
					<div class="img-Tablet2 wow fadeInUp"><img src="<?php bloginfo('template_directory'); ?>/images/straightpathstoinsight-img.png" alt="" class="img-responsive"></div>
				</div>			
			</div>
		</div>
	</div>
<!--  /Straight Path Insight -->

<!-- Storylines -->
<div class="storyLines parallaxbox1">
	<div class="container">
		<div class="row">
			<h2 class="mainTitle fwhite">Storylines</h2>
			<p class="mainDescription">
				<?php the_field('storylines'); ?>	
			</p>
			
			<!-- Carousel -->
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol> -->
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="<?php bloginfo('template_directory'); ?>/images/storylines.png" alt="" class="img-responsive">
							<div class="carousel-caption">
								<p class="mainDescription custom" style="text-decoration:none">
									(Chapter 1: <?php the_field('chapter_1'); ?>)
								</p>				
							</div>
					</div>
			
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/chapter2.png" alt="" class="img-responsive">
							<div class="carousel-caption">
								<p class="mainDescription custom">
									(Chapter 2: <?php the_field('chapter_2'); ?>)
								</p>				
							</div>
					</div>
			
					<div class="item">
						<img src="<?php bloginfo('template_directory'); ?>/images/chapter3.png" alt="" class="img-responsive">
							<div class="carousel-caption">
								<p class="mainDescription custom">
									(Chapter 3: <?php the_field('chapter_3'); ?>)
								</p>				
							</div>
					</div>
			
				</div>
			
			
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- /Carousel -->
		</div>
	</div>
</div>
<!-- /Storylines -->

<!-- Visualizations -->
<div class="visualizations">
	<div class="container">
		<div class="row">
			<h2 class="mainTitle">Visualizations</h2>
			<p class="mainDescription"><?php the_field('visualizations'); ?></p>
			<div class="img-Tablet2 wow fadeIn"><img src="<?php bloginfo('template_directory'); ?>/images/visualization.png" alt="" class"img-responsive"></div>
		</div>
	</div>
</div>
<!-- /Visualization -->

<!-- BedrockTech -->
<div class="container-full bedrockTech">
  <div class="container">
	  <div id="bedrockTechnology" class="row">
		 <h2 class="mainTitle fwhite">Bedrock Technology: <?php the_field('technology_title'); ?></h2>
		 <div class="col-md-4">
		   <div class="col-4-Section wow fadeIn">
				<span><img src="<?php bloginfo('template_directory'); ?>/images/dataintegration-icon.png" alt="" width="89" height="80"></span>
				<h3><?php the_field('feature_1_title'); ?></h3>
				<p><?php the_field('feature_1_content'); ?></p>
			 </div>
		 </div>
		 <div class="col-md-4">
		   <div class="col-4-Section wow fadeIn">
				<span><img src="<?php bloginfo('template_directory'); ?>/images/dataarchiving-icon.png" alt="" width="89" height="80"></span>
				<h3><?php the_field('feature_2_title'); ?></h3>
				<p><?php the_field('feature_2_content'); ?></p>
			 </div>
		 </div>
		 <div class="col-md-4">
		   <div class="col-4-Section wow fadeIn">
				<span><img src="<?php bloginfo('template_directory'); ?>/images/secuirty-icon.png" alt="" width="89" height="80"></span>
				<h3><?php the_field('feature_3_title'); ?></h3>
				<p><?php the_field('feature_3_content'); ?></p>
			 </div>
		 </div>
		</div>
		
	  <div class="row">
		 <div class="col-md-4">
		   <div class="col-4-Section wow fadeIn">
				<span><img src="<?php bloginfo('template_directory'); ?>/images/accesscontrol-icon.png" alt="" width="89" height="80"></span>
				<h3><?php the_field('feature_4_title'); ?></h3>
				<p><?php the_field('feature_4_content'); ?></p>
			 </div>
		 </div>
		 <div class="col-md-4">
		   <div class="col-4-Section wow fadeIn">
				<span><img src="<?php bloginfo('template_directory'); ?>/images/datatransferandbackup-icon.png" alt="" width="89" height="80"></span>
				<h3><?php the_field('feature_5_title'); ?></h3>
				<p><?php the_field('feature_5_content'); ?></p>
			 </div>
		 </div>
		 <div class="col-md-4">
		   <div class="col-4-Section wow fadeIn">
				<span><img src="<?php bloginfo('template_directory'); ?>/images/datasegregation-icon.png" alt="" width="89" height="80"></span>
				<h3><?php the_field('feature_6_title'); ?></h3>
				<p><?php the_field('feature_6_content'); ?></p>
			 </div>
		 </div>
		</div>
		
	</div>
</div>
<!-- /BedrockTech -->

<?php get_footer(); ?>