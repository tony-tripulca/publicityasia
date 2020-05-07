// Globals
var menu = {
		el: [],
	},
	button = {
		el: null,
		label: null,
		offset: [],
		height: [],
	},
	content = {
		el: [],
		offset: [],
		height: [],
	};

$(() => {
	initMenu();

	$(".menu-button").on("click", function () {
		var index = $(".menu-button").index(this);

		if (index != 3) {
			toggleMenu(index);
			setMenuPosition();

			// $("html, body").css({
			// 	overflow: "hidden",
			// });

			setTimeout(function () {
				getCurrentButtonOffset();
				moveScrollToMenu(index);
			}, 200);

			// setTimeout(function() {
			// 	$("html, body").css({
			// 		overflow: "auto",
			// 	});
			// }, 2000);

			if ($(button.el[1]).hasClass("active")) {
				$("#services-dummy").css("display", "flex");
			} else {
				$("#services-dummy").css("display", "none");
			}
		}
	});

	$('.page-down-button').on('click', function() {
		$("html, body").animate({ scrollTop: $('#services-dummy').offset().top - 64 });
	});
});

$(window).on("load", function () {
	$('.quick-cover').fadeTo(500, 0);

	setTimeout(function() {
		$('.quick-cover').hide();
	}, 500);
});

function initMenu() {
	menu.el = $(".menu");
	button.el = $(".menu-button");
	button.label = $(".menu-title");
	content.el = $(".menu-content");

	closeAllMenuContent(-1);
	setMenuPosition();
	getButtonHeight();
	setArticles();
}

function toggleMenu(index) {
	$(button.el[index]).toggleClass("active");
	$(button.label[index]).toggleClass("active");
	$(content.el[index]).toggleClass("active");

	if ($(button.el[index]).hasClass("active")) {
		$(content.el[index]).stop(true, false).slideDown();
	} else {
		$(content.el[index]).stop(true, false).slideUp();
	}
}

function setMenuPosition() {
	var flag = 0;

	$.each(button.el, function (i, value) {
		if ($(value).hasClass("active")) {
			flag++;
		}
	});

	if (flag) {
		$(menu.el).css("position", "absolute");
	} else {
		$(menu.el).css("position", "fixed");
	}
}

function closeAllMenuContent(index) {
	$.each(content.el, function (i, value) {
		if (i != index) {
			$(value).slideUp();
		}
	});
}

function getCurrentButtonOffset() {
	$.each(button.el, function (i, value) {
		button.offset[i] = $(button.el[i]).offset().top - 44;
	});
}

function getButtonHeight() {
	$.each(button.el, function (i, value) {
		button.height[i] = $(button.el[i]).height();
	});
}

function getCurrentContentHeight() {
	$.each(content.el, function (i, value) {
		content.height[i] = $(content.el[i]).height();
	});
}

function moveScrollToMenu(index) {
	$("html, body").animate({ scrollTop: button.offset[index] });
}

function getCurrentMedia() {
	if (window.matchMedia("(min-width: 992px)").matches) {
		return "desktop";
	} else if (window.matchMedia("(min-width: 768px)").matches) {
		return "tablet";
	} else {
		return "mobile";
	}
}

function setArticles() {
	_articles = $(".network.menu-content .carousel-inner");
	link = "";

	for (let i = 0; i < 15; i++) {
		switch (i) {
			case 0:
				link =
					"https://www.hollywoodreporter.com/news/netflix-acquires-filipino-rom-girl-allergic-wifi-1229889";
				break;
			case 1:
				link =
					"https://variety.com/2019/tv/asia/hbo-asia-renews-halfworlds-third-season-series-in-philippines-1203419572/";
				break;
			case 2:
				link = "https://decider.com/2018/04/09/amo-netflix-review/";
				break;
			case 3:
				link =
					"https://screenanarchy.com/2016/11/seclusion-trailer-in-erik-matti.html";
				break;
			case 4:
				link =
					"https://www.economist.com/asia/2015/11/21/she-once-was-lost";
				break;
			case 5:
				link = "https://www.imdb.com/news/ni62702733";
				break;
			case 6:
				link =
					"https://tv5.espn.com/story/_/id/28258103/sibol-dota-2-team-gives-ph-another-gold-medal-esports";
				break;
			case 7:
				link =
					"https://onenews.ph/phl-esports-bets-seen-to-lead-in-sea-games";
				break;
			case 8:
				link =
					"https://news.abs-cbn.com/sports/12/08/19/sea-games-pinoy-mobile-legends-team-wins-first-esports-gold";
				break;
			case 9:
				link =
					"https://www.gmanetwork.com/news/showbiz/chikaminute/704503/rocco-nacino-topbills-new-movie-write-about-love/story/";
				break;
			case 10:
				link =
					"https://www.rappler.com/entertainment/music/244519-yeng-constantino-ikaw-ang-akin-write-about-love";
				break;
			case 11:
				link = "https://sports.inquirer.net/379065/uncanny-heroes";
				break;
			case 12:
				link =
					"https://www.preview.ph/beauty/5-derma-approved-ways-to-look-like-a-star-adv-con-pr";
				break;
			case 13:
				link =
					"https://www.spin.ph/life/guide/sea-games-viewing-guide-a1374-20191119";
				break;
			case 14:
				link =
					"https://www.esquiremag.ph/money/capital/c-estates-is-poised-to-democratize-the-real-estate-market-a1926-20190716";
				break;
		}
		$(_articles).append(
			`<div class="carousel-item ${0 == i ? "active" : ""}">
				<a href=${link} target="_blank">
					<img src="${url()}/application/public/images/articles/a${i}.jpg" width="80%" alt="...">
				</a>
			</div>`
		);
	}
}
