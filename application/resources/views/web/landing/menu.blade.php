@extends('layouts.web.app')
@extends('layouts.web.header')
@extends('layouts.web.footer')

@section('plugin-styles')

@endsection

@section('module-styles')

@endsection

@section('plugin-scripts')
<script type="text/javascript" src="{{ asset('plugins/onepage-scroll/jquery.onepage-scroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/lettering-js/jquery.lettering.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/textillate/jquery.textillate.js') }}"></script>
@endsection

@section('module-scripts')

@endsection

@section('content')
<div id="main-menu" class="accordion">
    <div class="card card-profile">
        <div class="menu-action">
            <button type="button" class="btn-block collapsed bg-gray-1 ftra-medium text-white text-30" data-toggle="collapse" data-target="#profile">
                PROFILE
            </button>
        </div>
        <div id="profile" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-gray-3 ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 offset-lg-4 col-lg-7">
                        <p>PUBLICITYASIA is a commercial PR firm in the Philippines that specializes in entertainment and celebrity. Dynamic and creatively-driven, we bring a modern approach to building brands in a unique and exciting way by combining strategic media and social campaigns to deliver relevancy and results.</p>
                    
                        <p>Founded in 2004, our track record and vast connections across media and entertainment allows us to activate some of the most popular campaign executions producing valuable media coverage, brand recall and effectively reaching target audiences.</p>

                        <p>We don’t just make noise. We create <span class="text-red">impact.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-services">
        <div class="menu-action">
            <button type="button" class="btn-block collapsed bg-gray-2 ftra-medium text-red text-30" data-toggle="collapse" data-target="#services">
                SERVICES
            </button>
        </div>
        <div id="services" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 offset-lg-1 col-lg-4">
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
                    <div class="col-12 col-lg-4">
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
        </div>
    </div>
    <div class="card card-network">
        <div class="menu-action">
            <button type="button" class="btn-block collapsed bg-gray-3 ftra-medium text-white text-30" data-toggle="collapse" data-target="#network">
                NETWORK
            </button>
        </div>
        <div id="network" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 offset-lg-4 col-lg-4 text-center">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner"></div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-originals">
        <div class="menu-action">
            <button type="button" class="btn-block collapsed bg-gray-4 ftra-medium text-red text-30" data-toggle="collapse" data-target="#originals">
                ORIGINALS
            </button>
        </div>
        <div id="originals" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 text-center">
                        <p>ORIGINALS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-experiential">
        <div class="menu-action">
            <button type="button" class="btn-block collapsed bg-gray-5 ftra-medium text-white text-30" data-toggle="collapse" data-target="#experiential">
                EXPERIENTIAL
            </button>
        </div>
        <div id="experiential" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 mb-5">
                        <p>We enable clients to amplify their brand and value through transformative events and co-branding partnerships that sit at the heart of pop-culture. Through original concepts and customized strategies, we weave branded entertainment and produce relevant and headline-grabbing fan experiences that hits the brand’s target audience. By creating meaningful and lasting impressions, we are able to convert fans into avid loyalists.</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('images/leadingseries.png') }}" width="80%" class="img-fluid">
                    </div>
                    <div class="col-12 col-lg-4">
                        
                    </div>
                    <div class="col-12 col-lg-4 text-right">
                        <img src="{{ asset('images/idolfest.png') }}" width="50%" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="test" class="card card-connect">
        <div class="menu-action">
            <button type="button" class="btn-block collapsed bg-gray-6 ftra-medium text-red text-30" data-toggle="collapse" data-target="#connect">
                CONNECT
            </button>
        </div>
        <div id="connect" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters h-100">
                    <div class="col-12 h-100 d-flex align-items-end">
                        <p class="text-justified">We look forward to helping you achieve your brand goals and promo requirements. Feel free to reach us via email <a href="mailto:pr@publicityasia.com" class="text-red">pr@publicityasia.com</a> and we will respond back as soon as we can.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection