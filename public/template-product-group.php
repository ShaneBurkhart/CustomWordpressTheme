<?php
    /**
    * Template Name: Product Group Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section tiny">
                <div class="fluid-container">
                    <div class="graphic">
                        <img src="<?php the_field('intro_image'); ?>">
                    </div>
                    <div class="description">
                        <h2><?php the_field('page_heading'); ?></h2>
                        <p><?php the_field('page_description'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="section micro torn-paper">
                <div class="full-container">
                    <div class="full">
                        <div class="products-previews-wrapper">
                            <?php
                                $pages = get_children(array(
                                    'post_parent' => get_the_ID(),
                                    'post_type' => 'page'
                                ));

                                foreach($pages as $page) {
                            ?>
                                <div class="product">
                                    <a href="<?php echo get_permalink($page->ID); ?>">
                                        <img class="thumbnail" src="<?php the_field('product_image', $page->ID); ?>">
                                    </a>
                                    <div class="full-container promo-overlay">
                                        <div class="graphic">
                                            <img src="<?php the_field('promo_image', $page->ID); ?>">
                                        </div>
                                        <div class="info">
                                            <h3><?php echo $page->post_title; ?></h3>
                                            <p><?php the_field('products_group_page_description', $page->ID); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section white">
                <div class="fluid-container">
                    <div class="full">
                        <h2 class="text-center"><?php the_field('product_group_recipes_headline'); ?></h2>
                    </div>
                </div>

                <?php
                    $pages = get_posts(array(
                        'category_name' => 'recipe',
                        'posts_per_page' => 3
                    ));
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <?php include(locate_template('store-locator-and-newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>

