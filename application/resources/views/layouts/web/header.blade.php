@section('navbar')
<nav class="navbar bg-nero">
    <a href="{{ route('home') }}"><img src="{{ asset('images/pa-logo.png') }}" id="brand" class="img-fluid"></a>
    <div class="" id="navbar-menu">
        <ul class="navbar-nav ml-auto">
        	<li class="nav-item text">
                <a href="mailto:#" class="nav-link"><img src="{{ asset('images/icons/email.png') }}"></a>
            </li>
            <li class="nav-item">
                <a href="https://g.page/publicityasia" class="nav-link"><img src="{{ asset('images/icons/google.png') }}"></a>
            </li>
            <li class="nav-item">
                <a href="https://www.youtube.com/channel/UC9Jpp7rxgf_jzCXLBW1f-CQ" class="nav-link"><img src="{{ asset('images/icons/youtube.png') }}"></a>
            </li>
            <li class="nav-item">
                <a href="https://www.facebook.com/publicityasia" class="nav-link"><img src="{{ asset('images/icons/facebook.png') }}"></a>
            </li>
            <li class="nav-item">
                <a href="https://www.instagram.com/publicityasia" class="nav-link"><img src="{{ asset('images/icons/instagram.png') }}"></a>
            </li>
        </ul>
    </div>
</nav>
@endsection