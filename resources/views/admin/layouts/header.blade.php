<body class="@if ( Request::segment( 2 ) == 'admin' ) loading @endif @auth @if ( Request::segment( 2 ) == 'admin' ) ra__{{Auth::User()->settings->theme_color}} @endif @endauth  @yield('login_class') @yield('html_class') @if ( !empty( Request::segment( 1 ) ) ) ra__{{ Request::segment( 1 ) }}@endif @if ( !empty( Request::segment( 2 ) ) ) ra__{{ Request::segment( 2 ) }}@endif @if ( !empty( Request::segment( 3 ) ) ) ra__{{ Request::segment( 3 ) }}@endif" @if ( Auth::check() )data-layout-mode="horizontal" @endif data-layout-mode="@yield( 'login_data' )" @if ( Auth::check() ) data-layout='{"mode": "{{Auth::User()->settings->theme_color}}", "width": "fluid", "menuPosition": "fixed", "showRightSidebarOnPageLoad": false}'@endif>
