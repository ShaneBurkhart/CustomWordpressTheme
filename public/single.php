<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white image">
                <img src="<?php the_field('image') ?>">
                <h2 class="text-center"><?php the_field('blog_preview_heading'); ?></h2>
            </div>
            <div class="section large white micro-padding-top">
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
