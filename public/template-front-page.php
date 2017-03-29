<?php
    /**
    * Template Name: Front Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section parallax torn-paper">
                <div
                    class="float"
                    style="background-image: url(<?php the_field('parallax_bg_image'); ?>)"
                ></div>
                <div class="content">
                    <div class="fluid-container">
                        <div class="full">
                            <div class="promo pull-right">
                                <h3><?php the_field('hero_promo_headline'); ?></h3>
                                <p><?php the_field('hero_promo_subheading'); ?></p>
                                <a href="<?php the_field('hero_promo_button_destination'); ?>" class="button"><?php the_field('hero_promo_button_text'); ?></a>
                            </div>
                            <div class="jumbotron">
                                <h1><?php the_field('main_headline'); ?></h1>
                                <p><?php the_field('main_subheading'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section white">
                <div class="fluid-container">
                    <div class="full">
                        <h2 class="text-center"><?php the_field('products_section_headline'); ?></h2>
                    </div>
                </div>
                <div class="fluid-container">
                    <?php
                        $products_page = get_pages(array(
                            'meta_key' => '_wp_page_template',
                            'meta_value' => 'template-products.php',
                        ))[0];

                        $pages = get_children(array('post_parent' => $products_page->ID));

                        usort($pages, function ($a, $b) {
                            return strcmp($b->product_group_position, $a->product_group_position);
                        });

                        foreach($pages as $page) {
                    ?>
                        <div class="third">
                            <a class="product-group-thumbnail" href="<?php echo get_permalink($page->ID); ?>">
                                <img src="<?php the_field('homepage_product_group_image', $page->ID); ?>">
                                <h3 class="text-center"><?php echo $page->post_title; ?></h3>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="section no-padding white image-with-text">
                <img src="<?php the_field('blog_preview_banner_image') ?>">
                <h2 class="text-center"><?php the_field('blog_preview_heading'); ?></h2>
            </div>
            <div class="section large white micro-padding-top">
                <?php
                    $pages = get_posts(array(
                        'category_name' => 'uncategorized',
                        'posts_per_page' => 3
                    ));
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>
            <div class="section orange">
                <div class="fluid-container">
                    <div class="full text-center">
                        <h2 class="capitalize"><?php the_field('qclub_section_headline'); ?></h2>
                    </div>
                </div>
                <div class="container">
                    <div class="full text-center">
                        <p><?php the_field('qclub_section_description'); ?></p>
                        <a href="/q-club" class="button capitalize"><?php the_field('qclub_section_button_text'); ?></a>
                    </div>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
