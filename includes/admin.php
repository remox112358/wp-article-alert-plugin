<div class="wrap">
    <div class="wpaa-admin">
        <h1 class="wpaa-admin__title">Article Alert (<?= 'v' . WPAA_PLUGIN_VERSION ?>)</h1>
        <div class="wpaa-admin__links">
            <a href="https://github.com/remox112358/wp-article-alert-plugin" target="_blank">github</a>
        </div>
        <div class="wpaa-admin__wrapper">
            <div class="wpaa-admin__manage">
                <h2 class="manage__title">constructor</h2>
                <div class="manage__items">
                    <div class="manage__item manage__item--full">
                        <label for="wpaa-alert-text">Text</label>
                        <textarea rows="4" id="wpaa-alert-text" placeholder="Add text"><?= WPAA_PLUGIN_ALERT_DEFAULT['text'] ?></textarea>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-title">Title</label>
                        <input type="text" id="wpaa-alert-title" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['title'] ?>" placeholder="Add title">
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-type">Type</label>
                        <select id="wpaa-alert-type">
                            <?php foreach (WPAA_PLUGIN_ALERT_TYPES as $type) : ?>
                                <option value="<?= $type ?>" <?= $type == WPAA_PLUGIN_ALERT_DEFAULT['type'] ? 'selected' : '' ?>><?= ucfirst($type) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-max-size">Max size</label>
                        <input type="text" id="wpaa-alert-max-size" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['max_size'] ?>" placeholder="Add max size"/>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-title-size">Title size</label>
                        <input type="text" id="wpaa-alert-title-size" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['title_size'] ?>" placeholder="Add title size"/>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-text-size">Text size</label>
                        <input type="text" id="wpaa-alert-text-size" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['text_size'] ?>" placeholder="Add text size"/>
                    </div>
                    <div class="manage__item">
                        <label for="wpaa-alert-classes">Custom classes</label>
                        <input type="text" id="wpaa-alert-classes" value="<?= WPAA_PLUGIN_ALERT_DEFAULT['html_classes'] ?>" placeholder="Add classes"/>
                    </div>
                </div>
            </div>
            <div class="wpaa-admin__result">
                <div class="wpaa-admin__preview">
                    <h2 class="preview__title">preview</h2>
                    <div class="wpaa-alert wpaa-alert--info " style="max-width: 700px; margin-top: 20px; margin-bottom: 20px">
                        <div class="wpaa-alert__icon"><img src="http://localhost/wordpress/wp-content/plugins/article-alert/assets/icons/info.png" alt="Info"></div>
                        <div class="wpaa-alert__info">
                            <h4 class="wpaa-alert__title" style="font-size: 18px; line-height: 21px">Info!</h4>
                            <p class="wpaa-alert__text" style="font-size: 16px; line-height: 19px">Nullam at quam ut lacus aliquam tempor vel sed ipsum. Donec pellentesque tincidunt imperdiet. Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio.</p>
                        </div>
                    </div>
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