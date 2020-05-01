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
		<div id="services-dummy" class="bg-gray-2 align-items-center">
			<h1 class="ftra-medium text-red">SERVICES</h1>
		</div>
		<div class="services menu-content bg-gray-2 ftra-heavy text-white">
			<div class="row no-gutters h-100">
				<div class="image-holder d-flex align-items-end">
					<button class="services page-down-button text-white"><span class="ti-angle-down"></span></button>
				</div>
				<div class="col-12 col-lg-4">
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
		<div id="network" class="network menu-button bg-gray-3 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-white">NETWORK</h1>
		</div>
		<div class="network menu-content bg-nero ftra-heavy text-white">
			<p>Cupidatat in voluptate fugiat ipsum. Ut nulla sint ex tempor Lorem exercitation commodo nulla voluptate in adipisicing qui officia. Id ea incididunt occaecat est sunt tempor magna qui labore. Nostrud eiusmod duis nisi amet. Eiusmod laborum id laborum ea. Proident officia incididunt occaecat culpa. Enim voluptate tempor sit do occaecat pariatur Lorem adipisicing.</p>
			<p>Excepteur Lorem consectetur tempor est. Lorem incididunt ut ut exercitation reprehenderit est nostrud qui. Consequat reprehenderit qui ex duis sunt ut incididunt sit Lorem non aliqua in occaecat. Irure cupidatat sit laborum irure proident velit eu tempor non ea ex in aliquip sit. Voluptate cillum exercitation nisi laboris est voluptate consequat dolor nostrud cillum in. Proident deserunt nisi nulla ea ut laborum nostrud ut voluptate et ea consectetur velit officia. Reprehenderit et ullamco nostrud ut.</p>
		</div>
		<div id="originals" class="originals menu-button bg-gray-4 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-red">ORIGINALS</h1>
		</div>
		<div class="originals menu-content bg-nero ftra-heavy text-white">
			<p>Cupidatat in voluptate fugiat ipsum. Ut nulla sint ex tempor Lorem exercitation commodo nulla voluptate in adipisicing qui officia. Id ea incididunt occaecat est sunt tempor magna qui labore. Nostrud eiusmod duis nisi amet. Eiusmod laborum id laborum ea. Proident officia incididunt occaecat culpa. Enim voluptate tempor sit do occaecat pariatur Lorem adipisicing.</p>
			<p>Excepteur Lorem consectetur tempor est. Lorem incididunt ut ut exercitation reprehenderit est nostrud qui. Consequat reprehenderit qui ex duis sunt ut incididunt sit Lorem non aliqua in occaecat. Irure cupidatat sit laborum irure proident velit eu tempor non ea ex in aliquip sit. Voluptate cillum exercitation nisi laboris est voluptate consequat dolor nostrud cillum in. Proident deserunt nisi nulla ea ut laborum nostrud ut voluptate et ea consectetur velit officia. Reprehenderit et ullamco nostrud ut.</p>
		</div>
		<div id="experiential" class="experiential menu-button bg-gray-5 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-white">EXPERIENTIAL</h1>
		</div>
		<div class="experiential menu-content bg-nero ftra-heavy text-white">
			<p>Cupidatat in voluptate fugiat ipsum. Ut nulla sint ex tempor Lorem exercitation commodo nulla voluptate in adipisicing qui officia. Id ea incididunt occaecat est sunt tempor magna qui labore. Nostrud eiusmod duis nisi amet. Eiusmod laborum id laborum ea. Proident officia incididunt occaecat culpa. Enim voluptate tempor sit do occaecat pariatur Lorem adipisicing.</p>
			<p>Excepteur Lorem consectetur tempor est. Lorem incididunt ut ut exercitation reprehenderit est nostrud qui. Consequat reprehenderit qui ex duis sunt ut incididunt sit Lorem non aliqua in occaecat. Irure cupidatat sit laborum irure proident velit eu tempor non ea ex in aliquip sit. Voluptate cillum exercitation nisi laboris est voluptate consequat dolor nostrud cillum in. Proident deserunt nisi nulla ea ut laborum nostrud ut voluptate et ea consectetur velit officia. Reprehenderit et ullamco nostrud ut.</p>
		</div>
		<div id="contact" class="contact menu-button bg-gray-6 d-flex align-items-center">
			<h1 class="menu-title ftra-medium text-white">CONTACT</h1>
		</div>
		<div class="contact menu-content bg-nero ftra-heavy text-white">
			<p>Cupidatat in voluptate fugiat ipsum. Ut nulla sint ex tempor Lorem exercitation commodo nulla voluptate in adipisicing qui officia. Id ea incididunt occaecat est sunt tempor magna qui labore. Nostrud eiusmod duis nisi amet. Eiusmod laborum id laborum ea. Proident officia incididunt occaecat culpa. Enim voluptate tempor sit do occaecat pariatur Lorem adipisicing.</p>
			<p>Excepteur Lorem consectetur tempor est. Lorem incididunt ut ut exercitation reprehenderit est nostrud qui. Consequat reprehenderit qui ex duis sunt ut incididunt sit Lorem non aliqua in occaecat. Irure cupidatat sit laborum irure proident velit eu tempor non ea ex in aliquip sit. Voluptate cillum exercitation nisi laboris est voluptate consequat dolor nostrud cillum in. Proident deserunt nisi nulla ea ut laborum nostrud ut voluptate et ea consectetur velit officia. Reprehenderit et ullamco nostrud ut.</p>
		</div>
	</div>
</section>
@endsection