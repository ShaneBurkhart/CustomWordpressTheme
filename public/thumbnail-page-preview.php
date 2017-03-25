<article class="thumbnail-page-preview">
    <div class="image-wrapper" style="background-image: url('<?php the_field('preview_image', $page->ID); ?>">
    </div>
    <h3><?php echo $page->post_title ?></h3>
    <p><?php the_field('snippet', $page->ID); ?></p>

    <div class="text-center"><a href="<?php echo get_permalink($page->ID); ?>" class="button">
        <?php if (in_category('recipe', $page->ID)) { ?>
            View Recipe
        <?php } else { ?>
            View Post
        <?php } ?>
    </a></div>
</article>

