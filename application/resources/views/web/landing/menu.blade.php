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
	<ul class="menu">
		<li class="item text-20 text-white">
			<h1 class="title bg-gray-1">PROFILE</h1>
			<p>Cupidatat in voluptate fugiat ipsum. Ut nulla sint ex tempor Lorem exercitation commodo nulla voluptate in adipisicing qui officia. Id ea incididunt occaecat est sunt tempor magna qui labore. Nostrud eiusmod duis nisi amet. Eiusmod laborum id laborum ea. Proident officia incididunt occaecat culpa. Enim voluptate tempor sit do occaecat pariatur Lorem adipisicing.</p>
			<p>Excepteur Lorem consectetur tempor est. Lorem incididunt ut ut exercitation reprehenderit est nostrud qui. Consequat reprehenderit qui ex duis sunt ut incididunt sit Lorem non aliqua in occaecat. Irure cupidatat sit laborum irure proident velit eu tempor non ea ex in aliquip sit. Voluptate cillum exercitation nisi laboris est voluptate consequat dolor nostrud cillum in. Proident deserunt nisi nulla ea ut laborum nostrud ut voluptate et ea consectetur velit officia. Reprehenderit et ullamco nostrud ut.</p>
		</li>
		<li class="item text-20 text-white">
			<h1 class="title bg-gray-2">PROFILE</h1>
			<p>Cupidatat in voluptate fugiat ipsum. Ut nulla sint ex tempor Lorem exercitation commodo nulla voluptate in adipisicing qui officia. Id ea incididunt occaecat est sunt tempor magna qui labore. Nostrud eiusmod duis nisi amet. Eiusmod laborum id laborum ea. Proident officia incididunt occaecat culpa. Enim voluptate tempor sit do occaecat pariatur Lorem adipisicing.</p>
		</li>
	</ul>
</section>
@endsection