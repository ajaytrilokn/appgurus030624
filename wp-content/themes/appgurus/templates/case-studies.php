<?php
/*
Template Name:Case Studies
*/
get_header();
// $author_id = $post->post_author;

?>
<!-- Content Start -->
<section class="banner-sec banner-sec-v2" >
				<div class="banner-wrap  ">
					<div class="container">	
						<div class="banner-text-wrap ">
							<div class="banner-text banner-text mb-3">
								<div class="banner-heading-wrap">
									<h1 class="banner-heading"><?php echo the_field('banner_title');?></h1>
								</div>
							</div>
							<div class="row flex-md-row-reverse">
								<div class="col-lg-5 col-md-6 col-sm-12 col-12 ">
									<div class="banner-text-v2">
										<h4 class="font-we-rg "><?php echo the_field('banner_text');?></h4>
									</div>
								</div>
								<div class="col-lg-7 col-md-6 col-sm-12 col-12 ">
									<div class="banner-count-main">
		                                <div class="banner-count-box">
										<?php echo the_field('banner_count_text');?>
										</div>
		                            </div>	
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			</section>
			
<!-- <section class="portfolio-p-sec">
    <div class="portfolio-main">
        <div class="container">
            <div class="portfolio-filters-main mb-3">
                <div class="button-group filter-button-group" id="filters">
                    <button class="btn btn-primary is-checked" data-filter="*">All</button>
                    <button class="btn btn-primary" data-filter=".e-commerce">E-Commerce</button>
                    <button class="btn btn-primary" data-filter=".website-design">Website Design</button>
                    <button class="btn btn-primary" data-filter=".application-design">Application Design</button>
                </div>
            </div>
            <div class="portfolio-p-row-main">
                <div class="portfolio-p-row grid">
                    <div class="grid-sizer"></div>

                    <?php if (have_rows('portfolio_projects')): ?>
                        <?php while (have_rows('portfolio_projects')): the_row(); 
                            $image = get_sub_field('project_image');
                            $name = get_sub_field('project_name');
                            $url = get_sub_field('project_url');
                            $categories = get_sub_field('project_categories');
                            $case_studies = get_sub_field('project_types');
                            
                            // Generate category classes
                      
                           
                        ?>
                            <div class="grid-item <?php echo $categories;?>">
                                <div class="portfolio-p-col">
                                    <a href="<?php echo esc_url($url); ?>" class="portfolio_img_link">
                                        <img class="portfolio_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>">
                                    </a>
                                    <div class="portfolio-caption">
                                        <div class="project-name"><h4><?php echo esc_html($name); ?></h4></div>
                                        <div class="cs--type-wp">
                                            <ul class="case--study-type-inner">
                                                <?php if ($case_studies): ?>
                                                    <?php while (have_rows('project_types')): the_row(); ?>
                                                        <li><a class="case--study-type" href="#"><?php the_sub_field('project_type'); ?></a></li>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
       </section> -->
<?php
// Fetch all categories for the portfolio post type
$categories = get_categories(array(
    'taxonomy' => 'category',
    'post_type' => 'case_study',
    'hide_empty' => false,
));
?>

<section class="portfolio-p-sec">
    <div class="portfolio-main">
        <div class="container">
            <div class="portfolio-filters-main mb-3">
                <div class="button-group filter-button-group" id="filters">
                    <button class="btn btn-primary" data-filter="*">All</button>
                    <?php foreach ($categories as $category) : ?>
                        <button class="btn btn-primary" data-filter=".<?php echo $category->slug; ?>"><?php echo $category->name; ?></button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="portfolio-p-row-main">
                <div class="portfolio-p-row grid">
                    <div class="grid-sizer"></div>
                    <?php
                    $args = array(
                        'post_type' => 'case_study',
                        'posts_per_page' => -1,
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : 
                        while ($query->have_posts()) : $query->the_post();
                            $categories = get_the_category();
                            $category_classes = '';
                            foreach ($categories as $category) {
                                $category_classes .= ' ' . $category->slug;
                            }
                    ?>
                        <div class="grid-item<?php echo $category_classes; ?>">
                            <div class="portfolio-p-col">
                                <a href="<?php the_permalink(); ?>" class="portfolio_img_link">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full', array('class' => 'portfolio_img')); ?>
                                    <?php endif; ?>
                                </a>
                                <div class="portfolio-caption">
                                    <div class="project-name"><h4><?php the_title(); ?></h4></div>
                                    <div class="cs--type-wp">
                                        <ul class="case--study-type-inner">
                                            <?php
                                            // Example of additional metadata or taxonomies
                                            $tags = get_the_tags();
                                            if ($tags) :
                                                foreach ($tags as $tag) : ?>
                                                    <li><a class="case--study-type" href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></li>
                                                <?php endforeach;
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

			<section class="contact_us_sec">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<div class="sales-manager-details">
								<div class="sm-details-top">
									<svg xmlns="http://www.w3.org/2000/svg" width="32.269" height="24.978" viewBox="0 0 32.269 24.978"> <path id="Icon_awesome-quote-right" data-name="Icon awesome-quote-right" d="M29.244,2.25H21.176a2.868,2.868,0,0,0-3.025,2.676v7.136a2.868,2.868,0,0,0,3.025,2.676h5.042v3.568a3.826,3.826,0,0,1-4.034,3.568h-.5a1.43,1.43,0,0,0-1.513,1.338v2.676a1.43,1.43,0,0,0,1.513,1.338h.5c5.571,0,10.084-3.992,10.084-8.921V4.926A2.868,2.868,0,0,0,29.244,2.25Zm-18.151,0H3.025A2.868,2.868,0,0,0,0,4.926v7.136a2.868,2.868,0,0,0,3.025,2.676H8.067v3.568a3.826,3.826,0,0,1-4.034,3.568h-.5a1.43,1.43,0,0,0-1.513,1.338v2.676a1.43,1.43,0,0,0,1.513,1.338h.5c5.571,0,10.084-3.992,10.084-8.921V4.926A2.868,2.868,0,0,0,11.092,2.25Z" transform="translate(0 -2.25)" fill="#fff"/> </svg>
									<p class="white_text font-we-md">With over 12+ years of experience, we specialize in customized IT solutions for medium-sized businesses and corporations. Our priority is aligning with your goals, and we take pride in our work and clients.</p>
								</div>
								<div class="sm-details-bottom">
									<div class="sm-details-info">
										<span class="sm-name white_text">SAM Selimovic</span>
										<span class="sm-position theme-color-text">Sales Manager</span>
									</div>
									<div class="sm-details-img">
										<img src="<?php echo get_template_directory_uri();?>/homeassets/images/manager-img.png" alt="#">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12 contact_us_form">
							<div class="contact_us_form-title">
								<h2 class="white_text">Empower Your Growth: Partner with Us Today!</h2>
							</div>
							<form>
								<div class="form-group-main">
									<div class="row mb-4">
										<div class="col-md-6 col-sm-12 col-12">
											<div class="form-group">
			                                    <input type="text" placeholder="First Name" class="form-control">
			                                </div>
			                            </div>  
			                            <div class="col-md-6 col-sm-12 col-12">
											<div class="form-group">
			                                    <input type="text" placeholder="Last Name" class="form-control">
			                                </div>
			                            </div> 
										<div class="col-md-6 col-sm-12 col-12">		                                
			                                <div class="form-group">
			                                    <input type="email" placeholder="Email" class="form-control">
			                                </div>
			                            </div>
			                            <div class="col-md-6 col-sm-12 col-12">
			                                <div class="form-group">
			                                    <input type="tel" placeholder="Phone" class="form-control">
			                                </div>
			                            </div>
			                            <div class="col-md-12 col-sm-12 col-12">
			                                <div class="form-group">
			                                    <textarea class="form-control" placeholder="Discuss about your project…"></textarea>
			                                </div>		
			                            </div>
									</div>
									<div class="row flex-row-reverse">
										<div class="col-md-5 col-sm-12 col-12">
											<div class="form-send-btn text-md-end">
			                                    <button class="btn">SEND MESSAGE</button>
			                                </div>
			                            </div> 
										<div class="col-md-7 col-sm-12 col-12">
											<p class="white_text mb-0">We will add your info to our CRM for contacting you regarding your request. For more info please consult our privacy policy.</p>
			                            </div>  
			                            
									</div>
	                            </div>
							</form>
						</div>
						
					</div>
				</div>
			</section>


			<!-- Content End -->
			<script type="text/javascript">
 jQuery(document).ready(function($) {
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        percentPosition: true,
        masonry: {
            columnWidth: '.grid-sizer'
        }
    });

    $('.filter-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
        $('.filter-button-group button').removeClass('active');
        $(this).addClass('active');
    });
});


</script>
<?php

get_footer();

?>
