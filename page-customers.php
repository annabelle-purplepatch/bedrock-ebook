<?php
/**
 * Template Name: Customers Page
 *
*/

get_header(); ?>

<div class="mainContainer">


<!-- Customers Top Section -->
<div class="dashGradientbg-inner customersbg-inner">
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
			  <div class="dashImgholder-inner icon"><img src="<?php bloginfo('template_directory'); ?>/images/customers-top-img.png" alt="" width="374" height="329"></div>
			</div>
		</div>
	</div>
</div>
<!-- /Customers Top Section -->

<!-- Customers -->  
  <div class="Default-bg-gray custom">
	  <div class="container-full">
		  <div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="mainTitle"><?php the_field('intro_title'); ?></h2>
						<p class="mainDescription"><?php the_field('intro_content'); ?></p>
					</div>	

					<?php

			          $args = array('post_type' => 'customer', 'order' => 'ASC');
			          $query_customer = new WP_Query( $args );

		              if ( $query_customer->have_posts()) : $count = 0;

			          	while ( $query_customer->have_posts() ) : $query_customer->the_post(); $count++; ?>

						<div class="col-md-4">
							<div class="col-4-Section customer-section">
							<a href="#<?php echo $post->post_name;?>" class="customerAnchorlink">
								<span><?php 
					                if ( has_post_thumbnail() ): 
					                  the_post_thumbnail('full');
					            	endif; 
					            ?><span>
								<h3><?php the_title(); ?></h3>
							</a>
							<p><?php the_excerpt(); ?></p>
							</div>
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
	</div>
<!-- /Customers -->

<?php

  $args = array('post_type' => 'customer', 'order' => 'ASC');
  $query_customer = new WP_Query( $args );

	while ( $query_customer->have_posts() ) : $query_customer->the_post(); 

	$title_customer = get_the_title();

?>

		<div class="customersInnerSection" id="<?php echo $post->post_name;?>">
		  <div class="container-full">
		    <div class="container">
				  <div class="row">
					  <div class="col-md-12">
							<span><?php 
				                if ( has_post_thumbnail() ): 
				                  the_post_thumbnail('full');
				            	endif; 
				            ?><span>
							<h2 class="mainTitle">
								<?php the_field('flavor_text'); ?>
							</h2>
							<div class="customers-Sec">
								<h2>Introduction</h2>
								<p><?php the_field('introduction'); ?></p>

								<h2>Challenges</h2>
								<p><?php the_field('challenges'); ?></p>

								<h2>Solutions Snapshot</h2>
								<p><?php the_field('solutions_snapshot'); ?></p>
								
								<h2>Results</h2>
								<p><?php the_field('results'); ?></p>

								<h2>Testimonials</h2>
								<p><?php the_field('customers_testimonial'); ?></p>
								<div class="testInfoSection">
								  <span class="testiName">- <?php the_field('testimony_by'); ?></span>
									<span class="testiPOs"><?php the_field('position'); ?></span>
									<span class="testiCompany"><?php the_field('company'); ?></span>
								</div>
						  <div class="clearfix"></div>
						</div>
		        </div>
					</div>
				</div>		
			</div>	
		</div>
		
<?php
  	endwhile;
?>

<?php get_footer(); ?>