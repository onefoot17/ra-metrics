<!DOCTYPE html>

<html lang="en" class="@yield('html_class') @if ( !empty( Request::segment( 1 ) ) ) ra__{{ Request::segment( 1 ) }}@endif @if ( !empty( Request::segment( 2 ) ) ) ra__{{ Request::segment( 2 ) }}@endif @if ( !empty( Request::segment( 3 ) ) ) ra__{{ Request::segment( 3 ) }}@endif">
    <head>
        <meta charset="utf-8" />

        <title>{{ env( 'APP_NAME' ) }} | @yield( 'title' )</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

        <meta content="Coderthemes" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        <!-- App CSS -->
		<link href="{{ asset( 'assets/css/bootstrap.min.css' ) }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />

        @yield( 'css' )

        <!-- Default CSS -->
        @yield( 'css-default' )
    </head>

    <body class="@if ( Request::segment( 2 ) == 'admin' ) loading @endif @auth @if ( Request::segment( 2 ) == 'admin' ) ra__{{Auth::User()->settings->theme_color}} @endif @endauth  @yield('login_class') @yield('html_class') @if ( !empty( Request::segment( 1 ) ) ) ra__{{ Request::segment( 1 ) }}@endif @if ( !empty( Request::segment( 2 ) ) ) ra__{{ Request::segment( 2 ) }}@endif @if ( !empty( Request::segment( 3 ) ) ) ra__{{ Request::segment( 3 ) }}@endif" @if ( Auth::check() )data-layout-mode="horizontal" @endif data-layout-mode="@yield( 'login_data' )" @if ( Auth::check() ) data-layout='{"mode": "{{Auth::User()->settings->theme_color}}", "width": "fluid", "menuPosition": "fixed", "showRightSidebarOnPageLoad": false}'@endif>
