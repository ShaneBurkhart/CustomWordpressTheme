<div class="section large white image-with-popup" style="background-image: url(<?php the_field('q_club_signup_section_background_image', get_option('page_on_front')); ?>);">
    <div class="fluid-container">
        <div class="full text-center">
            <div class="popup">
                <h4><?php the_field('q_club_signup_headline', get_option('page_on_front')); ?></h4>
                <?php gravity_form(3, false, false, false, '', false); ?>
            </div>
        </div>
    </div>
</div>
