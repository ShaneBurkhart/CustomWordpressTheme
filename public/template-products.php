<?php
    /**
    * Template Name: Products Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section tiny">
                <div class="fluid-container">
                    <div class="third">
                        <h2 class="">The Lineup</h2>
                    </div>
                    <div class="">
                        <h2 class="text-center">The Lineup</h2>
                    </div>
                </div>
            </div>
            <div class="section micro torn-paper">
                <div class="full-container">
                    <div class="full">
                        <div class="products-previews-wrapper">
                            <div class="product">
                                <img class="thumbnail">
                                <div class="full-container promo-overlay">
                                    <div class="graphic">
                                        <img>
                                    </div>
                                    <div class="info">
                                        <h3>American Royal Beef Rub</h3>
                                        <p>Something about the best american royal beef rub around.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <img class="thumbnail">
                                <div class="full-container promo-overlay">
                                    <div class="graphic">
                                        <img>
                                    </div>
                                    <div class="info">
                                        <h3>Russian Royal Beef Rub</h3>
                                        <p>Something about the best american royal beef rub around.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <img class="thumbnail">
                                <div class="full-container promo-overlay">
                                    <div class="graphic">
                                        <img>
                                    </div>
                                    <div class="info">
                                        <h3>African Royal Beef Rub</h3>
                                        <p>Something about the best american royal beef rub around.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section white">
                <div class="fluid-container">
                    <div class="full">
                        <h2 class="text-center">Recipes Worth Rubbin'</h2>
                    </div>
                </div>
                <?php include(locate_template('three-page-previews.php', false, false)); ?>
            </div>
            <div class="section orange">
                <div class="fluid-container">
                    <div class="full text-center">
                        <h2 class="capitalize">The Smokin' Hottest Club Around.</h2>
                    </div>
                </div>
                <div class="container">
                    <div class="full text-center">
                        <p>Sign up for the Q club to get pro-style tips, tricks and the tastiest recipes on this side of the Mason Dixon. Get ready to walk, talk, grill and smoke like a pitmaster.</p>
                        <a href="" class="button capitalize">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </body>
</html>

