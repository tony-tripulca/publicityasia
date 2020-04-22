var loader = {
    status: false,
    percent: 10,
    element: ($('.holder .lead-2')),
    loop: function(interval) {
        setTimeout(() => {
            if(this.percent <= 100) {
                if(this.status) {
                    this.loop(50);
                } else {
                    this.loop(500);
                }

            } else {
                $('.loader').fadeOut('slow');
                $(window).scrollTop(0);
            }

            $(this.element).css('background', `linear-gradient(to right,
                red,
                red 10%,
                red ${this.percent+=2}%,
                white ${this.percent+=5}%,
                white 100%)`);
            $(this.element).css('-webkit-background-clip', 'text');
            $(this.element).css('background-clip', 'text');
            $(this.element).css('-webkit-text-fill-color', 'transparent');
            $(this.element).css('-moz-text-fill-color', 'transparent');
        }, interval);
    }
}

loader.loop(500);

$(window).on('load', function() {
    loader.status = true;
});