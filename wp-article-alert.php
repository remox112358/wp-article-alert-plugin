<?php

/*
Plugin Name: Article Alert
Plugin URI: https://github.com/remox112358/wp-article-alert-plugin
Description: Different alert blocks for articles.
Author: Artyom Davtyan
Author URI: https://github.com/remox112358
Version: 1.0
*/

require_once 'settings.php';
require_once 'autoload.php';

/**
 * WPAA_Plugin Class.
 * 
 * @version 1.0.0
 */
class WPAA_Plugin implements WPAA_Plugin_Interface
{
    public function init()
    {
        self::createShortcode();
    }

    protected static function createShortcode()
    {
        add_shortcode('alert', 'wpaa_shortcode_handler');
    }
}

WPAA_Plugin::init();