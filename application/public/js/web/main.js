$(() => {
    // Hamburger menu
    $('.hamburger').on('click', function(event) {
        if ($('.navbar-collapse').hasClass('show')) {
            $(this).removeClass('is-active');
        } else {
            $(this).addClass('is-active');
        }
    });

    var textillate = $('.tlt').textillate({
        loop: false,
        minDisplayTime: 1000,
        initialDelay: 1000,
        autoStart: true,
        in: {
            effect: 'fadeInUp',
            delayScale: 1.5,
            delay: 50,
            sync: true,
            shuffle: false,
            reverse: false,
            callback: function() {}
        },
        out: {
            effect: 'fadeOut',
            delayScale: 0.5,
            delay: 50,
            sync: true,
            shuffle: false,
            reverse: false,
            callback: function() {}
        },
        callback: function() {},
        type: 'char'
    });

    $(".main").onepage_scroll({
        sectionContainer: 'section',
        easing: 'ease',
        animationTime: 1000,
        pagination: true,
        updateURL: false,
        beforeMove: function(index) {
            $('.page-cta').fadeTo(50, 0);
            $('.page-hero').fadeTo(50, 0);
            $('.page-down-button').fadeTo(50, 0);
            
            setTimeout(function(){
	        	$('.page-cta').stop(true, false).fadeTo(500, 1);
				$('.page-hero').stop(true, false).fadeTo(500, 1);
				$('.page-down-button').stop(true, false).fadeTo(500, 1);
// 				textillate.textillate('in');
	        }, 500);
        },
        afterMove: function(index) {},
        loop: false,
        keyboard: true,
        responsiveFallback: false,
        direction: 'vertical'
    });

    $('.page-down-button').on('click', function(event) {
        $('.main').moveDown();
    });

    // jwPlayer
    // $('.video-holder').fadeTo(100, 0);
    // setTimeout(function(event) {
    //  $('.video-holder').fadeTo(5000, 1);
    // }, 3000);

    // jwplayer('banner-video').setup({
    //     "playlist": [{
    //         image: "https://archive.org/download/banner_20191106/banner.jpg",
    //         sources: [{
    //          file: "https://archive.org/download/pa-website-video-lite/pa-website-video-lite.mp4"
    //         }]
    //     }],
    //     "autostart": true,
    //     "startparam": "start",
    //     "repeat": "list",
    //     "controls": false
    // });
});