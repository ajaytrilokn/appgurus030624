			<?php
	/*
	Template Name: Home Template
	*/
	get_header(); ?>
	
	<!-- ====== /Banner Section BOC ====== --> 
	<section id="banner-section">
		<div class="banner-sec animatedParent animateOnce" >
			<div class="container">
				<div class="banner-sec-content">
				<h1><?php echo get_field('banner_section_heading'); ?></h1>
				<h4 class="font-we-rg"><?php echo get_field('banner_section_sub_heading'); ?></h4>
				</div>
			</div>
		</div>
	</section>
	<!-- ====== /Banner Section EOC ====== -->
	

<section class="h-banner">
	<div class="home-banner-main">
		<div class="banner-slider">
			<?php if( have_rows('banner_slider_images') ): ?>
     <?php
     $i=0;
     $a=0;
     $class_variable ="";
      while( have_rows('banner_slider_images') ): the_row(); 
          if($i == 0){
            $class_variable = 'active';
            $i++;
          }else{
            $class_variable = '';
            $i++;
          }
        ?>
			<div class="slider-row-main <?php echo $class_variable;?> image-slider-<?php echo $a;?>">
				<div class="container">
					<div class="banners-top">
						<div class="row">
							<div class="main-banners-img col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="image-left-main">
									<?php
									$imageSlider = get_sub_field('slider_images');
									echo "<img src='".$imageSlider['url']."' alt='".$imageSlider['alt']."'>";
									?>
								</div>
							</div>
							<div class="main-banners-info col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="text-right-mmain">
									<div class="text-info-wp">
										<?php echo the_sub_field('slider_images_description') ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $a++; 
				endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>  

	
	<!-- TRUSTED CLIENTS Section BOC -->
	<section id="clients-section">
		<div class="trusted-clients-sec padding-tb animatedParent animateOnce">
			<div class="container">    			
				<div class="clients-top">
					<div class="clients-top-left">
						<div class="section-title">
						<h2 class="delay-250 animated fadeInUpShort"><?php echo get_field('section_heading'); ?></h2>
						</div>
					</div>
					<div class="clients-top-right">
						<div class="content-text">
						<h5 class="delay-250 animated fadeInUpShort"><?php echo get_field('section_description'); ?></h5>
						</div>
					</div>
				</div>
				<div class="clients-logo-main">
					<div class="clients-logo-inner">
				     <?php if( have_rows('clients_logos') ) : while ( have_rows('clients_logos') ) : the_row(); ?>
						<div class="client-logo-wrap">
							<div class="client-logo">
							<img src="<?php echo the_sub_field('logos') ?>" alt="logo">
							</div>
						</div>
				    <?php  endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- TRUSTED CLIENTS Section EOC -->
	
	<!-- WHAT WE DO Section BOC -->
	<section id="what-we-do">
		<div class="what-we-do-sec padding-tb black-bg ">
			<div class="container">
				<div class="what-we-do-inner">
					<div class="what-we-do-top animatedParent animateOnce">
						<div class="what-we-do-top-left">
							<div class="section-title">
								<h2 class="white-color-text delay-250 animated fadeInUpShort"><?php echo get_field('what_we_do_header'); ?></h2>
							</div>
						</div>
						<div class="what-we-do-top-right">
							<div class="content-text">
							<h5 class="white-color-text delay-250 animated fadeInUpShort"><?php echo get_field('section_sub_heading'); ?></h5>
							</div>
						</div>
					</div>
					<div class="what-we-do-text padding-tb animatedParent animateOnce">
						<p class="white-color-text delay-250 animated fadeInUpShort"><?php echo get_field('section_description_what_we'); ?></p>
					</div>
				
					<div class="what-we-do-bottom">
						<div class="row">
							<div class="col-lg-8 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
								<div class="wwd-bottom-left ">
									<h5 class="font-we-bl white-color-text delay-250 animated fadeInUpShort"><?php echo get_field('strategy_design'); ?></h5>
									<ul class="wwd-type white-color-text ">
							        <?php if( have_rows('strategy_&_design_labels') ) : while ( have_rows('strategy_&_design_labels') ) : the_row(); ?>
										<li class="delay-250 animated fadeInUpShort"><?php echo the_sub_field('labels') ?> </li>
							             <?php  endwhile; endif; ?>
							    </ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
								<div class="wwd-bottom-right">
									<div class="counter-main">
										<div class="counter-box text-right delay-250 animated fadeInUpShort">
											<h2 class="white-color-text"><span class="counter"><?php echo get_field('project_count'); ?></span>+</h2>
											<p class="white-color-text"><?php echo get_field('project_year'); ?></p>
										</div>
										<div class="counter-box text-right delay-250 animated fadeInUpShort">
											<h2 class="white-color-text"><span class="counter"><?php echo get_field('year_count'); ?></span></h2>
											<p class="white-color-text"><?php echo get_field('years_in_business'); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="process-link text-center animatedParent animateOnce">
							<a href="<?php echo get_field('discover_our_process_link'); ?>" delay-250 animated fadeInUpShort><?php echo get_field('discover_our_process_name'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- WHAT WE DO Section EOC -->
	
		<!-- Technologies We Work with Section BOC -->
  <section id="tech-work-with-sec">
  	<input type="hidden" name="getHomeURL" id="getHomeURL" value="<?php bloginfo('template_directory'); ?>">
  	<div class="twork-with-sec padding-tb animatedParent animateOnce">
  		<div class="container">    			
    		<div class="twork-with-top">
    			<div class="twork-with-top-left">
    				<div class="section-title">
    					<h2 class="delay-250 animated fadeInUpShort"><?php echo get_field('technologies_we_work'); ?></h2>
    				</div>
    			</div>
    			<div class="twork-with-top-right">
    				<div class="content-text">
    					<h5 class="delay-250 animated fadeInUpShort"><?php echo get_field('technologies_we_work_description'); ?></h5> 
    				</div>
    			</div>
    		</div>
    		<div class="twork-with-logo-main">
    			<div class="twork-with-logo-inner">

    				<div class="twork-with-logo-row logo-first-row">
    					<?php if( have_rows('technologies_images') ) : while ( have_rows('technologies_images') ) : the_row(); 
    						$technologies_section_one = get_sub_field('technologies_section_one');
    						?>
    					<div class="twork-with-logo-wrap">
	    					<div class="twork-with-logo">
	    						<img src="<?php echo $technologies_section_one['url']; ?>" alt="<?php echo $technologies_section_one['title']; ?>">
	    					</div>
	    				</div>
	    				<?php  endwhile; endif; ?>
    				</div>

    				<div class="twork-with-logo-row logo-second-row">
	    				<?php if( have_rows('technologies_images') ) : while ( have_rows('technologies_images') ) : the_row(); 
    						$technologies_section_two = get_sub_field('technologies_section_two');
    						?>
    					<div class="twork-with-logo-wrap">
	    					<div class="twork-with-logo">
	    						<img src="<?php echo $technologies_section_two['url']; ?>" alt="<?php echo $technologies_section_two['title']; ?>">
	    					</div>
	    				</div>
	    				<?php  endwhile; endif; ?>
	    			</div>

	    			<div class="twork-with-logo-row logo-third-row">
	    				<?php if( have_rows('technologies_images') ) : while ( have_rows('technologies_images') ) : the_row(); 
    						$technologies_section_three = get_sub_field('technologies_section_three');
    						?>
    					<div class="twork-with-logo-wrap">
	    					<div class="twork-with-logo">
	    						<img src="<?php echo $technologies_section_three['url']; ?>" alt="<?php echo $technologies_section_three['title']; ?>">
	    					</div>
	    				</div>
	    				<?php  endwhile; endif; ?>
	    			</div>	

    			</div>
    		</div>
    		<div class="twork-with-bottom">
    			<div class="row">
    				<div class="col-lg-9 col-md-8 col-sm-12 col-12">
    					<h5 class="delay-250 animated fadeInUpShort">Simply have a chat with us to find out how we can help you work with right technology for your project. </h5> 
    				</div>
    				<div class="col-lg-3 col-md-4 col-sm-12 col-12">
    					<div class="twork-with-contact-us-link">
    						<button class="btn contact-us-click" oncontextmenu="return false;" type="button">Contact Us</button>
    					</div>
    				</div>
    			</div>
    		</div>
  		</div>
  	</div>
  </section>
  <!-- Technologies We Work with Section EOC -->

	<!-- Type of Projects Section BOC -->
	<section id="type-of-projects">
		<div class="type-of-projects-sec padding-tb ">
			<div class="projects-sec-inner">
				<div class="projects-title animatedParent animateOnce">
					<h2 class=" animated fadeInUpShort"><?php echo get_field('type_of_projects_header'); ?></h2>
				</div>
				<div class="projects-details animatedParent animateOnce ">
					<div class="project-box animated delay-250 fadeInRight">
						<?php
							$projects_image1 = get_field('projects_image1');
							$projects_image2 = get_field('projects_image2');
							$projects_image3 = get_field('projects_image3');
							?>
						<div class="project-img">
							<img src="<?=$projects_image1['url']?>" alt="<?=$projects_image1['alt']?>">
						</div>
						<div class="project-name">
						<h6 class=" "><?php echo get_field('projects_image1_name'); ?></h6>
						</div>
					</div>
					<div class="project-box animated delay-500 fadeInRight" >
						<div class="project-img">
							<img src="<?=$projects_image2['url']?>" alt="<?=$projects_image2['alt']?>">
						</div>
						<div class="project-name">
						<h6 class=" "><?php echo get_field('projects_image2_name'); ?></h6>
						</div>
					</div>
					<div class="project-box animated delay-750 fadeInRight">
						<div class="project-img">
							<img src="<?=$projects_image3['url']?>" alt="<?=$projects_image3['alt']?>">
						</div>
						<div class="project-name">
							<h6 class=" "><?php echo get_field('projects_image3_name'); ?></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Type of Projects Section EOC -->
	
	
	<!--Testimonial  Section BOC -->
  <section id="testimonial">
	  <div class="testimonial-sec padding-tb ">
	    <div class="container">
	      <div class="section-title animatedParent animateOnce">
	        <h2 class="delay-250 animated fadeInUpShort"><?php echo get_field('client_say',9); ?></h2>
	      </div>
	      <div class="section-back-title animatedParent animateOnce">
	        <h2 class="delay-250 animated rotateInUpLeft"><?php echo get_field('client2',9); ?></h2>
	      </div>
	      <div class="testimonial-main animatedParent animateOnce">
	        <div class="page-numbers">
	          <span class="pagingInfo"></span>
	        </div>
	        <div class="testimonial-slider">
	        	<?php if( have_rows('client_testimonial',9) ) : while ( have_rows('client_testimonial',9) ) : the_row(); ?>
	          <div class="testimonial-wrap animatedParent animateOnce">
	            <div class="testimonial-inner">
	              <div class="testimonial-img animated fadeInUpShort">
	                <div class="person-img">
	                  <img src="<?php echo the_sub_field('client_images_testimonial',9) ?>" alt="<?php echo the_sub_field('client_work_testimonial',9) ?>">
	                </div>
	              </div>
	              <div class="testimonial-content">
	                <h5 class="animated fadeInUpShort"><?php echo the_sub_field('client_header_testimonial',9) ?></h5>
	                <div class="testimonial-text animated fadeInUpShort">
	                  <p><?php echo the_sub_field('client_description_testimonial',9) ?></p>
	                </div>
	                <h5 class="animated fadeInUpShort"><?php echo the_sub_field('client_name_testimonial',9) ?></h5>
	                <h6 class="person-work animated fadeInUpShort"><?php echo the_sub_field('client_work_testimonial',9) ?></h6>
	              </div>
	            </div>
	          </div>
							<?php  endwhile; endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
</section>

	
	
	<!-- INVESTORS WITH PROTOTYPE Section BOC -->
	<section id="investors-with-prototype">
		<div class="inves-with-prototye-sec padding-tb orange-bg">
	  <?php $category_query = new WP_Query('page_id=9'); ?>
		<?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
			<div class="container">
				<div class="section-title animatedParent animateOnce">
				<h2 class="white-color-text delay-250 animated fadeInUpShort"><?php echo get_field('pitch_to_investors_with_an_interactive_prototype'); ?></h2>
				</div>
			
				<div class="prototype-box-wrap">
			    <?php if( have_rows('interactive_prototype') ) : while ( have_rows('interactive_prototype') ) : the_row(); ?>
					<div class="prototype-box animatedParent animateOnce">
						<div class="prototype-icon delay-250 animated fadeInUpShort">
						 <?php $prototype_logo = get_sub_field('interactive_prototype_logo'); ?>	
						<img src="<?php echo $prototype_logo['url'] ?>" alt="<?php echo $prototype_logo['alt'] ?>" align="icon">
						</div>
						<div class="prototype-content">
							<h2 class="white-color-text delay-250 animated fadeInUpShort"><?php echo the_sub_field('interactive_prototype_name') ?></h2>
							<h5 class="font-we-rg white-color-text delay-250 animated fadeInUpShort"><?php echo the_sub_field('interactive_prototype_description') ?></h5>
						</div>
					</div>
			     <?php  endwhile; endif; ?>
				</div>
			</div>
	    <?php endwhile; ?>
		</div>
	</section>
	<!-- INVESTORS WITH PROTOTYPE Section EOC -->
	
	<!--Why Clients Choose AppGurus Section BOC -->

	<section id="why-choose-aapgurus">
      <div class="why-choose-aapgurus-sec padding-tb">
        <div class="container">
          <div class="section-title text-center animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort"><?php echo get_field('why_choose_app_gurus'); ?></h2>
          </div>
          <div class="why-choose-aapgurus-content animatedParent animateOnce">
            <ul>
              <li class="delay-250 animated fadeInUpShort"><?php echo get_field('why_choose_app_gurus_content1'); ?></li>
              <li class="delay-250 animated fadeInUpShort"><?php echo get_field('why_choose_app_gurus_content2'); ?></li>
              <li class="delay-250 animated fadeInUpShort"><?php echo get_field('why_choose_app_gurus_content3'); ?></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
	<!--Why Clients Choose AppGurus Section EOC -->
	<?php get_footer(); ?>