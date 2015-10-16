(function($){
    $.fn.specialSlider = function(settings){

        var config = {
            'animation': 'slide',
            'delay': 5000,
            'fadeDelay': 500
        };

        if (settings){$.extend(config, settings);}

        // Variables
        var obj = this;
        var children = obj.find('ul li');
        var currentIndex = 0;
        var totalIndexes =  parseInt(children.length) - 1;
        var intervalPlay;

        return this.each(function(){

            children.eq(currentIndex).addClass('active');

            // Hidden Others
            children.each(function(index, elem) {
                if(index > 0)
                    elem.style.display = 'none';
            });

            obj.find('.buttons .prev').click(function() {
                var newIndex = currentIndex - 1;

                if(newIndex < 0)
                    newIndex = totalIndexes;

                showIndex(newIndex);
                currentIndex = newIndex;
                toogleInterval();
            });

            obj.find('.buttons .next').click(function() {
                nextCurrent();
                toogleInterval();
            });

            var showIndex = function(newIndex) {

                var active = children.eq(currentIndex);
                var current = children.eq(newIndex);
                current.addClass('active');
                active.removeClass('active').hide();


                if(config.animation == 'slide') {
                    current.slideDown();
                } else {
                    current.fadeIn(config.fadeDelay);
                }
            };

            var nextCurrent = function() {
                var newIndex = currentIndex + 1;
                if(newIndex > totalIndexes)
                    newIndex = 0;

                showIndex(newIndex);
                currentIndex = newIndex;
            };

            var toogleInterval = function() {
                clearInterval(intervalPlay);
                intervalPlay = setInterval(nextCurrent, config.delay);
            };

            toogleInterval();

        });
    };
})(jQuery);