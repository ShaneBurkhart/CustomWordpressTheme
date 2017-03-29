<div class="container">
    <?php
    foreach($pages as $page) {
    ?>
        <div class="third">
            <?php include(locate_template('thumbnail-page-preview.php', false, false)); ?>
        </div>
    <?php } ?>
</div>
<div class="container">
    <?php
    foreach($pages as $page) {
    ?>
        <div class="third thumbnail-page-preview-bottom">
            <div class="text-center"><a href="<?php echo get_permalink($page->ID); ?>" class="button">
                <?php if (in_category('recipe', $page->ID)) { ?>
                    View Recipe
                <?php } else { ?>
                    View Post
                <?php } ?>
            </a></div>
        </div>
    <?php } ?>
</div>
