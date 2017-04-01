<?php
    /**
    * Template Name: Store Locator Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white store-locator-header">
                <div class="full-container">
                    <div class="two-thirds light-gray" style="padding: 60px 20px;">
                        <h1><?php the_field('heading'); ?></h1>
                        <p><?php the_field('description'); ?></p>
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
                        <?php echo do_shortcode("[wpsl]"); ?>
                    </div>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
