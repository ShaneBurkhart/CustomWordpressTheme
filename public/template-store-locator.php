<?php
    /**
    * Template Name: Store Locator Page
    */
?><!DOCTYPE html>
<html id="no-padding-page" <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white store-locator-header">
                <div class="full-container">
                    <div class="two-thirds light-gray" style="padding: 60px 20px;">
                        <h1><?php the_field('heading'); ?></h1>
                        <p><?php the_field('description'); ?></p>
                        <form id="find-store-by-zipcode" action="/store-locator" method="GET">
                            <input name="loc" type="text" placeholder="Enter zip code" value="<?php echo $_GET['loc']; ?>">
                            <button></button>
                        </form>
                    </div>
                    <div class="third orange text-center" style="padding: 60px 20px;">
                        <h2><?php the_field('promo_heading'); ?></h2>
                        <a class="button" href="<?php the_field('promo_page'); ?>"><?php the_field('promo_button_text'); ?></a>
                    </div>
                </div>
            </div>
            <div class="section no-padding white">
                <div class="full-container">
                    <div id="store-locator-map" class="full">
                        <style>
                            #wpsl-result-list .wpsl-store-location:before {
                                background-image: url(<?php the_field('store_details_icon'); ?>);
                            }
                        </style>
                        <?php echo do_shortcode("[wpsl start_location='".$_GET['loc']."']"); ?>
                    </div>
                </div>
            </div>
        </main>

        <script>
            $('#wpsl-search-input').attr('placeholder', "Enter zip code");
        </script>

        <?php get_footer(); ?>

    </body>
</html>
