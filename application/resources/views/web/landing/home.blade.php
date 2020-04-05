@extends('layouts.web.app')
@extends('layouts.web.header')
@extends('layouts.web.footer')

@section('plugin-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/onepage-scroll/onepage-scroll.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/animate.css') }}">
@endsection

@section('module-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/web/home.css') }}">
@endsection

@section('plugin-scripts')
<script type="text/javascript" src="{{ asset('plugins/onepage-scroll/jquery.onepage-scroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/lettering-js/jquery.lettering.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/textillate/jquery.textillate.js') }}"></script>
<!-- <script src="https://archive.org/jw/8/jwplayer.js"></script> -->
@endsection

@section('module-scripts')
<script type="text/javascript" src="{{ asset('js/web/home.js') }}"></script>
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
	<button class="page-cta ftra-medium text-white">MENU</button>
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
	<button class="page-cta ftra-medium text-white">PROFILE</button>
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
	<button class="page-cta ftra-medium text-white">SERVICES</button>
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
	<button class="page-cta ftra-medium text-white">NETWORK</button>
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
	<button class="page-cta ftra-medium text-white">ORIGINALS</button>
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
	<button class="page-cta ftra-medium text-white">EXPERIENTIAL</button>
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
	<button class="page-cta ftra-medium text-white">CONNECT</button>
	<button class="page-down-button text-white"><span class="ti-angle-down"></span></button>
</section>
@endsection