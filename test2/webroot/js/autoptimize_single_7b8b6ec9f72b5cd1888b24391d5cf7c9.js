/*!
 Ridiculously Responsive Social Sharing Buttons
 Team: @dbox, @joshuatuscan
 Site: http://www.rrssb.ml
*/
+(function(window, $, undefined) {
    'use strict';
    $.fn.rrssb = function(options) {
        var settings = $.extend({
            description: undefined,
            emailAddress: undefined,
            emailBody: undefined,
            emailSubject: undefined,
            image: undefined,
            title: undefined,
            url: undefined
        }, options);
        settings.emailSubject = settings.emailSubject || settings.title;
        settings.emailBody = settings.emailBody || ((settings.description ? settings.description : '') +
            (settings.url ? '\n\n' + settings.url : ''));
        for (var key in settings) {
            if (settings.hasOwnProperty(key) && settings[key] !== undefined) {
                settings[key] = encodeString(settings[key]);
            }
        };
        if (settings.url !== undefined) {
            $(this).find('.share-btn-facebook').attr('href', 'https://www.facebook.com/sharer/sharer.php?u=' + settings.url);
            $(this).find('.share-btn-tumblr').attr('href', 'http://tumblr.com/share/link?url=' + settings.url + (settings.title !== undefined ? '&name=' + settings.title : '') + (settings.description !== undefined ? '&description=' + settings.description : ''));
            $(this).find('.share-btn-linkedin').attr('href', 'http://www.linkedin.com/shareArticle?mini=true&url=' + settings.url + (settings.title !== undefined ? '&title=' + settings.title : '') + (settings.description !== undefined ? '&summary=' + settings.description : ''));
            $(this).find('.share-btn-twitter').attr('href', 'https://twitter.com/intent/tweet?text=' + (settings.description !== undefined ? settings.description : '') + '%20' + settings.url);
            $(this).find('.share-btn-reddit').attr('href', 'http://www.reddit.com/submit?url=' + settings.url + (settings.description !== undefined ? '&text=' + settings.description : '') + (settings.title !== undefined ? '&title=' + settings.title : ''));
            $(this).find('.share-btn-googleplus').attr('href', 'https://plus.google.com/share?url=' + settings.url);
            $(this).find('.share-btn-pinterest').attr('href', 'http://pinterest.com/pin/create/button/?url=' + settings.url + ((settings.image !== undefined) ? '&amp;media=' + settings.image : '') + (settings.description !== undefined ? '&description=' + settings.description : ''));
            $(this).find('.share-btn-print').attr('href', 'javascript:window.print()');
            $(this).find('.share-btn-whatsapp').attr('href', 'whatsapp://send?text=' + (settings.description !== undefined ? settings.description + '%20' : (settings.title !== undefined ? settings.title + '%20' : '')) + settings.url);
        }
        if (settings.emailAddress !== undefined || settings.emailSubject) {
            $(this).find('.rrssb-email a').attr('href', 'mailto:' + (settings.emailAddress ? settings.emailAddress : '') + '?' + (settings.emailSubject !== undefined ? 'subject=' + settings.emailSubject : '') + (settings.emailBody !== undefined ? '&body=' + settings.emailBody : ''));
        }
    };
    var encodeString = function(string) {
        if (string !== undefined && string !== null) {
            if (string.match(/%[0-9a-f]{2}/i) !== null) {
                string = decodeURIComponent(string);
                encodeString(string);
            } else {
                return encodeURIComponent(string);
            }
        }
    };
    var rrssbInit = function() {
        $('.share-btn').each(function(index) {
            $(this).addClass('share-btn-' + (index + 1));
        });
    };
    var popupCenter = function(url, title, w, h) {
        var dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop !== undefined ? window.screenTop : screen.top;
        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
        var left = ((width / 2) - (w / 2)) + dualScreenLeft;
        var top = ((height / 3) - (h / 3)) + dualScreenTop;
        var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        if (newWindow && newWindow.focus) {
            newWindow.focus();
        }
    };
    $(document).ready(function() {
        try {
            $(document).on('click', '.share-btn', {}, function popUp(e) {
                var self = $(this);
                popupCenter(self.attr('href'), self.attr('title'), 580, 470);
                e.preventDefault();
            });
        } catch (e) {}
        rrssbInit();
    });
    window.rrssbInit = rrssbInit;
})(window, jQuery);