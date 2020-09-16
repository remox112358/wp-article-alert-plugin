<?php

/*
Plugin Name: Article Alert
Plugin URI: https://github.com/remox112358/wp-article-alert-plugin
Description: Different alert blocks for articles.
Author: Artyom Davtyan
Author URI: https://github.com/remox112358
Version: 1.0
*/

define('WPAA_PLUGIN', __FILE__);

define('WPAA_PLUGIN_ALERT_TYPES', [
    'info', 'success', 'warning', 'danger'
]);

if (! defined('WPAA_LOAD_CSS'))
	define('WPAA_LOAD_CSS', true);

require_once 'autoload.php';

/**
 * WPAA_Plugin Class.
 * 
 * @version 1.0.0
 */
class WPAA_Plugin implements WPAA_Plugin_Interface
{
    /**
     * Initialize the plugin functionality.
     *
     * @return void
     */
    public function init()
    {
        self::debug();

        self::createShortcode();

        if (WPAA_LOAD_CSS)
            self::importAssets();
    }

    /**
     * Initialize the code and stops the application.
     *
     * @return void
     */
    public function debug()
    {
        add_action('init', function() {
            // Code here...
        });
    }

    /**
     * Сlings to hook and create shortcode.
     *
     * @return void
     */
    protected final static function createShortcode()
    {
        add_shortcode('alert', 'wpaa_shortcode_handler');
    }

    /**
     * Enqueue plugin assets.
     *
     * @return void
     */
    protected final static function importAssets()
    {
        add_action('wp_enqueue_scripts', 'wpaa_assets');
    }

    protected final static function initDebug()
    {
        add_action('init', 'debug');
    }
}

WPAA_Plugin::init();