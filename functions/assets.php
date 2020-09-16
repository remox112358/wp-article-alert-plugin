<?php

/**
 * Register plugin assets.
 */
function wpaa_assets() {
    wp_enqueue_style('wpaa-style', plugins_url('/assets/style.css', WPAA_PLUGIN));
    wp_enqueue_style('wpaa-style-responsive', plugins_url('/assets/style-responsive.css', WPAA_PLUGIN));
}