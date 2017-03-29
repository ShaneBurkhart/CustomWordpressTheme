<?php
    /**
    * Template Name: Recipes Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white image-with-text">
                <img src="<?php the_field('banner_image') ?>">
                <h2 class="text-center">Recipes</h2>
            </div>
                <?php
                    $keyword = $_GET['keyword'];
                    $productID = $_GET['product'];
                    $meat = $_GET['meat'];
                    $heat = $_GET['heat'];

                    $query = array('relation' => 'AND');
                    if (strlen($product)) {
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
                    $offset = 9 * ($page_num - 1);
                    $all_pages = new WP_Query(array(
                        'category_name' => 'recipe',
                        'posts_per_page' => -1,
                        's' => $keyword,
                        'meta_query' => $query,
                    ));
                    $recipes_on_page = array_slice($all_pages->posts, $offset, 9);
                ?>
            <div class="section white micro">
                <?php
                    $pages = array_slice($recipes_on_page, 0, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <?php
                    $pages = array_slice($recipes_on_page, 3, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <?php
                    $pages = array_slice($recipes_on_page, 6, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <div class="container-fluid">
                    <div class="full text-center">
                        <?php
                            if (sizeof($all_pages) > $offset + 9) {
                        ?>
                                <a class="button" href="/recipes/page/<?php echo $page_num + 1; ?>">More Recipes</a>
                        <?php } ?>

                        <?php
                            if ($offset > 0) {
                        ?>
                                <a class="button" href="/recipes/page/<?php echo $page_num - 1; ?>">Back</a>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
