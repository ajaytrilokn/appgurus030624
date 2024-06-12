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
<?php
if (!is_page_template( 'templates/thankyou-page.php' ))
	{ 
	?>
		<?php 
		if (is_page_template( 'templates/home-update.php' )|| is_page_template('templates/about-us-update.php')|| is_page_template('templates/case-studies.php'))
		{ 
		?>
		 <!-- ====== /FOOTER BOC ====== -->
		<footer id="footer">
			<div class="new-footer-main">
			    <div class="container">
			      <div class="new-footer-title-wrap">
            <div class="type-wrap">
						<h3>
							<div id="typed-strings" style="display: none;">
								<?php if(have_rows('footer_title_wrap','option')):while(have_rows('footer_title_wrap','option')):the_row();?>
								<span><?php echo get_sub_field('footer_title_wrap_one','option');?></span>
								<?php endwhile;endif;?>
								<!-- <span>Want a tailored app for your business?</span>
								<span>Need help with a project scope?</span>
								<span>Looking for a quote?</span> -->
							</div>
				    		<span id="typed"></span>
				    	</h3>
			  		</div>
			      </div>
			      <div class="new-footer-top">
			          <div class="row">
			            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
			              <div class="map_address_row">
			                <div class="new-footer-map">
			                  <img  class="map-img" src="<?php echo get_template_directory_uri();?>/homeassets/images/map.svg" alt="#">
			                  <div class="mobile_line">
			                      <img class="map-line" src="<?php echo get_template_directory_uri();?>/homeassets/images/map_line_m.png">
			                      <img class="map-line map-line-2" src="<?php echo get_template_directory_uri();?>/homeassets/images/map_line_m_o.png">
			                  </div>
			                </div>
			                <div class="footer-address">
			                  <div class="address">
			                    <h3 class="address-title animatedParent ">Australia 
			                      <span class="dots"><span class="inner-dots"></span> </span>
			                      <img class="map-line animated" src="<?php echo get_template_directory_uri();?>/homeassets/images/map_line.png">
			                      <img class="map-line map-line-2 animated" src="<?php echo get_template_directory_uri();?>/homeassets/images/map_line_o.png">
			                    </h3>
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
			                  <?php
		                      wp_nav_menu( array(
		                        'theme_location' => 'footer1',
		                     ));
		                      ?>
			                </ul>
			                <ul class="f-menu">
			                  <?php 
		                      wp_nav_menu(array('theme_location'=>'footer2',));
		                      ?>
			                </ul>
			              </div>
			            </div>
			          </div>
			      </div>

			      <div class="new-footer-center">
			        <div class="row gap-lg-1 flex-lg-nowrap">
			          <div class="col-lg-6 col-md-12 col-12">
			            <div class="new_review_link_main">
			              <div class="new_review_link_wp">
			                <a href="https://clutch.co/profile/app-gurus" class="review_link" target="_blank">
			                 <img src="<?php echo get_template_directory_uri();?>/homeassets/images/f_r_clutch.svg" alt="#">
			                </a>
			              </div>
			              <div class="new_review_link_wp">
			                <a href="https://www.google.com/search?q=App+Gurus#lrd=0x6b915a8fcde34f31:0x1838848fce886507,1" class="review_link" target="_blank">
			                <img src="<?php echo get_template_directory_uri();?>/homeassets/images/f_r_google.svg" alt="#">
			                </a>
			              </div>
			              <div class="new_review_link_wp">
			                <a href="https://www.goodfirms.co/company/app-gurus" class="review_link" target="_blank">
			                  <img src="<?php echo get_template_directory_uri();?>/homeassets/images/f_r_goodfirms.svg" alt="#">
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
			                <a href="javascript:void(0)" class="btn cta clicktoscroll">Drop us Inquiry</a>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			      <div class="new-footer-bottom">
			        <div class="row flex-md-row-reverse">
			          <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
			            <div class="social-link-main f_social_link_wp text-right">
			              <ul class="social-link">
			                <li><a href="https://www.facebook.com/appgurus" target="_blank" rel="noopener"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			                <li><a href="https://www.linkedin.com/company/appgurus" target="_blank" rel="noopener"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			                <li><a href="https://www.instagram.com/appgurus" target="_blank" rel="noopener"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			              </ul>
			            </div>
			          </div>
			          <div class="col-lg-6 col-md-6 col-sm-12 col-12 align-self-center">
			            <div class="copy-right-text">
			              <p>© <?php echo date('Y');?> App Gurus</p>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			</div>
		</footer>
		<!-- ====== /FOOTER EOC ====== -->
		<?php } else {  ?>
      <footer id="footer">
    <div class="new-footer-main">
        <div class="container">
          <div class="new-footer-title-wrap">
		  		<div class="footer-title-animation-wp">
					<div class="footer-text-animation">
						<div class="type-text">
							<div class="type-wrap">
								<h2>
								<div id="typed-strings">
										<?php if( have_rows('footer_title_wrap', 'option') ): ?>
										<?php while( have_rows('footer_title_wrap', 'option') ): the_row(); ?>
												<span><?php the_sub_field('footer_title_wrap_one'); ?></span>
											<?php endwhile; ?>
										<?php endif; ?>
								</div>
								<span id="typed"></span>
							</h2>
						</div>
						</div>
					</div>
				</div>
          </div>
          <div class="new-footer-top">
              <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                  <div class="map_address_row">
                    <div class="new-footer-map">
                      <img  class="map-img" src="<?php echo the_field('footer_map_image','option');?>" alt="#">
                    </div>
                    <div class="footer-address">
                      <div class="address">
                        <h3 class="address-title"><?php echo the_field('footer_address_title','option');?><span class="dots"><span class="inner-dots"></span> </span> </h3>
                        <label class="footer-label"><?php echo the_field('footer_location_title','option');?></label>
                        <address><?php echo the_field('footer_location','option');?></address>
                      </div>
                      <div class="f_contact">
                        <ul>
                          <li>
                            <label class="footer-label"><?php echo the_field('footer_call_title','option');?></label>
                            <a href="tel:<?php echo the_field('website_call','option');?>"><?php echo the_field('footer_call','option');?></a>
                          </li>
                          <li>
                            <label class="footer-label"><?php echo the_field('footer_email_title','option');?></label>
                            <a href="mailto:<?php echo the_field('website_email','option');?>"><?php echo the_field('footer_email','option');?></a>
                          </li>
                        </ul>
                      </div>  
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="new-footer-menu">
                    <ul class="f-menu">
                      <?php
                      wp_nav_menu( array(
                        'theme_location' => 'footer1',
                     ));
                      ?>
                    </ul>
                    <ul class="f-menu">
                      <?php 
                      wp_nav_menu(array('theme_location'=>'footer2',));
                      ?>
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
                     <img src="<?php echo the_field('footer_review_img1','option');?>" alt="#">
                    </a>
                  </div>
                  <div class="new_review_link_wp">
                    <a href="https://www.google.com/search?q=App+Gurus#lrd=0x6b915a8fcde34f31:0x1838848fce886507,1" class="review_link" target="_blank">
                    <img src="<?php echo the_field('footer_review_img2','option');?>" alt="#">
                    </a>
                  </div>
                  <div class="new_review_link_wp">
                    <a href="https://www.goodfirms.co/company/app-gurus" class="review_link" target="_blank">
                      <img src="<?php echo the_field('footer_review_img3','option');?>" alt="#">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-12">
                <div class="inquiry_main">
                  <div class="inquiry_title">
                    <h3 class="white-color-text"><?php the_field('footer_inquiry_text','option');?></h3>
                  </div>
                  <div class="inquiry_btn">
                    <a href="javascript:void(0)" class="btn cta contact-us-click"><?php the_field('footer_button_text','option');?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="new-footer-bottom">
            <div class="row flex-md-row-reverse">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                <div class="social-link-main f_social_link_wp text-right">
                  <ul class="social-link">
                    <li><a href="#" target="_blank" rel="noopener"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank" rel="noopener"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#" target="_blank" rel="noopener"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12 align-self-center">
                <div class="copy-right-text">
                  <p>&copy; <?php echo date('Y');?> App Gurus</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </footer>
		<?php } ?>
	<?php } ?>

</div>
    
	<?php wp_footer(); ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/64f1d1dcb2d3e13950ed58d0/1h989ni54';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
