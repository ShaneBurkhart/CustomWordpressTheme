<?php
    /**
    * Template Name: Store Locator Page
    */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('head'); ?>

    <body <?php body_class(); ?>>

        <?php get_header(); ?>

        <main>
            <div class="section no-padding white store-locator-header">
                <div class="full-container">
                    <div class="two-thirds light-gray" style="padding: 60px 20px;">
                        <h1>Save $2 On Your Next Purchase</h1>
                        <p>Find Twist'd Q products near you.</p>
                    </div>
                    <div class="third orange text-center" style="padding: 60px 20px;">
                        <h2>Save $2 On Your Next Purchase</h2>
                        <a class="button">Print Coupon</a>
                    </div>
                </div>
            </div>
            <div class="section no-padding white">
                <div class="full-container">
                    <div id="store-locator-map" class="full">
                        <div id="bh-sl-map-container" class="bh-sl-map-container">
                            <div class="bh-sl-loc-list">
                                <ul class="list"></ul>
                            </div>
                            <div id="bh-sl-map" class="bh-sl-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script>
            $(function() {
                $('#store-locator-map').storeLocator({
                    'noForm': true,
                    'fullMapStart': true,
                    'slideMap': false,
                    'listColor1': '#ffffff',
                    'listColor2': '#ffffff',
                    'defaultLoc': true,
                    'defaultLat': 43.9695148,
                    'defaultLng': -99.9018131,
                    'distanceAlert': -1,
                    'dataType': 'json',
                    'dataRaw': [{"id":"1","name":"Chipotle Minneapolis","lat":"44.947464","lng":"-93.320826","address":"3040 Excelsior Blvd","address2":"","city":"Minneapolis","state":"MN","postal":"55416","phone":"612-922-6662","web":"http:\/\/www.chipotle.com","hours1":"Mon-Sun 11am-10pm","hours2":"","hours3":""},{"id":"2","name":"Chipotle St. Louis Park","lat":"44.930810","lng":"-93.347877","address":"5480 Excelsior Blvd.","address2":"","city":"St. Louis Park","state":"MN","postal":"55416","phone":"952-922-1970","web":"http:\/\/www.chipotle.com","hours1":"Mon-Sun 11am-10pm","hours2":"","hours3":""}]
                });
            });
        </script>

        <?php get_footer(); ?>

    </body>
</html>
