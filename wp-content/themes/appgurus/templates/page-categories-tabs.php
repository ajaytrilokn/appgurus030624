<?php
/*
Template Name:Categories Tab
*/
get_header();
?>

<!-- <style>
    .tab {
        display: inline-block;
        padding: 10px;
        margin-right: 5px;
        background-color: #f1f1f1;
        cursor: pointer;
    }
    .tab-content {
        display: none;
        margin-top: 10px;
    }
    .active-tab {
        background-color: #ccc;
    }
    .active-content {
        display: block;
    }
</style> -->

<div id="tabs" class="d-flex justify-content-center align-items-center">
    <?php
    $categories = get_categories();
    foreach ($categories as $category): ?>
        <div class="tab" data-category-id="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></div>
    <?php endforeach; ?>
</div>

<div id="tab-contents">
    <?php
    foreach ($categories as $category): ?>
        <div class="tab-content" id="content-<?php echo $category->term_id; ?>">
            <?php
            $query = new WP_Query([
                'post_type'=>'case_study',
                'cat' => $category->term_id,
                'posts_per_page' => -1,
            ]);
            if ($query->have_posts()):
                while ($query->have_posts()): $query->the_post(); ?>
                    <div class="post container text-center">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    <?php endforeach; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.tab');
        const contents = document.querySelectorAll('.tab-content');

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // Remove active classes
                tabs.forEach(t => t.classList.remove('active-tab'));
                contents.forEach(c => c.classList.remove('active-content'));

                // Add active classes to the clicked tab and corresponding content
                tab.classList.add('active-tab');
                document.getElementById('content-' + tab.getAttribute('data-category-id')).classList.add('active-content');
            });
        });

        // Activate the first tab and content by default
        if (tabs.length > 0) {
            tabs[0].classList.add('active-tab');
            contents[0].classList.add('active-content');
        }
    });
</script>

<?php

get_footer();

?>