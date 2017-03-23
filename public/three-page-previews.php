<div class="fluid-container">
    <?php
    foreach($pages as $page) {
    ?>
        <div class="third">
            <?php include(locate_template('thumbnail-page-preview.php', false, false)); ?>
        </div>
    <?php } ?>
</div>
