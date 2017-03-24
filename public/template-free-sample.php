<?php
    /**
    * Template Name: Free Sample Page
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
            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
