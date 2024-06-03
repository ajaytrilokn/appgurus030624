	<!-- ====== FOOTER BOC ====== -->
    <footer> 
		    <div class="footer-main">
		    	<div class="container">

		    		<div class="footer-top">
		    			<div class="footer-top-left">
			    			<div class="footer-logo">
			                	<a href="https://www.appgurus.com.au/"><img src="<?php echo get_template_directory_uri(); ?>/fcAssets/images/site_logo.png" alt="footer-logo" loading="lazy"></a>
			              	</div>

			              	<div class="footer-top-center">
			              		<p class="orange_text">App Developers Australia servicing</p>
			              		<p class="mb-0">Brisbane - Gold Coast - Sunshine Coast - Cairns - Townsville - Sydney - Melbourne - Canberra - Hobart - Adelaide - Perth - Darwin</p>
			              	</div>
		              	</div>
		    			<div class="clutch-img clutch-img-wp">
							<div class="clutch-img-main">
								<img src="<?php echo get_template_directory_uri(); ?>/fcAssets/images/clutch-img1.webp" alt="clutch-img" loading="lazy">	
							</div>
							<div class="clutch-img-main">
								<img src="<?php echo get_template_directory_uri(); ?>/fcAssets/images/clutch-img2.webp" alt="clutch-img" loading="lazy">	
							</div>
							<div class="clutch-img-main">
								<img src="<?php echo get_template_directory_uri(); ?>/fcAssets/images/clutch-img3.webp" alt="clutch-img" loading="lazy">	
							</div>
							<div class="clutch-img-main">
								<img src="<?php echo get_template_directory_uri(); ?>/fcAssets/images/clutch-img4.webp" alt="clutch-img" loading="lazy">	
							</div>
						</div>
		    		</div>

		    		<div class="footer-text">
		    			<div class="footer-left">
		    				<p>© App Gurus <?php echo date("Y"); ?>. All Rights Reserved.</p>
		    			</div>
		    			<div class="footer-right">
		    				<div class="social-media">
								<ul class="social-link">
									<li>
										<span class="title-follow">Follow us on</span>
									</li>
									<li>
										<a href="https://www.linkedin.com/company/appgurus" target="_blank" class="social-icon">
											<img class="icon-1" src="<?php echo get_template_directory_uri();?>/fcAssets/images/social-media/linkedin-icon.png" alt="#">
										</a> 
									</li>
									<li>
										<a href="https://www.facebook.com/appgurus" target="_blank" class="social-icon">
											<img class="icon-1" src="<?php echo get_template_directory_uri();?>/fcAssets/images/social-media/facebook-icon.png" alt="#">
										</a> 
									</li>
									<li>
										<a href="https://www.instagram.com/appgurus" target="_blank" class="social-icon">
											<img class="icon-1" src="<?php echo get_template_directory_uri();?>/fcAssets/images/social-media/instagram.png" alt="#">
										</a> 
									</li>
								</ul>
							</div>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		</footer>
		<!-- ====== FOOTER End ====== -->
        <?php wp_footer(); ?>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/fcAssets/js/jquery-3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/fcAssets/js/bootstrap-5.0.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/fcAssets/js/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/fcAssets/js/typed.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/fcAssets/js/custom.js"></script>
		<script type="text/javascript">
        jQuery('.wpcf7-form').submit(function() {
            jQuery(this).find(':input[type=submit]').prop('disabled', true);
            var wpcf7Elm = document.querySelector('.wpcf7');
            wpcf7Elm.addEventListener('wpcf7submit', function(event) {
                jQuery('.wpcf7-submit').prop("disabled", false);
            }, false);
            wpcf7Elm.addEventListener('wpcf7invalid', function() {
                jQuery('.wpcf7-submit').prop("disabled", false);
            }, false);
        });
   		</script>
	</body>
	

	

</html>

