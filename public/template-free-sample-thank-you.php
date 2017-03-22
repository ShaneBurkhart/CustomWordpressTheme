<?php
    /**
    * Template Name: Free Sample Thank You Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white image-with-glow">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/banners/free-sample-ty-splatter.png">
                <div class="content">
                    <h1>Delicious is on it's way!</h1>
                    <p>Some promo text confirming their free samples are on their way and what to do if they don't get them.</p>
                </div>
            </div>
            <div class="section tiny white micro-padding-top">
                <h3 class="text-center capitalize">Something Else You Might Enjoy</h3>
                <?php include(locate_template('three-page-previews.php', false, false)); ?>
            </div>
            <div class="section no-padding white image-with-popup">
                <img class="bg" src="<?php echo get_template_directory_uri() ?>/assets/images/banners/free-sample-subtle-background.png">
                <div class="popup">
                    <h4>Get pro-style tips, tricks and recipes straight to your inbox.</h4>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
