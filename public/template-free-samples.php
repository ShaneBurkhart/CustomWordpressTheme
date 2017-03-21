<?php
    /**
    * Template Name: Free Samples Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section white">
                <div class="full-container">
                    <div class="half">
                        <img class="bg" src="<?php the_field('product_image') ?>">
                    </div>
                    <div class="half">
                        <h1><?php the_field('headline') ?></h1>
                        <p><?php the_field('page_snippet') ?></p>
                    </div>
                </div>
            </div>
            <div class="section no-padding white bg-image">
                <div class="full-container">
                    <div class="full">
                        <img class="bg" src="<?php echo get_template_directory_uri() ?>/assets/images/banners/free-sample-subtle-background.png">
                    </div>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
