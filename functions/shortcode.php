<?php

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

function wpaa_shortcode_icon($type = 'info') {
    return '<img src="/" alt="Icon" />';
}