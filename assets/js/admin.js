jQuery(document).ready($ => {
    
    const Constructor = {
        getData: function() {
            return {
                text: $('#wpaa-alert-text').val().trim(),
                title: $('#wpaa-alert-title').val().trim(),
                type: $('#wpaa-alert-type').val().trim(),
                maxSize: $('#wpaa-alert-max-size').val().trim(),
                titleSize: $('#wpaa-alert-title-size').val().trim(),
                textSize: $('#wpaa-alert-text-size').val().trim(),
                customClasses: $('#wpaa-alert-classes').val().trim(),
                margin: $('#wpaa-alert-margin').val().trim()
            }
        },
        render: function() {
            let data = this.getData();

            $('.wpaa-alert').remove();

            $('.wpaa-admin__preview').append(`
                <div class="wpaa-alert wpaa-alert--${data.type} ${data.customClasses}" style="max-width: ${data.maxSize}px; margin-top: ${data.margin}px; margin-bottom: ${data.margin}px">
                    <div class="wpaa-alert__icon"><img src="http://localhost/wordpress/wp-content/plugins/article-alert/assets/icons/info.png" alt="${data.type}"></div>
                    <div class="wpaa-alert__info">
                        <h4 class="wpaa-alert__title" style="font-size: ${data.titleSize}px; line-height: ${data.titleSize * 1.2}px">${data.title}</h4>
                        <p class="wpaa-alert__text" style="font-size: ${data.textSize}px; line-height: ${data.textSize * 1.2}px">${data.text}</p>
                    </div>
                </div>
            `);
        }
    }

    $('[data-change="wpaa-alert-preview"]').on("input", () => {
        Constructor.render();
    });

});