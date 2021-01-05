jQuery(document).ready($ => {

    /**
     * @const  {object}
     */
    const Helper = {
        /**
         * Copies the text of the element to the clipboard.
         * 
         * @param  {object} el - element
         * @returns  {void}
         */
        copyText: function(el) {
            var $tmp = $("<textarea>");
            
            $("body").append($tmp);
            $tmp.val($(el).text()).select();
            document.execCommand("copy");
            $tmp.remove();
        }
    }
    
    /**
     * @const  {object}
     */
    const Constructor = {
        
        /**
         * Returns the all data of alert.
         * 
         * @returns  {object}
         */
        getData: function() {
            return {
                text: $('#wpaa-alert-text').val().trim(),
                title: $('#wpaa-alert-title').val().trim(),
                type: $('#wpaa-alert-type').val().trim(),
                maxSize: $('#wpaa-alert-max-size').val().trim(),
                titleSize: $('#wpaa-alert-title-size').val().trim(),
                textSize: $('#wpaa-alert-text-size').val().trim(),
                customClasses: $('#wpaa-alert-classes').val().trim(),
                margin: $('#wpaa-alert-margin').val().trim(),
                imageSrc: $('#wpaa-alert-type').attr('data-image-src')
            }
        },

        /**
         * Render and update the alert preview.
         * 
         * @returns  {void}
         */
        render: function() {
            let data = this.getData();

            $('.wpaa-alert').fadeOut(200, function() {
                $(this).remove();

                $('.wpaa-admin__preview').append(`
                    <div class="wpaa-alert wpaa-alert--${data.type} ${data.customClasses} fade" style="max-width: ${data.maxSize}px; margin-top: ${data.margin}px; margin-bottom: ${data.margin}px">
                        <div class="wpaa-alert__icon"><img src="${data.imageSrc + data.type + '.png'}" alt="${data.type}"></div>
                        <div class="wpaa-alert__info">
                            <h4 class="wpaa-alert__title" style="font-size: ${data.titleSize}px; line-height: ${data.titleSize * 1.2}px">${data.title}</h4>
                            <p class="wpaa-alert__text" style="font-size: ${data.textSize}px; line-height: ${data.textSize * 1.2}px">${data.text}</p>
                        </div>
                    </div>
                `);
            });

            this.generate();
        },

        /**
         * Generate the shortcode of alert.
         * 
         * @returns  {void}
         */
        generate: function() {
            let data = this.getData();
            let shortcode = `[alert type="${data.type}" title="${data.title}" max_size="${data.maxSize}" title_size="${data.titleSize} text_size="${data.textSize}" html_classes="${data.customClasses}" margin="${data.margin}"]${data.text}[/alert]`;

            $('#shortcode').text(shortcode);
        }
    }

    // On data change
    $('[data-change="wpaa-alert-preview"]').on("input", () => {
        Constructor.render();
    });

    // On shortcode click
    $('#shortcode').on("click", function() {
        Helper.copyText(this);

        $('.shortcode__action').fadeIn(100);

        setTimeout(() => {
            $('.shortcode__action').fadeOut(100);
        }, 1 * 1000);
    });

});