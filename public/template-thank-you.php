<?php
    /**
    * Template Name: Thank You Page
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
                    <h1><?php the_field('headline'); ?></h1>
                    <p><?php the_field('subheading'); ?></p>
                </div>
            </div>
            <div class="section tiny white micro-padding-top">
                <h3 class="text-center capitalize">Something Else You Might Enjoy</h3>
                <?php include(locate_template('three-page-previews.php', false, false)); ?>
            </div>
            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
