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
            <div class="section no-padding white post-image-section" style="background-image: url(<?php the_field('banner_image') ?>);">
            </div>
            <div class="section tiny white">
                <div class="container">
                    <?php if ($is_recipe) { ?>
                        <div class="third">
                            <h3>Subscribe To Q'Club</h3>
                            <p></p>
                        </div>
                        <div class="two-thirds blog-post">
                            <h1><?php echo get_the_title(); ?></h1>
                            <p class="recipe-snippet"><?php the_field('recipe_snippet'); ?></p>
                            <div class="recipe-meta">
                                <div class="full-container">
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
                                </div>
                            </div>
                            <?php the_content(); ?>
                        </div>
                    <?php } else { ?>
                        <div class="third">
                            <h3>Subscribe To Q'Club</h3>
                            <p></p>
                        </div>
                        <div class="two-thirds blog-post">
                            <h1><?php echo get_the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
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
