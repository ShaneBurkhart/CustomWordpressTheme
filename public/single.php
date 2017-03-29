<?php
    the_post();
    $is_recipe = in_category('recipe');
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white page-nav">
                <div class="fluid-container">
                    <?php if ($is_recipe) { ?>
                        <p><a href="/recipes"><i class="fa fa-arrow-left"></i> Recipes</a></p>
                    <?php } else { ?>
                        <p><a href="/blog"><i class="fa fa-arrow-left"></i> Blog</a></p>
                    <?php } ?>
                </div>
            </div>

            <?php if (!$is_recipe) { ?>
                <div class="section no-padding white post-image-section" style="background-image: url(<?php the_field('banner_image') ?>);">
                </div>
                <div class="section tiny white">
                    <div class="container">
                            <div class="third blog-side-bar">
                                <h3>Subscribe To Q'Club</h3>
                                <p></p>
                            </div>
                            <div class="two-thirds blog-post">
                                <h1><?php echo get_the_title(); ?></h1>
                                <?php the_content(); ?>
                            </div>
                    </div>
                </div>
            <?php } else { ?>
                <div id="recipe-container" class="section no-padding white">
                    <div class="full-container">
                    <div class="graphic background" style="background-image: url(<?php the_field('banner_image'); ?>);">
                        </div>
                        <div class="description">
                            <h1><?php echo get_the_title(); ?></h1>
                            <div class="third">
                                <p class="bold">Serving Size</p>
                                <p><?php the_field('recipe_serving_size'); ?></p>
                            </div>
                            <div class="third">
                                <p class="bold">Prep Time</p>
                                <p><?php the_field('recipe_prep_time'); ?></p>
                            </div>
                            <div class="third">
                                <p class="bold">Cook Time</p>
                                <p><?php the_field('recipe_cook_time'); ?></p>
                            </div>
                            <hr>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if ($is_recipe) { ?>
                <div class="section white">
                    <div class="micro-container">
                        <div class="full">
                            <h2 class="capitalize text-center">You'll Dig These Recipes, Too.</h2>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="section white">
                <?php
                    $category = 'uncategorized';
                    if ($is_recipe) {
                        $category = 'recipe';
                    }

                    $pages = get_posts(array(
                        'category_name' => $category,
                        'posts_per_page' => 3,
                        'exclude' => get_the_ID()
                    ));

                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
