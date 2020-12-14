<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <i class="mdi mdi-menu"></i>
</button>

<div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
        @auth
        <li class="nav-item">
            <a href="{{ route('admin_home', [ Request::segment( 1 ) ] ) }}" class="nav-link">
                <i class="fas fa-home mr-1"></i> @lang( 'Admin' )</a>
        </li>
        @endauth

        <li class="nav-item">
            <a href="#contact" class="nav-link">
                <i class="fe-database mr-1"></i> @lang( 'Plant Data' )
            </a>
        </li>

        <li class="nav-item">
            <a href="#contact" class="nav-link">
                <i class="fe-clipboard mr-1"></i> @lang( 'Reports' )</a>
        </li>

        <li class="nav-item">
            <a href="#contact" class="nav-link">
                <i class="fas fa-globe mr-1"></i> @lang( 'About Us' )
            </a>
        </li>

        <li class="nav-item">
            <a href="#contact" class="nav-link">
                <i class="fas fa-envelope mr-1"></i> @lang( 'Contact Us' )
            </a>
        </li>

        <li class="nav-item">
            <a href="#contact" class="nav-link">
                <i class="fe-help-circle mr-1"></i> @lang( 'Help' )
            </a>
        </li>
    </ul>

    {{-- <button class="btn btn-info navbar-btn"> --}}
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="javascript:void(0);" class="btn btn-info navbar-btn" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fe-log-out"></i>

                    <span>{{ __( 'Logout' ) }}</span>
                </a>
            </form>
        @else
            <a href="{{ route( 'login' ) }}" class="btn btn-info navbar-btn">Login</a>
        @endauth
    {{-- </button> --}}
</div>
