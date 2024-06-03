<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$author_id=$post->post_author;
?>

  <!-- ====== /Banner Section BOC ====== --> 

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

    <!-- ====== /Banner Section EOC ====== -->

    <div class="blog-details-img">
      <div class="blog-img animatedParent animateOnce">
       <?php echo get_the_post_thumbnail( get_the_ID(), 'full'); ?>
      </div>
    </div>

    <div class="blog-sec-main ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 blog-col ">
            <div class="blog-details-sec">
              <div class="blog-details-wp">
                <?php echo get_post_field('post_content'); ?>
                
              </div>  
              <div class="related-post-main">
                <div class="related-post-title">
                  <h3>More From App Gurus</h3>
                </div>
                <div class="related-post-wp">
                  <div class="row">
                    <?php
                    // Define our WP Query Parameters
                    $the_query = new WP_Query( 'posts_per_page=3' ); ?>
                      
                    <?php
                    // Start our WP Query
                    while ($the_query -> have_posts()) : $the_query -> the_post();
                    // Display the Post Title with Hyperlink
                    ?>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 blog-col blog-col-v2 animatedParent animateOnce">
                      <div class="blog-box animated fadeInUpShort">
                        <div class="blog-img">
                        <?php echo get_the_post_thumbnail(); ?>
                          <div class="blog-img-content"><a class="blog-img-link" href="<?php the_permalink(); ?>"><?php the_title();?></a></div>
                        </div>
                        <div class="blog-bottom-sec">
                          <div class="author-name">
                              <span><?php echo get_the_author_meta('display_name', $author_id);?></span>
                          </div>
                          <div class="blog-title">
                            <a href="<?php the_permalink(); ?>" class="blog-title-text"><?php the_title();?></a>
                          </div>
                          <div class="author-sec">
                            <div class="author">
                              <?php echo '<span class="pub-date">'.get_the_date( 'j F, Y').'</span>';?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php
                    // Repeat the process and reset once it hits the limit
                    endwhile;
                    wp_reset_postdata();
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>  

<!-- ====== /Banner Section BOC ====== -->    


<?php get_footer(); ?>
