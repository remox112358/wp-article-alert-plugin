<div class="wrap">
    <div class="wpaa-admin">
        <h1 class="wpaa-admin__title">Article Alert (<?= 'v' . WPAA_PLUGIN_VERSION ?>)</h1>
        <div class="wpaa-admin__links">
            <a href="<?= WPAA_PLUGIN_URL ?>" target="_blank">github</a>
        </div>
        <div class="wpaa-admin__wrapper">
            <div class="wpaa-admin__manage">
                <h2 class="manage__title">constructor</h2>
                <div class="manage__items">
                    <div class="manage__item manage__item--full">
                        <label for="wpaa-alert-text">Text</label>
                        <textarea rows="4" id="wpaa-alert-text" placeholder="Add text" data-change="wpaa-alert-preview"><?= WPAA_PLUGIN_ALERT_DEFAULT['text'] ?></textarea>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-title">Title</label>
                        <input type="text" id="wpaa-alert-title" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['title'] ?>" placeholder="Add title" data-change="wpaa-alert-preview">
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-type">Type</label>
                        <select id="wpaa-alert-type" data-change="wpaa-alert-preview" data-image-src="<?= wpaa_shortcode_icon(WPAA_PLUGIN_ALERT_DEFAULT['type'], true) ?>">
                            <?php foreach (WPAA_PLUGIN_ALERT_TYPES as $type) : ?>
                                <option value="<?= $type ?>" <?= $type == WPAA_PLUGIN_ALERT_DEFAULT['type'] ? 'selected' : '' ?>><?= ucfirst($type) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-max-size">Max size</label>
                        <input type="number" step="10" id="wpaa-alert-max-size" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['max_size'] ?>" placeholder="Add max size" data-change="wpaa-alert-preview"/>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-title-size">Title size</label>
                        <input type="number" step="2" id="wpaa-alert-title-size" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['title_size'] ?>" placeholder="Add title size" data-change="wpaa-alert-preview"/>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-text-size">Text size</label>
                        <input type="number" step="2" id="wpaa-alert-text-size" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['text_size'] ?>" placeholder="Add text size" data-change="wpaa-alert-preview"/>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-classes">Custom classes</label>
                        <input type="text" id="wpaa-alert-classes" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['html_classes'] ?>" placeholder="Add classes" data-change="wpaa-alert-preview"/>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-margin">Margin</label>
                        <input type="number" step="5" id="wpaa-alert-margin" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['margin'] ?>" placeholder="Add margin" data-change="wpaa-alert-preview"/>
                    </div>
                </div>
            </div>
            <div class="wpaa-admin__result">
                <div class="wpaa-admin__preview">
                    <h2 class="preview__title">preview</h2>
                    <div class="wpaa-alert wpaa-alert--<?= WPAA_PLUGIN_ALERT_DEFAULT['type'] ?> <?= WPAA_PLUGIN_ALERT_DEFAULT['html_classes'] ?> fade" style="max-width: <?= WPAA_PLUGIN_ALERT_DEFAULT['max_size'] ?>px; margin-top: <?= WPAA_PLUGIN_ALERT_DEFAULT['margin'] ?>px; margin-bottom: <?= WPAA_PLUGIN_ALERT_DEFAULT['margin'] ?>px">
                        <div class="wpaa-alert__icon">
                            <?= wpaa_shortcode_icon(WPAA_PLUGIN_ALERT_DEFAULT['type']) ?>
                        </div>
                        <div class="wpaa-alert__info">
                            <h4 class="wpaa-alert__title" style="font-size: <?= WPAA_PLUGIN_ALERT_DEFAULT['title_size'] ?>px; line-height: <?= WPAA_PLUGIN_ALERT_DEFAULT['title_size'] * 1.2 ?>px"><?= WPAA_PLUGIN_ALERT_DEFAULT['title'] ?></h4>
                            <p class="wpaa-alert__text" style="font-size: <?= WPAA_PLUGIN_ALERT_DEFAULT['text_size'] ?>px; line-height: <?= WPAA_PLUGIN_ALERT_DEFAULT['text_size'] * 1.2 ?>px"><?= WPAA_PLUGIN_ALERT_DEFAULT['text'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="wpaa-admin__shortcode">
                    <div class="shortcode__hint">Click to copy</div>
                    <div class="shortcode__inner" id="shortcode">
                        [alert type="<?= WPAA_PLUGIN_ALERT_DEFAULT['type'] ?>" title="<?= WPAA_PLUGIN_ALERT_DEFAULT['title'] ?>" max_size="<?= WPAA_PLUGIN_ALERT_DEFAULT['max_size'] ?>" title_size="<?= WPAA_PLUGIN_ALERT_DEFAULT['title_size'] ?>" text_size="<?= WPAA_PLUGIN_ALERT_DEFAULT['text_size'] ?>" html_classes="<?= WPAA_PLUGIN_ALERT_DEFAULT['html_classes'] ?>" margin="<?= WPAA_PLUGIN_ALERT_DEFAULT['margin'] ?>"]<?= WPAA_PLUGIN_ALERT_DEFAULT['text'] ?>[/alert]
                    </div>
                    <div class="shortcode__action fade" style="display: none;">Copied successfuly</div>
                </div>
            </div>
        </div>
    </div>
</div>