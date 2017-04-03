<?php
    /**
    * Template Name: Individual Product Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <?php
            $parent_post_id = wp_get_post_parent_ID(get_the_ID());
        ?>

        <main>
            <div class="section no-padding white page-nav">
                <div class="fluid-container">
                    <p><a href="<?php echo get_permalink($parent_post_id); ?>"><i class="fa fa-arrow-left"></i> <?php echo get_the_title($parent_post_id); ?></a></p>
                </div>
            </div>
            <div class="section micro-padding-top torn-paper product-details-section">
                <div class="container">
                    <div class="graphic text-center">
                        <img src="<?php the_field('product_image', get_the_ID()); ?>" style="max-height: 400px;">
                    </div>
                    <div class="description">
                        <h1><?php the_field('product_name'); ?></h1>
                        <p><?php the_field('product_description'); ?></p>
                        <div class="full-container">
                            <div class="third">
                                <?php if (get_field('show_coupon') && get_field('coupon_page')) { ?>
                                    <a href="<?php the_field('coupon_page'); ?>" class="button small block yellow capitalize">Print Coupon</a>
                                <?php } ?>
                            </div>
                            <div class="third">
                                <?php if (get_field('nutrition_facts_image')) { ?>
                                    <a id="recipe-nutrition-facts" href="javascript:void(0);" data-image="<?php the_field('nutrition_facts_image'); ?>" class="button small block capitalize">Nutrition Facts</a>
                                <?php } ?>
                            </div>
                            <div class="third">
                                <?php if (get_field('ingredients_image')) { ?>
                                    <a id="recipe-ingredients" href="javascript:void(0);" data-image="<?php the_field('ingredients_image'); ?>" class="button small block capitalize">Ingredients</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section tiny white">
                <div class="fluid-container">
                    <div class="full">
                        <h2 class="text-center capitalize">FAMOUS RECIPES WORTH SEASONIN’</h2>
                    </div>
                </div>

                <?php
                    $pages = get_posts(array(
                        'category_name' => 'recipe',
                        'posts_per_page' => 3,
                        'meta_query' => array(
                            array(
                                'key' => 'related_products',
                                'value' => '"'.get_the_ID().'"',
                                'compare' => 'LIKE',
                            )
                        ),
                    ));
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <?php include(locate_template('store-locator-and-newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

        <div id="desktop-overlay">
            <a href="javascript:void(0)" id="exit-button" class="fa fa-times"></a>
            <img src="">
        </div>
    </body>
</html>

