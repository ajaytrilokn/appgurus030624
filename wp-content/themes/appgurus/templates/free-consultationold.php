	<?php
	/*
	Template Name: Free Consultation Template
	*/
	get_header('consultation'); 
  ?>

	
<!-- ====== /WRAPPER BOC ====== -->
    <div class="page-wrapper ">
        <!-- header start -->
        <header class="site-header">
          <div class="header-main nav-area">
            <div class="header-top">
              <div class="container">
                <div class="header-top-inner">
                  <div class="header-address">
                    <a href="https://goo.gl/maps/6Nr4Zm9v7j5ADYfTA" target="_blank" rel="noopener noreferrer">
                      <p>Level 7, 757 Ann St, Fortitude Valley QLD 4006</p>
                    </a>
                  </div>
                  <div class="social-media">
                  <ul class="social-link">
                    <li>
                      <a href="https://www.linkedin.com/company/appgurus" target="_blank" class="social-icon">
                        <img class="icon-1" src="<?php echo get_template_directory_uri(); ?>/images/consultation/social-media/linkedin-icon.png" alt="linkedin" loading="lazy">
                      </a> 
                    </li>
                    <li>
                      <a href="https://www.facebook.com/appgurus" target="_blank" class="social-icon">
                        <img class="icon-1" src="<?php echo get_template_directory_uri(); ?>/images/consultation/social-media/facebook-icon.png" alt="facebook" loading="lazy">
                      </a> 
                    </li>
                    <li>
                      <a href="https://www.instagram.com/appgurus" target="_blank" class="social-icon">
                        <img class="icon-1" src="<?php echo get_template_directory_uri(); ?>/images/consultation/social-media/instagram.png" alt="instagram" loading="lazy">
                      </a> 
                    </li>
                  </ul>
                </div>
              </div>
              </div>
            </div>
              <div class="header-inner-main">
                <div class="container">
                    <div class="navbar-container">
                      <nav class="navbar navbar-dark navbar-expand-lg">
                          <div class="header-logo">
                            <a href="https://www.appgurus.com.au/"><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/site_logo.png" alt="App Gurus" loading="lazy"></a>
                          </div>
                          <div class="header-inner">
                            <div class="header-right">

                                <div class="header-menu " >
                                  <div class="header-menu-inner">
                                    <div class="type-wrap">
                          <h4>
                              <div id="typed-strings" style="display: none;">
                                <span>Need a prototype to get <span class="orange_text">funding?</span></span>
                              <span><span class="orange_text">Got an app idea </span> but not sure where to start?</span>
                              <span>Do you have an <span class="orange_text"> app idea?</span></span>
                            </div>
                              <span id="typed"></span>
                            </h4>
                          </div>

                                    <div class="header-btn">
                                      <span id="fcClick" class="btn  contact-us-click">Free Consultation</span>
                                      <a href="tel:1300 699 571" class="btn black_btn">CALL 1300 699 571</a>
                                    </div>

                                  </div>
                                </div>
                            </div>
                        </div>
                      </nav>
                    </div>
                  </div>
              </div>
          </div>
        </header> 
      <!-- header End -->

      <!-- Content Start -->


      

      <section class="banner-sec bg-shape" >
        <div class="banner-wrap">
          <div class="container">
            <div class="banner-row">
              <div class="banner-left" >
                <div class="banner-text">
                  <div class="banner-title-img">
                    <h1 class="">Australian Mobile App Developers – <span class="orange_text"> App Gurus</span></h1>
                    <div class="clutch-img clutch-img-wp">
                      <div class="clutch-img-1">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/clutch-img-01.webp" alt="AppGurus Client Reviews" loading="lazy"> 
                      </div>
                      <div class="clutch-img-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/clutch-img-02.webp" alt="AppGurus Client Reviews" loading="lazy"> 
                      </div>
                    </div>
                  </div>
                  
                  <h4>We’re a leading app development company specialising in a diverse range of digital services in Brisbane, Sydney, Melbourne.</h4>

                  <div class="banner-points">
                    <h5>We’ll help you with:</h5>
                    <ul>
                      <li>iOS App Development</li>
                      <li>UI / UX Design</li>
                      <li>Android App Development</li>
                      <li>Third-party Integration</li>
                      <li>Native and Hybrid App Development</li>
                      <li>Testing</li>
                      <li>App Prototypes</li>
                      <li>Maintenance and Support</li>
                    </ul>
                  </div>

                  <div class="banner-count-main">
                    <div class="banner-count-box">
                      <h2 class="orange_text">300+</h2>
                      <p>Projects since 2012</p>
                    </div>
                    <div class="banner-count-box">
                      <h2 class="orange_text">11</h2>
                      <p>Years in business</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="banner-right" id="freeConsultation">
                <div class="banner-form-wp">
                  <div class="form-title">
                    <h3 class="text-center">Get A FREE Consultation</h3>
                  </div>
                  <p id="thank-you-message"></p>
                  <p id="thank-you-errormessage"></p>
                  <form id="consultation-form" method="post">
                    
                    <?php echo do_shortcode('[contact-form-7 id="1074" title="Free Consultation"]'); ?>
                    
                    <div class="banner-form-text text-center">
                      <p>You will receive our Non Disclosure Agreement to protect your app idea. We respect your confidentiality and therefore keep all disclosed information private.</p> 
                    </div>
                  </form>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </section>

      <section class="trusted-companies">
        <div class="container">
          <div class="trusted-companies-main">
            <div class="section-title text-center">
              <h2>Trusted by <span class="orange_text">highly reputable companies</span></h2>
            </div>

            <div class="clients-logo-main">
              <div class="clients-logo-inner">
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_1.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_2.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_3.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_4.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_5.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_6.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_7.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_8.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/optii.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
                <div class="client-logo-wrap">
                  <div class="client-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/client_logo_10.png" alt="AppGurus Client Reviews" loading="lazy">
                  </div>
                </div>
              </div>
            </div>

            <div class="trusted-companies-text">
              <h4 class="font-we-rg">App Gurus have a full team of experienced in-house designers and developers that do it all from start to launch.</h4>
              <h4 class="font-we-md">We create world-class digital products; mobile apps, websites & prototypes that can position themselves in a highly competitive market.</h4>
            </div>

          </div>
        </div>
      </section>

      <div class="black_box-contain">
        <div class="container">
          <div class="bb_content-main">
            <div class="bb_row">
              <div class="bb-col">
                <div class="bb-box">
                  <h5>Strategy is key</h5>
                  <p>We transform client visions into reality by investing genius thought into the strategy and user experience tailored for the target audience.</p> 
                </div>
              </div>
              <div class="bb-col">
                <div class="bb-box">
                  <h5>Scalable means sustainable</h5>
                  <p>Our developments are built upon scalable architecture and engineered to be easily maintainable and upgradeable in the future.</p> 
                </div>
              </div>
              <div class="bb-col">
                <div class="bb-box">
                  <h5>We have the solution</h5>
                  <p>We are solution providers. We listen to our clients, embrace their vision and focus on providing the best technical solutions that will result in immersive, smooth user experiences.</p>
                </div>
              </div>
              <div class="bb-col">
                <div class="bb-box">
                  <h5>Need funding?</h5>
                  <p>We create visually engaging prototypes that can be used as the ultimate pitchdeck to WOW investors and get funding.</p> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <section class="clients-review bg-shape">
        <div class="container">
          <div class="clients-review-main">
            <div class="section-title text-center">
              <h2>Client <span class="orange_text">Reviews</span></h2>
            </div>

            <div class="clients-review-wp">
              <div class="cr-row">

                <div class="cr-col-main">
                  <div class="cr-col">
                    <div class="cr-logo">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/cr-logo-1.png" alt="cr-logo" loading="lazy">
                    </div>
                    <div class="clients-info">
                      <h6 class="client_name orange_text">Scott Barber</h6>
                      <p>National Fleet Engineering & Innovation Manager, Hanson</p>
                    </div>
                    <div class="clients-qouet">
                      <p>“App Gurus showed genuine passion for the project, giving invaluable technical insights.”</p> 
                    </div>
                    <div class="clients-text">
                      <p>App Gurus showed a passion for what they did, and were enthusiastic about the challenge we posed to them, and showcased a keen desire to work with us. There did not seem to be any challenge that was too large or complex. They always participated in helping us understand what is possible and provided feedback on different ways to achieve the same goal.</p>
                    </div>
                    <div class="clients-start">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    </div>
                  </div>
                </div>

                <div class="cr-col-main">
                  <div class="cr-col">
                    <div class="cr-logo">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/cr-logo-2.png" alt="cr-logo" loading="lazy">
                    </div>
                    <div class="clients-info">
                      <h6 class="client_name orange_text">Jared Fomenko </h6>
                      <p>Co-founder, iKnowa</p>
                    </div>
                    <div class="clients-qouet">
                      <p>“They provided priceless industry knowledge, transparency and understanding as part of the design and construction process.”</p> 
                    </div>
                    <div class="clients-text">
                      <p>We came to App Gurus with an idea and extremely basic wireframe of our concept. As a startup with no app development or programming knowledge, the experience of App Gurus turned our idea into a polished, fully functioning product. The continuing support we have received after completion of our app has been exceptional.</p> 
                    </div>
                    <div class="clients-start">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    </div>
                  </div>
                </div>

                <div class="cr-col-main">
                  <div class="cr-col">
                    <div class="cr-logo">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/cr-logo-3.png" alt="cr-logo">
                    </div>
                    <div class="clients-info">
                      <h6 class="client_name orange_text">Bob Sternberg </h6>
                      <p>Founder & Director, Homeworthy</p>
                    </div>
                    <div class="clients-qouet">
                      <p>“They guided me through the entire process and made Homeworthy a robust platform by utilising my vision and industry experience.”</p> 
                    </div>
                    <div class="clients-text">
                      <p>I approached the App Gurus to transform my Homeworthy Inspection System into a mobile app. Many businesses and individuals now conduct their inspection services using Homeworthy and the numbers are growing. I personally have saved 2 hours per day on inspection reports, by simply using the Homeworthy app. It’s a fast and reliable experience.</p> 
                    </div>
                    <div class="clients-start">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    </div>
                  </div>
                </div>

                <div class="cr-col-main">
                  <div class="cr-col">
                    <div class="cr-logo">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/cr-logo-4.png" alt="cr-logo">
                    </div>
                    <div class="clients-info">
                      <h6 class="client_name orange_text">Kerry Anderson </h6>
                      <p>General Manager, Get More Traffic</p>
                    </div>
                    <div class="clients-qouet">
                      <p>“As a result of App Guru’s work, client engagement has increased 300% and net promoter score has increased by 10%.”</p>
                    </div>
                    <div class="clients-text">
                      <p>We never felt that we were dealing with sales people, but rather with a team that had a deep technical understanding. App Gurus built an app to improve communication between the client and their customers. They also integrated an AI element to make custom recommendations to users. Client managers also report increased productivity due to optimized communication via the app.</p> 
                    </div>
                    <div class="clients-start">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    </div>
                  </div>
                </div>

                <div class="cr-col-main">
                  <div class="cr-col">
                    <div class="cr-logo">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/logo/cr-logo-5.png" alt="cr-logo" loading="lazy">
                    </div>
                    <div class="clients-info">
                      <h6 class="client_name orange_text">Adam Wells </h6>
                      <p>Director, Relief Driver</p>
                    </div>
                    <div class="clients-qouet">
                      <p>“I’ve always been looked after with the highest level of care and service has been amazing.”</p> 
                    </div>
                    <div class="clients-text">
                      <p>They were very quick to embrace my vision, providing me with endless solutions for anything I asked for. The apps are fantastic. I couldn’t be happier with the outcome as they work exactly as I imagined smooth and fast. </p> 
                    </div>
                    <div class="clients-start">
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                      <span><i class="fa fa-star" aria-hidden="true"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="portfolio-sec">
        <div class="container">
          <div class="clients-review-main">
            <div class="section-title text-center">
              <h2>Our <span class="orange_text">Portfolio</span></h2>
              <p>A small selection of diverse projects from our portfolio.</p>
            </div>
          </div>
          <div class="portfolio-wp">
            <div class="row gx-5 gy-5">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="portfolio-col instant_consult">
                  <div class="portfolio-info">
                    <h3>Instant Consult</h3>
                    <p>Instant Consult provides you with the ability to have a health consultation with an Australian registered, fully qualified, insured and experienced Doctor via video call, anywhere in Australia.</p>
                    <div class="applink-wp">
                      <ul class="applink">
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/app-strore.webp" alt="App Strore" loading="lazy"></span></li>
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/google-pay.webp" alt="Google Pay Strore" loading="lazy"></span></li>
                      </ul>
                    </div>
                  </div>  
                  <div class="portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/instant_consult.webp" alt="AppGurus Client Projects">  
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="portfolio-col linx pb-0">
                  <div class="portfolio-info">
                    <h3>Linx</h3>
                    <p>A world-first,digital marketing performance app with live data at your fingertips. View your Facebook & Adwords campaigns on the go.</p> 
                    <div class="applink-wp">
                      <ul class="applink">
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/app-strore.webp" alt="App Strore" loading="lazy"></span></li>
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/google-pay.webp" alt="Google Pay Strore" loading="lazy"></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/linx.webp" alt="AppGurus Client Projects"> 
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="portfolio-col iknowa">
                  <div class="row gx-5">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                      <div class="iknowa-info">
                        <div class="portfolio-info">
                          <h3>iKnowa</h3>
                          <p>Don’t just experience dates. Make every date an experience. iKnowa links Australia’s dating scene to our places; be it a restaurant, cafe, or bar to your favourite speciality treats. They highlight their menu, atmosphere, and dress code along with promoting their unique offers and perfect dates.</p>
                          <div class="applink-wp">
                            <ul class="applink">
                              <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/app-strore.webp" alt="App Strore" loading="lazy"></span></li>
                              <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/google-pay.webp" alt="Google Pay Strore" loading="lazy"></span></li>
                            </ul>
                          </div>
                        </div>  
                        <div class="portfolio-featured">
                          <h4 class="d-flex flex-wrap align-items-center">Featured on <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/news.png" alt="AppGurus Client Projects" loading="lazy"><a href="https://www.youtube.com/watch?v=-eNZJ5T0NcE" target="_blank" rel="iKnowaonChannel9News nofollow" class="click_link">Click Here</a></h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                      <div class="portfolio-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/iknowa.webp" alt="AppGurus Client Projects" loading="lazy">  
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="portfolio-col portae pb-0">
                  <div class="portfolio-info">
                    <h3>Portae</h3>
                    <p>Portae is an intuitive app for organising and selling your clothes, shoes and accessories. Simply create a profile, take a photo of the items and organise them into customizable racks. Share your profile with your friends, and follow them to keep up to date with their style and trends</p> 
                    <div class="applink-wp">
                      <ul class="applink">
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/app-strore.webp" alt="App Strore" loading="lazy"></span></li>
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/google-pay.webp" alt="Google Pay Strore" loading="lazy"></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/portae.webp" alt="AppGurus Client Projects" loading="lazy">  
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="portfolio-col relief_driver pb-0">
                  <div class="portfolio-info">
                    <h3>Relief Driver</h3>
                    <p>Find & book a Relief Driver on demand. </br>A tailored quick and easy mobile app that allows Owner Drivers to find their preferred Relief Driver on demand. Plan in advance.</p>
                    <div class="applink-wp">
                      <ul class="applink">
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/app-strore.webp" alt="App Strore" loading="lazy"></span></li>
                        <li><span><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/google-pay.webp" alt="Google Pay Strore" loading="lazy"></span></li>
                      </ul>
                    </div>
                  </div>  
                  <div class="portfolio-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/relief_driver.webp" alt="AppGurus Client Projects" loading="lazy"> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="provide-sec">
        <div class="container">
          <div class="section-title">
            <h2>We provide <span class="orange_text">digital product solutions</span> for</h2>
          </div>
          <div class="provide-sec-wp">
            <div class="provide-col">
              <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/provided-img-1.webp" alt="Start Ups" loading="lazy">
              <h4>Start Ups</h4>
            </div>
            <div class="provide-col">
              <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/provided-img-2.webp" alt="Small-Medium Sized Business" loading="lazy">
              <h4>Small-Medium Sized Business</h4>
            </div>
            <div class="provide-col">
              <img src="<?php echo get_template_directory_uri(); ?>/images/consultation/provided-img-3.webp" alt="Enterprise" loading="lazy">
              <h4>Enterprise</h4>
            </div>
          </div>
        </div>
      </section>

      <section class="work-industry-sec">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
              <div class="section-title">
                <h2>We work with any <br> <span class="orange_text">industry</span></h2>
              </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-12 col-12">
              <div class="work-industry-wp">
                <ul class="work-points">
                  <li>Health & wellness</li>
                  <li>Fitness</li>
                  <li>Social</li>
                  <li>Marketing</li>
                  <li>E-commerce</li>
                  <li>Finance</li>
                  <li>Education</li>
                  <li>Real Estate</li>
                  <li>Construction</li>
                  <li>Restaurant</li>
                  <li>Travel</li>
                  <li>Retail</li>
                  <li>Sport</li>
                  <li>Business</li>
                  <li>Logistics</li>
                  <li>Diverse range of SME’s</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="why_clients-sec bg-shape">
        <div class="container">
          <div class="why_clients-main">
            <div class="section-title text-center">
              <h2>Why clients <span class="orange_text">choose the App Gurus?</span></h2>
            </div>

            <div class="why_clients-top">
              <div class="icon-text-main">
                <div class="icon-text-box">
                  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/premium-badge.png" alt="Why clients choose the App Gurus?" loading="lazy"> </div>
                  <div class="text">Client care and product quality comes first</div>
                </div>
                <div class="icon-text-box">
                  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/goal.png" alt="Tailored solutions to meet objectives and budget" loading="lazy"> </div>
                  <div class="text">Tailored solutions to meet objectives and budget</div>
                </div>
                <div class="icon-text-box">
                  <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/images/consultation/collaboration.png" alt="Guided support for all clients" loading="lazy"> </div>
                  <div class="text">Guided support for all clients</div>
                </div>
              </div>
            </div>

            <div class="why_clients_points">
              <ul class="wc-points">
                <li>We genuinely care about our clients, their growth and success. We consult with full transparency and ensure our clients understand the process pre-development, during and post-development.</li>
                <li>We are solution providers – we identify the problem and recommend solutions to meet the strategic objectives.</li>
                <li>We have rigid processes in place to ensure projects meet top industry standards in production and performance.</li>
              </ul>
            </div>
          </div>
        </div>
      </section>
       


      <!-- Content End -->
    </div>
	
	<?php get_footer('consultation'); ?>