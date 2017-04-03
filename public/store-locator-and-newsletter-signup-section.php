<style>
    .section.large.white.image-with-two-popups.guy:after {
        background-image: url(<?php the_field('footer_guy'); ?>);
    }
    .section.large.white.image-with-two-popups.guy:before {
        background-image: url(<?php the_field('store_locator_and_q_club_background_image', get_option('page_on_front')); ?>);
    }
</style>
<div class="section large white image-with-two-popups guy">
    <div class="fluid-container">
        <div class="half">
            <div class="popup text-left">
                <h4>Find me some Twist'd Q.</h4>
                <form id="find-store-by-zipcode" action="/store-locator" method="GET">
                    <input name="loc" type="text" placeholder="ZIP Code">
                    <button></button>
                </form>
            </div>
        </div>
        <div class="half text-right">
            <div class="popup">
                <h4><?php the_field('q_club_signup_headline', get_option('page_on_front')); ?></h4>
                <?php gravity_form(3, false, false, false, '', false); ?>
            </div>
        </div>
    </div>
</div>
