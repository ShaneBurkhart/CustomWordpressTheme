<?php
    /**
    * Template Name: Front Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section parallax">
                <div class="placeholder"></div>
                <div class="float">
                    <h1>Test</h1>
                </div>
            </div>
            <div class="section long">
                <div class="large-container">
                </div>
            </div>
        </main>

        <?php get_footer(); ?>

    </body>
</html>
