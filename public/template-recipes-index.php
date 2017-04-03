<?php
    /**
    * Template Name: Recipes Page
    */

    $keyword = $_GET['keyword'];
    $productID = $_GET['product'];
    $meat = $_GET['meat'];
    $heat = $_GET['heat'];

    $query = array('relation' => 'AND');
    if (strlen($productID)) {
        $query[] = array(
            'key' => 'related_products',
            'value' => '"'.$productID.'"',
            'compare' => 'LIKE',
        );
    }
    if (strlen($meat)) {
        $query[] = array(
            'key' => 'recipe_meat',
            'value' => '"'.$meat.'"',
            'compare' => 'LIKE',
        );
    }
    if (strlen($heat)) {
        $query[] = array(
            'key' => 'recipe_heat',
            'value' => $heat,
        );
    }

    $page_num = get_query_var('paged') ? get_query_var('paged') : 1;
    global $wp_query;
    $wp_query = NULL;
    $wp_query = new WP_Query(array(
        'category_name' => 'recipe',
        'posts_per_page' => 9,
        'paged' => $page_num,
        's' => $keyword,
        'meta_query' => $query,
    ));

    $recipeQuery = new WP_Query(array(
        'category_name' => 'recipe',
        'posts_per_page' => 1,
    ));
    $recipePost = $recipeQuery->posts[0];
    $meatField = get_field_object('recipe_meat', $recipePost->ID);
    $heatField = get_field_object('recipe_heat', $recipePost->ID);
    $productQuery = new WP_Query(array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-product.php',
    ));
    $productPages = $productQuery->posts;

    $meatChoices = array();
    if ($meatField) $meatChoices = $meatField['choices'];
    $heatChoices = array();
    if ($heatField) $heatChoices = $heatField['choices'];

    $productChoices = array();
    foreach ($productPages as $productPage) {
        $productChoices[$productPage->post_title] = $productPage->ID;
    }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white image-with-text">
                <img src="<?php the_field('banner_image') ?>">
                <h2 class="text-center"><?php the_field('page_heading') ?></h2>
            </div>
            <div class="section white micro">
                <form id="recipe-search-form" class="container" action="/recipes" method="GET">
                    <div class="fifth">
                        <input class="block" name="keyword" type="text" placeholder="Keyword" value="<?php echo $keyword; ?>">
                    </div>
                    <div class="fifth">
                        <div class="select_wrapper block">
                            <select name="product">
                                <option <?php if (!$product) echo "selected"; ?> disabled value="">
                                    Filter by Product
                                </option>
                                <option value="">All</option>
                                <?php foreach ($productChoices as $key => $value) { ?>
                                    <option <?php if ($value == $productID) echo "selected"; ?> value="<?php echo $value; ?>">
                                        <?php echo $key; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="fifth">
                        <div class="select_wrapper block">
                            <select name="meat">
                                <option <?php if (!$meat) echo "selected"; ?> disabled value="">
                                    Filter by Meat
                                </option>
                                <option value="">All</option>
                                <?php var_dump($meatChoices); ?>
                                <?php foreach ($meatChoices as $key => $value) { ?>
                                    <option <?php if ($value == $meat) echo "selected"; ?> value="<?php echo $value; ?>">
                                        <?php echo $key; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="fifth">
                        <div class="select_wrapper block">
                            <select name="heat">
                                <option <?php if (!$heat) echo "selected"; ?> disabled value="">
                                    Filter by Heat
                                </option>
                                <option value="">All</option>
                                <?php foreach ($heatChoices as $key => $value) { ?>
                                    <option <?php if ($value == $heat) echo "selected"; ?> value="<?php echo $value; ?>">
                                        <?php echo $key; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="fifth text-right">
                        <button class="yellow capitalize">Search</button>
                    </div>
                </form>
            </div>
            <div class="section white micro">
                <?php
                    $no_overlay = true;
                    $pages = array_slice($wp_query->posts, 0, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <?php
                    $no_overlay = true;
                    $pages = array_slice($wp_query->posts, 3, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <?php
                    $no_overlay = true;
                    $pages = array_slice($wp_query->posts, 6, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <div class="container-fluid">
                    <div class="full text-center">
                        <?php
                            $previousLink = previous_posts_link('Previous');
                            if ($previousLink) { echo $previousLink; }

                            $nextLink = next_posts_link('More Recipes', $wp_query->max_num_pages);
                            if ($nextLink) { echo $nextLink; }
                        ?>
                    </div>
                </div>
            </div>

            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
