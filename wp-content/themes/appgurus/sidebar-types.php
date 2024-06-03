<?php $category_query = new WP_Query('page_id=106'); ?>
<?php while ($category_query->have_posts()) : $category_query->the_post(); ?>
<section id="type-of-projects">
<div class="type-of-projects-sec padding-tb ">
<div class="projects-sec-inner">
<div class="projects-title animatedParent animateOnce">
<h2 class=" animated fadeInUpShort">Type of <br> Clients</h2>
</div>
<div class="projects-details animatedParent animateOnce">
<?php if( have_rows('types_of_clients') ) : while ( have_rows('types_of_clients') ) : the_row(); ?>
<div class="project-box delay-250 animated fadeInRight">
<div class="project-img">
<img src="<?php echo the_sub_field('featured_image') ?>" alt="#">
</div>
<div class="project-name">
<h6 class=" animated fadeInUpShort"><?php echo the_sub_field('business_type') ?></h6>
</div>
</div>
<?php  endwhile; endif; ?>
</div>
</div>
</div>
</section>
<?php endwhile; ?>