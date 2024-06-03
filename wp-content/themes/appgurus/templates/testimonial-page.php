<?php
	/*
	Template Name: Testimonial
	*/
	get_header(); ?>







<!--Testimonial  Section BOC -->
    <section id="testimonial">
      
      <div class="testimonial-sec padding-tb ">
        
        <div class="container">
          
          <div class="section-title animatedParent animateOnce">
            <h2 class="delay-250 animated fadeInUpShort">What Our Client’s Say</h2>
          </div>

          <div class="section-back-title animatedParent animateOnce">
            <h2 class="delay-250 animated rotateInUpLeft">Testimonial</h2>
          </div>


          <div class="testimonial-main animatedParent animateOnce">

            <div class="page-numbers">
              <span class="pagingInfo"></span>
            </div>

            <div class="testimonial-slider">

            	<?php if( have_rows('all_testimonial') ) : while ( have_rows('all_testimonial') ) : the_row(); ?>

              <div class="testimonial-wrap animatedParent animateOnce">
                <div class="testimonial-inner">
                  <div class="testimonial-img animated fadeInUpShort">
                    <div class="person-img">
                      <img src="<?php echo the_sub_field('testimonial_image') ?>">
                    </div>
                  </div>
                  <div class="testimonial-content">
                    <h5 class="animated fadeInUpShort"><?php echo the_sub_field('testimonial_header') ?></h5>
                    <div class="testimonial-text animated fadeInUpShort">
                      <p><?php echo the_sub_field('testimonial_description') ?></p>
                    </div>
                    <h5 class="animated fadeInUpShort"><?php echo the_sub_field('testimonial_name') ?></h5>
                    <h6 class="person-work animated fadeInUpShort"><?php echo the_sub_field('testimonial_working') ?></h6>
                  </div>
                </div>
              </div>
<?php  endwhile; endif; ?>
              

            </div>
          </div>

        </div>

      </div>
    </section>      
    <!--Testimonial  Section EOC -->














	<?php get_footer(); ?>