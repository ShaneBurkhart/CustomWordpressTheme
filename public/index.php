<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white image-with-text">
                <img src="<?php the_field('banner_image', get_option('page_for_posts')) ?>">
                <h2 class="text-center">Blog Posts</h2>
            </div>
                <?php
                    $page_num = get_query_var('paged') ? get_query_var('paged') : 1;
                    $offset = 9 * ($page_num - 1);
                    $all_pages = get_posts(array(
                        'category_name' => 'uncategorized',
                        'posts_per_page' => -1
                    ));
                    $posts_on_page = array_slice($all_pages, $offset, 9);
                ?>
            <div class="section white micro">
                <?php
                    $pages = array_slice($posts_on_page, 0, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <?php
                    $pages = array_slice($posts_on_page, 3, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <?php
                    $pages = array_slice($posts_on_page, 6, 3);
                    include(locate_template('three-page-previews.php', false, false));
                ?>
            </div>

            <div class="section white micro">
                <div class="container-fluid">
                    <div class="full text-center">
                        <?php
                            if (sizeof($all_pages) > $offset + 9) {
                        ?>
                                <a class="button" href="/blog/page/<?php echo $page_num + 1; ?>">More Posts</a>
                        <?php } ?>

                        <?php
                            if ($offset > 0) {
                        ?>
                                <a class="button" href="/blog/page/<?php echo $page_num - 1; ?>">Back</a>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <?php include(locate_template('newsletter-signup-section.php', false, false)); ?>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
