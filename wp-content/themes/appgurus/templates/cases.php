<?php
/*
Template Name:Case Studies Old
*/
get_header();
$author_id = $post->post_author;

?>


<div class="blog-list-main">
  <!-- ====== /Banner Section BOC ====== -->
  <section id="banner-section">
    <div class="banner-sec blog-banner-sec animatedParent animateOnce">
      <div class="container">
        <div class="banner-sec-content delay-250 animated fadeInUpShort">
          <h1 class="orange-color-text mb-0">
            <?php echo get_the_title(); ?>
          </h1>
          <!-- <h4 class="sub-text font-we-sb mb-0">We have a genuine and invested interest in helping our clients succeed.</h4> -->
        </div>
      </div>
    </div>
  </section>
  <!-- ====== /Banner Section EOC ====== -->

  <div class="blog-sec-main">
    <div class="container">

      <div class="row" id="ajax-cases">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 blog-col">
          <div class="blog-letest-post-main">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 blog-col-v2 animatedParent animateOnce">
                <div class="blog-box animated fadeInUpShort">
                  <div class="blog-img">
                    <?php echo get_the_post_thumbnail($wp_query->ID, 'full'); ?>
                    <div class="blog-img-content">
                      <a class="blog-img-link" href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail($wp_query->ID, 'full'); ?>" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="blog-bottom-sec">
                    <div class="author-name">
                      <span>
                        <?php echo get_the_author_meta('display_name', $author_id); ?>
                      </span>
                    </div>
                    <div class="blog-title">
                      <a href="<?php the_permalink(); ?>" class="blog-title-text">
                        <h3>Clutch Names App Gurus as one of the Most Reviewed Web Developers in Brisbane</h3>
                      </a>
                    </div>
                    <div class="author-sec">
                      <div class="author">
                        <?php echo '<span class="pub-date ml-0">' . get_the_date('j F, Y') . '</span>'; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Case Studies Content  -->
<div id="ajax-cases" class="row">
        <?php
        $postperpage=6;
        $args = array('post_type' => 'case_study', 'posts_per_page' =>$postperpage,'status' => 'publish',
          'order' => 'ASC');
        $loop = new WP_Query($args);
        if(have_posts()):
        while ($loop->have_posts()):
          $loop->the_post(); ?>
           <?php if ($wp_query->current_post == 0): ?>
            <?php else: ?>
          <div class="col-lg-4 col-md-6 col-sm-12 blog-col blog-col-v2 animatedParent animateOnce">
            <div class="blog-box animated fadeInUpShort">
              <div class="blog-img">
                <img src="<?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>" alt="">
                <div class="blog-img-content">
                  <a class="blog-img-link" href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                  </a>
                </div>
              </div>
              <div class="blog-bottom-sec">
                <div class="author-name">
                  <span>
                    <?php echo get_the_author_meta('display_name', $author_id); ?>
                  </span>
                </div>
                <div class="blog-title">
                  <a href="<?php the_permalink(); ?>" class="blog-title-text">
                    <?php echo get_the_title(); ?>
                  </a>
                </div>
                <div class="author-sec">
                  <div class="author">
                    <?php echo '<span class="pub-date">' . get_the_date('j F, Y') . '</span>'; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
          
        <?php endwhile; endif;
         wp_reset_postdata();
        ?>
        </div>
      </div>
      <!-- Case Studies End -->

      <input type="hidden" id="numberofcase" value="<?php echo $postperpage; ?>">
    </div>

    <div class="load-more-main" id="more_cases">
      <div class="load-more-btn">
        <span class="btn 1">More cases</span>

      </div>
    </div>
    <div id="loader" style="display:none;">
      <div class="load-more-btn">
       <img style="width:40px;" src="http://localhost/wp/appguruss/wp-content/uploads/2024/01/ZKZx.gif" alt="">
      </div>
    </div>
  </div>
</div>

</div>


<?php

get_footer();

