	<?php
	/*
	Template Name: Portfolio Template
	*/
	get_header(); ?>
	
	
	
	<section id="banner-section">
	<div class="banner-sec animatedParent animateOnce" >
	<div class="container">
	<div class="banner-sec-content">
     <?php $category_query = new WP_Query('page_id=232'); ?>
	<?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
	<h1 class="orange-color-text 11"><?php  the_title(); ?></h1>
	<?php the_content(); ?>
    <?php endwhile; ?>
	</div>
	</div>         
	</div>
	</section>
	
	<section id="portfolio">
	<div class="portfolio-sec">
    <?php 
$args = array( 'post_type' => 'portfolios', 'posts_per_page' => 50,'order'=>'desc' );
$the_query = new WP_Query( $args ); 
?>


<?php 
$counter = 0;
if ($the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post(); ?>





	<div class="portfolio-sec-inner ">
	
	<div class="portfolio-img-wrap animatedParent animateOnce">


        <?php if ($counter % 2 === 0) :?>

	<div class="portfolio-img delay-250 animated fadeInLeft">
    <?php  the_post_thumbnail('', array('class' => 'port-img', 'href' =>get_permalink($thumbnail->ID)));?>
	</div> 
                      <?php else: ?>

      <div class="portfolio-img delay-250 animated fadeInRight">
    <?php  the_post_thumbnail('', array('class' => 'port-img', 'href' =>get_permalink($thumbnail->ID)));?>
	</div> 
  <?php endif; ?>





	</div>
	
	<div class="portfolio-text-wrap animatedParent animateOnce">
	<div class="portfolio-text delay-250 animated fadeInUp">
	<!-- <h2><?php the_title(); ?></h2> -->

<a href="<?php echo get_field('project_url'); ?>" target="_blank" rel="noopener noreferrer" class="site-name"><h2><?php the_title(); ?></h2></a>

	<!-- <h2><a href="<?php echo get_field('project_url'); ?>" target="_blank" rel="noopener noreferrer" class="site-name"><?php the_title(); ?></a></h2>
 -->

	<div class="portfolio-text-inner">
	<h5><?php the_content(); ?></h5>
	</div>

	<div class="app-btn">
	<!-- <a href="<?php echo get_field('apple_store_link'); ?>"> --><img src="https://www.appgurus.com.au/wp-content/uploads/2021/10/App-store.png" alt="App-store" class="app-store-btn"><!-- </a> -->





<?php 

	if(get_the_id() !=537 && get_the_id()!=531){?>

		<!-- <a href="<?php echo get_field('google_play_store_link'); ?>"> --><img src="https://www.appgurus.com.au/wp-content/uploads/2021/10/Google-play.png" alt="Google play" class="google-play-btn"><!-- </a> -->
	<?php }

?>

	</div>
	
	</div>
	</div>
	
	</div>	
	
    <?php 
  $counter++; 
  endwhile; 
  endif; 
?>
	</div>
	</section>
	
	<?php get_footer(); ?>