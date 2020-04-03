$(() => {
    var _articles = $('#network-content .carousel-inner');
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
                    <img src="application/public/images/articles/a${i}.jpg" width="80%" alt="...">
                </a>
            </div>
        `);
    }

    var _target, _lead_control;

    $('.menu.item').on('click', function(event) {
        _target = $(this).data('target');
        _lead_control = $(this).data('target') + " .lead-control";

        // Remove if clause when originals content is available
        if(_target != "#originals-content") {
            if($(_target).hasClass('active')) {
                setTimeout(function() {
                    $(_target).toggleClass('active');
                }, 100);

                $(_lead_control).toggleClass('active');
            } else {
                $(_target).toggleClass('active');

                setTimeout(function() {
                    $(_lead_control).toggleClass('active');
                }, 100);
            }
        }
    });
});

$(window).on('load', function() {
    var urlParams = new URLSearchParams(window.location.search);

    switch(urlParams.get('page')) {
        case "profile":
            openMenu(
                $('#profile').offset().top - 52,
                $('#profile-content'),
                $('#profile-content .lead-control')
            );
            break;
        case "services":
            openMenu(
                $('#services').offset().top - 52,
                $('#services-content'),
                $('#services-content .lead-control')
            );
            break;
        case "network":
            openMenu(
                $('#network').offset().top - 52,
                $('#network-content'),
                $('#network-content .lead-control')
            );
            break;
        case "originals":
            openMenu(
                $('#originals').offset().top - 52,
                $('#originals-content'),
                $('#originals-content .lead-control')
            );
            break;
        case "experiential":
            openMenu(
                $('#experiential').offset().top - 52,
                $('#experiential-content'),
                $('#experiential-content .lead-control')
            );
            break;
        case "connect":
            openMenu(
                $('#connect').offset().top - 52,
                $('#connect-content'),
                $('#connect-content .lead-control')
            );
            break;
        default:
            $(window).scrollTop(0);
            break;
    }
});

function openMenu(offset, target, lead) {
    setTimeout(function() {
        $('html, boby').animate({ scrollTop: offset });
        $(target).addClass('active');
        $(lead).addClass('active');
    }, 1000);
}