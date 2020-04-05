@extends('layouts.web.app')
@extends('layouts.web.header')
@extends('layouts.web.footer')

@section('plugin-styles')

@endsection

@section('module-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/web/menu.css') }}">
@endsection

@section('plugin-scripts')

@endsection

@section('module-scripts')
<script type="text/javascript" src="{{ asset('js/web/menu.js') }}"></script>
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
    <div id="services-content" class="menu content bg-nero ftra-heavy text-13 line-15 space-10 text-justify text-white">
        <div class="row no-gutters h-100 d-flex align-items-center">
            <div class="col-12 col-lg-4 lead-control">
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
            <div class="col-12 col-lg-4 lead-control">
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
        <div class="row no-gutters h-100 d-flex align-items-center">
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
    <div id="experiential-content" class="menu content bg-gray-5 ftra-heavy text-15 line-15 space-10 text-justify text-white">
        <div class="row no-gutters h-100 d-flex align-items-center">
            <div class="col-12 mb-5 lead-control">
                <p>We enable clients to amplify their brand and value through transformative events and co-branding partnerships that sit at the heart of pop-culture. Through original concepts and customized strategies, we weave branded entertainment and produce relevant and headline-grabbing fan experiences that hits the brand’s target audience. By creating meaningful and lasting impressions, we are able to convert fans into avid loyalists.</p>
            </div>
            <div class="col-12 col-lg-4 lead-control text-left">
                <img src="{{ asset('images/leadingseries.png') }}" width="100%" class="img-fluid">
            </div>
            <div class="col-12 offset-lg-1 col-lg-4 lead-control text-center">
                <img src="{{ asset('images/womanforward.png') }}" width="100%" class="img-fluid">
            </div>
            <div class="col-12 col-lg-3 lead-control text-right">
                <img src="{{ asset('images/idolfest.png') }}" width="60%" class="img-fluid">
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