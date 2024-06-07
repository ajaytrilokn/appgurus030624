<?php
/*
Template Name:Home Page Update
*/

get_header();
$author_id=$post->post_author;
?>
			<!-- Content Start -->

			<section class="banner-sec" >
				<div class="banner-wrap  ">
					<div class="container">
						<div class="banner-text-wrap ">
							<div class="banner-text ">
								<?php echo the_field('banner_heading');?>
							</div>
							<div class="banner-count-main">
								<?php if(have_rows('banner_count_box')):while(have_rows('banner_count_box')):the_row();?>
								<div class="banner-count-box">
									<h2 class="theme-color-text"><?php echo get_sub_field('banner_count');?></h2>
									<p><?php echo get_sub_field('banner_count_text');?></p>
								</div>
								<?php endwhile;endif;?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="trusted-companies">
				<div class="container-fuild">
					<div class="trusted-companies-main">
						<div class="clients-logo-main">
							<div class="clients-logo-inner">
								<?php if(have_rows('sponsors_images','option')):
								while(have_rows('sponsors_images','option')):the_row();
								$trustedImg = get_sub_field('s_image','option');
								?>
								<div class="client-logo-wrap">
									<div class="client-logo">
										<img src="<?php echo $trustedImg['url'];?>" alt="<?php echo $trustedImg['title'];?>">
									</div>
								</div>
								<?php endwhile;endif;?>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="accordian-sec" id="accordionService">
				<div class="container">
					<div class="row">
						<?php if(have_rows('service_accordian')):?>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="tab-content d-flex justify-content-center align-items-center h-100" id="nav-tabContent">
							<?php $i = 0; while( have_rows('service_accordian') ): the_row(); ?>
								<div class="tab-pane fade <?php echo $i == 0 ? 'show active' : ''; ?>" id="accordion-<?php echo $i; ?>" role="tabpanel" aria-labelledby="accordion-<?php echo $i; ?>-tab">
			                        <div class="images-main">
										<?php $serviceImg = get_sub_field('service_image');?>
										<img src="<?php echo $serviceImg['url'];?>" alt="<?php echo $serviceImg['alt'];?>">
									</div>
			                    </div>
								<?php $i++; endwhile; ?>
		                   	</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							<div class="accordion accordion-service nav nav-tabs" role="tablist" >
							<?php $i = 0; while( have_rows('service_accordian') ): the_row(); ?>
								<div class="accordion-item" data-bs-toggle="tab" data-bs-target="#accordion-<?php echo $i; ?>" type="button" role="tab" aria-controls="accordion-<?php echo $i; ?>" aria-selected="<?php echo $i == 0 ? 'true' : 'false'; ?>">
								    <h2 class="accordion-header" id="service-heading<?php echo $i; ?>">
								      <button id="collapse<?php echo $i; ?>" class="accordion-button <?php echo $i == 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#service-collapse<?php echo $i; ?>" aria-expanded="<?php echo $i == 0 ? 'true' : 'false'; ?>" aria-controls="service-collapse<?php echo $i; ?>">
								      <?php the_sub_field('service_title'); ?>
								      </button>
								    </h2>
								    <div id="service-collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i == 0 ? 'show' : ''; ?>" aria-labelledby="service-heading<?php echo $i; ?>" data-bs-parent="#accordionService">
								      <div class="accordion-body">
								      	<ul class="service-type">
											<?php if(have_rows('service_types')):while(have_rows('service_types')):the_row();?>
								      		<li><?php echo get_sub_field('service_type');?></li>
											<?php endwhile;endif;?>
								      	</ul>
								      	<p><?php echo get_sub_field('service_text');?></p>
								      	<div class="learn_more_main">
								      		<a href="#" class="learn_more_cta"><?php echo get_sub_field('service_link');?></a>
								      	</div>
								      </div>
								    </div>
								</div>
								<?php $i++; endwhile; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>

			<section>
				<div class="container">
					<div class="tc-logos-main">
						<div class="tc-logos-row">
							<?php if(have_rows('trusted_company_logo','option')):while(have_rows('trusted_company_logo','option')):the_row();
							$TClogo = get_sub_field('trusted_company_logo_image','option');
							?>
		                   	<div class="tc-logos">
								<img src="<?php echo $TClogo['url'];?>" alt="<?php echo $TClogo['alt'];?>">
							</div>
							<?php endwhile;endif;?>      
						</div>
					</div>
				</div>
			</section>
			
			<section class="industries-sec">
				<div class="container">
					<div class="industries-wrap">
						<div class="section-title">
							<h2 class="white_text"><?php echo the_field('industry_title');?></h2>
						</div>
						<div class="industries-row">
							<div class="industries-left">
								<p class="white_text"><?php echo the_field('industry_text');?></p>
								<div class="industries-cta">
									<a href="#" class="btn"><?php echo the_field('industry_button_text');?></a>
								</div>
							</div>
							<div class="industries-right">
								<div class="industries-slider-main">
									<?php if(have_rows('industry_slider')):
									while(have_rows('industry_slider')):the_row();
									$industryImg = get_sub_field('industry_slider_image');
									?>
									<div class="industries-slide">
										<div class="industries-icon">
											<img src="<?php echo $industryImg['url'];?>" alt="<?php echo $industryImg['alt'];?>">
										</div>
										<div class="industries-slide-info">
											<h3><?php echo get_sub_field('industry_slider_title');?></h3>
											<p><?php echo get_sub_field('industry_slider_text');?></p>
											<div class="learn_more_main">
									      		<a href="<?php echo get_sub_field('slider_link');?>" class="learn_more_cta"><?php echo get_sub_field('industry_slider_link');?></a>
									      	</div>
										</div>
									</div>
									<?php endwhile;endif;
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="why-choose-us">
				<div class="container">
					<div class="whyChooseUs-main">
						<div class="section-title">
							<h2><?php echo the_field('why_choose_title');?></h2>
							<p><?php echo the_field('why_choose_text');?></p>
						</div>
						<div class="whyChooseUs-row">
							<div class="whyChooseUs-left">
								<p><?php echo the_field('why_choose_description');?></p>
								<div class="whyChooseUs-cta">
									<a href="#" class="btn"><?php echo the_field('why_choose_button_text');?></a>
								</div>
							</div>
							<div class="whyChooseUs-right">
								<div class="whyChooseUs-right-row">
									<div class="whyChooseUs-img">
										<?php $WhyImg = get_field('why_choose_image');?>
										<img src="<?php echo $WhyImg['url'];?>" alt="<?php echo $WhyImg['alt'];?>">
									</div>
									<div class="whychooseus-info-wrap">
										<div class="whychooseus-info">
											<?php if(have_rows('why_choose_info1')):while(have_rows('why_choose_info1')):the_row();?>
											<div class="whychooseus-col">
												<div class="whychooseus-col-title">
													<a href="#" class="whychooseus-link">
														<span class="wcu-lg-font"><?php echo get_sub_field('info_title');?></span>
														<span class="wcu-link">
														<?php echo get_sub_field('info_svg');?>
														</span>
													</a>
												</div>
												<p><?php echo get_sub_field('info_text');?></p>
											</div>
											<?php endwhile;endif;?>
										</div>
										<div class="whychooseus-info">
										<?php if(have_rows('why_choose_info2')):while(have_rows('why_choose_info2')):the_row();?>
											<div class="whychooseus-col">
												<div class="whychooseus-col-title">
													<a href="#" class="whychooseus-link">
														<span class="wcu-lg-font"><?php echo get_sub_field('info_title');?></span>
														<span class="wcu-link">
														<?php echo get_sub_field('info_svg');?>
														</span>
													</a>
												</div>
												<p><?php echo get_sub_field('info_text');?></p>
											</div>
											<?php endwhile;endif;?>
										</div>
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
						<?php if(have_rows('meet_team','option')):while(have_rows('meet_team','option')):the_row();?>
						<div class="team-slide">
							<span class="team-lg-font"><?php echo get_sub_field('meet_team_text','option');?></span>
						</div>
						<?php endwhile;endif;?>
					</div>
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-4 col-md-4 col-sm-12 col-12">
								<p class="dots-point"><?php echo the_field('dot_text','option');?></p>
							</div>
							<div class="col-lg-8 col-md-8 col-sm-12 col-12">
								<p class="team-sub-text mb-0"><?php echo the_field('meet_team_sub_text','option');?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="team-sec-bottom">
					<div class="container">
						<div class="team-person-slider">
							<?php if(have_rows('meet_team_member','option')):
							while(have_rows('meet_team_member','option')):the_row();
							$memberImg = get_sub_field('member_image','option');?>
							<div class="team-person-info-wp">
								<div class="team-person-img">
									<img src="<?php echo $memberImg['url'];?>" alt="<?php echo $memberImg['alt'];?>">
								</div>
								<div class="team-person-info">
									<span class="name"><?php echo get_sub_field('member_name','option');?></span>
									<span class="position"><?php echo get_sub_field('member_position','option');?></span>
								</div>
							</div>
							<?php endwhile;endif;?>
						</div>
					</div>	
				</div>
			</section>

			<section class="case--study-sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-12">
							<div class="section-title">
								<h2 class="white_text"><?php echo the_field('case_study_title');?></h2>
							</div>	
							<div class="case--study-type-wp">
								<ul class="case--study-type-inner">
									<?php if(have_rows('case_study_types')):while(have_rows('case_study_types')):the_row();?>
									<li><a class="case--study-type" href="#"><?php echo get_sub_field('case_study_type');?></a> </li>
									<?php endwhile;endif;?>
								</ul>
							</div>	
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="case--study-cta text-md-end">
								<a href="#" class="btn"><?php echo the_field('see_all_btn');?></a>
							</div>
						</div>
					</div>
					<div class="case--study-row">
						<div class="case--study-col">
							<?php if(have_rows('case_studies')):while(have_rows('case_studies')):the_row();
							$CSImg = get_sub_field('cs_image');
							?>
							<div class="case--study-box">
								<div class="case--study-img">
									<a href="#" class="cs--img-link">
										<img src="<?php echo $CSImg['url'];?>" alt="<?php $CSImg['alt'];?>">
									</a>
									
									<div class="cs--type-wp">
										<ul class="case--study-type-inner">
											<?php if(have_rows('cs_types')):while(have_rows('cs_types')):the_row();?>
											<li><a class="case--study-type" href="#"><?php echo get_sub_field('cs_type');?></a> </li>
											<?php endwhile;endif;?>
										</ul>
									</div>	
								</div>
								<div class="case--study-info">
									<div class="cs-info-type"><span class="theme-color-text text-uppercase"><?php echo get_sub_field('cs_info_type');?></span></div>
									<h3 class="white_text"><a href="<?php echo get_sub_field('cs_link');?>" class="case--study-link"><?php echo get_sub_field('cs_link_text');?></a></h3>
									<p><?php echo get_sub_field('cs_small_text');?></p>
								</div>
							</div>	
							<?php endwhile;endif;?>
						</div>
						<div class="case--study-col">
							<div class="case--study-orange-box d-flex align-items-center justify-content-center">
								<div class="csob-text d-flex align-items-center ">
									<span class="project-conut"><?php echo the_field('cs_orange_box_count');?></span>
									<span class="project-text white_text"><?php echo the_field('cs_orange_box_text');?></span>
								</div>
							</div>
									<?php if(have_rows('case_studies2')):while(have_rows('case_studies2')):the_row();
									$CSImg2 = get_sub_field('cs_image2');
									?>
							<div class="case--study-box">
								<div class="case--study-img">
									<a href="#" class="cs--img-link">
										<img src="<?php echo $CSImg2['url'];?>" alt="<?php echo $CSImg2['alt'];?>">
									</a>
									
									<div class="cs--type-wp">
										<ul class="case--study-type-inner">
											<?php if(have_rows('cs_types2')):while(have_rows('cs_types2')):the_row();?>
											<li><a class="case--study-type" href="#"><?php echo get_sub_field('cs_type2');?></a> </li>
											<?php endwhile;endif;?>
										</ul>
									</div>	
								</div>
								<div class="case--study-info">
									<div class="cs-info-type"><span class="theme-color-text text-uppercase"><?php echo get_sub_field('cs_info_type2');?></span></div>
									<h3 class="white_text"><a href="<?php echo get_sub_field('cs_link2');?>" class="case--study-link"><?php echo get_sub_field('cs_link_text2');?></a></h3>
									<p><?php echo get_sub_field('cs_small_text2');?></p>
								</div>
							</div>	
							<?php endwhile;endif;?>
						</div>
					</div>
				</div>
			</section>

			<section class="testimonials-sec">
				<div class="container">
					<div class="section-title">
						<h2><?php echo the_field('client_say_title','option');?></h2>
					</div>	
					<div class="testimonials_top_row">
						<div class="testimonials-tcol">
							<div class="review_logo_rating">
								<div class="review__logo">
									<svg id="clutch-co-vector-logo" xmlns="http://www.w3.org/2000/svg" width="86.771" height="24.643" viewBox="0 0 86.771 24.643"> <path id="Path_2418" data-name="Path 2418" d="M177,235.9h3.991v24.643H177Z" transform="translate(-154.44 -235.9)"/> <path id="Path_2419" data-name="Path 2419" d="M235.933,299.951a3.87,3.87,0,0,1-4.165,4.165c-2.43,0-2.777-2.256-2.777-3.471V291.1H225v9.371a7.328,7.328,0,0,0,2.082,5.553,6.282,6.282,0,0,0,4.686,1.735,6.06,6.06,0,0,0,4.165-1.388v1.388h3.992V291.1h-3.992Z" transform="translate(-195.498 -283.117)"/> <path id="Path_2420" data-name="Path 2420" d="M341.142,249.1H337.15v6.074H334.2v3.818h2.95v12.842h3.991V258.992h2.95v-3.818h-2.95Z" transform="translate(-288.906 -247.191)"/> <path id="Path_2421" data-name="Path 2421" d="M419.2,300.674a5.479,5.479,0,0,1-3.3,1.215,4.6,4.6,0,0,1-4.686-4.859,4.464,4.464,0,0,1,4.686-4.686,4.581,4.581,0,0,1,3.3,1.215l.521.521,2.777-2.6-.694-.521a8.9,8.9,0,0,0-5.9-2.256,8.5,8.5,0,0,0,0,17.007,8.9,8.9,0,0,0,5.9-2.256l.694-.521-2.777-2.777Z" transform="translate(-351.52 -281.064)"/> <path id="Path_2422" data-name="Path 2422" d="M537.148,245.271a5.508,5.508,0,0,0-4.339-1.735,5.219,5.219,0,0,0-3.818,1.388V235.9H525v24.643h3.992v-9.2c0-3.818,2.6-4.165,3.644-4.165,2.43,0,2.256,2.256,2.256,3.471v9.718h3.991v-9.545C538.883,248.569,538.363,246.486,537.148,245.271Z" transform="translate(-452.112 -235.9)"/> <ellipse id="Ellipse_48" data-name="Ellipse 48" cx="2.777" cy="2.777" rx="2.777" ry="2.777" transform="translate(61.434 13.363)" fill="#ef4335"/> <path id="Path_2423" data-name="Path 2423" d="M38.007,259.576a8.138,8.138,0,0,1-5.727,2.256c-4.339,0-7.462-3.471-7.462-8.157s3.124-8.156,7.636-8.156a8.166,8.166,0,0,1,5.727,2.43l.521.521,2.6-2.6-.521-.521a11.687,11.687,0,0,0-8.33-3.471C25.859,241.7,21,246.908,21,253.676s4.859,11.974,11.28,11.974a11.4,11.4,0,0,0,8.33-3.471l.521-.521-2.6-2.6Z" transform="translate(-21 -241.007)"/> </svg>
								</div>
								<div class="review_rating_main">
									<div class="review_rating">
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
									</div>
									<span class="rr_subtext">25 Reviews</span>
								</div>
							</div>
							<div class="testimonials-tcol_right">
								<span class="font-we-bl">Top Rated</span><br>
								<span class="rr_subtext">The highest quality results and client satisfaction</span>
							</div>
						</div>
						<div class="testimonials-tcol">
							<div class="review_logo_rating">
								<div class="review__logo">
									<svg id="goodfirms-white-logo-_11_" data-name="goodfirms-white-logo-(11)" xmlns="http://www.w3.org/2000/svg" width="161.193" height="24.028" viewBox="0 0 161.193 24.028"> <path id="Shape" d="M9.878,8.45S8.544,8.317,8.544,9.506v5.28h8.81v1.585a.757.757,0,0,1-.8.792H8.544v6.865h9.611s5.819-.9,5.873-6.865V8.45ZM23.76,0H6.407C.133,1.478,0,6.627,0,6.627v17.4H6.675V8.186A1.627,1.627,0,0,1,8.009,6.6H23.761V0ZM46.669,19.048c-.458.306-.8.53-1.035.673a18.528,18.528,0,0,1-2.428,1.264,7.865,7.865,0,0,1-2.946.673,10.618,10.618,0,0,1-7.506-2.774,9.092,9.092,0,0,1-3-6.993,10.147,10.147,0,0,1,2.707-7.056,8.542,8.542,0,0,1,6.589-2.977,11.081,11.081,0,0,1,3.423.572,9.472,9.472,0,0,1,3.8,2.181L44.539,6.528a6.683,6.683,0,0,0-2.807-1.57,9.778,9.778,0,0,0-2.767-.366,5.733,5.733,0,0,0-4.558,2.181,7.945,7.945,0,0,0-1.831,5.24,6.585,6.585,0,0,0,2.089,5,7.409,7.409,0,0,0,5.315,2,5.428,5.428,0,0,0,2.747-.835c.777-.592,1.175-.878,1.195-.9v-4.18H38.109l.835-2.61h7.724Zm17.558-5.1a7.254,7.254,0,0,1-2.15,5.24,7.3,7.3,0,0,1-10.451.041,7.082,7.082,0,0,1-2.19-5.261,7.547,7.547,0,0,1,2.09-5.3,6.685,6.685,0,0,1,5.116-2.243,7.338,7.338,0,0,1,7.585,7.524Zm-2.728.041a4.784,4.784,0,0,0-1.373-3.467,4.508,4.508,0,0,0-3.4-1.428,4.232,4.232,0,0,0-3.245,1.469,4.828,4.828,0,0,0-1.334,3.364A4.724,4.724,0,0,0,53.5,17.315a4.466,4.466,0,0,0,3.364,1.427,4.377,4.377,0,0,0,3.246-1.407A4.578,4.578,0,0,0,61.5,13.991Zm20.046-.041a7.254,7.254,0,0,1-2.15,5.24,7.3,7.3,0,0,1-10.451.041,7.087,7.087,0,0,1-2.19-5.261,7.547,7.547,0,0,1,2.09-5.3A6.686,6.686,0,0,1,73.96,6.426a7.338,7.338,0,0,1,7.585,7.524Zm-2.728.041a4.784,4.784,0,0,0-1.373-3.467A4.508,4.508,0,0,0,74.04,9.1,4.232,4.232,0,0,0,70.8,10.565a4.828,4.828,0,0,0-1.334,3.364,4.72,4.72,0,0,0,1.355,3.386,4.462,4.462,0,0,0,3.364,1.427,4.377,4.377,0,0,0,3.245-1.407,4.578,4.578,0,0,0,1.394-3.343ZM97.57,21.005l-2.508.388V18.966l-.538.611a6.586,6.586,0,0,1-1.593,1.1,6.435,6.435,0,0,1-2.727.592,6.56,6.56,0,0,1-4.977-2.163A7.286,7.286,0,0,1,83.2,13.95a7.63,7.63,0,0,1,2.01-5.3,6.372,6.372,0,0,1,4.917-2.2A7.055,7.055,0,0,1,93.031,7a4.932,4.932,0,0,1,1.493,1.041c.14.183.279.387.419.57V2.245l2.666-.388Zm-2.349-6.872a4.907,4.907,0,0,0-1.453-3.609,4.5,4.5,0,0,0-3.324-1.489,4.329,4.329,0,0,0-3.364,1.407,4.79,4.79,0,0,0-1.215,3.283,5.2,5.2,0,0,0,1.254,3.588A4.069,4.069,0,0,0,90.3,18.721a4.95,4.95,0,0,0,3.384-1.3,4.244,4.244,0,0,0,1.533-3.284ZM111.644,4.9h-7.465V9.974h5.792v2.61h-5.792v8.4l-2.906.428V2.265h9.793Zm5.992-1.49-1.792,2.263-1.712-2.263,1.811-2.243Zm-.538,17.6-2.667.367V7.2l2.667-.407V21.006ZM129.142,6.65l-1.254,2.895a3.518,3.518,0,0,0-.5-.04,5.089,5.089,0,0,0-.777.061,3.056,3.056,0,0,0-.835.286,3.256,3.256,0,0,0-1.453,1.57,6.35,6.35,0,0,0-.7,2.917v6.648l-2.666.428V7.2l2.468-.449V9.708c.318-.51.657-1.019.975-1.549A3.946,3.946,0,0,1,126,7.016a12.53,12.53,0,0,1,3.145-.366Zm19.865,14.355-2.667.388V11.666a2.721,2.721,0,0,0-.6-1.958,2.378,2.378,0,0,0-1.772-.612,2.35,2.35,0,0,0-2.129,1.162,3.25,3.25,0,0,0-.5,1.672v9.054l-2.667.49V11.727A2.957,2.957,0,0,0,138.1,9.77a2,2,0,0,0-1.593-.674h-.259a2.12,2.12,0,0,0-2.031,1.183,4.751,4.751,0,0,0-.477,2.263v8.442l-2.767.49V7.2l2.487-.428V8.587a5.622,5.622,0,0,1,.817-1.019,3.527,3.527,0,0,1,2.487-1,4.378,4.378,0,0,1,2.368.51,4.391,4.391,0,0,1,1.334,1.672,4.373,4.373,0,0,1,3.922-2.182,4.289,4.289,0,0,1,3.642,1.55,6.13,6.13,0,0,1,.976,3.772Zm12.186-4.3a4.179,4.179,0,0,1-1.373,3.222,4.861,4.861,0,0,1-3.465,1.264,5.6,5.6,0,0,1-2.847-.735,5.323,5.323,0,0,1-1.911-1.692l1.872-1.672a3.684,3.684,0,0,0,.378.489,3.393,3.393,0,0,0,2.508,1.081,2.284,2.284,0,0,0,1.593-.53,1.832,1.832,0,0,0,.578-1.469q0-1.069-1.373-1.468-2.719-.826-2.927-.918a5.066,5.066,0,0,1-1.812-1.387,3.994,3.994,0,0,1-.636-2.365,3.972,3.972,0,0,1,1.354-3.058,4.59,4.59,0,0,1,3.2-1.2,5.42,5.42,0,0,1,2.609.633A4.45,4.45,0,0,1,160.655,8.3l-1.593,1.732a5.847,5.847,0,0,0-.776-.652,3.225,3.225,0,0,0-1.831-.673,2.392,2.392,0,0,0-1.374.366,1.571,1.571,0,0,0-.637,1.347,1.386,1.386,0,0,0,.618,1.264,8.572,8.572,0,0,0,2.309.733,5.441,5.441,0,0,1,2.767,1.469A3.734,3.734,0,0,1,161.193,16.7Z" transform="translate(0)" fill="#3a7af3"/> </svg>
								</div>
							</div>
							<div class="testimonials-tcol_right">
								<span class="font-we-bl">Excellent mobile</span><br>
								<span class="rr_subtext">Top App Development Companies in Brisbane 2021</span>
							</div>
						</div>
						<div class="testimonials-tcol">
							<div class="review_logo_rating">
								<div class="review__logo">
									<svg id="Group_4330" data-name="Group 4330" xmlns="http://www.w3.org/2000/svg" width="86.771" height="28.323" viewBox="0 0 86.771 28.323"> <path id="Path_2424" data-name="Path 2424" d="M10.684,0h.772a10.529,10.529,0,0,1,7.207,3.043c-.7.713-1.412,1.4-2.1,2.111A7.874,7.874,0,0,0,3.346,9.9a8.1,8.1,0,0,0,1.762,6.26,7.792,7.792,0,0,0,5.678,2.8,7.558,7.558,0,0,0,5.649-1.936A6.166,6.166,0,0,0,18.312,13c-2.417,0-4.833.015-7.25,0V10H21.239a10.317,10.317,0,0,1-2.679,9.143,9.95,9.95,0,0,1-6.187,2.781,11.364,11.364,0,0,1-6.508-1.281,11.2,11.2,0,0,1-5.2-5.925A10.734,10.734,0,0,1,.594,7.454a11.084,11.084,0,0,1,4-5.314A11.43,11.43,0,0,1,10.684,0Z" transform="translate(0.003)" fill="#3780ff"/> <path id="Path_2425" data-name="Path 2425" d="M474.4,5.2h3.116V25.99c-1.034,0-2.082.015-3.116-.015C474.414,19.06,474.4,12.13,474.4,5.2Z" transform="translate(-405.333 -4.443)" fill="#38b137"/> <path id="Path_2426" data-name="Path 2426" d="M159.993,53.942a7.315,7.315,0,0,1,5.59,1.194,6.838,6.838,0,0,1,2.752,4.368,7.04,7.04,0,0,1-7.4,8.444,7.085,7.085,0,0,1-5.3-2.839,7.278,7.278,0,0,1-.961-6.61,6.909,6.909,0,0,1,5.314-4.557m.437,2.766a3.914,3.914,0,0,0-2.038,1.3,4.618,4.618,0,0,0,.233,6.013,3.877,3.877,0,0,0,3.465,1.077A3.921,3.921,0,0,0,164.8,63.1a4.6,4.6,0,0,0-.786-5.474A3.928,3.928,0,0,0,160.43,56.708Z" transform="translate(-131.821 -45.978)" fill="#fa3913"/> <path id="Path_2427" data-name="Path 2427" d="M266.02,53.936a7.078,7.078,0,0,1,6.93,11.4,7.2,7.2,0,0,1-11.283-.233,7.347,7.347,0,0,1-.917-6.755,6.915,6.915,0,0,1,5.27-4.411m.437,2.766a3.981,3.981,0,0,0-2.038,1.281,4.624,4.624,0,0,0,.16,5.955,3.9,3.9,0,0,0,3.552,1.15,3.994,3.994,0,0,0,2.708-1.995,4.629,4.629,0,0,0-.815-5.489A3.9,3.9,0,0,0,266.456,56.7Z" transform="translate(-222.415 -45.972)" fill="#fcbd06"/> <path id="Path_2428" data-name="Path 2428" d="M369.374,54.778a5.952,5.952,0,0,1,5.707-.437,5.438,5.438,0,0,1,1.485,1.092c.015-.393,0-.8.015-1.208.975.015,1.951,0,2.941.015V67.08a7.673,7.673,0,0,1-1.907,5.4A6.94,6.94,0,0,1,371.63,74.2a6.77,6.77,0,0,1-5.1-4.062c.873-.422,1.791-.757,2.693-1.15a4,4,0,0,0,2.839,2.446,3.773,3.773,0,0,0,3.64-1.165,5.822,5.822,0,0,0,.859-3.975,5.168,5.168,0,0,1-2.373,1.456,6.4,6.4,0,0,1-5.809-1.5,7.167,7.167,0,0,1,.99-11.472m3.014,1.864a3.83,3.83,0,0,0-2.286,1.325,4.645,4.645,0,0,0,.015,5.838,3.809,3.809,0,0,0,3.276,1.339,3.7,3.7,0,0,0,2.781-1.849,4.914,4.914,0,0,0-.495-5.5A3.583,3.583,0,0,0,372.387,56.641Z" transform="translate(-312.68 -45.97)" fill="#3780ff"/> <path id="Path_2429" data-name="Path 2429" d="M508.545,55.467a6.571,6.571,0,0,1,6.682-1.325,7.521,7.521,0,0,1,4.164,4.906c-3.159,1.31-6.3,2.606-9.463,3.916a3.754,3.754,0,0,0,2.009,1.893,4.078,4.078,0,0,0,3.844-.553,6.2,6.2,0,0,0,1.077-1.15c.8.539,1.6,1.063,2.4,1.6a7.128,7.128,0,0,1-11.254.713,7.463,7.463,0,0,1,.539-10M510.1,58.16a4.156,4.156,0,0,0-.684,2.446q3.167-1.31,6.333-2.635a2.619,2.619,0,0,0-2.053-1.441A3.72,3.72,0,0,0,510.1,58.16Z" transform="translate(-432.62 -45.916)" fill="#fa3913"/> </svg>
								</div>
								<div class="review_rating_main">
									<div class="review_rating">
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
										<span class="star-main"><i class="fa fa-star" aria-hidden="true"></i></span>
									</div>
									<span class="rr_subtext">25 Reviews</span>
								</div>
							</div>
							<div class="testimonials-tcol_right">
								<span class="font-we-bl">Top Rated</span><br>
								<span class="rr_subtext">The highest quality results and client satisfaction</span>
							</div>
						</div>
					</div>
					<div class="testimonials_slider_main">
						<div class="testimonials--slider">
							<?php if(have_rows('client_testimonial','option')):while(have_rows('client_testimonial','option')):the_row();
							$testImg = get_sub_field('client_images_testimonial','option');?>
							
							<div class="testimonials--slide">
								<div class="row">
									<div class="col-md-5 col-sm-12 col-12 d-flex justify-content-center">
										<div class="testimonials--info--left">
											<div class="testimonials--img">
												<img src="<?php echo $testImg['url'];?>" alt="<?php echo $testImg['alt'];?>">
											</div>
											<div class="testimonials_person_info">
												<span class="name"><?php echo get_sub_field('client_testimonial_name','name');?></span> <br>
												<span class="company_name"><?php echo get_sub_field('client_testimonials_work','option');?></span>
											</div>
										</div>
									</div>
									<div class="col-md-7 col-sm-12 col-12 align-self-center">
										<div class="testimonials-details">
											<svg xmlns="http://www.w3.org/2000/svg" width="36" height="31.5" viewBox="0 0 36 31.5"> <path id="Icon_awesome-quote-right" data-name="Icon awesome-quote-right" d="M32.625,2.25h-9A3.376,3.376,0,0,0,20.25,5.625v9A3.376,3.376,0,0,0,23.625,18H29.25v4.5a4.5,4.5,0,0,1-4.5,4.5h-.562A1.683,1.683,0,0,0,22.5,28.688v3.375a1.683,1.683,0,0,0,1.688,1.688h.563A11.247,11.247,0,0,0,36,22.5V5.625A3.376,3.376,0,0,0,32.625,2.25Zm-20.25,0h-9A3.376,3.376,0,0,0,0,5.625v9A3.376,3.376,0,0,0,3.375,18H9v4.5A4.5,4.5,0,0,1,4.5,27H3.938A1.683,1.683,0,0,0,2.25,28.688v3.375A1.683,1.683,0,0,0,3.938,33.75H4.5A11.247,11.247,0,0,0,15.75,22.5V5.625A3.376,3.376,0,0,0,12.375,2.25Z" transform="translate(0 -2.25)"/> </svg>
											<p class="font-we-md"><?php echo get_sub_field('client_testimonials_description','option');?></p>
										</div>
									</div>
								</div>
							</div>
								<?php endwhile;endif;?>
						</div>
					</div>
				</div>
			</section>

			<section class="technology--stack-sec">

				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-8 col-md-8 col-sm-12 col-12">
							<div class="section-title">
								<h2><?php echo the_field('technology_title');?></h2>
							</div>	
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="tech-stack-cta text-end">
								<a href="<?php echo the_field('discover_btn_link');?>" class="btn"><?php echo the_field('discover_btn');?></a>
							</div>
						</div>
					</div>
					<div class="tech-stack-row">
						<?php if (have_rows('technology_stacks')): ?>
						<div class="tech-stack-tabs home-left-tabs">
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<?php $tab_index = 0; ?>
								<?php while (have_rows('technology_stacks')): the_row(); ?>
								<?php
									$tab_title = get_sub_field('technology_stack_tab_title');
									$techstack_id = get_sub_field('technology_stack_id');
									$is_active = $tab_index === 0 ? 'active' : '';
									?>
							    <button class="nav-link <?php echo $is_active; ?>" id="v-pills-<?php echo $techstack_id; ?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo $techstack_id; ?>" type="button" role="tab" aria-controls="v-pills-<?php echo $techstack_id; ?>" aria-selected="<?php echo $is_active ? 'true' : 'false'; ?>"><?php echo $tab_title; ?></button>
								<?php $tab_index++; endwhile;?>
							</div>	
						</div>
						<div class="ts-tab-content">
							<div class="tab-content" id="v-pills-tabContent">
							<?php $tab_index = 0; ?>
                <?php while (have_rows('technology_stacks')): the_row(); ?>
                    <?php
                    $techstack_id = get_sub_field('technology_stack_id');
                    $is_active = $tab_index === 0 ? 'show active' : 'fade';
                    ?>
							    <div class="tab-pane fade <?php echo $is_active; ?>" id="v-pills-<?php echo $techstack_id; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $techstack_id; ?>-tab">
							    	<div class="ts-tab-content-main">
							    		<div class="tech-stack-tabrow">
										<?php while (have_rows('techstack_col')): the_row(); ?>
							    			<div class="tech-stack-col">
							    				<div class="tech-stack-col-title">
							    					<?php echo get_sub_field('techstack_col_title');?>
							    				</div>
							    				<ul>
												<?php while (have_rows('techstack_col_links')): the_row(); 
												$techstackImg = get_sub_field('techstack_col_link_img');
												?>
							    					<li>
							    						<a href="#" class="ts-icon-text-link">
								    						<div class="ts-icon"><img src="<?php echo $techstackImg['url'];?>" alt="<?php echo $techstackImg['alt'];?>"> </div>
								    						<div class="ts-text"><?php echo get_sub_field('techstack_col_link_text');?></div>
							    						</a>
							    					</li>
													<?php endwhile;?>
							    				</ul>
							    			</div>
											<?php endwhile;?>
							    		</div>
							    	</div>
							    </div>
								<?php $tab_index++;endwhile;?>
							</div>
						</div>
						<?php endif;?>
					</div>
				</div>
			</section>

			<section class="our-process-sec">
				<div class="container">
					<div class="our-process-top row align-items-center">
						<div class="col-lg-7 col-md-7 col-sm-12 col-12">
							<div class="section-title">
								<h2 class="white_text"><?php echo the_field('process_title');?></h2>
							</div>	
							<div class="process-cta">
								<a href="<?php echo the_field('process_btn_link');?>" class="btn"><?php echo the_field('process_btn_');?></a>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-12">
							<p class="sub-title white_text font-we-md text-uppercase "><?php echo the_field('process_uppercase');?></p>
							<p class="white_text"><?php echo the_field('process_lowercase');?></p>
						</div>
					</div>
					<div class="tech-stack-row">
    <div class="tech-stack-tabs home-left-tabs">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <?php if (have_rows('process_tabs')): ?>
                <?php $first = true; ?>
                <?php $tab_process = 1; ?>
                <?php while (have_rows('process_tabs')): the_row(); ?>
                    <button class="nav-link <?php if ($first) { echo 'active'; $first = false; } ?>"
                            id="v-pills-tab-<?php echo $tab_process; ?>"
                            data-bs-toggle="pill"
                            data-bs-target="#v-pills-<?php echo $tab_process; ?>"
                            type="button" role="tab"
                            aria-controls="v-pills-<?php echo $tab_process; ?>"
                            aria-selected="<?php echo $first ? 'true' : 'false'; ?>"><?php the_sub_field('process_tab_title'); ?></button>
                    <?php $tab_process++; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="ts-tab-content">
        <div class="tab-content" id="v-pills-tabContent">
            <?php if (have_rows('process_tabs')): ?>
                <?php $first = true; ?>
                <?php $tab_process = 1; ?>
                <?php while (have_rows('process_tabs')): the_row(); ?>
                    <div class="tab-pane fade <?php if ($first) { echo 'show active'; $first = false; } ?>"
                         id="v-pills-<?php echo $tab_process; ?>" role="tabpanel"
                         aria-labelledby="v-pills-tab-<?php echo $tab_process; ?>">
                        <div class="op-tab-content-main">
                            <div class="our-process-row row">
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="our-process">
                                        <?php 
                                        $image = get_sub_field('process_tab_image');
                                        if ($image): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-12">
                                    <div class="our-process-content">
                                        <h3 class="white_text"><sup class="theme-color-text">0<?php echo get_row_index(); ?>/</sup>
                                            <span class="white_text"><?php the_sub_field('process_tab_content_title'); ?></span>
                                        </h3>
                                        <p class="white_text"><?php the_sub_field('process_tab_content_text'); ?></p>
                                        <ul>
                                            <?php if (have_rows('process_tab_points')): ?>
                                                <?php while (have_rows('process_tab_points')): the_row(); ?>
                                                    <li>
                                                        <svg id="correct" xmlns="http://www.w3.org/2000/svg" width="26.012" height="26.012" viewBox="0 0 26.012 26.012">
                                                            <path id="Path_2607" data-name="Path 2607" d="M13.006,0A13.006,13.006,0,1,0,26.012,13.006,13.018,13.018,0,0,0,13.006,0Z" fill="#f05d26" fill-rule="evenodd"/>
                                                            <path id="Path_2608" data-name="Path 2608" d="M140.365,165.215a.816.816,0,0,1,0,1.148l-7.621,7.621a.81.81,0,0,1-1.148,0l-3.81-3.81a.812.812,0,1,1,1.148-1.148l3.236,3.236,7.047-7.047A.806.806,0,0,1,140.365,165.215Z" transform="translate(-121.07 -156.594)" fill="#fff" fill-rule="evenodd"/>
                                                        </svg>
                                                        <span class="white_text"><?php the_sub_field('process_tab_point_text'); ?></span>
                                                    </li>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                     <?php $tab_process++; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
             </div>
            </div>
		  </div>
	   </section>

			<section class="blogs-sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-12">
							<div class="section-title">
								<h2><?php echo the_field('insight_title');?></h2>
							</div>	
							<div class="blogs-type-wp">
								<ul class="blogs-type-inner">
								<?php
									$categories = get_categories();
									foreach ($categories as $category) {
										echo '<li><a class="blogs-type" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
									}
									?>
								</ul>
															
							</div>	
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="blogs-sec-cta text-end">
								<a href="<?php echo the_field('blog_btn_link');?>" class="btn"><?php echo the_field('blog_btn_text');?></a>
							</div>
						</div>
					</div>
					<div class="blogs-sec-slider">
					 <?php
                    $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                    <?php
                    while ($the_query -> have_posts()) : $the_query -> the_post();
                    ?>
						<div class="blogs-slide">
							<div class="blogs-slide-img">
								<a class="blogs-img-link" href="<?php the_permalink(); ?>"> <?php echo get_the_post_thumbnail(); ?></a>
							</div>
							<div class="blogs-slide-info">
								<div class="d-flex align-items-center">
									<span class="blogs-type-text"><?php $post_cate = get_the_category();
										        if ( ! empty( $post_cate ) ) {
										        echo esc_html( $post_cate[0]->name);
										        // print_r($post_cate);
										    }?></span>
									<span class="date"><?php echo get_the_date( 'j F, Y');?></span>
								</div>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
								<div class="d-flex align-items-center"><span class="post-name"><?php echo get_the_author_meta('display_name', $author_id);?></span> <span class="dots"></span> <span class="time"><?php echo get_the_time('g:i a');?></span></div>
							</div>
						</div>
						 <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
					</div>
				</div>
			</section>	

			<section class="contact_us_sec" id="contactnew">
				<div class="container">
					<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="sales-manager-details">
								<div class="sm-details-top">
									<svg xmlns="http://www.w3.org/2000/svg" width="32.269" height="24.978" viewBox="0 0 32.269 24.978"> <path id="Icon_awesome-quote-right" data-name="Icon awesome-quote-right" d="M29.244,2.25H21.176a2.868,2.868,0,0,0-3.025,2.676v7.136a2.868,2.868,0,0,0,3.025,2.676h5.042v3.568a3.826,3.826,0,0,1-4.034,3.568h-.5a1.43,1.43,0,0,0-1.513,1.338v2.676a1.43,1.43,0,0,0,1.513,1.338h.5c5.571,0,10.084-3.992,10.084-8.921V4.926A2.868,2.868,0,0,0,29.244,2.25Zm-18.151,0H3.025A2.868,2.868,0,0,0,0,4.926v7.136a2.868,2.868,0,0,0,3.025,2.676H8.067v3.568a3.826,3.826,0,0,1-4.034,3.568h-.5a1.43,1.43,0,0,0-1.513,1.338v2.676a1.43,1.43,0,0,0,1.513,1.338h.5c5.571,0,10.084-3.992,10.084-8.921V4.926A2.868,2.868,0,0,0,11.092,2.25Z" transform="translate(0 -2.25)" fill="#fff"/> </svg>
									<p class="white_text">With over 12+ years of experience, we specialize in customized IT solutions for medium-sized businesses and corporations. Our priority is aligning with your goals, and we take pride in our work and clients.</p>
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
								<?php echo do_shortcode('[contact-form-7 id="2266" title="Footer Contact Form"]');?>
						</div>
						
					</div>
				</div>
			</section>
			
			<!-- Content End -->
		</div>

<?php get_footer();?>
		 