<!--</div> #main -->
<!-- Sticky e-Book -->
<div class="stickyEbook-bottom">
  <a href="<?php echo home_url('/shelf-domination/'); ?>">Download Our E-book <i class="glyphicon"><img src="<?php bloginfo('template_directory'); ?>/images/pdf-sticky-icon.png" alt=""></i></a>
</div>
<!-- /Sticky e-Book -->

<!-- Request A Demo -->
<div id="requestDemo" class="container-full requestDemo">
  <div class="container">
	  <div class="row">
			<h2 class="mainTitle fwhite">Request a Demo</h2>	
			<p class="mainDescription">
			  Let Bedrock help you transform data processing time into sales value.
			</p>
		</div>
		<div class="demoInputs">
			<div class="row">
				<?php echo do_shortcode('[contact-form-7 id="55" title="Request Demo"]') ?>
			</div>
		</div>
	</div>
</div>
<!-- /Request A Demo -->
</div>


<!-- Footer -->
<div class="footer">
  <div class="container">
	  <div class="row">
		  <div class="col-md-4">
			  <h5>Get in touch</h5>
				<p class="emailLink">
					344 20th Street, Suite 102, Oakland CA 94612<br>
					1.800.646.7641<br>
					<a href="mailto:info@bedrockanalytics.com">info@bedrockanalytics.com</a>
				</p>
			</div>
		  <div class="col-md-8">
				<!-- <ul>
				   <li><a href="#">Product</a></li>
					 <li><a href="#">Customer</a></li>
					 <li><a href="#">About</a></li>
					 <li><a href="#">Blog</a></li>
					 <li><a href="#">Contact</a></li>
					 <li><a href="#">Login</a></li>
				</ul> -->
          		<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false )); ?>

			   <div class="yeartxt">© 2016 Bedrock Analytics Corporation</div>    
					<ul class="social-network social-circle">
						<li><a href="https://www.facebook.com/Bedrock.Analytics" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/bedrockanalytic" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/company/bedrock-analytics" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<!-- <li><a href="#" class="icoPinterest" title="Pinterest"><i class="fa fa-envelope"></i></a></li> -->
					</ul>
			</div>
			
		</div>
	</div>
</div>
<!-- /Footer -->

<!-- scroll to top -->
<div class="scroll-top-wrapper">
	<span class="scroll-top-inner">
		<i class="fa fa-chevron-up"></i>
	</span>
</div>
<!-- /scroll to top -->

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 class="modal-title">CPG Sales Requires Effective Data</h4>
			</div>
		<div class="modal-body">
			<video controls preload="metadata" class="intro-video" width="100%" height="360">
			  	<?php if( get_field('intro_video_url') ): ?>
			  		<source src="<?php echo get_field('intro_video_url'); ?>" />
				<?php else: ?>
			  		<source src="http://dev-bedrock-analytics.pantheonsite.io/wp-content/uploads/2016/09/Bedrock-Analytics.mp4" />
			  	<?php endif; ?>
			</video>
		</div>
		</div>
	</div>
</div>


<!-- // jQuery Version 1.11.1  -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<!-- // Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/vidscript.js"></script>


<!-- Modal Video Script -->
<script type="text/javascript">
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("video.intro-video").attr('src');
    
    /* Assign empty url value to the iframe src attribute initially and when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
	if($("video.intro-video") && $("video.intro-video")[0]) {
		$("video.intro-video")[0].pause();  //.attr('src', '');
	}
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
	if($("video.intro-video") && $("video.intro-video")[0]) {
		$("video.intro-video")[0].play(); // .attr('src', url);
		$("video.intro-video").removeProp('muted');
	}
    });
});

</script>

<!-- Before and After Image Script -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/before-after.min.js"></script>
<script type="text/javascript">
  $('.ba-slider').beforeAfter();
</script>

<!-- scroll to top -->
<script>
$(function(){
 
	$(document).on( 'scroll', function(){
 
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>
<!-- /scroll to top -->

<!-- on Scroll nav bar change -->
<script>
	$(window).scroll(function() {
	  if ($(document).scrollTop() > 50) {
	    $('nav').addClass('shrink');
	  } else {
	    $('nav').removeClass('shrink');
	  }
	});

	$(window).on('beforeunload', function() {
	    //$(window).scrollTop(0); 
	});

	$(document).click(function (event) {
	    var clickover = $(event.target);
	    var $navbar = $(".navbar-collapse");               
	    var _opened = $navbar.hasClass("in");
	    if (_opened === true && !clickover.hasClass("navbar-toggle")) {      
	        $navbar.collapse('hide');
	    }
	});
</script>

<script>
	// $('.video-container').click(function () {
	//    if ($('.hero-video').get(0).paused) {
	//        $('.hero-video').get(0).play();
	//    } else {
	//        $('.hero-video').get(0).pause();
	//    }
	// });
</script>

<script>
	 $('.close').click(function () {
	 	$("video").prop('muted', true);
	 });

//	 $('.intro-video').click(function () {
//	    $(this).prop('muted', !$(this).prop('muted'));
//	 });

//	 $('.toggle-audio').click(function () {
//	 	$("video").prop('muted', false);
//	 });
</script>

<script>
	$(document).ready(function(){
	  // Add smooth scrolling to all links
		$('a.testimonialAnchorlink, a.watchvideoAnchorlink, a.demoAnchorlink, a.customerAnchorlink, a.productAnchorlink').on('click', function(event) {

		    // Make sure this.hash has a value before overriding default behavior
		    if (this.hash !== "") {
		      // Prevent default anchor click behavior
		      event.preventDefault();

		      // Store hash
		      var hash = this.hash;

		      // Using jQuery's animate() method to add smooth page scroll
		      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		   
		      $('html, body').animate({
		        scrollTop: $(hash).offset().top - 60
		      }, 800, function(){
		    // firefox and IE hack
		       $('body,html').stop(true,true).animate({scrollTop: stop}, delay);
		        // Add hash (#) to URL when done scrolling (default click behavior)
		        window.location.hash = hash;
		      });
		   
		    } // End if
		});
	});
</script>

</body>

</html>