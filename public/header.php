<?php
    $products_page = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-products.php',
    ))[0];

    $pages = get_children(array('post_parent' => $products_page->ID));
?>

<header class="section no-padding">
    <div class="fluid-container">
        <div class="full">
            <a id="site-logo" href="/"></a>
            <ul>
                <li>
                    <a href="/products">Products</a>
                    <ul class="drop-down-items">
                        <?php
                            foreach($pages as $page) {
                        ?>
                                <li><a href="<?php echo get_permalink($page->ID); ?>"><?php echo $page->post_title; ?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li><a href="/q-club">Q' Club</a></li>
                <li><a href="/recipes">Recipes</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href=""><i class="fa fa-search"></i></a></li>
            </ul>
            <a class="button pull-right capitalize" href="/store-locator">
                <i class="fa fa-map-marker"></i><span>Store Locator</span>
            </a>
        </div>
    </div>
</header>
