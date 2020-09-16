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
        'title' => 'Внимание!'
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
        wpaa_shortcode_icon(),
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
function wpaa_shortcode_icon($type = 'info') {
    ob_start();

    printf(
        '
            <img src="%s" alt="Warning">   
        ',
        plugins_url('/assets/warning.png', WPAA_PLUGIN)
    );

    return ob_get_clean();
}