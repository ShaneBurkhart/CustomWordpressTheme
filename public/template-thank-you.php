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
            <div class="section no-padding white image-with-glow" style="background-image: url(<?php the_field('hero_image'); ?>);">
                <div class="content">
                    <h1><?php the_field('headline'); ?></h1>
                    <p><?php the_field('subheading'); ?></p>
                </div>
            </div>
            <div class="section tiny white micro-padding-top">
                <h3 class="text-center capitalize">Something Else You Might Enjoy</h3>
                <?php
                    $pages = get_posts(array(
                        'category_name' => 'uncategorized',
                        'posts_per_page' => 3
                    ));

                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>
            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
