(function($) {
    "use strict";
    $(window).on('elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction('frontend/element_ready/minterio-hero-slider.default', function() {
            var editorActive = $('body').hasClass('elementor-editor-active');
            if (editorActive) {}
        });
        elementorFrontend.hooks.addAction('frontend/element_ready/global', function($scope) {});
        elementorFrontend.hooks.addAction('frontend/element_ready/widget', function($scope) {
            var editorActive = $('body').hasClass('elementor-editor-active');
            if (editorActive) {}
        });
    });
})(jQuery);