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
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/banners/homepage-hero.jpg)"
                ></div>
                <div class="content">
                    <div class="fluid-container">
                        <div class="full">
                            <div class="promo pull-right">
                                <h3>Save $2 <br><span class="large">In Store<span></h3>
                                <p>Stock up for BBQ season and save on Twiest'd Q seasonings and rubs.</p>
                                <a href="" class="button">Get Coupon</a>
                            </div>
                            <div class="jumbotron">
                                <h1>Award-Winning Flavors. And We're Not Just Blowing Smoke.</h1>
                                <p>Championship seasonings, rubs and sauces for good times and great BBQ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section white">
                <div class="fluid-container">
                    <div class="full">
                        <h2 class="text-center">The Lineup</h2>
                    </div>
                </div>
                <div class="fluid-container">
                    <?php
                        $pages = get_pages(array(
                            'meta_key' => '_wp_page_template',
                            'meta_value' => 'template-product-group.php'
                        ));

                        foreach($pages as $page) {
                    ?>
                        <div class="third">
                            <img src="<?php the_field('homepage_product_group_image', $page->ID); ?>">
                            <h3 class="text-center"><?php echo $page->post_title; ?></h3>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="section no-padding white image-with-text">
                <img src="<?php the_field('blog_preview_banner_image') ?>">
                <h2 class="text-center"><?php the_field('blog_preview_heading'); ?></h2>
            </div>
            <div class="section large white micro-padding-top">
                <?php include(locate_template('three-page-previews.php', false, false)); ?>
            </div>
            <div class="section orange">
                <div class="fluid-container">
                    <div class="full text-center">
                        <h2 class="capitalize">The Smokin' Hottest Club Around.</h2>
                    </div>
                </div>
                <div class="container">
                    <div class="full text-center">
                        <p>Sign up for the Q club to get pro-style tips, tricks and the tastiest recipes on this side of the Mason Dixon. Get ready to walk, talk, grill and smoke like a pitmaster.</p>
                        <a href="" class="button capitalize">Sign Up Now</a>
                    </div>
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
