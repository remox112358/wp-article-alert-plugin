<?php

/**
 * Register plugin assets.
 */
function wpaa_assets() {
    wp_enqueue_style('wpaa-style', plugins_url('/assets/css/style.css', WPAA_PLUGIN));
}