@extends('layouts.web.app')
@extends('layouts.web.header')
@extends('layouts.web.footer')

@section('plugin-styles')

@endsection

@section('module-styles')
	@if(config('app.env') == 'production')
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web/menu.min.css') }}">
	@else
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web/menu.css') }}">
	@endif
@endsection

@section('plugin-scripts')

@endsection

@section('module-scripts')
	@if(config('app.env') == 'production')
		<script type="text/javascript" src="{{ asset('js/web/menu.min.js') }}"></script>
	@else
		<script type="text/javascript" src="{{ asset('js/web/menu.js') }}"></script>
	@endif
@endsection

@section('content')
<section>
	<div class="menu">
		<div id="profile" class="profile menu-button bg-gray-1 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-white">PROFILE</h1>
		</div>
		<div class="profile menu-content bg-gray-3 ftra-heavy text-white">
			<p>PUBLICITYASIA is a commercial PR firm in the Philippines that specializes in entertainment and celebrity. Dynamic and creatively-driven, we bring a modern approach to building brands in a unique and exciting way by combining strategic media and social campaigns to deliver relevancy and results.</p><br>
            
			<p>Founded in 2004, our track record and vast connections across media and entertainment allows us to activate some of the most popular campaign executions producing valuable media coverage, brand recall and effectively reaching target audiences.</p><br>

			<p>We don’t just make noise. We create <span class="text-red">impact.</span></p>
		</div>
		<div id="services" class="services menu-button bg-gray-2 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-red">SERVICES</h1>
		</div>
		<div class="services menu-content bg-gray-2 ftra-heavy text-white">
			<div class="image-holder d-lg-none">
				<div class="spacer"></div>
				<button class="services page-down-button text-white"><span class="ti-angle-down"></span></button>
				<div id="services-dummy" class="bg-gray-2 align-items-center">
					<h1 class="ftra-medium text-red">SERVICES</h1>
				</div>
			</div>
			<div id="services-list" class="row no-gutters d-flex align-items-start align-items-lg-center">
				<div class="col-12 col-lg-5">
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
				<div class="col-12 col-lg-5">
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
		<div id="network" class="network menu-button bg-gray-3 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-white">NETWORK</h1>
		</div>
		<div class="network menu-content bg-nero ftra-heavy text-white">
			<div class="row no-gutters h-100 d-flex align-items-start">
				<div class="col-12 offset-lg-4 col-lg-4 text-center">
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
		<div id="originals" class="originals menu-button bg-gray-4 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-red">ORIGINALS</h1>
		</div>
		<div class="originals menu-content bg-nero ftra-heavy text-white">
			<p>Cupidatat in voluptate fugiat ipsum. Ut nulla sint ex tempor Lorem exercitation commodo nulla voluptate in adipisicing qui officia. Id ea incididunt occaecat est sunt tempor magna qui labore. Nostrud eiusmod duis nisi amet. Eiusmod laborum id laborum ea. Proident officia incididunt occaecat culpa. Enim voluptate tempor sit do occaecat pariatur Lorem adipisicing.</p>
		</div>
		<div id="experiential" class="experiential menu-button bg-gray-5 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-white">EXPERIENTIAL</h1>
		</div>
		<div class="experiential menu-content bg-nero ftra-heavy text-white">
			<div class="row no-gutters h-100 d-flex align-items-start">
				<div class="col-12">
					<p>We enable clients to amplify their brand and value through transformative events and co&#8209;branding partnerships that sit at the heart of pop-culture. Through original concepts and customized strategies, we weave branded entertainment and produce relevant and headline-grabbing fan experiences that hits the brand’s target audience. By creating meaningful and lasting impressions, we are able to convert fans into avid loyalists.</p>
				</div>
				<div class="col-12 col-lg-4 text-center text-lg-left">
					<img src="{{ asset('images/leadingseries.png') }}">
				</div>
				<div class="col-12 col-lg-6 text-center">
					<img src="{{ asset('images/womanforward.png') }}">
				</div>
				<div class="col-12 col-lg-2 text-center text-lg-right">
					<img src="{{ asset('images/idolfest.png') }}">
				</div>
			</div>
		</div>
		<div id="connect" class="connect menu-button bg-gray-6 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-white">CONNECT</h1>
		</div>
		<div class="connect menu-content bg-nero ftra-heavy text-white">
			<div class="row no-gutters h-100 d-flex align-items-end">
				<div class="col-12">
					<p class="text-justified">We look forward to helping you achieve your brand goals and promo requirements. Feel free to reach us via email <a href="mailto:pr@publicityasia.com" class="text-red">pr@publicityasia.com</a> and we will respond back as soon as we can.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="quick-cover"></div>
</section>
@endsection