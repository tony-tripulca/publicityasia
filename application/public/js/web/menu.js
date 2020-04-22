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

	$(window).on("scroll", function () {

	});
});

$(window).on("load", function () {

});

function init() {

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
					<img src="../../images/articles/a${i}.jpg" width="80%" alt="...">
				</a>
			</div>`
		);
	}
}