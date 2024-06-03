  	<?php
	/*
	Template Name: App  Idea Template
	*/
	get_header(); ?>

    <!-- ====== /Banner Section BOC ====== --> 
	  <section id="banner-section">
    	<div class="banner-sec animatedParent animateOnce" >
      	<div class="container">
      		<div class="banner-sec-content max-width-100">
      			<h1 class="orange-color-text"><?php echo get_field('app_idea'); ?></h1>
      			<h3 class="sub-text"><?php echo get_field('app_idea_description'); ?></h3>
            <div class="banner-btn">
              <a href="javascript:void(0)" class="btn contact-us-click"><?php echo get_field('app_idea_button'); ?></a>
            </div>
      		</div>
      	</div>
   	  </div>
    </section>
    <!-- ====== /Banner Section EOC ====== -->

    <!--DO YOU HAVE AN APP IDEA? Section BOC -->
    <section id="have-an-app-idea">
      <div class="have-an-app-idea-sec padding-tb light-pink-bg">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
              <div class="app-idea-left animatedParent animateOnce">
               <?php echo get_field('app_idea_section2'); ?>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
              <div class="app-idea-right animatedParent animateOnce">
                <h5 class="delay-500 animated fadeInUpShort"><?php echo get_field('app_idea_section2_description'); ?></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--DO YOU HAVE AN APP IDEA? Section EOC -->

    <!-- APP Getting Started -->
    <section id="app-getting-started">
      <div class="app-getting-started-sec padding-tb">
        <div class="container ">
          <div class="app-getting-started-mian">
          <?php
            $counter = 0;
            if( have_rows('app_getting_started_section1') ): 
            while ( have_rows('app_getting_started_section1') ) : the_row(); 
          ?>
          <div class="app-getting-started-rows">
            <div class="row">
              <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                <div class="animatedParent animateOnce">
                  <div class="app-getting-started-left delay-250 animated fadeInUpShort">
                    <p class="orange-color-text font-we-bl"><?php echo get_sub_field('app_getting_started_section1_header');?></p>
                    <h2><?php echo get_sub_field('app_getting_started_section1_sub_header');?></h2>
                    <div class="app-getting-started-text"><?php echo get_sub_field('app_getting_started_section1_description');?></div>
                  </div>   
                </div>   
              </div>

              <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                <div class="app-getting-started-right animatedParent animateOnce">
                  <?php if ($counter % 2 === 0) :?>
                  <div class="app-idea-img delay-250 animated fadeInRight" >
                    <img src="<?php echo get_sub_field('app_getting_started_section2_image');?>" alt="App Development Brisbane, Australia">
                  </div> 
                  <?php else: ?>
                  <div class="app-idea-img delay-250 animated fadeInLeft">
                    <img src="<?php echo get_sub_field('app_getting_started_section2_image');?>" alt="Best Mobile App Developers Brisbane Australia">
                  </div> 
                  <?php endif; ?>
                </div>   
              </div>
            </div>
          </div>
          <?php 
            $counter++; 
            endwhile; 
            endif; 
          ?>

          <?php if( have_rows('app_getting_started_section3') ): ?>
          <?php while( have_rows('app_getting_started_section3') ): the_row(); ?>
          <div class="app-getting-started-rows">
            <div class="row">
              <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                  <div class="animatedParent animateOnce">
                    <div class="app-getting-started-left delay-250 animated fadeInUpShort">
                      <p class="orange-color-text font-we-bl"><?php echo get_sub_field('app_getting_started_section3_header');?></p>
                      <h2><?php echo get_sub_field('app_getting_started_section3_sub_header');?></h2>
                      <div class="Industry-points">
                        <?php echo get_sub_field('app_getting_started_section3_description');?>
                      </div>
                    </div>   
                  </div>   
              </div>
              <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                  <div class="app-getting-started-right animatedParent animateOnce">
                    <div class="app-idea-img delay-250 animated fadeInRight">
                      <img src="<?php echo get_sub_field('app_getting_started_section3_image');?>" alt="Best Mobile App Developers Brisbane Australia">
                    </div>  
                  </div>   
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <?php if( have_rows('app_getting_started_section4') ): ?>
          <?php while( have_rows('app_getting_started_section4') ): the_row(); ?>
            <div class="app-getting-started-rows">
              <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="animatedParent animateOnce">
                      <div class="app-getting-started-left delay-250 animated fadeInUpShort">
                        <p class="orange-color-text font-we-bl"><?php echo get_sub_field('app_getting_started_section4_header');?></p>
                        <h2><?php echo get_sub_field('app_getting_started_section4_sub_header');?></h2>
                        <div class="app-getting-started-text">
                          <p> <?php echo get_sub_field('app_getting_started_section4_description');?></p>
                        </div>
                      </div>   
                    </div>   
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="app-getting-started-right animatedParent animateOnce">
                      <div class="app-idea-img delay-250 animated fadeInLeft">
                        <img src="<?php echo get_sub_field('app_getting_started_section4_image');?>" alt="Best Mobile App Developers Brisbane Australia">
                      </div>  
                    </div>   
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- APP Getting Started -->

  </main>
  	
  <!-- ====== /CONTENT EOC ====== --> 
<?php get_footer(); ?>
