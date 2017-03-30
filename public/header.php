<?php
    $products_page = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'template-products.php',
    ))[0];

    $pages = get_children(array('post_parent' => $products_page->ID));

    usort($pages, function ($a, $b) {
        return strcmp($a->product_group_position, $b->product_group_position);
    });
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
                <li><a href="/recipes">Recipes</a></li>
                <li><a href="/blog">Blog</a></li>
                <li><a href="/q-club">Q' Club</a></li>
                <li><a href=""><i class="fa fa-search"></i></a></li>
                <li id="mobile-drawer-button" class="mobile-drawer"><a href="javascript:void(0)"><i class=" fa fa-bars"></i></a></li>
            </ul>
            <div class="mobile-nav-drawer">
                <div class="search-section">
                    <form action="/" method="get">
                        <div class="input-container">
                            <input name="query">
                            <i class="fa fa-search"></i>
                        </div>
                        <button type="button" id="mobile-drawer-close-button" class="circle-arrow fa fa-arrow-right"></button>
                    </form>
                </div>
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
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/q-club">Q' Club</a></li>
                    <li><a href="/recipes">Recipes</a></li>
                </ul>
            </div>
            <a class="button pull-right capitalize" href="/store-locator">
                <i class="fa fa-map-marker"></i><span>Store Locator</span>
            </a>
        </div>
    </div>
</header>
