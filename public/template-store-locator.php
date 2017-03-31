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
                        <div id="bh-sl-map-container" class="bh-sl-map-container">
                            <div class="bh-sl-loc-list">
                                <ul class="list"></ul>
                            </div>
                            <div id="bh-sl-map" class="bh-sl-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script>
            $(function() {
                $('#store-locator-map').storeLocator({
                    'noForm': true,
                    'fullMapStart': true,
                    'slideMap': false,
                    'listColor1': '#ffffff',
                    'listColor2': '#ffffff',
                    'defaultLoc': true,
                    'defaultLat': 43.9695148,
                    'defaultLng': -99.9018131,
                    'distanceAlert': -1,
                    'dataType': 'json',
                    'dataLocation': '/wp-content/themes/custom/assets/js/data/store.json'
                });
            });
        </script>

        <?php get_footer(); ?>

    </body>
</html>
