<?php
$logo = get_field('banner_logo');
$m_animation1 = get_field('mockup-animation1');
$m_animation2 = get_field('mockup-animation2');

get_header();
?>

  <!-- ====== /CONTENT BOC ====== --> 
  <main>
<!-- ====== /Banner Section BOC ====== -->                                                                                         
    <section id="cs_banner_section">
      <div class="cs_banner_sec" style="<?php echo the_field('banner_background_main');?>">
        <div class="cs_banner_sec" style="<?php echo the_field('banner_background_color');?>">
          <div class="container">
            <div class="cs_b_content">
              <div class="cs_b_logo_wrap">
                <div class="cs_b_logo">
                    <?php if($logo):?>
                  <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>">
                  <?php endif;?>
                </div>
              </div>
              <div class="cs-banner-img-main">
                <div class="cs-banner-img mockup-main">
                    <?php if($m_animation1 || $m_animation2):?>
                  <!-- <img class="csb-img" src="images/case-study/banner-img.png" alt="#"> -->
                  <div class="mockup-animation1"><img class="csb-img mockup-1" src="<?php echo $m_animation1['url'];?>" alt="<?php echo $m_animation1['alt'];?>"></div>
                  <div class="mockup-animation2"><img class="csb-img mockup-2" src="<?php echo $m_animation2['url'];?>" alt="<?php echo $m_animation2['alt'];?>"></div>
                  <?php endif;?>
                </div>
              </div>

              <div class="cs-banner-text">
                <div class="csb-text-main">
                  <?php echo the_field('banner_text');?>
                </div>
              </div>
            </div>
            
          </div>
       </div>
       </div>
    </section>

    <section id="s_client_logo">
        <div class="s_client_logo ">
          <div class="container">
            <div class="s-clients-logo-main">
              <div class="s-logo-slider clients-logo-inner">
                <?php 
                if(have_rows('trusted_company_logo','option')):
                  while(have_rows('trusted_company_logo','option')):the_row();
                    $sponserImg = get_sub_field('trusted_company_logo_image','option');
                ?>
                <div class="s-client-logo-wrap">
                  <div class="s-client-logo">
                    <img src="<?php echo $sponserImg['url'];?>" alt="<?php echo $sponserImg['alt'];?>">
                  </div>
                </div>
                <?php
                endwhile;
              endif;
                ?>                
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- FEATURED IN Section BOC -->
  <section id="featuredIn" class="cs-achievements-sec">
      <div class="trusted-clients-sec featuredIn-sec  padding-tb animatedParent animateOnce">
          <div class="container">

            <div class="cs-achievements-main">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="featuredIn-top text-start">
                    <div class="section-title w-100">
                        <!-- <h2 class="delay-250 animated fadeInUpShort"><?php echo the_field('industry_title','option');?></h2> -->
                        <h2 class="delay-250 animated fadeInUpShort">Honoring <br>Our Industry Achievements</h2>
                    </div>
                  </div>    
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                  <div class="clients-logo-main achievements-wrap">
                    <div class="clients-logo-inner pt-2">
                        <?php if(have_rows('reward_images')):
                        while(have_rows('reward_images')):the_row();
                        $featureImg = get_sub_field('reward_image');
                        ?> 
                          <div class="client-logo-wrap">
                              <div class="client-logo">
                                <img src="<?php echo $featureImg['url'];?>" alt="<?php echo $featureImg['alt'];?>">
                              </div>
                          </div>
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
      </div>
  </section>

    <!-- ====== /Banner Section EOC ====== -->
    <section class="overview-sec">
      <div class="container">
        <div class="overview-wrap">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="overview-left">
                <div class="title-small-main">
                  <p class="title-small"><?php echo esc_html(get_field('title-small'));?></p>
                  <span class="sub-text"><?php echo the_field('sub-text');?></span>
                </div>
                <?php if(have_rows('ocs_left_link')):
                    while(have_rows('ocs_left_link')) :the_row();
                    ?>
                <div class="ocs-left-link">
                  <p class="title-small"><?php echo get_sub_field('title_small');?></p>
                  <div class="ocs-link-row">
                    <?php if(have_rows('icon_and_title')) :

                    while(have_rows('icon_and_title')) : the_row();
                     $ocsImg = get_sub_field('icon');
                    ?>
                    <div class="ocs-text-link">
                      <div class="apps-link-icon"><img class="linkicon" src="<?php echo $ocsImg['url'];?>" alt="<?php echo $ocsImg['alt'];?>"></div>
                      <div class="app-link-main"><p class="app-link"><?php echo get_sub_field('title');?></p></div>
                    </div>
                        <?php
                        endwhile;
                    endif;
                        ?>
                  </div>
                </div>
                    <?php
                endwhile;
                endif;?>
                <div class="agw-links-main">
                  <ul>
                    <!-- <?php if(have_rows('agw-links-main')):

                    while(have_rows('agw-links-main')): the_row();
                    ?>
                    <li><p><?php echo get_sub_field('agw_title');?></p></li>
                    <?php
                    endwhile;
                endif;
                    ?> -->
                  </ul>
                </div>

              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
              <div class="overview-right">
                <div class="overview-text ocs-text-type">
                  <h3><?php echo the_field('overview-right_title');?></h3>
                  <p><?php echo the_content();?></p>
                </div>
                <?php if(have_rows('challanges')):
                while(have_rows('challanges')):the_row();
                ?>
                <div class="ocs-text-type challenges">
                  <h3><?php echo get_sub_field('c-title');?></h3>
                  <div class="ocs-text-type">
                    <?php echo get_sub_field('c-text');?>
                  </div>
                </div>
                <?php
                endwhile;
            endif;
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wireframe-sec">
      <div class="wireframe-wrap ">
        <div class="wireframe-slider ">
          <div class="wireframe-slide">
            <div class="wireframe-slide-row">
              <div class="wireframe-text">
                <div class="wireframe-top">
                  <?php echo the_field('wireframe_top_text');?>
                </div>
                <div class="wireframe-bottom">
                  <p class="wb-title"><?php echo the_field('wireframe_bottom_title');?></p>
                  <ul>
                  <?php if(have_rows('wireframe_bottom_lists')):
                  while(have_rows('wireframe_bottom_lists')):the_row();
                  ?>
                    <li><?php echo get_sub_field('title');?></li>
                 <?php endwhile; endif;?>
                  </ul>
                </div>
              </div>
              <div class="wireframe-mockup-main">
              	<?php $wireframeImg = get_field('wireframe_right_image');?>
                <img  class="wireframe-mockup" src="<?php echo $wireframeImg['url'];?>" alt="<?php echo $wireframeImg['alt'];?>">
              </div>
            </div>
            <div class="background-main">
              <div class="background-1"style="<?php echo the_field('wireframe_background_color');?>"></div>
              <div class="background-2" style="background: #000;"></div>
            </div>
          </div>        
        </div>
      </div>
    </section>
    <section class="party-apis-sec">
      <div class="party-apis-wp">
        <div class="container">
          <div class="main-title ">
          <?php echo the_field('api_title');?>
          </div>

          <div class="party-apis-list-main">
            <ul class="party-apis-row animatedParent animateOnce">
              <?php if(have_rows('api_libraries')):
              while(have_rows('api_libraries')):the_row();
              ?>
              <li class="delay-250 animated fadeInUpShort"><?php echo get_sub_field('libraries_name');?></li>
              <?php 
              endwhile;
            else:
            endif;
              ?>
              </ul>
          </div>
          <div class="swc_content_btn animatedParent animateOnce">
            <div class="d-flex flex-wrap justify-content-center delay-250 animated fadeInUpShort">
              <a href="javascript:void(0)" class="btn cta m-2 contact-us-click"><?php echo the_field('free_consultation','option');?> <span class="pr-1"></span></a>
              <a href="tel:<?php echo the_field('website_call','option');?>" class="btn cta text-center black-btn after-none m-2 justify-content-center">Call Us <?php echo the_field('website_call','option');?> </a>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!--Testimonial  Section BOC -->
    <section id="testimonial">
      <div class="testimonial-sec padding-tb ">
        
        <div class="container">
          
          <div class="section-title animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort"><?php echo the_field('client_say_title','option');?></h2>
          </div>

          <div class="section-back-title animatedParent animateOnce">
            <h2 class="delay-250 animated rotateInUpLeft"><?php echo the_field('client_say_back_title','option');?></h2>
          </div>


          <div class="testimonial-main animatedParent animateOnce">
            <div class="testimonial-slider">

              <div class="testimonial-wrap animatedParent animateOnce">
                <div class="testimonial-inner">
                  <div class="testimonial-img animated fadeInUpShort">
                    <div class="person-img">
                     <?php $rImg = get_field('review_image');?>
                      <img src="<?php echo $rImg['url'];?>" alt="<?php echo $rImg['alt'];?>">
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <h5 class="animated fadeInUpShort"><?php echo the_field('review_title');?></h5>
                    <div class="testimonial-text animated fadeInUpShort">
                      <p><?php echo the_field('review_description');?></p>
                    </div>
                    <h5 class="animated fadeInUpShort"><?php echo the_field('r_name');?></h5>
                    <h6 class="person-work animated fadeInUpShort"><?php echo the_field('r_position');?></h6>
                  </div>
                </div>
              </div>

              
            </div>
          </div>

        </div>

      </div>
    </section>      
    <!--Testimonial  Section EOC -->
  </main>  	
  <!-- ====== /CONTENT EOC ====== -->   

<?php

get_footer();

?>