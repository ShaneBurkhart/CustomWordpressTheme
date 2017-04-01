<div class="section white image-with-popup" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/banners/free-sample-subtle-background.png);">
    <div class="fluid-container">
        <div class="full text-center">
            <div class="popup">
                <h4><?php the_field('q_club_signup_headline', get_option('page_on_front')); ?></h4>
                <?php gravity_form(3, false, false, false, '', false); ?>
            </div>
        </div>
    </div>
</div>
