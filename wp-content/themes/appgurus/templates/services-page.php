  <?php
  /*
  Template Name: Services Template
  */
  get_header(); ?>
  

  <!-- ====== /CONTENT BOC ====== --> 
	
  <main>

    <!-- ====== /Banner Section BOC ====== --> 
    <section id="banner-section">
        <div class="banner-sec animatedParent animateOnce" >
          <div class="container">
            <div class="banner-sec-content">
              <h1 class="orange-color-text"><?php the_field('services_header'); ?></h1>
              <h4 class="sub-text font-we-sb"><?php the_field('services_sub_title'); ?></h4>
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
             <h2 class="white-color-text delay-250 animated fadeInUpShort"><?php the_field('strategy_section_title'); ?></h2>
            </div>	
          </div>
          <div class="two-side-text-main">
            <?php if( have_rows('strategy_section_all') ): ?>
            <?php while( have_rows('strategy_section_all') ): the_row(); ?>
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="services-title animatedParent animateOnce">
                  <h5 class="delay-500 animated fadeInLeft text-white font-weight-bold"><?php echo get_sub_field('strategy_section_left_title');?></h5>
                </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                <div class="services-title  delay-250 animated fadeInRight">
                  <h5 class="text-white"><?php echo get_sub_field('strategy_section_right_title');?></h5>
                </div> 
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>  
    		</div>
    	</div>
    </section>
    <!-- WHAT WE DO Section EOC -->

    <!-- Design -->
    <section id="design">
      <div class="design-section padding-tb">
        <div class="container ">
          <div class="main-title animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort"><?php the_field('design_section_title'); ?></h2>
          </div>
          <div class="two-side-text-main">
          <?php if( have_rows('design_section_all') ): ?>
          <?php while( have_rows('design_section_all') ): the_row(); ?>
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="services-title animatedParent animateOnce">
                  <h5 class="delay-500 animated fadeInLeft  font-weight-bold"><?php echo get_sub_field('design_section_left_title');?></h5>
                </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                <div class="services-title  delay-250 animated fadeInRight">
                  <h5><?php echo get_sub_field('design_section_right_title');?></h5>
                </div> 
              </div>
            </div>
          <?php endwhile; ?>
          <?php endif; ?>
          </div>  
        </div>
      </div>
    </section>
    <!-- Design -->

    <!-- Development -->
    <section id="development">
      <div class="development-sec padding-tb grey-bg ">
        <div class="container ">
          <div class="main-title animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort mb-3"><?php the_field('development_section_title'); ?></h2>
             <h6><?php the_field('development_section_description'); ?></h6>
          </div>
          <div class="two-side-text-main">
          <?php if( have_rows('development_section_all') ): ?>
          <?php while( have_rows('development_section_all') ): the_row(); ?>
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="services-title animatedParent animateOnce">
                  <h5 class="delay-500 animated fadeInLeft  font-weight-bold"><?php echo get_sub_field('development_section_left_title');?></h5>
                </div>
              </div>
             
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                <div class="services-title  delay-250 animated fadeInRight">
                  <h5><?php echo get_sub_field('development_section_right_title');?></h5>
                  <div class="services-tech-points">
                      <h5 class="accord-title"><?php echo get_sub_field('development_section_right_title1');?></h5>
                      <ul class="accord-inner">
                          <li><?php echo get_sub_field('development_section_right_title2');?></li>
                      </ul>
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
    <!-- hosting -->

    <section id="hosting-section">
        <div class="hosting-sec animatedParent animateOnce padding-tb" >
          <div class="container">
            <div class="hosting-sec-content delay-250 animated fadeInUpShort">
              <h2><?php the_field('hosting_section_title'); ?></h2>
              <h5 class="text"><?php the_field('hosting_section_line1'); ?></h5>
              <h5 class="text"><?php the_field('hosting_section_line2'); ?></h5>
              <h5 class="text font-weight-bold"><?php the_field('hosting_section_line3'); ?></h5>
              <h5 class="text"><?php the_field('hosting_section_line4'); ?></h5>
            </div>
          </div>
       </div>
    </section>  

  </main>
<?php get_footer(); ?>