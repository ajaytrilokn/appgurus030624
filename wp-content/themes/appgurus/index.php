<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
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
          <h1 class="orange-color-text mb-0">Blog</h1>
          <!-- <h4 class="sub-text font-we-sb mb-0">We have a genuine and invested interest in helping our clients succeed.</h4> -->
        </div>
      </div>
    </div>
  </section>
  <!-- ====== /Banner Section EOC ====== -->

  <div class="blog-sec-main">
    <div class="container">

      <div class="row" id="ajax-posts">

        <?php if (have_posts()):
          while (have_posts()):
            the_post(); ?>
            <?php if ($wp_query->current_post == 0): ?>
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 blog-col">
                <div class="blog-letest-post-main">
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 blog-col-v2 animatedParent animateOnce">
                      <div class="blog-box animated fadeInUpShort">
                        <div class="blog-img">
                          <?php echo get_the_post_thumbnail($wp_query->ID, 'full'); ?>
                          <div class="blog-img-content">
                            <a class="blog-img-link" href="<?php the_permalink(); ?>">
                              <?php echo get_the_post_thumbnail($wp_query->ID, 'full'); ?>
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
                              <?php echo '<span class="pub-date ml-0">' . get_the_date('j F, Y') . '</span>'; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php else: ?>
              <?php get_template_part('template-parts/blog/content', get_post_type()); ?>
            <?php endif; ?>

          <?php endwhile; endif; ?>
        <input type="hidden" id="numberofpage" value="<?php echo get_option('posts_per_page'); ?>">
      </div>

      <div class="load-more-main" id="more_posts">
        <div class="load-more-btn">
          <span class="btn 1">Load More</span>
        </div>
      </div>

    </div>
  </div>

</div>

<?php
get_footer();
