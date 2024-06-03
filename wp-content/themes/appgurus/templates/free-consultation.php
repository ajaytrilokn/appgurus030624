			<?php 
            /*
            Template Name:Free Consultation Neww
            */
            get_header('consultation');
            ?>
            <!-- Content Start -->

			<!-- <div id="preloader" class="preloader-circle">
				<div class="img-sec"> 
					<img class=" lazyloaded" src="<?php echo get_template_directory_uri();?>/fcAssets/images/loader-logo.png" alt="AppGurus"> 
					<span class="brandname">app<span style="color: #414042;">gurus</span></span>
				</div>
				<div class="circle-loader"></div>
			</div> -->

			<section class="banner-sec bg-shape" >
				<div class="banner-wrap">
					<div class="container">
						<div class="banner-row">
							<div class="row">
								<div class="col-lg-7 col-md-12 col-12 col-12">
									<div class="banner-left" >
										<div class="banner-text">
											<div class="banner-title">
												<p class="small-title white_text"><?php echo the_field('banner_small_title');?></p>
												<?php echo the_field('banner_title_main');?>
											</div>
											<div class="banner-arrow">
												<svg xmlns="http://www.w3.org/2000/svg" width="216.712" height="122.783" viewBox="0 0 216.712 122.783">
												  <g id="Layer_99" data-name="Layer 99" transform="matrix(0.996, -0.087, 0.087, 0.996, 101.495, -62.734)">
												    <path id="Vector" d="M185.093,73.382a134.31,134.31,0,0,1-33.954-1.25,134.045,134.045,0,0,1-36.118-11.316C100.094,53.676,93.761,45.651,91.3,39.008a178.826,178.826,0,0,0,36.278-.842c4.954-.627,10.661-1.531,15.706-4.34,5.594-3.116,9.227-8.18,9.717-13.547.525-5.754-2.7-11.847-8.224-15.523C140.5,1.91,135.034.374,128.057.058c-10.984-.5-21.133,2.2-28.578,7.6-8.8,6.375-13.762,16.767-12.652,26.475q.069.609.174,1.245A180.459,180.459,0,0,1,2.541,4.178,1.615,1.615,0,1,0,.69,6.826,183.745,183.745,0,0,0,87.786,38.7c2.328,7.581,8.961,16.957,25.841,25.031a137.272,137.272,0,0,0,36.988,11.589,138.387,138.387,0,0,0,22.458,1.841c4.164,0,8.766-.319,12.9-.7l-.07,8.932,18.263-14.149-23.353-5.3ZM90.038,33.764c-.979-8.569,3.471-17.79,11.338-23.493,6.855-4.968,16.277-7.448,26.535-6.986,6.373.288,11.3,1.648,15.076,4.159,4.548,3.028,7.216,7.949,6.8,12.54-.387,4.239-3.48,8.46-8.071,11.017-4.084,2.275-8.766,3.227-14.539,3.958a175.683,175.683,0,0,1-36.827.73C90.209,35.026,90.109,34.383,90.038,33.764Z" transform="translate(-90.344 55.069) rotate(16)" fill="#fff"/>
												  </g>
												</svg>
											</div>
											<div class="banner-count-main">
                                                <?php if(have_rows('banner_count_box')):
                                                    while(have_rows('banner_count_box')):the_row();
                                                    ?>
												<div class="banner-count-box">
													<h2 class="white_text"><?php echo get_sub_field('count_heading');?></h2>
													<p class="white_text"><?php echo get_sub_field('count_text');?></p>
												</div>
                                                <?php
                                                endwhile;
                                            endif;
                                                ?>
												<!-- <div class="banner-count-box">
													<h2 class="white_text">11</h2>
													<p class="white_text">Years in business</p>
												</div>
												<div class="banner-count-box">
													<h2 class="white_text">100%</h2>
													<p class="white_text">In-House Australian Design & Development Team</p>
												</div> -->
											</div>
										</div>
									</div>
								</div>	

								<div class="col-lg-5 col-md-12 col-12 col-12">
									<div class="banner-right" id="freeConsultation">
										<div class="banner-form-wp">
											<div class="form-title text-center">
												<h4 class="text-center"><?php echo the_field('form_title');?></h4>
												<p class="orange_text"><?php echo the_field('form_small_title');?></p>
											</div>
											<?php echo do_shortcode('[contact-form-7 id="1074" title="Free Consultation"]');?>
		                                        <div class="banner-form-text text-center">
		                                        	<p><?php echo the_field('form_footer_text');?></p> 
		                                        	<div class="call-person-main">
		                                        		<div class="call-person-row">
		                                        			<div class="call-person-info">
		                                        				<div class="call-person-img">
                                                                    <?php
                                                                    $pImg = get_field('form_footer_person_image');
                                                                    ?>
		                                        					<img src="<?php echo $pImg['url'];?>" alt="<?php echo $pImg['alt'];?>">

		                                        					<div class="button-outer-circle has-scale-animation"></div>
    																<div class="button-outer-circle has-scale-animation has-delay-short"></div>
		                                        				</div>
		                                        				<div class="call-info">
		                                        					<span class="cp-name font-we-sb"><?php echo the_field('person_name');?></span>
		                                        					<span class="cp-position font-we-rg"><?php echo the_field('person_designation');?></span>
		                                        				</div>
		                                        			</div>
		                                        			<div class="call-person-btn">
		                                        				<a href="tel:<?php echo the_field('website_call','option');?>" class="btn"><i class="fa fa-phone" aria-hidden="true"></i><?php echo the_field('call_person_btn_text');?></a>
		                                        			</div>
		                                        		</div>
		                                        	</div>
		                                        </div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</section>

			<div class="banner-bottom-points">
				<div class="container">
					<div class="row">
						<div class="col-lg-7 col-md-12 col-sm-12 col-12">
							<div class="banner-points">
								<h5><?php echo the_field('help_title');?></h5>
								<div class="banner-points-wp">
                                    <?php if(have_rows('help_you_with')):
                                    while(have_rows('help_you_with')):the_row();
                                        ?>
									<ul>
                                        <?php if(have_rows('help_name')):
                                        while(have_rows('help_name')):the_row();
                                        ?>
										<li><?php echo get_sub_field('help_name_text');?></li>
                                        <?php
                                        endwhile;
                                    endif;
                                        ?>
										<!-- <li>Android App Development</li>
										<li>Native and Hybrid App Development</li> -->
									</ul>
									<!-- <ul>
										<li>UI / UX Design</li>
										<li>App Prototypes</li>
										<li>Testing</li>
									</ul>
									<ul>
										<li>Third-party Integration</li>
										<li>Maintenance and Support</li>
									</ul> -->
                                    <?php
                                    endwhile;
                                endif;
                                    ?>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="trusted-companies">
				<div class="container">
					<div class="trusted-companies-main">
						<!-- <div class="section-title text-center">
							<h2>Trusted by <span class="orange_text">highly reputable companies</span></h2>
						</div> -->

						<div class="clients-logo-main">
							<div class="clients-logo-inner">
                                <?php if(have_rows('sponsor_images')):while(have_rows('sponsor_images')):the_row();?>
								<div class="client-logo-wrap">
									<div class="client-logo">
                                        <?php $spImg = get_sub_field('sponsor_image');?>
										<img src="<?php echo $spImg['url'];?>" alt="<?php echo $spImg['alt'];?>">
									</div>
								</div>
                                <?php endwhile;endif;?>
								<!-- <div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_2.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_3.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_4.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_5.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_6.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_7.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_8.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/optii.png" alt="logo">
									</div>
								</div>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/logo/client_logo_10.png" alt="logo">
									</div>
								</div> -->
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="trusted-companies-sec">
				<div class="container">
					<div class="trusted-companies-main">
						<div class="trusted-companies-text">
							<?php echo the_field('trusted_company_title');?>
						</div>
						<div class="tc-logos-main">
							<div class="tc-logos-row">
                                <?php if(have_rows('tc_logos')):
                                while(have_rows('tc_logos')):the_row();
                                $tcimg = get_sub_field('tc_logo');
                                ?>
								<div class="tc-logos">
									<img src="<?php echo $tcimg['url'];?>" alt="<?php echo $tcimg['alt'];?>">
								</div>
                                <?php 
                                endwhile;
                            endif;
                                ?>                                
								<!-- <div class="tc-logos">
									<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/tc-img-2.png" alt="#">
								</div>
								<div class="tc-logos">
									<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/tc-img-3.png" alt="#">
								</div>
								<div class="tc-logos">
									<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/tc-img-4.png" alt="#">
								</div>
								<div class="tc-logos">
									<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/tc-img-5.png" alt="#">
								</div> -->
							</div>
						</div>	

						<div class="tc-points-row">
							<div class="row">
                                <?php if(have_rows('tc_icons')):while(have_rows('tc_icons')):the_row();
                                $tcicon = get_sub_field('tc_icon');
                                ?>
								<div class="col-lg-3 col-md-6 col-sm-12 col-12">
									<div class="tc-points-wrap">
										<div class="tcp-icon">
											<img src="<?php echo $tcicon['url'];?>" alt="<?php echo $tcicon['alt'];?>">
										</div>
										<div class="tcp-info">
											<h5><?php echo get_sub_field('tc_title');?></h5>
											<p><?php echo get_sub_field('tc_text');?></p>
										</div>
									</div>
								</div>
                                <?php
                                endwhile;
                            endif;
                                ?>
								<!-- <div class="col-lg-3 col-md-6 col-sm-12 col-12">
									<div class="tc-points-wrap">
										<div class="tcp-icon">
											<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/scalable-icon.png" alt="#">
										</div>
										<div class="tcp-info">
											<h5>Scalable means sustainable</h5>
											<p>Our developments are built upon scalable architecture and engineered to be easily maintainable and upgradeable in the future.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 col-12">
									<div class="tc-points-wrap">
										<div class="tcp-icon">
											<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/solution-icon.png" alt="#">
										</div>
										<div class="tcp-info">
											<h5>We have the solution</h5>
											<p>We are solution providers. We listen to our clients, embrace their vision and focus on providing the best technical solutions that will result in immersive, smooth user experiences.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 col-12">
									<div class="tc-points-wrap">
										<div class="tcp-icon">
											<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/funding-icon.png" alt="#">
										</div>
										<div class="tcp-info">
											<h5>Need funding?</h5>
											<p>We create visually engaging prototypes that can be used as the ultimate pitchdeck to WOW investors and get funding.</p>
										</div>
									</div>
								</div> -->
							</div>
						</div>		
					</div>
				</div>
			</section>
			
			<section class="clients-review bg-shape">
				<div class="container">
					<div class="clients-review-main">
						<div class="section-title text-center">
							<?php echo the_field('review_title');?>
						</div>

						<div class="clients-review-wp">
							<div class="cr-row">
								<div class="review-slider cr-col-main">
                                    <?php if(have_rows('review_slider')):while(have_rows('review_slider')):the_row();?>
									<div class="cr-col">
										<div class="clients-qouet">
											<p><?php echo get_sub_field('clients_qouet');?></p> 
										</div>
										<div class="clients-text">
											<p><?php echo get_sub_field('clients_text');?></p>
										</div>
										<div class="clients-info-main">
											<div class="cr-img">
                                                <?php $clientR = get_sub_field('cr_img');?>
												<img src="<?php echo $clientR['url'];?>" alt="<?php echo $clientR['alt'];?>">
											</div>
											<div class="clients-info">
												<h6 class="client_name white_text"><?php echo get_sub_field('client_name');?></h6>
												<?php echo get_sub_field('client_text');?>
											</div>
										</div>
									</div>
                                    <?php 
                                    endwhile;
                                endif;
                                    ?>
									<!-- <div class="cr-col">
										<div class="clients-qouet">
											<p>“They provided priceless industry knowledge, transparency and understanding as part of the design and construction process.”</p> 
										</div>
										<div class="clients-text">
											<p>We came to App Gurus with an idea and extremely basic wireframe of our concept. As a startup with no app development or programming knowledge, the experience of App Gurus turned our idea into a polished, fully functioning product. The continuing support we have received after completion of our app has been exceptional.</p> 
										</div>
										<div class="clients-info-main">
											<div class="cr-img">
												<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/cr-img-1.png" alt="cr-img">
											</div>
											<div class="clients-info">
												<h6 class="client_name white_text">Jared Fomenko </h6>
												<p>Co-founder at <span class="orange_text">iKnowa</span></p>
											</div>
										</div>
									</div>
									<div class="cr-col">
										<div class="clients-qouet">
											<p>“They guided me through the entire process and made Homeworthy a robust platform by utilising my vision and industry experience.”</p> 
										</div>
										<div class="clients-text">
											<p>I approached the App Gurus to transform my Homeworthy Inspection System into a mobile app. Many businesses and individuals now conduct their inspection services using Homeworthy and the numbers are growing. I personally have saved 2 hours per day on inspection reports, by simply using the Homeworthy app. It’s a fast and reliable experience.</p> 
										</div>
										<div class="clients-info-main">
											<div class="cr-img">
												<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/cr-img-1.png" alt="cr-img">
											</div>
											<div class="clients-info">
												<h6 class="client_name white_text">Bob Sternberg</h6>
												<p>Founder & Director at <span class="orange_text">Homeworthy</span></p>
											</div>
										</div>
									</div>
									<div class="cr-col">
										<div class="clients-qouet">
											<p>“As a result of App Guru’s work, client engagement has increased 300% and net promoter score has increased by 10%.”</p>
										</div>
										<div class="clients-text">
											<p>We never felt that we were dealing with sales people, but rather with a team that had a deep technical understanding. App Gurus built an app to improve communication between the client and their customers. They also integrated an AI element to make custom recommendations to users. Client managers also report increased productivity due to optimized communication via the app.</p> 
										</div>
										<div class="clients-info-main">
											<div class="cr-img">
												<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/cr-img-1.png" alt="cr-img">
											</div>
											<div class="clients-info">
												<h6 class="client_name white_text">Kerry Anderson</h6>
												<p>General Manager, Get More Traffic</p>
											</div>
										</div>
									</div>
									<div class="cr-col">
										<div class="clients-qouet">
											<p>“I’ve always been looked after with the highest level of care and service has been amazing.”</p> 
										</div>
										<div class="clients-text">
											<p>They were very quick to embrace my vision, providing me with endless solutions for anything I asked for. The apps are fantastic. I couldn’t be happier with the outcome as they work exactly as I imagined smooth and fast. </p> 
										</div>
										<div class="clients-info-main">
											<div class="cr-img">
												<img src="<?php echo get_template_directory_uri();?>/fcAssets/images/cr-img-1.png" alt="cr-img">
											</div>
											<div class="clients-info">
												<h6 class="client_name white_text">Adam Wells</h6>
												<p>Director at <span class="orange_text">Relief Driver</span></p>
											</div>
										</div>
									</div> -->
								</div>

								<!-- <div class="cr-col-main">
									<div class="cr-col">
										<div class="cr-logo">
											<img src="fcAssets/images/logo/cr-logo-2.png" alt="cr-logo">
										</div>
										<div class="clients-info">
											<h6 class="client_name orange_text">Jared Fomenko </h6>
											<p>Co-founder, iKnowa</p>
										</div>
										<div class="clients-qouet">
											<p>“They provided priceless industry knowledge, transparency and understanding as part of the design and construction process.”</p> 
										</div>
										<div class="clients-text">
											<p>We came to App Gurus with an idea and extremely basic wireframe of our concept. As a startup with no app development or programming knowledge, the experience of App Gurus turned our idea into a polished, fully functioning product. The continuing support we have received after completion of our app has been exceptional.</p> 
										</div>
										<div class="clients-start">
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
										</div>
									</div>
								</div>

								<div class="cr-col-main">
									<div class="cr-col">
										<div class="cr-logo">
											<img src="fcAssets/images/logo/cr-logo-3.png" alt="cr-logo">
										</div>
										<div class="clients-info">
											<h6 class="client_name orange_text">Bob Sternberg </h6>
											<p>Founder & Director, Homeworthy</p>
										</div>
										<div class="clients-qouet">
											<p>“They guided me through the entire process and made Homeworthy a robust platform by utilising my vision and industry experience.”</p> 
										</div>
										<div class="clients-text">
											<p>I approached the App Gurus to transform my Homeworthy Inspection System into a mobile app. Many businesses and individuals now conduct their inspection services using Homeworthy and the numbers are growing. I personally have saved 2 hours per day on inspection reports, by simply using the Homeworthy app. It’s a fast and reliable experience.</p> 
										</div>
										<div class="clients-start">
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
										</div>
									</div>
								</div>

								<div class="cr-col-main">
									<div class="cr-col">
										<div class="cr-logo">
											<img src="fcAssets/images/logo/cr-logo-4.png" alt="cr-logo">
										</div>
										<div class="clients-info">
											<h6 class="client_name orange_text">Kerry Anderson </h6>
											<p>General Manager, Get More Traffic</p>
										</div>
										<div class="clients-qouet">
											<p>“As a result of App Guru’s work, client engagement has increased 300% and net promoter score has increased by 10%.”</p>
										</div>
										<div class="clients-text">
											<p>We never felt that we were dealing with sales people, but rather with a team that had a deep technical understanding. App Gurus built an app to improve communication between the client and their customers. They also integrated an AI element to make custom recommendations to users. Client managers also report increased productivity due to optimized communication via the app.</p> 
										</div>
										<div class="clients-start">
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
										</div>
									</div>
								</div>

								<div class="cr-col-main">
									<div class="cr-col">
										<div class="cr-logo">
											<img src="fcAssets/images/logo/cr-logo-5.png" alt="cr-logo">
										</div>
										<div class="clients-info">
											<h6 class="client_name orange_text">Adam Wells </h6>
											<p>Director, Relief Driver</p>
										</div>
										<div class="clients-qouet">
											<p>“I’ve always been looked after with the highest level of care and service has been amazing.”</p> 
										</div>
										<div class="clients-text">
											<p>They were very quick to embrace my vision, providing me with endless solutions for anything I asked for. The apps are fantastic. I couldn’t be happier with the outcome as they work exactly as I imagined smooth and fast. </p> 
										</div>
										<div class="clients-start">
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
											<span><i class="fa fa-star" aria-hidden="true"></i></span>
										</div>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="work-industry-sec">
				<div class="container">
					<div class="work-industry-main">
						<div class="section-title text-center">
							<h2><?php echo the_field('industry_title');?></h2>
						</div>
						
						<div class="wi-icon-text-main">
							<div class="work-industry">
								<ul class="work-points-main">
                                    <?php if(have_rows('industry_images')):while(have_rows('industry_images')):the_row(); 
                                    $industryImg = get_sub_field('industry_img');
                                    ?>
									<li>
										<div class="icon-main"><img src="<?php echo $industryImg['url'];?>" alt="<?php echo $industryImg['alt'];?>"> </div>
										<span class="icon-text"><?php echo get_sub_field('industry_text');?></span>	
									</li>
                                    <?php
                                    endwhile;
                                endif;
                                ?>
									<!-- <li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/fitness.png" alt="#"> </div>
										<span class="icon-text">Fitness</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/social.png" alt="#"> </div>
										<span class="icon-text">Social</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/marketing.png" alt="#"> </div>
										<span class="icon-text">Marketing</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/e-commerce.png" alt="#"> </div>
										<span class="icon-text">E-commerce</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/finance.png" alt="#"> </div>
										<span class="icon-text">Finance</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/education.png" alt="#"> </div>
										<span class="icon-text">Education</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/apartment.png" alt="#"> </div>
										<span class="icon-text">Real Estate</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/construction.png" alt="#"> </div>
										<span class="icon-text">Construction</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/restaurant.png" alt="#"> </div>
										<span class="icon-text">Restaurant</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/travel.png" alt="#"> </div>
										<span class="icon-text">Travel</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/retail.png" alt="#"> </div>
										<span class="icon-text">Retail</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/sport.png" alt="#"> </div>
										<span class="icon-text">Sport</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/business.png" alt="#"> </div>
										<span class="icon-text">Business</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/logistics.png" alt="#"> </div>
										<span class="icon-text">Logistics</span>	
									</li>
									<li>
										<div class="icon-main"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/icons/diverse-range.png" alt="#"> </div>
										<span class="icon-text">Diverse range of SME’s</span>	
									</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="why_clients-sec ">
				<div class="container">
					<div class="why_clients-main">
						<div class="section-title text-center">
							<h2 class="white_text"><?php echo the_field('why_choose_title');?></h2>
						</div>

						<div class="why_clients-top">
							<div class="icon-text-main">
                                <?php if(have_rows('icon_text_box')):while(have_rows('icon_text_box')):the_row();
                                $whyChoose = get_sub_field('icon_box_image');
                                ?>
								<div class="icon-text-box">
									<div class="icon"><img src="<?php echo $whyChoose['url'];?>" alt="<?php echo $whyChoose['alt'];?>"> </div>
									<div class="text"><?php echo get_sub_field('icon_box_text');?></div>
								</div>
                                <?php endwhile;endif; ?>
								<!-- <div class="icon-text-box">
									<div class="icon"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/goal.png" alt=""> </div>
									<div class="text">Tailored solutions to meet objectives and budget</div>
								</div>
								<div class="icon-text-box">
									<div class="icon"><img src="<?php echo get_template_directory_uri();?>/fcAssets/images/collaboration.png" alt=""> </div>
									<div class="text">Guided support for all clients</div>
								</div> -->
							</div>
						</div>

						<div class="why_clients_points">
							<ul class="wc-points">
                                <?php if(have_rows('wc_points')):while(have_rows('wc_points')):the_row();?>
								<li><?php echo get_sub_field('wc_points_text');?></li>
                                <?php endwhile;endif;?>
								<!-- <li>We are solution providers – we identify the problem and recommend solutions to meet the strategic objectives.</li>
								<li>We have rigid processes in place to ensure projects meet top industry standards in production and performance.</li> -->
							</ul>
						</div>
					</div>
				</div>
			</section>

			<!-- Content End -->
		</div>

	<?php

get_footer('consultation');

    ?>

