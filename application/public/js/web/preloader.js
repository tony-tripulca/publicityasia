var loader = {
    status: false,
    percent: 10,
    element: ($('.cover')),
    loop: function(interval) {
        setTimeout(() => {
            if(this.percent <= 100) {
                if(this.status) {
                    this.loop(50);
                } else {
                    this.loop(500);
                }
            } else {
                $('.loader').fadeTo(1000, 0);
            }

            $(this.element).css('background-image', `linear-gradient(to right,
                red,
                red 10%,
                red ${this.percent+=2}%,
                white ${this.percent+=5}%,
                white 100%)`);
        }, interval);
    }
}

loader.loop(500);

$(window).on('load', function() {
    loader.status = true;
});




