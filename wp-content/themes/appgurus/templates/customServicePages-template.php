
<div class="services-page page-wrapper">
<?php
  /*
  Template Name: Service Pages New
  */

  // Banner Section
  $bannerlogo = get_field('banner_left_logo');
  $bannertitle = get_field('banner_main_title');
  $bannerdes = get_field('banner_description');
  $bannerbutton_2= get_field('banner_button2_text');
  $bannerrightimg = get_field('banner_right_image');

  // Tools & Technology Section
  $tools = get_field('tools_&_technologies_title');

  // Why Choose Us Section
  $why_choose_title=get_field('why_choose_flutter_title');


  get_header(); ?>
  
  <!-- ====== /CONTENT BOC ====== --> 
	
  <main>

  	<div class="call-us-main">
  		<div class="call-us-inner">
  			<ul>
  				<li class="call-us-text">Call Us</li>
  				<li><a href="tel:<?php echo the_field('website_call','option');?>" class="btn "><?php echo the_field('footer_call','option');?></a></li>
  				<li><a href="javascript:void(0)" class="btn black-btn contact-us-click"><?php echo the_field('free_consultation','option');?></a></li>
  			</ul>
  		</div>
  	</div>

    <!-- ====== /Banner Section BOC ====== --> 
    <section id="s_banner_section">
        <div class="s_banner_sec padding-tb " >
          <div class="container">
            <div class="sb_content">
              <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                  <div class="sb_content_text">
                    <div class="sapp_img delay-250 animated fadeInUpShort">
                      <?php if($bannerlogo): ?>
                      <img src="<?php echo $bannerlogo;?>" alt="#">
                      <?php endif;?>
                    </div>
                    <?php if($bannertitle):?>
                      <?php echo $bannertitle;?>
                      <?php endif;?>
                      <?php if($bannerdes):?>
                    <p class="animated fadeInUpShort"><?php echo $bannerdes;?></p>
                        <?php endif;?>
                    <div class="breview_link_main">
                      <div class="breview_link_wp">
                        <a href="https://clutch.co/profile/app-gurus" class="review_link" target="_blank">
                         <img src="<?php echo get_template_directory_uri();?>/images/services/r_clutch.svg" alt="#">
                        </a>
                      </div>
                      <div class="breview_link_wp">
                        <a href="https://www.google.com/search?q=App+Gurus#lrd=0x6b915a8fcde34f31:0x1838848fce886507,1" class="review_link" target="_blank">
                        <img src="<?php echo get_template_directory_uri();?>/images/services/r_google.svg" alt="#">
                        </a>
                      </div>
                      <div class="breview_link_wp">
                        <a href="https://www.goodfirms.co/company/app-gurus" class="review_link" target="_blank">
                          <img src="<?php echo get_template_directory_uri();?>/images/services/r_goodfirms.svg" alt="#">
                        </a>
                      </div>
                    </div>


                    <div class="d-flex flex-wrap hire_flutter_btn delay-250 animated fadeInUpShort">
                      <?php if($bannerbutton_2):?>
                      <a href="javascript:void(0)" class="btn cta mr-2 mb-2 contact-us-click"><?php echo the_field('free_consultation','option');?><span class="pr-1"></span></a>
                      
                      <a href="tel:<?php echo the_field('website_call','option');?>" class="btn cta text-center black-btn after-none mb-2 justify-content-center">Call Us <?php echo $bannerbutton_2;?></a>
                      <?php endif;?>
                    </div>
                    
                  </div>
                   
                </div>
                 <div class="col-lg-5 col-md-12 col-sm-12 col-12 align-self-center animatedParent animateOnce">
                  <div class="sbanner_img delay-250 animated fadeInUpShort ">
                    <?php if($bannerrightimg):?>
                    <img src="<?php echo $bannerrightimg;?>" alt="#">
                    <?php endif;?>
                  </div>
                 </div>
              </div>
            </div>
            
          </div>
       </div>
    </section>
    <!-- ====== /Banner Section EOC ====== -->

    <!--Get in touch with us Section BOC -->
    <section id="s_client_logo">
        <div class="s_client_logo light-pink-bg">
          <div class="container">
            <div class="s-clients-logo-main">
              <div class="s-logo-slider clients-logo-inner">
                <?php 
                if(have_rows('sponsors_images','option')):
                  while(have_rows('sponsors_images','option')):the_row();
                ?>
                <div class="s-client-logo-wrap">
                  <div class="s-client-logo">
                    <img src="<?php echo get_sub_field('s_image','option');?>" alt="logo">
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

    <!--Get in touch with us Section EOC -->

    <section>
      <div class="tools_technlg-sec padding-tb">
        <div class="container">

           <div class="main-title animatedParent animateOnce">
              <?php echo $tools; ?>
            </div>

          <div class="tools_technlg-wp">
          <?php

// Check rows exists.
if( have_rows('service_tools_technologies') ):

    // Loop through rows.
    while( have_rows('service_tools_technologies') ) : the_row();
?>
            <div class="tools-row">
              <div class="row">
                <div class=" col-lg-3 col-md-12 col-sm-12 col-12">
                  <div class="tools_technlg-title animatedParent animateOnce">
                    <h5 class="delay-500 animated fadeInLeft font-weight-bold"><?php echo get_sub_field('tools_technologies_title');?></h5>
                  </div>
                </div>
                <div class=" col-lg-9 col-md-12 col-sm-12 col-12 animatedParent animateOnce">
                  <div class="tools_technlg-type  delay-250 animated fadeInRight">
                    <ul class="technlg-type">
                      <?php
                      if(have_rows('tools_technologies_sub_keyword')): 
                        while(have_rows('tools_technologies_sub_keyword')):the_row();
                      ?>
                      <li><?php echo get_sub_field('technologies_sub_keyword_list');?></li>
                      <?php endwhile;
                      else:
                      endif;
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php
    endwhile;
    else :
    endif;
    ?> </div>
        </div>
      </div>
    </section>


    <section class="swc_section">
      <div class="swc_box-contain padding-tb orange-bg">
        <div class="container">
          <div class="swc_content-main">
            <div class="main-title animatedParent animateOnce">
              <h2 class="delay-250 animated fadeInUpShort text-center"> <span class="white-color-text">
                <?php echo $why_choose_title;?>
              </h2>
            </div>
            <div class="swc_row">
              <?php 
              if(have_rows('why_choose_flutter_features')):

                while(have_rows('why_choose_flutter_features')):the_row();
              ?>
              <div class="swc-col animatedParent animateOnce">
                <div class="swc-box delay-250 animated fadeInUpShort">
                  <h5 class="white-color-text"><?php echo get_sub_field('features_title');?></h5>
                  <p class="white-color-text"><?php echo get_sub_field('features_description');?></p>
                </div>
              </div>
              <?php
                endwhile;
              endif;
              ?>
            </div>
            <div class="swc_content_btn animatedParent animateOnce">
             <div class="d-flex flex-wrap justify-content-center delay-250 animated fadeInUpShort">
                <a href="#" class="btn black-btn cta m-2"><?php echo the_field('free_consultation','option');?> <span class="pr-1"></span></a>
                <a href="#" class="btn cta text-center white-btn after-none m-2 justify-content-center">Call Us <?php echo the_field('why_choose_flutter_button2_text');?></a>
              </div> 
            </div>


          </div>
        </div>
      </div>    
    </section>




    <!--Our Recent Work  Section BOC -->
    <section class="our_rwork_sec">
      <div class="container">
        <div class="main-title animatedParent animateOnce">
          <h2 class="delay-250 animated fadeInUpShort text-center"><?php the_field('recent_work_title');?></h2>
        </div>
        <div class="our_rwork_main">
          <?php 
          if(have_rows('our_recent_work')):
            while(have_rows('our_recent_work')):the_row();
          ?>
          <div class="our_rwork_row">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="our_rwork_img animatedParent animateOnce">
               
                  <img class="animated fadeInUpShort" src="<?php echo get_sub_field('recent_work_left_image');?>" alt="#">
                 
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="our_rwork_content  ">
                  <div class="our_rwork_text animatedParent animateOnce">
                    <div class="delay-250 animated fadeInUpShort">
                      <h3><?php echo get_sub_field('our_recent_work_left_title');?></h3>
                      <p><?php echo get_sub_field('our_recent_work_left_description');?></p>
                      <ul class="technlg-type">
                        <?php 
                        if(have_rows('our_recent_work_left_categories')):
                          while(have_rows('our_recent_work_left_categories')):the_row();
                        ?>
                        <li><?php echo get_sub_field('work_left_category_text');?></li>
                        <?php
                        endwhile;
                      endif;
                        ?>
                      </ul>
                    </div>
                  </div>
                  <div class="our_rwork_btn animatedParent animateOnce">
                    <div class="our_rwork_btn_main d-flex flex-wrap delay-250 animated fadeInUpShort">
                      <a href="#" class="btn cta mr-2 mb-2"><?php echo get_sub_field('our_recent_work_button1_text');?> <span class="pr-1"></span></a>
                      <a href="#" class="btn cta text-center black-btn wborder-btn mb-2"><?php echo the_field('free_consultation','option');?></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>            
          <?php
          endwhile;
        endif;
          ?>
        </div>
      </div>
    </section>
    <!--Our Recent Work  Section EOC -->

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

            <div class="page-numbers">
              <span class="pagingInfo"></span>
            </div>

            <div class="testimonial-slider">
            <?php 
            if(have_rows('client_testimonial','option')):
              while(have_rows('client_testimonial','option')):the_row();
            ?>
              <div class="testimonial-wrap animatedParent animateOnce">
                <div class="testimonial-inner">
                  <div class="testimonial-img animated fadeInUpShort">
                    <div class="person-img">
                      <?php 
                      $clientImg=get_sub_field('client_images_testimonial','option');
                      if($clientImg):
                      ?>
                      <img src="<?php echo $clientImg;?>" alt="#">
                      <?php endif;?>
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <h5 class="animated fadeInUpShort"><?php echo get_sub_field('client_testimonials_text','option');?></h5>
                    <div class="testimonial-text animated fadeInUpShort">
                      <p><?php echo get_sub_field('client_testimonials_description','option');?></p>
                    </div>
                    <h5 class="animated fadeInUpShort"><?php echo get_sub_field('client_testimonial_name','option');?></h5>
                    <h6 class="person-work animated fadeInUpShort"><?php echo get_sub_field('client_testimonials_work','option');?></h6>
                  </div>
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
    <!--Testimonial  Section EOC -->


  </main>
  	
  <!-- ====== /CONTENT EOC ====== --> 


  
  
</div>
<?php get_footer(); ?>
<script type="text/javascript">
  

  $('.s-logo-slider').slick({
  dots: false,
  arrows: false,
  infinite: false,
  speed: 1000,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
  ]
});

</script>
