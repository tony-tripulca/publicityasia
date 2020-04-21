@extends('layouts.web.app')
@extends('layouts.web.header')
@extends('layouts.web.footer')

@extends('layouts.utilities')
@extends('layouts.web.styles')

@extends('layouts.web.scripts')

@section('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/onepage-scroll/onepage-scroll.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/animate.css') }}">
@endsection

@section('module-styles')
<style>
	.video-holder,.video-holder video{position:fixed;top:0;bottom:0;left:0;right:0;z-index:0;width:100%;height:100%;object-fit:cover;margin:auto}.video-holder:before{content:'';position:fixed;top:0;left:0;z-index:1010;height:100%;width:100%;background:rgba(43,43,43,.8)}.page-hero{margin-left:20px}.page-hero .specific.platform{margin-left:-15px}.page-cta{position:absolute;bottom:70px;left:0;right:0;width:120px;height:50px;margin:0 auto;padding:10px 0;border:2px solid #fff;background-color:transparent;text-align:center}.page-cta:hover{text-decoration:none}.page-down-button{position:absolute;bottom:20px;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);border:none;background-color:transparent;font-size:2rem}.onepage-pagination{top:auto;bottom:25px;left:auto;right:20px}.onepage-pagination li a{line-height:0;font-size:1.5rem}.onepage-pagination li a::before{z-index:-1;border:none;background-color:transparent;color:#fff;content:'\02013'}.onepage-pagination li a.active::before{z-index:-1;left:9.5px;margin-top:2px;border:none;color:#fff;content:'+'}@media (min-width:576px){.page-hero .specific.platform{margin-left:-20px}}@media (min-width:992px){.page-hero{margin-left:50px}.page-cta{bottom:40px;left:auto;right:auto;margin-left:50px}.onepage-pagination{right:50px}.onepage-pagination li a{font-size:2rem}}
</style>
@endsection

@section('content')
<section>
	<div class="row no-gutters h-100">
		<div class="col-12 d-flex align-items-center">
			<p class="page-hero ftra-medium text-20 text-sm-30 text-lg-35 text-xl-40 text-white">
				<span class="tlt space-35 space-sm-50">PUBLICITYASIA</span><br>
				<span class="tlt space-50 space-sm-65">IS A</span> <span class="tlt space-45 space-sm-65 text-red">LEADING</span><br>
				<span class="tlt">ENTERTAINMENT</span><br>
				<span class="tlt">+</span> <span class="tlt space-30 space-sm-40 text-red">CELEBRITY PR</span><br>
				<span class="tlt space-10 space-sm-40">AGENCY</span><span class="tlt text-15 text-sm-20">est. 2004</span>
			</p>
		</div>
	</div>
	<a href="{{ route('menu') }}" class="page-cta ftra-medium text-white">ABOUT</a>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
<section>
	<div class="row no-gutters h-100">
		<div class="col-12 d-flex align-items-center">
			<p class="page-hero ftra-medium text-20 text-sm-30 text-lg-35 text-xl-40 text-white">
				<span class="tlt space-45 space-sm-65 text-red">MULTI</span><span class="tlt specific platform space-45 space-sm-65">PLATFORM</span><br>
				<span class="tlt">CREATIVE</span><br>
				<span class="tlt text-red">COMMUNICATIONS</span><br>
				<span class="tlt">NETWORK&#8228;</span>
			</p>
		</div>
	</div>
	<a href="{{ route('menu', ['page' => 'profile']) }}" class="page-cta ftra-medium text-white">PROFILE</a>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
<section>
	<div class="row no-gutters h-100">
		<div class="col-12 d-flex align-items-center">
			<p class="page-hero ftra-medium text-20 text-sm-30 text-lg-35 text-xl-40 text-white">
				<span class="tlt">NATIONAL&#8228;</span><br>
				<span class="tlt">REGIONAL&#8228;</span><br>
				<span class="tlt">GLOBAL</span><span class="tlt text-red">REACH&#8228;</span><br>
			</p>
		</div>
	</div>
	<a href="{{ route('menu', ['page' => 'services']) }}" class="page-cta ftra-medium text-white">SERVICES</a>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
<section>
	<div class="row no-gutters h-100">
		<div class="col-12 d-flex align-items-center">
			<p class="page-hero ftra-medium text-20 text-sm-30 text-lg-35 text-xl-40 text-white">
				<span class="tlt text-red">RELEVANT&#8228;</span><br>
				<span class="tlt">IMPACTFUL&#8228;</span><br>
				<span class="tlt">NEWSWORTHY&#8228;</span><br>
			</p>
		</div>
	</div>
	<a href="{{ route('menu', ['page' => 'network']) }}" class="page-cta ftra-medium text-white">NETWORK</a href=>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
<section>
	<div class="row no-gutters h-100">
		<div class="col-12 d-flex align-items-center">
			<p class="page-hero ftra-medium text-20 text-sm-30 text-lg-35 text-xl-40 text-white">
				<span class="tlt text-red">ACCESS</span> <span class="tlt">TO</span><br>
				<span class="tlt">THE WORLD'S</span><br>
				<span class="tlt">BIGGEST STARS&#8228;</span><br>
			</p>
		</div>
	</div>
	<a href="#" class="page-cta ftra-medium text-white">ORIGINALS</a>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
<section>
	<div class="row no-gutters h-100">
		<div class="col-12 d-flex align-items-center">
			<p class="page-hero ftra-medium text-20 text-sm-30 text-lg-35 text-xl-40 text-white">
				<span class="tlt">STRATEGIC&#8228;</span><br>
				<span class="tlt text-red">ORIGINAL&#8228;</span><br>
				<span class="tlt">TRANSFORMATIVE&#8228;</span><br>
			</p>
		</div>
	</div>
	<a href="{{ route('menu', ['page' => 'experiential']) }}" class="page-cta ftra-medium text-white">EXPERIENTIAL</a>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
<section>
	<div class="row no-gutters h-100">
		<div class="col-12 d-flex align-items-center">
			<p class="page-hero ftra-medium text-20 text-sm-30 text-lg-35 text-xl-40 text-white">
				<span class="tlt">WE MAKE</span><br>
				<span class="tlt text-red">HOT</span> <span class="tlt">HAPPEN&#8228;</span>
			</p>
		</div>
	</div>
	<a href="{{ route('menu', ['page' => 'connect']) }}" class="page-cta ftra-medium text-white">CONNECT</a>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
@endsection

@section('plugin-scripts')
<script type="text/javascript" src="{{ asset('plugins/onepage-scroll/jquery.onepage-scroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/lettering-js/jquery.lettering.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/textillate/jquery.textillate.js') }}"></script>
<!-- <script src="https://archive.org/jw/8/jwplayer.js"></script> -->
@endsection

@section('module-scripts')
<script type="text/javascript">
	$(()=>{$(".tlt").textillate({loop:!1,minDisplayTime:1e3,initialDelay:1e3,autoStart:!0,in:{effect:"fadeInUp",delayScale:1.5,delay:50,sync:!0,shuffle:!1,reverse:!1,callback:function(){}},out:{effect:"fadeOut",delayScale:.5,delay:50,sync:!0,shuffle:!1,reverse:!1,callback:function(){}},callback:function(){},type:"char"}),$(".main").onepage_scroll({sectionContainer:"section",easing:"ease",animationTime:1e3,pagination:!0,updateURL:!1,beforeMove:function(index){$(".page-cta").fadeTo(50,0),$(".page-hero").fadeTo(50,0),$(".page-down-button").fadeTo(50,0),setTimeout((function(){$(".page-cta").stop(!0,!1).fadeTo(500,1),$(".page-hero").stop(!0,!1).fadeTo(500,1),$(".page-down-button").stop(!0,!1).fadeTo(500,1)}),500)},afterMove:function(index){},loop:!1,keyboard:!0,responsiveFallback:!1,direction:"vertical"}),$(".page-down-button").on("click",(function(){$(".main").moveDown()}))});
</script>
@endsection