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
    <div class="card">
        <div class="menu-action bg-gray-1">
            <button type="button" class="btn btn-block ftra-medium text-white text-20" data-toggle="collapse" data-target="#about">
                PROFILE
            </button>
        </div>
        <div id="about" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-gray-3 ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 offset-lg-4 col-lg-7">
                        <p>PUBLICITYASIA is a commercial PR firm in the Philippines that specializes in entertainment and celebrity. Dynamic and creatively-driven, we bring a modern approach to building brands in a unique and exciting way by combining strategic media and social campaigns to deliver relevancy and results.</p>
                    
                        <p>Founded in 2004, our track record and vast connections across media and entertainment allows us to activate some of the most popular campaign executions producing valuable media coverage, brand recall and effectively reaching target audiences.</p>

                        <p>We don’t just make noise. We create impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="menu-action bg-gray-2">
            <button type="button" class="btn btn-block ftra-medium text-red text-20" data-toggle="collapse" data-target="#services">
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
    <div class="card">
        <div class="menu-action bg-gray-3">
            <button type="button" class="btn btn-block ftra-medium text-white text-20" data-toggle="collapse" data-target="#network">
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
    <div class="card">
        <div class="menu-action bg-gray-4">
            <button type="button" class="btn btn-block ftra-medium text-red text-20" data-toggle="collapse" data-target="#originals">
                ORIGINALS
            </button>
        </div>
        <div id="originals" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12">
                        <p>PUBLICITYASIA is a commercial PR firm in the Philippines that specializes in entertainment and celebrity. Dynamic and creatively-driven, we bring a modern approach to building brands in a unique and exciting way by combining strategic media and social campaigns to deliver relevancy and results.</p>
                    
                        <p>Founded in 2004, our track record and vast connections across media and entertainment allows us to activate some of the most popular campaign executions producing valuable media coverage, brand recall and effectively reaching target audiences.</p>

                        <p>We don’t just make noise. We create impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="menu-action bg-gray-5">
            <button type="button" class="btn btn-block ftra-medium text-white text-20" data-toggle="collapse" data-target="#experiential">
                EXPERIENTIAL
            </button>
        </div>
        <div id="experiential" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-8">
                        <p>PUBLICITYASIA is a commercial PR firm in the Philippines that specializes in entertainment and celebrity. Dynamic and creatively-driven, we bring a modern approach to building brands in a unique and exciting way by combining strategic media and social campaigns to deliver relevancy and results.</p>
                    
                        <p>Founded in 2004, our track record and vast connections across media and entertainment allows us to activate some of the most popular campaign executions producing valuable media coverage, brand recall and effectively reaching target audiences.</p>

                        <p>We don’t just make noise. We create impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="menu-action bg-gray-6">
            <button type="button" class="btn btn-block ftra-medium text-red text-20" data-toggle="collapse" data-target="#connect">
                CONNECT
            </button>
        </div>
        <div id="connect" class="collapse" data-parent="#main-menu">
            <div class="card-body bg-nero ftra-heavy text-15 text-white">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-8">
                        <p>PUBLICITYASIA is a commercial PR firm in the Philippines that specializes in entertainment and celebrity. Dynamic and creatively-driven, we bring a modern approach to building brands in a unique and exciting way by combining strategic media and social campaigns to deliver relevancy and results.</p>
                    
                        <p>Founded in 2004, our track record and vast connections across media and entertainment allows us to activate some of the most popular campaign executions producing valuable media coverage, brand recall and effectively reaching target audiences.</p>

                        <p>We don’t just make noise. We create impact.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection