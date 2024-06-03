	<?php
    /*
    Template Name: App Marketing
    */
    get_header(); ?>
    
     <!-- ====== /Banner Section BOC ====== --> 
    <section id="banner-section">
      <div class="banner-sec animatedParent animateOnce" >
        <div class="container">
          <div class="banner-sec-content max-width-100">
            <h1 class="orange-color-text"><?php echo get_field('app_marketing_header'); ?></h1>
            <h3 class="sub-text"><?php echo get_field('app_marketing_sub_text'); ?></h3>
            <h5><?php echo get_field('app_marketing_description'); ?></h5>
          </div>
        </div>
       </div>
    </section>
    <!-- ====== /Banner Section EOC ====== -->

    <!-- AUDIENCE ENGAGEMENT Section BOC -->
    <section id="audience-section">
        <div class="audience-sec padding-tb light-pink-bg">
            <div class="container">             
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="animatedParent animateOnce">
                      <div class="audience-left-title delay-250 animated fadeInUpShort">
                        <h2><?php echo get_field('audience_engagement_heading'); ?></h2>
                      </div>
                  </div>   
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                  <div class="animatedParent animateOnce">
                    <div class="audience-right-wrap">
                      <div class="audience-right-title delay-250 animated fadeInUpShort">
                        <h2 class="orange-color-text"><?php echo get_field('audience_engagement_sub_text'); ?></h2>
                        <h5><?php echo get_field('audience_engagement_description'); ?></h5>
                      </div>
                    </div>
                  </div>   
                </div>
              </div>
            </div>
        </div>
    </section>

   <!--Strategy Section EOC -->
    <section id="strategy-section">
      <div class="strategy-sec padding-tb">
        <div class="container">
          <div class="strategy-inner">
            <div class="strategy-main">
              <div class="strategy-left ">
                <div class="strategy-left-content ">
                  <div class="animatedParent animateOnce">
                    <h6 class="orange-color-text font-we-md delay-250 animated fadeInUp"><?php echo get_field('strategy_heading'); ?></h6>
                    <h2 class="delay-250 animated fadeInUp"><?php echo get_field('strategy_sub_text'); ?></h2>
                    <h5 class="delay-250 animated fadeInUp"><?php echo get_field('strategy_description'); ?></h5>
                  </div>
                  <div class="strategy-box-wrap animatedParent animateOnce">
                    <?php if( have_rows('strategy_recommend') ) : while ( have_rows('strategy_recommend') ) : the_row(); ?>
                    <div class="strategy-box delay-500 animated fadeInUpShort">
                    <h6><?php echo the_sub_field('why_recommend') ?></h6>
                    </div>
                    <?php  endwhile; endif; ?>
                  </div>
                </div>
              </div>
              <div class="strategy-right">
                <div class="strategy-right-content animatedParent animateOnce">
                  <div class="strategy-img delay-250 animated fadeInRight">
                    <img src="<?php echo get_field('strategy_featured_image'); ?>" alt="web and app development company">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Strategy Section BOC -->
    

    <!-- APP Getting Started -->
    <section id="app-getting-started">
      <div class="app-getting-started-sec padding-tb">
        <div class="container ">
          <div class="app-getting-started-mian">
            <?php
              $counter = 0;
              if( have_rows('app_marketing_section4') ): 
              while ( have_rows('app_marketing_section4') ) : the_row(); 
            ?>
            <div class="app-getting-started-rows">
              <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="animatedParent animateOnce">
                      <div class="app-getting-started-left delay-250 animated fadeInUpShort">
                        <p class="orange-color-text font-we-bl"><?php echo get_sub_field('app_marketing_section4_header');?></p>
                        
                        <h2><?php echo get_sub_field('app_marketing_section4_sub_text');?></h2>
                        <div class="app-getting-started-text">
                          <?php echo get_sub_field('app_marketing_section4_description');?>
                        </div>
                      </div>   
                    </div>   
                </div>
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="app-getting-started-right animatedParent animateOnce">
                      <?php if ($counter % 2 === 0) :?>
                      <div class="app-idea-img delay-250 animated fadeInRight">
                        <img src="<?php echo get_sub_field('app_marketing_section4_image');?>" alt="flutter app development">
                      </div>  
                      <?php else: ?>
                        <div class="app-idea-img delay-250 animated fadeInLeft">
                        <img src="<?php echo get_sub_field('app_marketing_section4_image');?>" alt="hire mobile app developer">
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
          </div>
        </div>
      </div>
    </section>
    <!-- APP Getting Started -->

  </main>
    
  <!-- ====== /CONTENT EOC ====== --> 
    
    <?php get_footer(); ?>