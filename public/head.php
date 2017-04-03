<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="/wp-content/themes/custom/style.css" rel="stylesheet">

    <script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>
    <script src="/wp-content/themes/custom/assets/js/handlebars-v4.0.5.js"></script>

    <meta name="og:url" content="<?php echo get_permalink(); ?>">
    <meta name="og:title" content="<?php echo get_the_title(); ?>">
    <meta name="og:description" content="<?php the_field('snippet'); ?>">
    <meta name="og:image" content="<?php the_field('banner_image'); ?>">
    <meta name="og:type" content="article">

    <title><?php echo get_the_title(); ?></title>

    <?php wp_head(); ?>
</head>
