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

define('WPAA_PLUGIN_NAME', 'Article Alert');

define('WPAA_PLUGIN_ALERT_TYPES', array(
    'info', 'success', 'warning', 'danger'
));

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
        self::createAdminPage();

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

    protected final static function createAdminPage()
    {
        add_action('admin_menu', function() {
            add_menu_page(
                WPAA_PLUGIN_NAME,
                WPAA_PLUGIN_NAME,
                'manage_options',
                '/article-alert/includes/admin.php',
                null,
                'dashicons-warning'
            );
        });
    }

    /**
     * Enqueue plugin assets.
     *
     * @return void
     */
    protected final static function importAssets()
    {
        add_action('wp_enqueue_scripts', function() {
            wp_enqueue_style('wpaa-style', plugins_url('/assets/css/style.css', WPAA_PLUGIN));
        });

        add_action('admin_enqueue_scripts', function() {
            wp_enqueue_script('jquery');
            wp_enqueue_script('wpaa-script-admin', plugins_url('/assets/js/admin.js', WPAA_PLUGIN), array('jquery'), null, true);
        
            wp_enqueue_style('wpaa-style-admin', plugins_url('/assets/css/admin.css', WPAA_PLUGIN));
        });
    }

}

WPAA_Plugin::init();