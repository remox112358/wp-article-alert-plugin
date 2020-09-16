<div class="wrap">
    <div class="wpaa-admin">
        <h1 class="wpaa-admin__title">Article Alert (<?= 'v' . WPAA_PLUGIN_VERSION ?>)</h1>
        <div class="wpaa-admin__wrapper">
            <div class="wpaa-admin__manage">
                <div class="manage__item manage__item--full">
                    <label for="wpaa-alert-text">Text</label>
                    <textarea rows="4" id="wpaa-alert-text" placeholder="Add text"></textarea>
                </div>
                <div class="manage__item">
                    <label for="wpaa-alert-title">Title</label>
                    <input type="text" id="wpaa-alert-title" placeholder="Add title">
                </div>
                <div class="manage__item">
                    <label for="wpaa-alert-type">Type</label>
                    <select id="wpaa-alert-type">
                        <?php foreach (WPAA_PLUGIN_ALERT_TYPES as $type) : ?>
                            <option value="<?= $type ?>"><?= ucfirst($type) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="manage__item">
                    <label for="wpaa-alert-max-size">Max size</label>
                    <input type="text" id="wpaa-alert-max-size" placeholder="Add max size"/>
                </div>
                <div class="manage__item">
                    <label for="wpaa-alert-title-size">Title size</label>
                    <input type="text" id="wpaa-alert-title-size" placeholder="Add title size"/>
                </div>
                <div class="manage__item">
                    <label for="wpaa-alert-text-size">Text size</label>
                    <input type="text" id="wpaa-alert-text-size" placeholder="Add text size"/>
                </div>
                <div class="manage__item">
                    <label for="wpaa-alert-classes">Custom classes</label>
                    <input type="text" id="wpaa-alert-classes" placeholder="Add classes"/>
                </div>
            </div>
            <div class="wpaa-admin__result">
                <div class="wpaa-admin__preview">
                    Alert preview here...
                </div>
                <div class="wpaa-admin__shortcode">
                    <div class="shortcode__hint">Click to copy →</div>
                    <div class="shortcode__inner">
                        [alert type="info" title="Info!" title_size="18" text_size="16" max_size="700" html_classes="custom1 custom2 custom3"]Lorem ipsum dolor sit amet lorem ipsum dolor sit amet orem ipsum dolor sit amet. orem ipsum dolor sit amet. orem ipsum dolor sit amet. orem ipsum dolor sit amet[/alert]
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>