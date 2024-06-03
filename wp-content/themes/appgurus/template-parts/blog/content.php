<?php
$author_id = $post->post_author;
?>
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