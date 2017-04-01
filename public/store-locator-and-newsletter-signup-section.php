<div class="section white image-with-two-popups" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/banners/free-sample-subtle-background.png);">
    <div class="fluid-container">
        <div class="half">
            <div class="popup text-left">
                <h3>Find me some Twist'd Q.</h3>
                <form id="find-store-by-zipcode" action="/store-locator" method="GET">
                    <input name="zipcode" type="text" placeholder="Enter your Zipcode">
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
