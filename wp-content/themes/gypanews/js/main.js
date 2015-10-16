$(document).ready(function() {

    var Main = Main || {};

    Main = {
        init:  function() {
            this.slides();
            this.mobile();
        },
        slides: function() {
            $('.featured').specialSlider();
            $('.slide').specialSlider({animation: 'fade'});
        },
        mobile: function () {

            // Menu Mobile
            $(document).on('click touchstart', '.mobile-menu .menu', function() {
                var menu = $(this).parent();
                var parent = menu.parent();

                if(!menu.hasClass('active')) {
                    parent.find('ul').stop().slideDown();
                    menu.addClass('active');
                } else {
                    parent.find('ul').stop().slideUp();
                    menu.removeClass('active');
                }
            });

            if(Main.isMobile()) {
                Main.reorderAds();
            }

            $(window).resize(function() {
                var widthPage = $(window).width() + 17;
                var content = $('.ads');

                if(widthPage > 767) {
                    content.find('.ad-current').remove();
                    content.find('.ad').show();
                } else {
                    Main.reorderAds();
                }
            });
        },
        reorderAds: function() {

            $('.ads').each(function() {

                var ul = $(this).find('ul');
                var ads = $(this).find('.ad');
                var total = ads.length - 1;
                var current = 0;

                var content = ads.eq(current).html();
                ads.hide();

                if(ul.find('.ad-current').length == 0) {
                    ul.append('<li class="ad-current">' + content + '</li>');
                } else {
                    ul.find('.ad-current').html(content);
                }


                var change = function() {

                    var next = current + 1;
                    if(next > total)
                        next = 0;

                    content = ads.eq(next).html();
                    ul.find('.ad-current').html(content);
                    current = next;

                };

                setInterval(change, 5000);
            });
        },
        isMobile: function() {
            var widthPage = $(window).width() + 17;
            return (widthPage < 768);
        }
    };

    Main.init();
});