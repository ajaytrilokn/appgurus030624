<?php
  /*
  Template Name: Service Pages
  */
  get_header(); ?>
  
<main>

    <!-- ====== /Banner Section BOC ====== --> 
    <section id="banner-section">
        <div class="banner-sec " >
          <div class="container">
            <div class="banner-sec-content mw-100">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile;  endif; ?>
            </div>
            
          </div>
       </div>
    </section>
    <!-- ====== /Banner Section EOC ====== -->

    <!--Get in touch with us Section BOC -->

      <section id="trusted-sec">
        <div class="trusted-section padding-tb light-pink-bg">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
                <h5 class="delay-250 animated fadeInUpShort">Trusted By 500+ Happy Clients, Including Fortune Companies</h5>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
               <div class="trusted-client-logo">
                 <div class="clients-logo-main">
                  <div class="clients-logo-inner">
                    <div class="client-logo-wrap delay-250 animated fadeInRightShort">
                      <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Logo/lorna-jane-logo.png" alt="logo">
                      </div>
                    </div>
                    <div class="client-logo-wrap delay-250 animated fadeInRightShort">
                      <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Logo/SLX-logo-2017colour.png" alt="logo">
                      </div>
                    </div>
                    <div class="client-logo-wrap delay-250 animated fadeInRightShort">
                      <div class="client-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Logo/QLD Government.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
               </div>
              </div>
            </div>
          </div> 
         
        </div>
      </section>

    <!--Get in touch with us Section EOC -->

      

    <!-- Design -->
    <!-- <section id="design">
      <div class="design-section padding-tb">
        <div class="container ">
          <div class="main-title animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort"><?=get_field("client_success_stories_title");?></h2>
          </div>
          <div class="cs-row-main">
            <?php
            if ( have_rows( 'client_success_stories' ) ) : 
            while ( have_rows( 'client_success_stories' ) ) : the_row();
              $stories_title = get_sub_field( 'stories_title');
              $stories_description = get_sub_field( 'stories_description');
              $stories_image = get_sub_field( 'stories_image' );
            ?>
            <div class="cs-row">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="client_success-img animatedParent animateOnce">
                    <img class="animated fadeInLeft slower" src="<?=esc_url( $stories_image['url']);?>" alt="<?=esc_url( $stories_image['alt']);?>">
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 animatedParent animateOnce align-self-center">

                  <div class="cs-title mb-4">
                     <h5 class="animated fadeInRight  font-weight-bold"><?php echo $stories_title; ?></h5>
                  </div> 
                  <div class="services-text delay-250 animated fadeInRight">
                      <h5><?php echo $stories_description; ?></h5>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?> 
            <?php endif; ?>
          </div>  
        </div>
      </div>
    </section> -->
      
    <!-- Design -->


    <!-- WHAT WE DO Section BOC -->

    <section id="os-contribution">
      <div class="os-contribution padding-tb black-bg ">
        <div class="container">
          <div class="We-are-solution-inner">
            <div class="We-are-solution-inner-title animatedParent animateOnce">
             <h2 class="white-color-text delay-250 animated fadeInUpShort"><?=get_field("open_source_contribution_title");?></h2>
           </div> 
          </div>
          <div class="osc-box-row">
            <div class="row">
              <?php
              if ( have_rows( 'open_source_section_1' ) ) : 
              while ( have_rows( 'open_source_section_1' ) ) : the_row();
                $section_title = get_sub_field( 'open_sources_section_title');
                $section_sub_title = get_sub_field( 'open_sources_section_sub_title');
                $section_icon = get_sub_field( 'open_sources_section_icon' );
              ?>
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 animatedParent animateOnce">
                <div class="osc-box delay-250 animated fadeInUpShort ">
                  <div class="osc-box-inner">
                    <div class="osc-icon-main"><img class="osc-icon" src="<?=esc_url( $section_icon['url']);?>" alt="<?=esc_url( $section_icon['alt']);?>"></div>
                    <h5><?php echo $section_title; ?></h5>
                    <p><?php echo $section_sub_title; ?></p>
                  </div>
                </div>
               </div>
              <?php endwhile; ?> 
              <?php endif; ?>
            </div>
          </div>
          <div class="two-side-text-main">
            <?php
            if ( have_rows( 'open_source_contribution' ) ) : 
            while ( have_rows( 'open_source_contribution' ) ) : the_row();
              $contribution_title = get_sub_field( 'source_contribution_title');
              $contribution_description = get_sub_field( 'source_contribution_description');
            ?>
            <div class="row osc-text-row">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="services-title animatedParent animateOnce">
                  <h5 class="delay-500 animated fadeInLeft text-white font-weight-bold"><?php echo $contribution_title; ?></h5>
                </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                <div class="services-title  delay-250 animated fadeInRight">
                  <h6 class="text-white"><?php echo $contribution_description; ?></h6> 
                </div>
              </div>
            </div>
            <?php endwhile; ?> 
            <?php endif; ?>
            
          </div> 
          <div class="border-box-sec">
            <?=get_field("go_mobile-first");?>
          </div> 
        </div>
      </div>
    </section>

    <!-- WHAT WE DO Section EOC -->


    <section>
      <div class="tools_technlg-sec padding-tb">
        <div class="container">
           <div class="main-title animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort"> <?=get_field("tools_&_technologies_title");?> </h2>
          </div>

          <div class="tools_technlg-wp">
            <?php
            if ( have_rows( 'service_tools_technologies' ) ) : 
            while ( have_rows( 'service_tools_technologies' ) ) : the_row();
              $tools_technologies_keyword = get_sub_field( 'tools_technologies_keyword');
            ?>
            <div class="tools-row">
              <div class="row">
                <div class=" col-lg-3 col-md-12 col-sm-12 col-12">
                  <div class="tools_technlg-title animatedParent animateOnce">
                    <h5 class="delay-500 animated fadeInLeft font-weight-bold"><?php echo $tools_technologies_keyword; ?></h5>
                  </div>
                </div>
                <div class=" col-lg-9 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                  <div class="tools_technlg-type  delay-250 animated fadeInRight">
                    <ul class="technlg-type">
                      <?php
                      if ( have_rows( 'tools_technologies_sub_keyword' ) ) : 
                      while ( have_rows( 'tools_technologies_sub_keyword' ) ) : the_row();
                        $sub_keyword_list = get_sub_field( 'technologies_sub_keyword_list');
                      ?>
                      <li><?php echo $sub_keyword_list; ?></li>
                      <?php endwhile; ?> 
                      <?php endif; ?>
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

    <section>
      <div class="recent_work-sec padding-tb">
        <div class="container">

          <?=get_field("recent_work_title");?>
          
          <div class="recent_work">
            <div class="row">
              <?php
              $addclass = 0;
              if ( have_rows( 'our_recent_work' ) ) : 
              while ( have_rows( 'our_recent_work' ) ) : the_row();
                $our_recent_work = get_sub_field( 'our_recent_work' );
                $recent_work_description = get_sub_field( 'our_recent_work_description' );
                $recent_work_image = get_sub_field( 'recent_work_image' );
                $addclass++;
              ?>
              <div class=" col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
                <div class="recent_work_box <?php echo ($addclass==1)?'portae':'relief_driver'; ?>">
                    <div class="recent_work_text animated fadeInUpShort">
                      <h5><?=$our_recent_work;?></h5>
                      <p><?=$recent_work_description;?></p>
                    </div>
                    <div class="recent_work_img animated fadeInUpShort">
                      <img src="<?=esc_url( $recent_work_image['url']);?>" alt="<?=esc_url( $recent_work_image['alt']);?>">
                    </div>
                </div>
              </div>
              <?php endwhile; ?> 
              <?php endif; ?>
              
            </div>
            <div class="project-box-main">
              <div class="row">
                <div class=" col-lg-4 col-md-4 col-sm-12 col-12 animatedParent animateOnce ">
                  <div class="project-box-wp animated fadeInUpShort">
                    <?=get_field("projects_delivered");?>
                  </div>
                </div>
                <div class=" col-lg-4 col-md-4 col-sm-12 col-12 animatedParent animateOnce">
                  <div class="project-box-wp animated fadeInUpShort">
                    <?=get_field("happy_clients");?>
                  </div>
                </div>
                <div class=" col-lg-4 col-md-4 col-sm-12 col-12 animatedParent animateOnce">
                  <?=get_field("start_a_project");?>
                </div>
                
              </div>
            </div>
          </div>
         
          
        </div>
      </div>
    </section>

    <section class="wc-flutter-section">
      <div class="wc-flutter-sec padding-tb ">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-12 animatedParent animateOnce ">
                <?=get_field("why_choose_this_service_title");?>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-12">
              <div class="wca-accordian">
                  <div class="accordion" id="accordionExample">
                    <?php
                    $checki = 0;
                    if ( have_rows( 'why_choose_this_service_key_features' ) ) : 
                    while ( have_rows( 'why_choose_this_service_key_features' ) ) : the_row();
                      $features_title = get_sub_field( 'service_key_features_title' );
                      $features_description = get_sub_field( 'key_features_description' );
                      $checki++;
                    ?>
                    <div class="card-main animatedParent animateOnce">
                      <div class="card-head animated fadeInUpShort" id="heading<?=$checki;?>">
                        <h6 class="mb-0" data-toggle="collapse" data-target="#collapse<?=$checki;?>" aria-expanded="<?php echo ($checki==1)?'true':'false'; ?>" aria-controls="collapseOne">
                            <?php echo $features_title; ?>
                        </h6>
                      </div>
                      <div id="collapse<?=$checki;?>" class="collapse animated fadeInUpShort <?php echo ($checki==1)?'show':''; ?>" aria-labelledby="heading<?=$checki;?>" data-parent="#accordionExample">
                        <div class="card-body-main">
                          <p><?php echo $features_description; ?></p>
                        </div>
                      </div>
                    </div>
                    <?php endwhile; ?> 
                    <?php endif; ?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wc-appgurus-section">
      <div class="wc-appgurus-sec padding-tb black-bg">
        <div class="container">
          <div class="wc-appgurus-top">
             <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
                   <h2 class="white-color-text animated fadeInLeftShort"><?=get_field("why_choose_appgurus_title");?></h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 animatedParent animateOnce">
                <div class="wca-left-content animated fadeInRightShort">
                  <h6 class="white-color-text"><?=get_field("why_choose_appgurus_short_description");?></h6> 
                </div>
                </div>
              </div>
          </div>

          <div class="wc-appgurus-type">
            <ul class="wca-type animatedParent animateOnce">
              <?php
              if ( have_rows( 'why_choose_appgurus_key_features' ) ) : 
              while ( have_rows( 'why_choose_appgurus_key_features' ) ) : the_row();
                $appgurus_key_features = get_sub_field( 'appgurus_key_features' );
              ?>
              <li class="animated fadeInUpShort">
              <svg height=21.972 viewBox="0 0 21.972 21.972"width=21.972 xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink><defs><clipPath id=clip-path><path d=M0-682.665H21.972v21.972H0Z fill=#fff id=path451 transform="translate(0 682.665)"/></clipPath></defs><g id=check-mark transform="translate(0 -0.002)"><g id=g441 transform="translate(0 0.002)"><g id=g443 transform="translate(6.737 8.107)"><path d=M-255.563,0l-5.758,5.758-2.741-2.741 fill=none id=path445 transform=translate(264.062) stroke=#fff stroke-linecap=round stroke-linejoin=round stroke-miterlimit=10 stroke-width=1 /></g><g id=g447><g id=g449 clip-path=url(#clip-path)><g id=g455 transform="translate(0.858 0.858)"><path d=M-609.076-304.538A10.128,10.128,0,0,1-619.2-294.41a10.128,10.128,0,0,1-10.128-10.128A10.128,10.128,0,0,1-619.2-314.666,10.128,10.128,0,0,1-609.076-304.538Z fill=none id=path457 transform="translate(629.332 314.666)"stroke=#fff stroke-linecap=round stroke-linejoin=round stroke-miterlimit=10 stroke-width=1 /></g></g></g></g></g></svg>  
              <span class="text"><?php echo $appgurus_key_features; ?></span></li>
              <?php endwhile; ?> 
              <?php endif; ?>
            </ul>
          </div>

          <div class="border-box-sec">
            <?=get_field("why_choose_appgurus_description");?>
            
          </div> 


        </div>
      </div>
    </section>


    <section id="faq-sec">
      <div class="service-faq-main  faq-section padding-tb mb-0">
        <div class="container">

          <div class="main-title animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort"> <?=get_field("faq_section_title");?></h2>
          </div>

          <div class="accordian-wrap ">

             <?php
              if ( have_rows( 'faq_questions' ) ) : 
              while ( have_rows( 'faq_questions' ) ) : the_row();
                $faq_title = get_sub_field( 'faq_title' );
                $faq_description = get_sub_field( 'faq_description' );
              ?>
            <div class="accordian-outer animatedParent animateOnce">
              <div class="accordian delay-250 animated fadeInUpShort">
                <div class="accordian-title ">
                    <h5 class="font-we-bl"><?php echo $faq_title; ?></h5>
                </div>
                <div class="accordian-text">
                  <p><?php echo $faq_description; ?></p>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            

          </div>

        </div>
      </div>
    </section>

</main>
<?php get_footer(); ?>