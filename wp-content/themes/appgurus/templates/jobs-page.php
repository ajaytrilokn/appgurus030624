	<?php
	/*
	Template Name: Jobs Template
	*/
	get_header(); ?>
	
	  <!-- ====== /CONTENT BOC ====== --> 
	


    <!-- ====== /Banner Section BOC ====== --> 
    <section id="banner-section">
      	<div class="banner-sec animatedParent animateOnce" >
        	<div class="container">
        	
            <div class="banner-sec-content max-width-100">
              <h1 class="orange-color-text"><?php echo get_field('job_section'); ?></h1>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
              endwhile;  endif; ?>
            </div>
        	</div>
        
        	
     	 </div>
    </section>
    <!-- ====== /Banner Section EOC ====== -->

    

    <!-- career BOC -->

     <section id="career">
      <div class="career-sec padding-tb black-bg ">
        <div class="container">
          <div class="animatedParent animateOnce">
            <h4 class="white-color-text animated fadeInUpShort font-we-rg"><?php echo get_field('job_section2_description'); ?></h4>

            <div class="carrer-site animated fadeInUpShort">
              <a href="<?php echo get_field('job_section2_link'); ?>" class="white-color-text text-underline"><?php echo get_field('job_section2_button_name'); ?></a>
            </div>
          </div>     
        </div>
      </div>
    </section>

    <!-- career -->


    <!-- JOBS -->
    <!-- <section id="jobs">
      <div class="job-sec padding-tb">
        <div class="container ">
        	<?php
        	$query = new WP_Query( array( 'post_type' => 'jobs', 'paged' => $paged , 'posts_per_page' => 5) );

			if ( $query->have_posts() ) : 
			while ( $query->have_posts() ) : $query->the_post();

				$image_id = get_post_thumbnail_id();    
                $image_url = wp_get_attachment_image_src($image_id, 'full', true); 
                $image_url = $image_url=="" ? get_bloginfo('template_url').'/images/noImageAvailable.jpg' :$image_url[0];
              
			?>

          <div class="job-sec-rows">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="animatedParent animateOnce">
                        <div class="job-sec-inner-left delay-250 animated fadeInUpShort">
                          <div class="job-icon">
                            <img src="<?php echo $image_url ?>" alt="ios" class="job-icon-img">
                          </div>
                          <h2><?php the_title(); ?></h2>
                          <p class="orange-color-text"><?php echo get_field('experiance'); ?></p>
                        </div>
                         
                    </div>   
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="animatedParent animateOnce">
                      <div class="job-sec-inner-right  delay-250 animated fadeInUpShort">
                          <div class="job-sec-text ">
                              <h5 class="font-we-rg"><?php echo get_field('skill_excerpt'); ?></h5>
                          </div>
                          <div class="job-skills-link ">
                            <a href="#">Skills</a>
                          </div>
                          <div class="skills-detais-wrap">
                            <div class="skills-detais">
                            	<?php if( have_rows('skills_repeater') ): $i=1; 
               
		                         while( have_rows('skills_repeater') ): the_row();

		                         $skill = get_sub_field('skills_course'); ?>
                              <div class="skills-name"><h4><?php echo $skill; ?></h4></div>
                              
                              	<?php endwhile; endif;   ?>
                              
                            </div>
                            <div class="apply-now-job d-flex">
                              <h6 class="font-we-md skills-name">Apply Now</h6>
                              <?php $line = get_field('skill_url');?>
                              <a href="#" class="font-we-md text-underline"><?php echo $line['url']; ?></a>
                            </div>
                          </div>
                       
                      </div>
                    </div>   
                </div>
            </div>
          </div>

          	<?php endwhile; wp_reset_postdata(); ?>
				
			<?php endif; ?>
        </div>
      </div>
    </section> -->
      
    <!-- JOBS -->

  </main>
  	
  <!-- ====== /CONTENT EOC ====== --> 
  
	
	
	<?php get_footer(); ?>