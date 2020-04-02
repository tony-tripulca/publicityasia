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

    // Articles carousel
    var _articles = $('#network .carousel-inner');
    var url = "";

    for (let i = 0; i < 15; i++) {
        switch(i) {
            case 0:
                url = "https://www.hollywoodreporter.com/news/netflix-acquires-filipino-rom-girl-allergic-wifi-1229889";
                break;
            case 1:
                url = "https://variety.com/2019/tv/asia/hbo-asia-renews-halfworlds-third-season-series-in-philippines-1203419572/";
                break;
            case 2:
                url = "https://decider.com/2018/04/09/amo-netflix-review/";
                break;
            case 3:
                url = "https://screenanarchy.com/2016/11/seclusion-trailer-in-erik-matti.html";
                break;
            case 4:
                url = "https://www.economist.com/asia/2015/11/21/she-once-was-lost";
                break;
            case 5:
                url = "https://www.imdb.com/news/ni62702733";
                break;
            case 6:
                url = "https://tv5.espn.com/story/_/id/28258103/sibol-dota-2-team-gives-ph-another-gold-medal-esports";
                break;
            case 7:
                url = "https://onenews.ph/phl-esports-bets-seen-to-lead-in-sea-games";
                break;
            case 8:
                url = "https://news.abs-cbn.com/sports/12/08/19/sea-games-pinoy-mobile-legends-team-wins-first-esports-gold";
                break;
            case 9:
                url = "https://www.gmanetwork.com/news/showbiz/chikaminute/704503/rocco-nacino-topbills-new-movie-write-about-love/story/";
                break;
            case 10:
                url = "https://www.rappler.com/entertainment/music/244519-yeng-constantino-ikaw-ang-akin-write-about-love";
                break;
            case 11:
                url = "https://sports.inquirer.net/379065/uncanny-heroes";
                break;
            case 12:
                url = "https://www.preview.ph/beauty/5-derma-approved-ways-to-look-like-a-star-adv-con-pr";
                break;
            case 13:
                url = "https://www.spin.ph/life/guide/sea-games-viewing-guide-a1374-20191119";
                break;
            case 14:
                url = "https://www.esquiremag.ph/money/capital/c-estates-is-poised-to-democratize-the-real-estate-market-a1926-20190716";
                break;
        }
        $(_articles).append(`
            <div class="carousel-item ${ i == 0 ? 'active' : ''}">
                <a href="${url}" target="_blank">
                    <img src="application/public/images/articles/a${i}.jpg" class="d-block w-100" alt="...">
                </a>
            </div>
        `);
        
    }

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

$(window).on('load', function() {
    var urlParams = new URLSearchParams(window.location.search);

    switch(urlParams.get('page')) {
        case "profile":
            openMenu(
                $('.card-profile').offset().top - 52,
                $('.card-profile .menu-action button'),
                $('#profile')
            );
            break;
        case "services":
            openMenu(
                $('.card-services').offset().top - 52,
                $('.card-services .menu-action button'),
                $('#services')
            );
            break;
        case "network":
            openMenu(
                $('.card-network').offset().top - 52,
                $('.card-network .menu-action button'),
                $('#network')
            );
            break;
        case "originals":
            openMenu(
                $('.card-originals').offset().top - 52,
                $('.card-originals .menu-action button'),
                $('#originals')
            );
            break;
        case "experiential":
            openMenu(
                $('.card-experiential').offset().top - 52,
                $('.card-experiential .menu-action button'),
                $('#experiential')
            );
            break;
        case "connect":
            openMenu(
                $('.card-connect').offset().top - 52,
                $('.card-connect .menu-action button'),
                $('#connect')
            );
            break;
        default:
            $(window).scrollTop(0);
            break;
    }
});

function openMenu(offset, button, content) {
    setTimeout(function() {
        $('html, boby').animate({ scrollTop: offset });
        $(button).removeClass('collapsed');
        $(content).addClass('show');
    }, 1000);
}