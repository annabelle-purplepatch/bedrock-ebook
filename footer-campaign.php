<!--</div> #main -->

<div class="section-four text-center">
	<div class="container">
	<div class="col-md-8 ex-center">
	<h3>Learn how your CPG sales team can speed up insights generation from days to minutes using Bedrock Analytics.</h3>
	<a class="landing-schedule-demo" href="#">SCHEDULE A DEMO</a>
	</div>
	</div>
</div>

<script>
	$(function () {
		$('#dateandtime').datetimepicker({  minDate:new Date()});
	});
	$('footer a').click(function(e){
		e.preventDefault();
		var name = jQuery(this).attr('href');
		$('html, body').animate({
		scrollTop: jQuery(name).offset().top - 120
		}, 800);	
	});
</script>

<!-- Google Code for Bedrock Analytics Website Complete Conversion Page -->

<!-- Google Adwords -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 854853502;
	var google_conversion_language = "en";
	var google_conversion_format = "3";
	var google_conversion_color = "ffffff";
	var google_conversion_label = "7XuSCKHwwHAQ_o7QlwM";
	var google_remarketing_only = false;
	/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
	<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/854853502/?label=7XuSCKHwwHAQ_o7QlwM&amp;guid=ON&amp;script=0"/>
	</div>
</noscript>

<!-- LinkedIn Conversion -->
<script type="text/javascript">
	_linkedin_data_partner_id = "40305";
</script>
<script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
</script>
<?php wp_footer(); ?>
</body>
</html>