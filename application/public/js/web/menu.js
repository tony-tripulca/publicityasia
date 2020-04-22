// Globals
var control = {
	menu: {
		el: [],
		offset: [],
		height: [],
	},
	label: [],
	content: {
		el: [],
		offset: [],
		height: [],
	},
	index: 0,
};

$(() => {
	init();

	$(control.menu.el).on("click", function () {
		control.index = control.menu.el.index(this);

		if (control.index != 3) {
			toggleMenu(
				control.label[control.index],
				control.content.el[control.index]
			);
		}

		setTimeout(function() {
			getCurrentMenuOffset();
			getCurrentMenuHeight();
			getCurrentContentHeight();
		}, 500);
	});

	$(window).on("scroll", function () {
		if (getCurrentMedia() != "desktop" &&
			$(window).scrollTop() >= control.menu.offset[1] &&
			$(window).scrollTop() <= control.menu.offset[2] -
				((control.content.height[1] / 2) + control.menu.height[1])
		) {
			if ($(control.content.el[1]).hasClass("active")) {
				$("#services-dummy").show();
				$(".page-down-button").show();
			}
		} else {
			if ($(control.content.el[1]).hasClass("active")) {
				$("#services-dummy").hide();
				$(".page-down-button").hide();
			}
		}
	});

	$(".page-down-button").on("click", function () {
		$(window).scrollTop(
			$("#services-list").offset().top - (control.menu.height[1] + 42)
		);
	});
});

$(window).on("load", function () {
	var urlParams;

	setTimeout(function() {
		getCurrentMenuOffset();
		getCurrentMenuHeight();
		getCurrentContentHeight();
	}, 1500);

	switch (new URLSearchParams(window.location.search).get("page")) {
		case "profile":
			openMenu(
				$("#profile").offset().top - (getCurrentMedia() == "mobile" ? 44 : 52),
				$("#profile h1"),
				$("#profile-content")
			);
			break;
		case "services":
			openMenu(
				$("#services").offset().top - (getCurrentMedia() == "mobile" ? 44 : 52),
				$("#services h1"),
				$("#services-content")
			);
			break;
		case "network":
			openMenu(
				$("#network").offset().top - (getCurrentMedia() == "mobile" ? 44 : 52),
				$("#network h1"),
				$("#network-content")
			);
			break;
		case "originals":
			openMenu(
				$("#originals").offset().top - (getCurrentMedia() == "mobile" ? 44 : 52),
				$("#originals h1"),
				$("#originals-content")
			);
			break;
		case "experiential":
			openMenu(
				$("#experiential").offset().top - (getCurrentMedia() == "mobile" ? 44 : 52),
				$("#experiential h1"),
				$("#experiential-content")
			);
			break;
		case "connect":
			openMenu(
				$("#connect").offset().top - (getCurrentMedia() == "mobile" ? 44 : 52),
				$("#connect h1"),
				$("#connect-content")
			);
			break;
		default:
			$(window).scrollTop(0);
			break;
	}
});

function init() {
	getElements();
	getCurrentMenuOffset();
	getCurrentMenuHeight();
	getCurrentContentHeight();
	setArticles();
}

function getCurrentMedia() {
	if(window.matchMedia("(min-width: 992px)").matches) {
		return "desktop";

	} else if(window.matchMedia("(min-width: 768px)").matches){
		return "tablet";

	} else {
		return "mobile";
	}
}

function toggleMenu(label, content) {
	$(label).toggleClass("active");
	$(content).toggleClass("active");
	$(content).find(".lead-control").toggleClass("active");
}

function openMenu(offset, label, content) {
	setTimeout(function () {
		$("html, body").animate({ scrollTop: offset });
		$(label).addClass("active");
		$(content).addClass("active");
		$(content).find(".lead-control").addClass("active");
	}, 1000);
}

function closeAllMenu(control, index) {
	for (let i = 0; i < control.label.length; i++) {
		if(i != index) {
			$(control.label[i]).removeClass("active");
			$(control.content.el[i]).removeClass("active");
			$(control.content.el[i]).find(".lead-control").removeClass("active");
		}
	}
}

function getElements() {
	control.menu.el = $(".menu.item");
	control.content.el = $(".menu.content");
	control.label = $(".menu.item h1");
}

function getCurrentMenuOffset() {
	getElements();
	for (var i = 0; i < control.menu.el.length; i++) {
		control.menu.offset[i] = $(control.menu.el[i]).offset().top - 
			(getCurrentMedia() != "desktop" ? 44 : 52);
	}
}

function getCurrentMenuHeight() {
	getElements();
	for (var i = 0; i < control.menu.el.length; i++) {
		control.menu.height[i] = $(control.menu.el[i]).height();
	}
}

function getCurrentContentHeight() {
	getElements();
	for (var i = 0; i < control.content.el.length; i++) {
		control.content.height[i] = $(control.content.el[i]).height();
	}
}

function setArticles() {
	_articles = $("#network-content .carousel-inner");
	url = "";

	for (let i = 0; i < 15; i++) {
		switch (i) {
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
		$(_articles).append(
			`<div class="carousel-item ${0 == i ? "active" : ""}">
				<a href=${url} target="_blank">
					<img src="application/public/images/articles/a${i}.jpg" width="80%" alt="...">
				</a>
			</div>`
		);
	}
}