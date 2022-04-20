(function($) {
    "use strict";
    $(window).on("load", function() {
        if ($(window).width() <= 1199) {
            $('.responsive-mobile-menu').html($('.header-menu').html());
        }
        $(".menu-btn").on("click", function() {
            $(this).toggleClass("active");
            $(".responsive-mobile-menu").toggleClass("active");
        });
        $(".responsive-mobile-menu ul ul").parent().addClass("menu-item-has-children");
        $(".responsive-mobile-menu").on('click', 'li.menu-item-has-children > a', function() {
            $(this).parent().toggleClass("active").siblings().removeClass("active");
            $(this).next("ul").slideToggle();
            $(this).parent().siblings().find("ul").slideUp();
            return false;
        });
        $("html, .menu-btn.active").on("click", function() {
            $(".responsive-mobile-menu").removeClass("active");
            $(".menu-btn").removeClass("active");
        });
        $(".menu-btn, .responsive-mobile-menu").on("click", function(e) {
            e.stopPropagation();
        });
        $('.cart-btn').on('click', function() {
            if ($(this).closest('.cart-btn-item').hasClass('opened')) {
                $(this).closest('.cart-btn-item').removeClass('opened');
                $(this).closest('.cart-btn-item').find('.cart-widget').hide();
            } else {
                $(this).closest('.cart-btn-item').addClass('opened');
                $(this).closest('.cart-btn-item').find('.cart-widget').fadeIn();
            }
            return false;
        });
        $('.lnk-default').on('mouseenter', function(e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('.hover').css({
                top: relY,
                left: relX
            })
        }).on('mouseout', function(e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('.hover').css({
                top: relY,
                left: relX
            })
        });
        $(".search-btn").on("click", function() {
            $(".header-search").addClass("active");
            return false;
        });
        $(".search-close-btn").on("click", function() {
            $(".header-search").removeClass("active");
        })
        $('.page-loading').fadeOut();
        $(window).on("scroll", function() {
            if ($(this).scrollTop() > 1) {
                $(".header").addClass("sticky animated slideInDown");
            } else {
                $(".header").removeClass("sticky animated slideInDown");
            }
        });
        $(function() {
            var $portfolio = $('.masonary');
            $portfolio.isotope({
                masonry: {}
            });
            var $optionSets = $('.option-set'),
                $optionLinks = $optionSets.find('a');
            $optionLinks.on('click', function() {
                var $this = $(this);
                if ($this.hasClass('selected')) {
                    return false;
                }
                var $optionSet = $this.parents('.option-set');
                $optionSet.find('.selected').removeClass('selected');
                $this.addClass('selected');
                var options = {},
                    key = $optionSet.attr('data-option-key'),
                    value = $this.attr('data-option-value');
                value = value === 'false' ? false : value;
                options[key] = value;
                if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                    changeLayoutMode($this, options)
                } else {
                    $portfolio.isotope(options);
                }
                return false;
            });
        });
        $('.wp-block-woocommerce-product-search').closest('.widget').addClass('widget_sn');
    });
    $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 500,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
    if (/\.(?:jpg|jpeg|gif|png)$/i.test($('.blocks-gallery-item:first a').attr('href'))) {
        $('.blocks-gallery-item a').magnificPopup({
            gallery: {
                enabled: true
            },
            type: 'image',
            closeBtnInside: false,
            mainClass: 'mfp-fade'
        });
    }
    $('.has-popup-image').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'popup-box',
        image: {
            verticalFit: true
        }
    });
    $('.has-popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        preloader: false,
        fixedContentPos: false,
        mainClass: 'popup-box',
        callbacks: {
            markupParse: function(template, values, item) {
                template.find('iframe').attr('allow', 'autoplay');
            }
        }
    });
    $('.has-popup-music').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        preloader: false,
        fixedContentPos: false,
        mainClass: 'popup-box',
        callbacks: {
            markupParse: function(template, values, item) {
                template.find('iframe').attr('allow', 'autoplay');
            }
        }
    });
    $('.has-popup-gallery').on('click', function() {
        var gallery = $(this).attr('href');
        $(gallery).magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: false,
            mainClass: 'mfp-fade',
            removalDelay: 160,
            fixedContentPos: false,
            gallery: {
                enabled: true
            }
        }).magnificPopup('open');
        return false;
    });
})(jQuery);