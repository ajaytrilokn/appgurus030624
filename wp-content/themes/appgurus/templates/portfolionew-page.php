	<?php
	/*
	Template Name: Portfolio New Template
	*/
	get_header(); ?>
	
	
	
	<!-- ====== /Banner Section BOC ====== --> 
    <section id="banner-section">
        <div class="banner-sec animatedParent animateOnce" >
          <div class="container">
            <div class="banner-sec-content">
              <h1 class="orange-color-text 22"><?php echo get_field('page_header'); ?></h1>
              <?php echo get_field('page_sub_header'); ?>
            </div>
          </div>         
       </div>
    </section>
    <!-- ====== /Banner Section EOC ====== -->

    <!-- Type of Projects Section BOC -->
    <section id="portfolio">
      <div class="portfolio-sec">
        <?php 
        $counter = 0;
        if( have_rows('all_portfolios') ) : 
        	while ( have_rows('all_portfolios') ) : the_row(); ?>
          <div class="portfolio-sec-inner ">
            <div class="portfolio-img-wrap animatedParent animateOnce">
            	<?php
               $portfolio = get_sub_field('portfolio_image');
               if ($counter % 2 === 0) :?>
                <div class="portfolio-img delay-250 animated fadeInLeft">
                	<img src="<?=$portfolio['url']?>" alt="<?=$portfolio['alt']?>" class="port-img">
                </div>  
                <?php else: ?>
                <div class="portfolio-img delay-250 animated fadeInRight">
                	<img src="<?=$portfolio['url']?>" alt="<?=$portfolio['alt']?>" class="port-img">
                </div> 
              <?php endif; ?>
            </div>
            
            <div class="portfolio-text-wrap animatedParent animateOnce">
              <div class="portfolio-text delay-250 animated fadeInUp">
                  <a href="<?php echo the_sub_field('portfolio_name_url'); ?>" target="_blank" rel="noopener noreferrer" class="site-name"><h2><?php echo the_sub_field('portfolio_name'); ?></h2></a>
                  <div class="portfolio-text-inner">
                   <h5><p><?php echo the_sub_field('portfolio_description'); ?></p></h5>
                  </div>
                  <div class="app-btn">
                  <?php if(get_sub_field('app_store_image')){?>	
                    <img src="<?php echo the_sub_field('app_store_image'); ?>" alt="App-store" class="app-store-btn">
                  <?php }?>	
        		       <?php if(get_sub_field('google_play_image')){?>
                    <img src="<?php echo the_sub_field('google_play_image'); ?>" alt="Google play" class="google-play-btn">
                	<?php }?>
                 </div>
              </div>
            </div>
          </div>	
        <?php 
          $counter++; 
          endwhile; 
        endif; 
        ?>
	    </div>
	  </section>
    <!-- End of Type of Projects Section BOC -->
	<?php get_footer(); ?>