<?php

function product_page_relationship($args, $field, $post) {
    $args['post_type'] = 'page';
    $args['meta_key'] = '_wp_page_template';
    $args['meta_value'] = 'template-product.php';

    return $args;
}

add_filter('acf/fields/post_object/query/name=related_products', 'product_page_relationship', 10, 3);
?>
