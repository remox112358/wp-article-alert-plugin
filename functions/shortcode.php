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
        'type'         => WPAA_PLUGIN_ALERT_DEFAULT['warning'],
        'title'        => WPAA_PLUGIN_ALERT_DEFAULT['title'],
        'html_classes' => WPAA_PLUGIN_ALERT_DEFAULT['html_classes'],
        'title_size'   => WPAA_PLUGIN_ALERT_DEFAULT['title_size'],
        'text_size'    => WPAA_PLUGIN_ALERT_DEFAULT['text_size'],
        'max_size'     => WPAA_PLUGIN_ALERT_DEFAULT['max_size'],
        'margin'       => WPAA_PLUGIN_ALERT_DEFAULT['margin']
    ], $atts));

    ob_start();

    printf(
        '
            <div class="wpaa-alert wpaa-alert--%s %s" style="max-width: %d' . 'px' . '; margin-top: %d' . 'px' . '; margin-bottom: %d' . 'px' . '">
                <div class="wpaa-alert__icon">%s</div>
                <div class="wpaa-alert__info">
                    <h4 class="wpaa-alert__title" style="font-size: %d' . 'px' . '; line-height: %d' . 'px' . '">%s</h4>
                    <p class="wpaa-alert__text" style="font-size: %d' . 'px' . '; line-height: %d' . 'px' . '">%s</p>
                </div>
            </div>
        ',
        $type,
        $html_classes,
        $max_size,
        $margin,
        $margin,
        wpaa_shortcode_icon($type),
        $title_size,
        $title_size + ($title_size * 0.2),
        $title,
        $text_size,
        $text_size + ($text_size * 0.2),
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