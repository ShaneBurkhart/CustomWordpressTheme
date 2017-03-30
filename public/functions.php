<?php

function product_page_relationship($args, $field, $post) {
    $args['post_type'] = 'page';
    $args['meta_key'] = '_wp_page_template';
    $args['meta_value'] = 'template-product.php';

    return $args;
}

add_filter('acf/fields/relationship/query/name=related_products', 'product_page_relationship', 10, 3);

add_theme_support('post-formats', array('video'));

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="button"';
}

// We don't need a read more link.
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
