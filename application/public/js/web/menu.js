$(() => {
    var control = {
        menu: $('.menu.item'),
        label: $('.menu.item h1'),
        content: $('.menu.content'),
        offset: [
            $('#profile').offset().top - 52,
            $('#services').offset().top - 52,
            $('#network').offset().top - 52,
            $('#originals').offset().top - 52,
            $('#experiential').offset().top - 52,
            $('#connect').offset().top - 52
        ],
        index: 0
    };

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

    $(control.menu).on('click', function(event) {
        control.index = control.menu.index(this);

        closeAllMenu(control, control.index);

        // Remove if clause when originals content is available
        if(control.index != 3) {
            toggleMenu(
                control.offset[control.index],
                control.label[control.index],
                control.content[control.index]
            );
        }
    });
});

$(window).on('load', function() {
    var urlParams = new URLSearchParams(window.location.search);

    switch(urlParams.get('page')) {
        case "profile":
            openMenu(
                $('#profile').offset().top - 52,
                $('#profile h1'),
                $('#profile-content')
            );
            break;
        case "services":
            openMenu(
                $('#services').offset().top - 52,
                $('#services h1'),
                $('#services-content')
            );
            break;
        case "network":
            openMenu(
                $('#network').offset().top - 52,
                $('#network h1'),
                $('#network-content')
            );
            break;
        case "originals":
            openMenu(
                $('#originals').offset().top - 52,
                $('#originals h1'),
                $('#originals-content')
            );
            break;
        case "experiential":
            openMenu(
                $('#experiential').offset().top - 52,
                $('#experiential h1'),
                $('#experiential-content')
            );
            break;
        case "connect":
            openMenu(
                $('#connect').offset().top - 52,
                $('#connect h1'),
                $('#connect-content')
            );
            break;
        default:
            $(window).scrollTop(0);
            break;
    }
});

function toggleMenu(offset, label, content) {
    $('html, body').animate({ scrollTop: offset });
    $(label).toggleClass('active');
    $(content).toggleClass('active');
    $(content).find('.lead-control').toggleClass('active');
}

function openMenu(offset, label, content) {
    setTimeout(function() {
        $('html, body').animate({ scrollTop: offset });
        $(label).addClass('active');
        $(content).addClass('active');
        $(content).find('.lead-control').addClass('active');
    }, 1000);
}

function closeAllMenu(control, index) {
    for(let i = 0; i < control.label.length; i++) {
        if(i != index) {
            $(control.label[i]).removeClass('active');
            $(control.content[i]).removeClass('active');
            $(control.content[i]).find('.lead-control').removeClass('active');
        }
    }
}