<?php
/*
Template Name: About Us Update
*/
get_header();
?>

          <section class="banner-sec banner-sec-v2" >
				<div class="banner-wrap  ">
					<div class="container">	
						<div class="banner-text-wrap ">
							<div class="banner-text banner-text mb-3">
								<div class="banner-heading-wrap">
									<h1 class="banner-heading"><?php echo the_field('banner_title');?></h1>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-5 col-md-6 col-sm-12 col-12 ">
								</div>
								<div class="col-lg-7 col-md-6 col-sm-12 col-12 ">
									<div class="banner-text-v2">
										<?php echo the_field('banner_description');?>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</section>

	 		<div class="appgurus-img">
                <?php $bannerImg = get_field('banner_image');?>
				<img src="<?php echo $bannerImg['url'];?>" alt="<?php echo $bannerImg0['alt'];?>">
			</div>

			<section class="why-choose-us">
				<div class="container">
					<div class="whyChooseUs-main">
						<div class="section-title">
							<div class="row">
								<?php echo the_field('why_choose_section_titles');?>
							</div>
						</div>
						<div class="whyChooseUs-row">
							<div class="whyChooseUs-left">
								<p><?php echo the_field('why_choose_left_text');?></p>
								<div class="whyChooseUs-cta">
									<a href="<?php echo the_field('why_choose_left_button_link');?>" class="btn btn-with-arrow"><?php echo the_field('why_choose_left_button_text');?></a>
								</div>
							</div>
							<div class="whyChooseUs-right">
								<div class="whyChooseUs-right-row">
									<div class="whyChooseUs-img">
                                        <?php $Whychooseimg = get_field('why_choose_right_image');?>
										<img src="<?php echo $Whychooseimg['url'];?>" alt="<?php echo $Whychooseimg['alt'] ;?>">
									</div>
									<div class="whychooseus-info-wrap">
                                        <?php if(have_rows('wc_info_wrap')):
                                            while(have_rows('wc_info_wrap')):the_row();
                                            ?>
                                            <?php if(get_row_layout()=='info_1'):?>
										<div class="whychooseus-info">
                                            <?php if(have_rows('info_1_columns')):while(have_rows('info_1_columns')):the_row();?>
											<div class="whychooseus-col">
												<div class="whychooseus-col-title">
													<a href="#" class="whychooseus-link">
														<span class="wcu-lg-font"><?php echo get_sub_field('title');?></span>
														<span class="wcu-link">
															<svg xmlns="http://www.w3.org/2000/svg" width="30.961" height="32.582" viewBox="0 0 30.961 32.582"> <path id="right-arrow" d="M21.138,107.5l-1.3,1.3,5.773,5.773H0v1.835H25.614l-5.773,5.773,1.3,1.3,7.988-7.988Z" transform="translate(-82.35 -46.787) rotate(-50)"/></svg>
														</span>
													</a>
												</div>
												<p><?php echo get_sub_field('text');?></p>
											</div>
                                            <?php endwhile;endif;?>
											<!-- <div class="whychooseus-col">
												<div class="whychooseus-col-title">
													<a href="#" class="whychooseus-link">
														<span class="wcu-lg-font"></span>
														<span class="wcu-link">
															<svg xmlns="http://www.w3.org/2000/svg" width="30.961" height="32.582" viewBox="0 0 30.961 32.582"> <path id="right-arrow" d="M21.138,107.5l-1.3,1.3,5.773,5.773H0v1.835H25.614l-5.773,5.773,1.3,1.3,7.988-7.988Z" transform="translate(-82.35 -46.787) rotate(-50)"/></svg>
														</span>
													</a>
												</div>
												<p></p>
											</div> -->
										</div>
                                        <?php endif;?>
                                        <?php if(get_row_layout()=='info_2'):?>
										<div class="whychooseus-info">
                                            <?php if(have_rows('info_2_columns')):while(have_rows('info_2_columns')):the_row();?>
											<div class="whychooseus-col">
												<div class="whychooseus-col-title">
													<a href="#" class="whychooseus-link">
														<span class="wcu-lg-font"><?php echo get_sub_field('title');?></span>
														<span class="wcu-link">
															<svg xmlns="http://www.w3.org/2000/svg" width="30.961" height="32.582" viewBox="0 0 30.961 32.582"> <path id="right-arrow" d="M21.138,107.5l-1.3,1.3,5.773,5.773H0v1.835H25.614l-5.773,5.773,1.3,1.3,7.988-7.988Z" transform="translate(-82.35 -46.787) rotate(-50)"/></svg>
														</span>
													</a>
												</div>
												<p><?php echo get_sub_field('text');?></p>
											</div>
                                            <?php endwhile;endif;?>
											<!-- <div class="whychooseus-col">
												<div class="whychooseus-col-title">
													<a href="#" class="whychooseus-link">
														<span class="wcu-lg-font"></span>
														<span class="wcu-link">
															<svg xmlns="http://www.w3.org/2000/svg" width="30.961" height="32.582" viewBox="0 0 30.961 32.582"> <path id="right-arrow" d="M21.138,107.5l-1.3,1.3,5.773,5.773H0v1.835H25.614l-5.773,5.773,1.3,1.3,7.988-7.988Z" transform="translate(-82.35 -46.787) rotate(-50)"/></svg>
														</span>
													</a>
												</div>
												<p></p>
											</div> -->
										</div>
                                        <?php endif;?>
                                        <?php endwhile;endif;?>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="team-section">
				<div class="team-sec-top">
					<div class="team-title-slider">
                        <?php if(have_rows('meet_team_2','option')):while(have_rows('meet_team_2','option')):the_row();?>
						<div class="team-slide">
							<span class="team-lg-font"><?php echo get_sub_field('team_slide','option');?></span>
						</div>
                        <?php endwhile;endif;?>
						<!-- <div class="team-slide">
							<span class="team-lg-font"></span>
						</div> -->
					<!-- 	<div class="team-slide">
							<span class="team-lg-font">We love what we do ✺ </span>
						</div> -->
					</div>
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-4 col-md-4 col-sm-12 col-12">
								<p class="dots-point"><?php echo the_field('dot_text','option');?></p>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 col-12">
								<p class="team-sub-text mb-0"><?php echo the_field('meet_team_2_sub_text','option');?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="team-sec-bottom">
					<div class="container">
						<div class="team-person-slider">
                            <?php if(have_rows('meet_team_member','option')):while(have_rows('meet_team_member','option')):the_row();?>
							<div class="team-person-info-wp">
								<div class="team-person-img">
                                    <?php $meetImg = get_sub_field('member_image','option');?>
									<img src="<?php echo $meetImg['url'];?>" alt="<?php echo $meetImg['alt'];?>">
								</div>
								<div class="team-person-info">
									<span class="name"><?php echo get_sub_field('member_name','option');?></span>
									<span class="position"><?php echo get_sub_field('member_position','option');?></span>
								</div>
							</div>
                                <?php endwhile;endif;?>
							<!-- <div class="team-person-info-wp">
								<div class="team-person-img">
									<img src="<?php echo get_template_directory_uri();?>/homeassets/images/team-img-2.png" alt="#">
								</div>
								<div class="team-person-info">
									<span class="name">Sam Selimovic</span>
									<span class="position">Sales Head</span>
								</div>
							</div>
							<div class="team-person-info-wp">
								<div class="team-person-img">
									<img src="<?php echo get_template_directory_uri();?>/homeassets/images/team-img-3.png" alt="#">
								</div>
								<div class="team-person-info">
									<span class="name">Deep M.</span>
									<span class="position">Development Head</span>
								</div>
							</div>
							<div class="team-person-info-wp">
								<div class="team-person-img">
									<img src="<?php echo get_template_directory_uri();?>/homeassets/images/team-img-4.png" alt="#">
								</div>
								<div class="team-person-info">
									<span class="name">Smith P.</span>
									<span class="position">Development Head</span>
								</div>
							</div>
							<div class="team-person-info-wp">
								<div class="team-person-img">
									<img src="<?php echo get_template_directory_uri();?>/homeassets/images/team-img-5.png" alt="#">
								</div>
								<div class="team-person-info">
									<span class="name">Pratik S.</span>
									<span class="position">Design Head</span>
								</div>
							</div>
							<div class="team-person-info-wp">
								<div class="team-person-img">
									<img src="<?php echo get_template_directory_uri();?>/homeassets/images/team-img-6.png" alt="#">
								</div>
								<div class="team-person-info">
									<span class="name">Bhavin B.</span>
									<span class="position">Marketing Head</span>
								</div>
							</div> -->
						</div>
					</div>	
				</div>
			</section>

			<section class="awards_section technology--stack-sec">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="section-title">
								<h2><?php echo the_field('award_title');?></h2>
							</div>	
						</div>
					</div>


					<div class="tech-stack-row">
						<div class="tech-stack-tabs home-left-tabs">
                                    <?php echo the_field('award_left_text');?>        
						</div>
						<div class="ts-tab-content">
							<div class="clients-logo-main achievements-wrap">
								<div class="achievements-logo-inner">
                                    <?php if(have_rows('trusted_company_logo','option')):while(have_rows('trusted_company_logo','option')):the_row();?>
								    <div class="achievements-logo-wrap">
								        <div class="achievements-logo">
                                            <?php $achiveLogo = get_sub_field('trusted_company_logo_image','option');?>
								          <img src="<?php echo $achiveLogo['url'];?>" alt="<?php echo $achiveLogo['alt'];?>" class="entered lazyloaded">
								        </div>
								    </div>
								   <?php endwhile;endif;?>
								    <!-- <div class="achievements-logo-wrap">
								        <div class="achievements-logo">
								          <img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/DesignRushnew.png" alt="" data-lazy-src="https://www.appgurus.com.au/wp-content/uploads/2024/05/DesignRushnew.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/DesignRushnew.png" alt=""></noscript>
								        </div>
								    </div>
								   
								    <div class="achievements-logo-wrap">
								        <div class="achievements-logo">
								          <img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/GoodFirms.png" alt="" data-lazy-src="https://www.appgurus.com.au/wp-content/uploads/2024/05/GoodFirms.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/GoodFirms.png" alt=""></noscript>
								        </div>
								    </div>
								   
								    <div class="achievements-logo-wrap">
								        <div class="achievements-logo">
								          <img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/TechBehemoths.png" alt="" data-lazy-src="https://www.appgurus.com.au/wp-content/uploads/2024/05/TechBehemoths.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/TechBehemoths.png" alt=""></noscript>
								        </div>
								    </div>
								   
								    <div class="achievements-logo-wrap">
								        <div class="achievements-logo">
								          <img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/themanifest.png" alt="" data-lazy-src="https://www.appgurus.com.au/wp-content/uploads/2024/05/themanifest.png" data-ll-status="loaded" class="entered lazyloaded"><noscript><img src="https://www.appgurus.com.au/wp-content/uploads/2024/05/themanifest.png" alt=""></noscript>
								        </div>
								    </div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="values-vision-sec technology--stack-sec">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="section-title">
								<h2><?php echo the_field('value_title');?></h2>
							</div>	
						</div>
					</div>

					<div class="tech-stack-row">
                        <?php if(have_rows('vision_tabs')):?>
						<div class="tech-stack-tabs home-left-tabs">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <?php 
                                $vision = 0;

                                ?>
                                <?php while(have_rows('vision_tabs')):the_row();?>
							    <button class="nav-link <?php echo $vision == 0 ? 'active':'';?>" id="v-pills-<?php echo $vision;?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo $vision;?>" type="button" role="tab" aria-controls="v-pills-<?php echo $vision;?>" aria-selected="<?php echo $vision == 0 ? 'true':'false';?>"><?php echo get_sub_field('vision_tab_title');?></button>
                                <?php $vision++;endwhile;?>
							</div>	
						</div>
						<div class="ts-tab-content">
							<div class="tab-content" id="v-pills-tabContent">
                                <?php $vision = 0; while(have_rows('vision_tabs')):the_row();?>
                                
							    <div class="tab-pane fade <?php echo $vision == 0 ? 'show active':'fade';?>" id="v-pills-<?php echo $vision;?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $vision;?>-tab">
							    	<div class="ts-tab-content-main">
							    		<div class="tech-stack-tabrow">
                                            <?php while(have_rows('vision_tab_content')):the_row();?>
							    			<div class="values-vision-col">
							    				<div class="values-visions-col-title">
							    					<h3><?php echo get_sub_field('vision_content_title');?></h3>
							    					<p class="font-22 font-we-rg"><?php echo get_sub_field('vision_content_text');?></p>
							    				</div>
							    				<ul class="numbers-count">
                                                    <?php while(have_rows('vision_content_number')):the_row();?>
							    					<li><p>
                                                        <?php echo get_sub_field('content_number');?>
                                                    </p></li>
                                                    <?php endwhile;?>
							    				</ul>
							    			</div>
                                            <?php endwhile;?>
							    		</div>
							    	</div>
							    </div>
                                <?php $vision++;endwhile;?>
							</div>
						</div>
                        <?php endif;?>
					</div>
				</div>
			</section>

			<section class="contact_us_sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="sales-manager-details">
								<div class="sm-details-top">
									<svg xmlns="http://www.w3.org/2000/svg" width="32.269" height="24.978" viewBox="0 0 32.269 24.978"> <path id="Icon_awesome-quote-right" data-name="Icon awesome-quote-right" d="M29.244,2.25H21.176a2.868,2.868,0,0,0-3.025,2.676v7.136a2.868,2.868,0,0,0,3.025,2.676h5.042v3.568a3.826,3.826,0,0,1-4.034,3.568h-.5a1.43,1.43,0,0,0-1.513,1.338v2.676a1.43,1.43,0,0,0,1.513,1.338h.5c5.571,0,10.084-3.992,10.084-8.921V4.926A2.868,2.868,0,0,0,29.244,2.25Zm-18.151,0H3.025A2.868,2.868,0,0,0,0,4.926v7.136a2.868,2.868,0,0,0,3.025,2.676H8.067v3.568a3.826,3.826,0,0,1-4.034,3.568h-.5a1.43,1.43,0,0,0-1.513,1.338v2.676a1.43,1.43,0,0,0,1.513,1.338h.5c5.571,0,10.084-3.992,10.084-8.921V4.926A2.868,2.868,0,0,0,11.092,2.25Z" transform="translate(0 -2.25)" fill="#fff"/> </svg>
									<p class="white_text font-we-md">With over 12+ years of experience, we specialize in customized IT solutions for medium-sized businesses and corporations. Our priority is aligning with your goals, and we take pride in our work and clients.</p>
								</div>
								<div class="sm-details-bottom">
									<div class="sm-details-info">
										<span class="sm-name white_text">SAM Selimovic</span>
										<span class="sm-position theme-color-text">Sales Manager</span>
									</div>
									<div class="sm-details-img">
										<img src="<?php echo get_template_directory_uri();?>/homeassets/images/manager-img.png" alt="#">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12 contact_us_form">
							<div class="contact_us_form-title">
								<h2 class="white_text">Empower Your Growth: Partner with Us Today!</h2>
							</div>
							<form>
								<div class="form-group-main">
									<div class="row mb-4">
										<div class="col-md-6 col-sm-12 col-12">
											<div class="form-group">
			                                    <input type="text" placeholder="First Name" class="form-control">
			                                </div>
			                            </div>  
			                            <div class="col-md-6 col-sm-12 col-12">
											<div class="form-group">
			                                    <input type="text" placeholder="Last Name" class="form-control">
			                                </div>
			                            </div> 
										<div class="col-md-6 col-sm-12 col-12">		                                
			                                <div class="form-group">
			                                    <input type="email" placeholder="Email" class="form-control">
			                                </div>
			                            </div>
			                            <div class="col-md-6 col-sm-12 col-12">
			                                <div class="form-group">
			                                    <input type="tel" placeholder="Phone" class="form-control">
			                                </div>
			                            </div>
			                            <div class="col-md-12 col-sm-12 col-12">
			                                <div class="form-group">
			                                    <textarea class="form-control" placeholder="Discuss about your project…"></textarea>
			                                </div>		
			                            </div>
									</div>
									<div class="row flex-row-reverse">
										<div class="col-md-5 col-sm-12 col-12">
											<div class="form-send-btn text-md-end">
			                                    <button class="btn">SEND MESSAGE</button>
			                                </div>
			                            </div> 
										<div class="col-md-7 col-sm-12 col-12">
											<p class="white_text mb-0">We will add your info to our CRM for contacting you regarding your request. For more info please consult our privacy policy.</p>
			                            </div>  
			                            
									</div>
	                            </div>
							</form>
						</div>
						
					</div>
				</div>
			</section>

<?php

get_footer();

?>