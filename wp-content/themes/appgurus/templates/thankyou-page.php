	<?php
	/*
	Template Name: Thankyou Template
	*/
	get_header(); ?>
	<style type="text/css">
    .show_hide {display:none; }

    .thank-you-sec{background:#FFF8F0;}
/*      .thank-you-sec .thank-you-wp{min-height:calc(100vh - 300px);padding:180px 0px;position:relative;}*/
    .thank-you-sec .thank-you-wp{min-height: 100vh;padding:100px 0px 150px;position:relative; display: flex; align-items: center; justify-content:center;}
    .thank-you-sec .thank-you-wp .social-media-ty{position:absolute;left:0px;right:0px;bottom:0px;}
    .social-media-ty{text-align:center;}
    .social-media-ty p{font-size:20px;color:#000;margin-bottom:5px;line-height:25px;font-weight: 500;}

    .social-media-ty ul.social-link{display:flex;align-items:center;justify-content:center;}
    .social-media-ty ul.social-link li{display:inline-block;margin:15px;}
    .thank-you-contant{text-align:center;}
    .thank-you-text h2.orange_text{font-size:48px;line-height:58px;color:#F05D27!important;margin:30px 0px 10px;}
    .thank-you-icon img{max-width:75px;}

/*      .thank-you-text p{font-size:24px;margin-bottom:0px;color:#000;}*/
    .thank-you-text p {font-size: 18px; margin-bottom: 0px; color: #000; line-height: 26px; font-weight: 400; }

     @media (max-width: 1024.98px) {
      .thank-you-sec .thank-you-wp .social-media-ty {bottom: 60px; } 
      .social-media-ty ul.social-link li {margin-top: 10px; }

    }

    @media (max-width: 767.98px) {

    .thank-you-icon img{max-width:55px;}
    .thank-you-text h2.orange_text{font-size:38px;line-height:50px;margin:25px 0px 5px;}
    .thank-you-text p{font-size:18px;}
    .social-media-ty p{font-size:18px;}

    }

  </style>
	
  <section class="thank-you-sec">
      <div class="container">
        <div class="thank-you-wp">
          <div class="thank-you-contant">
            <div class="thank-you-icon">
              <img src="<?php bloginfo('template_directory'); ?>/images/send.svg" alt="#">
            </div>
            <div class="thank-you-text">
              <h2 class="orange_text">Thank You!</h2>
              <p>We appreciate your enquiry. <br> We'll be in touch with you soon.</p>
            </div>
          </div>

          <div class="social-media-ty">
            <p>Connect with us</p>
            <ul class="social-link">
                <li>
                  <a href="https://www.linkedin.com/company/appgurus" target="_blank" class="social-icon">
                    <img class="icon-1" src="<?php bloginfo('template_directory'); ?>/images/linkedin-icon.png" alt="#">
                  </a> 
                </li>
                <li>
                  <a href="https://www.facebook.com/appgurus" target="_blank" class="social-icon">
                    <img class="icon-1" src="<?php bloginfo('template_directory'); ?>/images/facebook-icon.png" alt="#">
                  </a> 
                </li>
                <li>
                  <a href="https://www.instagram.com/appgurus" target="_blank" class="social-icon">
                    <img class="icon-1" src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="#">
                  </a> 
                </li>
              </ul>
          </div>
        </div>
      </div>
    </section>  
	
	<?php get_footer(); ?>