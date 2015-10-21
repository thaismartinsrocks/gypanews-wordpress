$(document).ready(function() {

    var Main = Main || {};

    Main = {
        init:  function() {
            this.slides();
            this.mobile();
            this.newsletter();
        },
        slides: function() {
            $('.featured').specialSlider();
            $('.slide').specialSlider({animation: 'fade'});
        },
        newsletter: function() {
            $(document).on('click touchstart', '.btn-newsletter', function() {

               var email = $('#news-email').val();
                if(!Main.isEmpty(email) && Main.isValidEmail(email)) {

                    var data = {'action': 'add_newsletter', 'email': email };
                    $.post(ajaxurl, data, function(response) {
                        if(response > 0) {
                            alert('Seu email foi cadastrado com sucesso!');
                        } else {
                            alert('Erro ao cadastrar seu email. Por favor, tente novamente.');
                        }

                    });
                }

                return false;
            });
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
        },
        isValidEmail: function(email) {

            var reg =  /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,10}$/;
            var m;

            if ((m = reg.exec(email)) !== null) {
                if (m.index === reg.lastIndex) {
                    reg.lastIndex++;
                    return true;
                }
            } else {
                return false;
            }
        },
        isEmpty: function(input) {

            if(typeof input == 'undefined' || input == '' || input == null || !input) {
                return true;
            }

            return false;
        }
    };

    Main.init();
});