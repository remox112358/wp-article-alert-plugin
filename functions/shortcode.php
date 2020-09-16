<?php

/**
 * Display the shortcode output.
 *
 * @param array $atts
 * @param string $content
 * @return void
 */
function wpaa_shortcode_handler($atts, $content = null) {
    extract(shortcode_atts([
        'type'  => 'info',
        'title' => 'Info!'
    ], $atts));

    ob_start();

    printf(
        '
            <div class="wpaa-alert wpaa-alert--%s">
                <div class="wpaa-alert__icon">%s</div>
                <div class="wpaa-alert__info">
                    <h4 class="wpaa-alert__title">%s</h4>
                    <p class="wpaa-alert__text">%s</p>
                </div>
            </div>
        ',
        $type,
        wpaa_shortcode_icon($type),
        $title,
        $content
    );

    return ob_get_clean();
}

/**
 * Get the alert shortcode icon by type.
 *
 * @param string $type
 * @return void
 */
function wpaa_shortcode_icon($type) {
    
    if (! in_array($type, WPAA_PLUGIN_ALERT_TYPES))
        $type = WPAA_PLUGIN_ALERT_DEFAULT_TYPE;

    ob_start();
        
    printf(
        '<img src="%s" alt="%s">',
        plugins_url('/assets/icons/' . $type . '.png', WPAA_PLUGIN),
        ucfirst($type)
    );

    return ob_get_clean();
}