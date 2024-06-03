<?php
	/**
	* The template for displaying the footer
	*
	* Contains the opening of the #site-footer div and all content after.
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
	* @package WordPress
	* @subpackage Twenty_Twenty
	* @since Twenty Twenty 1.0
	*/
?>

	<!-- ====== /FOOTER BOC ====== -->

	<footer id="footer">
    <div class="new-footer-main">
        <div class="container">
          <div class="new-footer-title-wrap">
          </div>
          <div class="new-footer-top">
              <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                  <div class="map_address_row">
                    <div class="new-footer-map">
                      <img  class="map-img" src="images/services/map.svg" alt="#">
                    </div>
                    <div class="footer-address">
                      <div class="address">
                        <h3 class="address-title">Australia <span class="dots"><span class="inner-dots"></span> </span> </h3>
                        <label class="footer-label">Location</label>
                        <address>Level 7/757 Ann St, Fortitude Valley QLD 4006 </address>
                      </div>
                      <div class="f_contact">
                        <ul>
                          <li>
                            <label class="footer-label">Call</label>
                            <a href="tel:1300 699 571">1300 699 571</a>
                          </li>
                          <li>
                            <label class="footer-label">Email</label>
                            <a href="mailto:info@appgurus.com.au">info@appgurus.com.au</a>
                          </li>
                        </ul>
                      </div>  
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="new-footer-menu">
                    <ul class="f-menu">
                      <li><a href="#">Native App Development</a></li>
                      <li><a href="#">iOS App Development</a></li>
                      <li><a href="#">Android App Development</a></li>
                      <li><a href="#">Hybrid App Development</a></li>
                      <li><a href="#">Flutter App Development</a></li>
                      <li><a href="#">React Native App Development</a></li>
                      <li><a href="#">App Maintenance</a></li>
                    </ul>
                    <ul class="f-menu">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Portfolio</a></li>
                      <li><a href="#">Process</a></li>
                      <li><a href="#">App Idea</a></li>
                      <li><a href="#">App Marketing</a></li>
                      <li><a href="#">FAQ’S</a></li>
                      <li><a href="#">JobS</a></li>
                      <li><a href="#">Blogs</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>



          <div class="new-footer-center">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-12">
                <div class="new_review_link_main">
                  <div class="new_review_link_wp">
                    <a href="https://clutch.co/profile/app-gurus" class="review_link" target="_blank">
                     <img src="images/services/f_r_clutch.svg" alt="#">
                    </a>
                  </div>
                  <div class="new_review_link_wp">
                    <a href="https://www.google.com/search?q=App+Gurus#lrd=0x6b915a8fcde34f31:0x1838848fce886507,1" class="review_link" target="_blank">
                    <img src="images/services/f_r_google.svg" alt="#">
                    </a>
                  </div>
                  <div class="new_review_link_wp">
                    <a href="https://www.goodfirms.co/company/app-gurus" class="review_link" target="_blank">
                      <img src="images/services/f_r_goodfirms.svg" alt="#">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-12">
                <div class="inquiry_main">
                  <div class="inquiry_title">
                    <h3 class="white-color-text">Get Your Free Consultation</h3>
                  </div>
                  <div class="inquiry_btn">
                    <a href="#" class="btn cta">Drop us Inquiry</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="new-footer-bottom">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12 align-self-center">
                <div class="copy-right-text">
                  <p>© 2023 App Gurus</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="social-link-main f_social_link_wp text-right">
                  <ul class="social-link">
                    <li><a href="#" target="_blank" rel="noopener"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank" rel="noopener"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank" rel="noopener"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </footer>
  
  <!-- ====== /FOOTER EOC ====== -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/consultation/typed.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/consultation/custom.js"></script>
	
	<?php wp_footer(); ?>
</body>
</html>
