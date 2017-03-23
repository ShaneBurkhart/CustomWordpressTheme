<article class="thumbnail-page-preview">
    <div class="image-wrapper" style="background-image: url('<?php the_field('preview_image', $page->ID); ?>">
    </div>
    <h3><?php echo $page->post_title ?></h3>
    <p><?php the_field('snippet', $page->ID); ?></p>

    <?php if (in_category('recipe', $page->ID)) { ?>
        <div class="text-center"><a href="" class="button">View Recipe</a></div>
    <?php } else { ?>
        <div class="text-center"><a href="" class="button">View Post</a></div>
    <?php } ?>
</article>

