<?php
get_header();
$author_id=$post->post_author;
?>
<div class="blog-details-page">
    <section id="banner-section">
        <div class="banner-sec blog-banner-sec details-banner-main animatedParent animateOnce">
          <div class="container">
            <div class="banner-sec-content animated fadeInUpShort">
              <div class="author-sec animated fadeInUpShort">
                <div class="author">
                  <span>App Gurus</span>
                </div>
                <span class="dots"></span>
                <div class="author">
                  <?php echo '<span class="pub-date">'.get_the_date( 'j F, Y').'</span>';?>
                </div>
              </div>
              <h1 class="mb-0"><?php echo get_the_title();?></h1>
              <!-- <p class="sub-text mt-4">Are you planning to develop a mobile app for your business in Australia? If yes, one of the most critical aspects you need to consider is the cost of app development. The cost of app development in Australia can vary greatly depending on several factors, and it’s crucial to understand them to plan your budget effectively. This blog will discuss the factors influencing app development costs in Australia in 2023. </p> -->
            </div>
          </div>
       </div>
    </section>
</div>

<?php get_footer(); ?>
