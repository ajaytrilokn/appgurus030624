	<?php
    /*
    Template Name: FAQ Template
    */
    get_header(); ?>
    
    
    
    <section id="banner-section">
    <div class="banner-sec animatedParent animateOnce">
    <div class="container">
    <div class="banner-sec-content">
    <h1 class="orange-color-text"><?php echo get_field('faq_header'); ?></h1>
    <h4 class="font-we-rg"><?php echo get_field('faq_sub_text'); ?></h4>
    </div>
    </div>
    </div>
    </section>
 
    
    <section id="faq">
    <div class="faq-section padding-tb black-bg">
    <div class="container">
    
    <div class="accordian-wrap ">
    <?php if( have_rows('faq_sections') ) : while ( have_rows('faq_sections') ) : the_row(); ?>
    
    <div class="accordian-outer animatedParent animateOnce">
    <div class="accordian delay-250 animated fadeInUpShort">
    <div class="accordian-title ">
    <h5 class="font-we-bl"><?php echo the_sub_field('questions') ?></h5>
    </div>
    <div class="accordian-text">
    <p><?php echo the_sub_field('answers') ?></p>
    </div>
    </div>
    </div>
    
	<?php  endwhile; endif; ?>
    </div>
    
    </div>
    </div>
    </section>
   
    
    
    
    
    <?php get_footer(); ?>