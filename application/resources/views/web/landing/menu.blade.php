@extends('layouts.web.app')
@extends('layouts.web.header')
@extends('layouts.web.footer')

@extends('layouts.utilities')
@extends('layouts.web.styles')

@extends('layouts.web.scripts')

@section('plugin-styles')

@endsection

@section('module-styles')
<style>
    .main-menu{position:absolute;top:52px;width:100%;height:calc(100% - 52px)}.menu.item{height:calc(100% / 6)}.menu.item h1{padding:0 50px}.menu.item h1::after{position:absolute;right:50px;content:"+";color:#fff}.menu.item h1.active::after{right:48px;content:"\02013";color:#fff}.menu.content{height:0;padding:0 50px;-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-ms-transition:all .3s ease;-o-transition:all .3s ease;transition:all .3s ease}.lead-control{display:none}.menu.content.active{height:calc(100% - 92px)}.lead-control.active{display:block}#profile-content{background-image:url(../../images/profile.jpg);background-size:cover;background-position:left center;background-repeat:no-repeat}#services-content{background-image:url(../../images/services.jpg);background-size:cover;background-position:right center;background-repeat:no-repeat}#services-content .list-group{margin:0;padding:0}#services-content .list-group-item{margin:0;padding:0 0;border:none;background-color:transparent}.carousel-control-prev{left:-40px}.carousel-control-next{right:-40px}#connect-content{background-image:url(../../images/connect.jpg);background-size:cover;background-position:center center;background-repeat:no-repeat}#connect-content .lead-control{padding-bottom:20px}@media (min-height:720px){#network-content #article-carousel{margin-top:60px}}
</style>
@endsection

@section('plugin-scripts')

@endsection

@section('module-scripts')
<script type="text/javascript">
    function toggleMenu(offset,label,content){$("html, body").animate({scrollTop:offset}),$(label).toggleClass("active"),$(content).toggleClass("active"),$(content).find(".lead-control").toggleClass("active")}function openMenu(offset,label,content){setTimeout((function(){$("html, body").animate({scrollTop:offset}),$(label).addClass("active"),$(content).addClass("active"),$(content).find(".lead-control").addClass("active")}),1e3)}function closeAllMenu(control,index){for(let i=0;i<control.label.length;i++)i!=index&&($(control.label[i]).removeClass("active"),$(control.content[i]).removeClass("active"),$(control.content[i]).find(".lead-control").removeClass("active"))}$(()=>{var control={menu:$(".menu.item"),label:$(".menu.item h1"),content:$(".menu.content"),offset:[$("#profile").offset().top-52,$("#services").offset().top-52,$("#network").offset().top-52,$("#originals").offset().top-52,$("#experiential").offset().top-52,$("#connect").offset().top-52],index:0},_articles=$("#network-content .carousel-inner"),url="";for(let i=0;i<15;i++){switch(i){case 0:url="https://www.hollywoodreporter.com/news/netflix-acquires-filipino-rom-girl-allergic-wifi-1229889";break;case 1:url="https://variety.com/2019/tv/asia/hbo-asia-renews-halfworlds-third-season-series-in-philippines-1203419572/";break;case 2:url="https://decider.com/2018/04/09/amo-netflix-review/";break;case 3:url="https://screenanarchy.com/2016/11/seclusion-trailer-in-erik-matti.html";break;case 4:url="https://www.economist.com/asia/2015/11/21/she-once-was-lost";break;case 5:url="https://www.imdb.com/news/ni62702733";break;case 6:url="https://tv5.espn.com/story/_/id/28258103/sibol-dota-2-team-gives-ph-another-gold-medal-esports";break;case 7:url="https://onenews.ph/phl-esports-bets-seen-to-lead-in-sea-games";break;case 8:url="https://news.abs-cbn.com/sports/12/08/19/sea-games-pinoy-mobile-legends-team-wins-first-esports-gold";break;case 9:url="https://www.gmanetwork.com/news/showbiz/chikaminute/704503/rocco-nacino-topbills-new-movie-write-about-love/story/";break;case 10:url="https://www.rappler.com/entertainment/music/244519-yeng-constantino-ikaw-ang-akin-write-about-love";break;case 11:url="https://sports.inquirer.net/379065/uncanny-heroes";break;case 12:url="https://www.preview.ph/beauty/5-derma-approved-ways-to-look-like-a-star-adv-con-pr";break;case 13:url="https://www.spin.ph/life/guide/sea-games-viewing-guide-a1374-20191119";break;case 14:url="https://www.esquiremag.ph/money/capital/c-estates-is-poised-to-democratize-the-real-estate-market-a1926-20190716"}var index,href;$(_articles).append(`<div class="carousel-item ${0==i?"active":""}">\n\t\t\t\t<a href=${href=url} target="_blank">\n\t\t\t\t\t<img src="{{ asset('images/articles/a${index=i}.jpg') }}" width="80%" alt="...">\n\t\t\t\t</a>\n\t\t\t</div>`)}$(control.menu).on("click",(function(event){control.index=control.menu.index(this),closeAllMenu(control,control.index),3!=control.index&&toggleMenu(control.offset[control.index],control.label[control.index],control.content[control.index])}))}),$(window).on("load",(function(){var urlParams;switch(new URLSearchParams(window.location.search).get("page")){case"profile":openMenu($("#profile").offset().top-52,$("#profile h1"),$("#profile-content"));break;case"services":openMenu($("#services").offset().top-52,$("#services h1"),$("#services-content"));break;case"network":openMenu($("#network").offset().top-52,$("#network h1"),$("#network-content"));break;case"originals":openMenu($("#originals").offset().top-52,$("#originals h1"),$("#originals-content"));break;case"experiential":openMenu($("#experiential").offset().top-52,$("#experiential h1"),$("#experiential-content"));break;case"connect":openMenu($("#connect").offset().top-52,$("#connect h1"),$("#connect-content"));break;default:$(window).scrollTop(0)}}));
</script>
@endsection

@section('content')
<section class="main-menu">
    <!-- divs are set to be siblings to achieve full height page accordion -->
    <div id="profile" class="menu item bg-gray-1 d-flex align-items-center">
        <h1 class="ftra-medium text-white text-30">PROFILE</h1>
    </div>
    <div id="profile-content" class="menu content bg-gray-3 ftra-heavy text-13 line-15 space-10 text-justify text-white">
        <div class="row no-gutters h-100 d-flex align-items-center">
            <div class="col-12 offset-lg-4 col-lg-8 lead-control">
                <p>PUBLICITYASIA is a commercial PR firm in the Philippines that specializes in entertainment and celebrity. Dynamic and creatively-driven, we bring a modern approach to building brands in a unique and exciting way by combining strategic media and social campaigns to deliver relevancy and results.</p><br>
            
                <p>Founded in 2004, our track record and vast connections across media and entertainment allows us to activate some of the most popular campaign executions producing valuable media coverage, brand recall and effectively reaching target audiences.</p><br>

                <p>We don’t just make noise. We create <span class="text-red">impact.</span></p>
            </div>
        </div>
    </div>
    <div id="services" class="menu item bg-gray-2 d-flex align-items-center">
        <h1 class="ftra-medium text-red text-30">SERVICES</h1>
    </div>
    <div id="services-content" class="menu content bg-nero ftra-heavy text-16 text-xl-20 line-15 space-10 text-justify text-white">
        <div class="row no-gutters h-100 d-flex align-items-center">
            <div class="col-12 col-lg-5 lead-control">
                <ul class="list-group">
                    <li class="list-group-item">Media Relations</li>
                    <li class="list-group-item">Celebrity Acquisition</li>
                    <li class="list-group-item">Creative & Strategy</li>
                    <li class="list-group-item">Campaign Management</li>
                    <li class="list-group-item">Digital & Media Placements</li>
                    <li class="list-group-item">Design & Layout Services</li>
                    <li class="list-group-item">Copywriting & Editing</li>
                    <li class="list-group-item">Digital & Social Media</li>
                    <li class="list-group-item">Event & Activation</li>
                </ul>
            </div>
            <div class="col-12 col-lg-5 lead-control">
                <ul class="list-group">
                    <li class="list-group-item">International PR</li>
                    <li class="list-group-item">Influencer Selection</li>
                    <li class="list-group-item">Public Imaging</li>
                    <li class="list-group-item">Executive Visibility</li>
                    <li class="list-group-item">Thought Leadership</li>
                    <li class="list-group-item">Original Production</li>
                    <li class="list-group-item">Partnerships & Integration</li>
                    <li class="list-group-item">Crisis Strategy & Response</li>
                    <li class="list-group-item">Other PR Services</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="network" class="menu item bg-gray-3 d-flex align-items-center">
        <h1 class="ftra-medium text-white text-30">NETWORK</h1>
    </div>
    <div id="network-content" class="menu content bg-gray-3 ftra-heavy text-13 line-15 space-10 text-justify text-white">
        <div class="row no-gutters h-100 d-flex align-items-start">
            <div class="col-12 offset-lg-4 col-lg-4 lead-control text-center">
                <div id="article-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner"></div>
                    <a class="carousel-control-prev" href="#article-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#article-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="originals" class="menu item bg-gray-4 d-flex align-items-center">
        <h1 class="ftra-medium text-red text-30">ORIGINALS</h1>
    </div>
    <div id="originals-content" class="menu content bg-nero ftra-heavy text-13 line-15 space-10 text-justify text-white">
        
    </div>
    <div id="experiential" class="menu item bg-gray-5 d-flex align-items-center">
        <h1 class="ftra-medium text-white text-30">EXPERIENTIAL</h1>
    </div>
    <div id="experiential-content" class="menu content bg-gray-5 ftra-heavy text-20 line-15 space-10 text-justify text-white">
        <div class="row no-gutters h-100 d-flex align-items-center">
            <div class="col-12 lead-control">
                <p>We enable clients to amplify their brand and value through transformative events and co-branding partnerships that sit at the heart of pop-culture. Through original concepts and customized strategies, we weave branded entertainment and produce relevant and headline-grabbing fan experiences that hits the brand’s target audience. By creating meaningful and lasting impressions, we are able to convert fans into avid loyalists.</p>
            </div>
            <div class="col-12 col-lg-5 lead-control text-left">
                <img src="{{ asset('images/leadingseries.png') }}" width="78%" class="img-fluid mb-3">
            </div>
            <div class="col-12 col-lg-5 lead-control text-left">
                <img src="{{ asset('images/womanforward.png') }}" width="85%" class="img-fluid mb-3">
            </div>
            <div class="col-12 col-lg-2 lead-control text-right">
                <img src="{{ asset('images/idolfest.png') }}" width="95%" class="img-fluid mb-3">
            </div>
        </div>
    </div>
    <div id="connect" class="menu item bg-gray-6 d-flex align-items-center">
        <h1 class="ftra-medium text-red text-30">CONNECT</h1>
    </div>
    <div id="connect-content" class="menu content bg-nero ftra-heavy text-20 line-15 space-10 text-justify text-white">
        <div class="row no-gutters h-100 d-flex align-items-end">
            <div class="col-12 lead-control">
                <p class="text-justified">We look forward to helping you achieve your brand goals and promo requirements. Feel free to reach us via email <a href="mailto:pr@publicityasia.com" class="text-red">pr@publicityasia.com</a> and we will respond back as soon as we can.</p>
            </div>
        </div>
    </div>
    <div id="placeholder" class="bg-nero"></div>
</section>
@endsection