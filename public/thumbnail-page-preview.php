<?php
$thumbnail_class = 'blog-post';

if (in_category('recipe', $page)) {
    $thumbnail_class = 'recipe-post';
} else if (in_category('recipe', $page) && get_post_format($page) == 'video') {
    $thumbnail_class = 'video-post';
}
?>

<article class="thumbnail-page-preview <?php echo $thumbnail_class; ?>">
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

