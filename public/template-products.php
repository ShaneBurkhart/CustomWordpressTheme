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
                <div class="fluid-container">
                    <?php
                        $products_page = get_pages(array(
                            'meta_key' => '_wp_page_template',
                            'meta_value' => 'template-products.php',
                        ))[0];

                        $pages = get_children(array('post_parent' => $products_page->ID));

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
        </main>

        <?php get_footer(); ?>

    </body>
</html>

