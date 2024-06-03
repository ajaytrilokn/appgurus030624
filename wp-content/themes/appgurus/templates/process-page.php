	<?php
	/*
	Template Name: Process Template
	*/
	get_header(); ?>
	
	 <?php $category_query = new WP_Query('page_id=186'); ?>
	<?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
    
	<section id="banner-section">
	<div class="banner-sec animatedParent animateOnce" >
	<div class="container">
	<div class="banner-sec-content max-width-100 delay-250 animated fadeInUpShort">
	<h1 class="orange-color-text"><?php the_title(); ?></h1>
	<?php the_content();  ?>
	</div>
	</div>
	</div>
	</section>
	<!-- ====== /Banner Section EOC ====== -->
	
	<!-- Process -->
	<section id="process">
	
	<div class="process-sec padding-tb">
	<div class="container ">
	<div class="process-wrap">
     <?php if( have_rows('process_timeline') ) : while ( have_rows('process_timeline') ) : the_row(); ?>
	<div class="process-sec-rows animatedParent animateOnce">
	<div class="process-left fill delay-250 animated fadeInUpShort">
	<div class="process-inner-left">
	<h2><?php echo the_sub_field('counter') ?></h2>
	<div class="circle-and-line">
	<span class="circle"></span>
	<span class="line"></span>
	</div>
	</div>
	</div>
	<div class="process-right delay-250 animated fadeInRight">
	<div class="process-right-inner">
	<h3><?php echo the_sub_field('process_heading') ?></h3>
	<div class="process-right-text">
	<h5><?php echo the_sub_field('process_description') ?></h5>
	</div>
	</div>
	</div>
	</div>
    <?php  endwhile; endif; ?>
	</div>
	</div>
	</div>
	
	</section>
	<?php endwhile; ?>
	<!-- Process END -->
	
	
	<?php get_footer(); ?>