<?php
    /**
    * Template Name: Coupon Download Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section micro white">
                <div class="fluid-container">
                    <div class="half">
                        <img class="bg" src="<?php the_field('product_image') ?>">
                    </div>
                    <div class="half">
                        <div class="jumbotron">
                            <h1 class="capitalize"><?php the_field('headline') ?></h1>
                            <p style="width: 80%;"><?php the_field('page_snippet') ?></p>
                            <a class="button">Print Coupon</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
