$(document).ready(function() {
    $(".rslides").responsiveSlides();

    $('.js--head-btn').click(function(e) {
        var   that = $(this)
            , menu = $('.js--head-bot');

        if (menu.css('display') === 'none') {
            menu.slideDown();
        } else {
            menu.slideUp();
        }

        e.preventDefault();
    });

    // portable
    enquire.register("screen and (max-width: 1023px)", {
        match : function() {
            $('.js--dropdown').on('click', function(e) {
                var   that = $(this)
                    , menu = that.find('.js--head-bot-dropdown');

                if (menu.css('display') === 'none') {
                    that.addClass('open-dropdown');
                    menu.slideDown();
                } else {
                    that.removeClass('open-dropdown');
                    menu.slideUp();
                }

                e.preventDefault();
            });
        }
    });

    // desktop
    enquire.register("screen and (min-width: 1024px)", {
        match : function() {
            $('.js--dropdown').off('click');
            $('.js--head-bot-dropdown').attr('style', '');
        }
    });

    $('.js--btn-support').click(function(e) {
        var   that = $(this)
            , menu = $('.js--head-mid-login');

        if (menu.css('display') === 'none') {
            menu.slideDown();
        } else {
            menu.slideUp();
        }

        e.preventDefault();
    });

    $('.js--sly__nav > li > a:first').addClass('current');
    $('#sly-products').addClass('current');

    (function () {
		var $frame  = $('#sly-products');
		var $slidee = $frame.children('ul').eq(0);
		var $wrap   = $frame.parent();

		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'basic',
			smart: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
			startAt: 0,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			pagesBar: $wrap.find('.pages'),
			activatePageOn: 'click',
			speed: 300,
			elasticBounds: 1,
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,

			// Buttons
			forward: $wrap.find('.forward'),
			backward: $wrap.find('.backward'),
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next'),
			prevPage: $wrap.find('.prevPage'),
			nextPage: $wrap.find('.nextPage')
		});

        $(window).resize(function() {
            $frame.sly('reload');
        });
	}());

    $('.js--sly__nav > li > a').click(function(e) {
        var   id = $(this).attr('href')
            , frames = $('.sly__frame')
            , links = $('.js--sly__nav > li > a');

        if (!$(this).hasClass('current')) {
            links.removeClass('current');
            $(this).addClass('current');
            frames.removeClass('current');
            $(id).addClass('current');

            $(id).sly(false);

            (function () {
                var $frame  = $(id);
                var $slidee = $frame.children('ul').eq(0);
                var $wrap   = $frame.parent();

                // Call Sly on frame
                $frame.sly({
                    horizontal: 1,
                    itemNav: 'basic',
                    smart: 1,
                    activateOn: 'click',
                    mouseDragging: 1,
                    touchDragging: 1,
                    releaseSwing: 1,
                    startAt: 0,
                    scrollBar: $wrap.find('.scrollbar'),
                    scrollBy: 1,
                    pagesBar: $wrap.find('.pages'),
                    activatePageOn: 'click',
                    speed: 300,
                    elasticBounds: 1,
                    dragHandle: 1,
                    dynamicHandle: 1,
                    clickBar: 1,

                    // Buttons
                    forward: $wrap.find('.forward'),
                    backward: $wrap.find('.backward'),
                    prev: $wrap.find('.prev'),
                    next: $wrap.find('.next'),
                    prevPage: $wrap.find('.prevPage'),
                    nextPage: $wrap.find('.nextPage')
                });

                $(window).resize(function() {
                    $frame.sly('reload');
                });
            }());
        }

        e.preventDefault();
    });
});
