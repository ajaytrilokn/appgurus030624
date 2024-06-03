	<?php
	/*
	Template Name: About Us Template
	*/
	get_header(); ?>
	
	  <!-- ====== /Banner Section BOC ====== --> 
    <section id="banner-section">
        <div class="banner-sec animatedParent animateOnce" >
          <div class="container">
            <div class="banner-sec-content">
              <h1 class="orange-color-text"><?php echo get_field('about_us_header'); ?></h1>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
              endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
              <?php endif; ?>
              
            </div>
          </div>
       </div>
    </section>
    <!-- ====== /Banner Section EOC ====== -->

    <!-- WHAT WE DO Section BOC -->
    <section id="We-are-solution">
    	<div class="We-are-solution padding-tb black-bg ">
    		<div class="container">
    			<div class="We-are-solution-inner">
		    				<div class="We-are-solution-inner-title animatedParent animateOnce">
		    					<h3 class="white-color-text"><?php echo get_field('about_us_black_line'); ?></h3>
		    				</div>	
		    	</div>	
    		</div>
    	</div>
    </section>
    <!-- WHAT WE DO Section EOC -->

    <!-- Type of Projects Section BOC -->
    <section id="type-of-projects">
    	<div class="type-of-projects-sec padding-tb ">
    		<div class="projects-sec-inner">
    			<div class="projects-title animatedParent animateOnce">
    				<h2 class=" animated fadeInUpShort"><?php echo get_field('about_us_clients'); ?></h2>
    			</div>
    			<div class="projects-details animatedParent animateOnce">
    				<div class="project-box delay-250 animated fadeInRight">
              <?php
              $projects_image1 = get_field('about_us_clients_image1');
              $projects_image2 = get_field('about_us_clients_image2');
              $projects_image3 = get_field('about_us_clients_image3');
              ?>
    					<div class="project-img">
    						<img src="<?=$projects_image1['url']?>" alt="<?=$projects_image1['alt']?>">
    					</div>
    					<div class="project-name">
    						<h6 class=" animated fadeInUpShort"><?php echo get_field('about_us_clients_name1'); ?></h6>
    					</div>
    				</div>
    				<div class="project-box delay-500 animated fadeInRight">
    					<div class="project-img">
    						<img src="<?=$projects_image2['url']?>" alt="<?=$projects_image2['alt']?>">
    					</div>
    					<div class="project-name">
    						<h6 class=" animated fadeInUpShort"><?php echo get_field('about_us_clients_name2'); ?></h6>
    					</div>
    				</div>
    				<div class="project-box delay-750 animated fadeInRight">
    					<div class="project-img">
    						<img src="<?=$projects_image3['url']?>" alt="<?=$projects_image3['alt']?>">
    					</div>
    					<div class="project-name">
    						<h6 class=" animated fadeInUpShort"><?php echo get_field('about_us_clients_name3'); ?></h6>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Type of Projects Section EOC -->

    <!-- ABOUT US -->
    <section id="about-us">
      <div class="about-us-section padding-tb">
        <div class="container ">
          <?php if( have_rows('start_ups_section') ): ?>
          <?php while( have_rows('start_ups_section') ): the_row(); ?>
          <div class="about-us-inner-sec">
            <div class="row">
              <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="about-us-title animatedParent animateOnce">
                  <h2 class="delay-500 animated fadeInLeft"><?php echo get_sub_field('start_ups_name');?></h2>
                </div>
              </div>
              <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                <div class="about-us-text  delay-250 animated fadeInRight">
                  <h5><?php echo get_sub_field('start_ups_description');?></h5>
                </div> 
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <!-- ABOUT US -->
<?php get_footer(); ?>