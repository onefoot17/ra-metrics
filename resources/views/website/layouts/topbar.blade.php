<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ route( 'home', [ Request::segment( 1 ) ] ) }}">
            <img src="{{ asset( 'assets/images/logo-light.png' ) }}" alt="" class="logo-img logo-light" width="150" />

            <img src="{{ asset( 'assets/images/logo-dark.png' ) }}" alt="" class="logo-img logo-dark" width="150" />
        </a>

        @include( 'website.layouts.topnav' )
    </div>
</nav>
<!-- Navbar End -->
