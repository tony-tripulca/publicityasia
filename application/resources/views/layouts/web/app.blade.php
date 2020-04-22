<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="language" content="English">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="title" content="PUBLICITYASIA - Public Relations, Entertainment and Celebrity PR">
    <meta name="description" content="The Philippines' Leading PR Agency. Public Relations Firm. Celebrity. Entertainment. Sports. Business. Lifestyle. Travel. Tech. Digital. Social Media. Events.">
    <meta name="keywords" content="Public Relations Firm, Leading PR Agency, Entertainment, Celebrity, Sports, Business, Lifestyle, Travel, Tech, Digital, Social Media, Events">

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.publicityasia.com">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="PUBLICITYASIA">
    <meta property="og:title" content="PUBLICITYASIA - Public Relations, Entertainment and Celebrity PR">
    <meta property="og:description" content="The Philippines' Leading PR Agency. Public Relations Firm. Celebrity. Entertainment. Sports. Business. Lifestyle. Travel. Tech. Digital. Social Media. Events.">
    <meta property="og:image" content="{{ asset('images/pa-logo-meta.jpg') }}?up=11062019">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="1200">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@publicityasia">
    <meta name="twitter:creator" content="@publicityasia">
    <meta name="twitter:title" content="PUBLICITYASIA - Public Relations, Entertainment and Celebrity PR">
    <meta name="twitter:description" content="The Philippines' Leading PR Agency. Public Relations Firm. Celebrity. Entertainment. Sports. Business. Lifestyle. Travel. Tech. Digital. Social Media. Events.">

    <meta name="twitter:image" content="{{ asset('images/pa-logo-meta.jpg') }}?up=11062019">
    <meta name="twitter:image:width" content="1200">
    <meta name="twitter:image:height" content="1200">

    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icons/materialize-icons/iconfont/material-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('icons/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/hamburgers/dist/hamburgers.min.css') }}">

    @yield('plugin-styles')

    @if(config('app.env') == 'production')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/utilities.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/preloader.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/main.min.css') }}">
	@else
        <link rel="stylesheet" type="text/css" href="{{ asset('css/utilities.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/preloader.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/web/main.css') }}">
	@endif

    @yield('module-styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152698323-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-152698323-2');
    </script> -->

    <title>PUBLICITYASIA | Public Relations, Entertainment and Celebrity PR</title>
</head>

<body> 
    <div class="loader">
        <div class="holder d-flex align-items-center justify-content-center">
            <p class="lead-1 couture-bold text-25 text-md-40 text-lg-60 space-05">PUBLICITY</p>
            <p class="lead-2 couture-bold text-25 text-md-40 text-lg-60 space-05">ASIA</p>
        </div>
    </div>

    @if($has_video)
        <div class="video-holder">
            <video autoplay loop muted playsinline id="banner-video">
                <source src="{{ asset('videos/banner-video-MOV.mov') }}" type="video/mov">
                <source src="{{ asset('videos/banner-video-MP4.mp4') }}" type="video/mp4">
                <!-- <source src="https://archive.org/download/Sample_20170106/Sample.mp4" type="video/mp4"> -->
            </video>
        </div>
    @endif

    <header>
        @yield('navbar')
    </header>
    <main class="main">
        @yield('content')
    </main>

    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/popper/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    @yield('plugin-scripts')

    @if(config('app.env') == 'production')
        <script type="text/javascript" src="{{ asset('js/web/preloader.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/web/main.min.js') }}"></script>
	@else
        <script type="text/javascript" src="{{ asset('js/web/preloader.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/web/main.js') }}"></script>
	@endif

    @yield('module-scripts')
</body>

</html>