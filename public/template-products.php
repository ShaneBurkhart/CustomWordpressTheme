<?php
    /**
    * Template Name: Products Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section tiny">
                <div class="container">
                    <div class="full">
                        <h2 class="text-center"><?php the_field('headline'); ?></h2>
                        <p><?php the_field('description'); ?></p>
                    </div>
                </div>
            </div>
            <?php
                $products_page = get_pages(array(
                    'meta_key' => '_wp_page_template',
                    'meta_value' => 'template-products.php',
                ))[0];

                $pages = get_children(array('post_parent' => $products_page->ID));
                usort($pages, function ($a, $b) {
                    return strcmp($a->product_group_position, $b->product_group_position);
                });

                $i = 0;

                foreach($pages as $page) {
            ?>
                <div class="section tiny product-section" style="background-image: url(<?php the_field('products_page_background_image', $page->ID); ?>);">
                    <div class="fluid-container">
                        <?php if ($i % 2 == 1) { ?>
                            <div class="description left">
                                <h3><?php echo $page->post_title; ?></h3>
                                <p><?php the_field('products_page_description', $page->ID); ?></>
                                <p><a href="<?php echo get_permalink($page->ID); ?>" class="button circle-arrow fa fa-arrow-right"></a></p>
                            </div>
                        <?php }?>
                        <div class="graphic">
                            <a class="product-group-thumbnail" href="<?php echo get_permalink($page->ID); ?>">
                                <img src="<?php the_field('homepage_product_group_image', $page->ID); ?>">
                            </a>
                        </div>
                        <?php if ($i % 2 == 0) { ?>
                            <div class="description right">
                                <h3><?php echo $page->post_title; ?></h3>
                                <p><?php the_field('products_page_description', $page->ID); ?></>
                                <p><a href="<?php echo get_permalink($page->ID); ?>" class="button circle-arrow fa fa-arrow-right"></a></p>
                            </div>
                        <?php }?>
                    </div>
                </div>

                <?php $i = $i + 1; ?>
            <?php } ?>

            <?php include(locate_template('store-locator-and-newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>

