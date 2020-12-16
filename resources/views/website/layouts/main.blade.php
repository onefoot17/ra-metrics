@section( 'title' ) {{ $title ?? __( 'Home' ) }} @stop

{{-- Website Theme CSS --}}
@section( 'css' )
    @include( 'website.layouts.styles' )
@stop

{{-- Website Our CSS --}}
@section( 'css-default' )
    <link rel="stylesheet" href="{{ asset( 'website/assets/css/frontend.css' ) }}" />
@stop

{{-- Header --}}
@include( 'website.layouts.header' )

{{-- Navbar --}}
@include( 'website.layouts.topbar' )

{{-- Content --}}
@yield( 'content' )

{{-- Website Footer Scripts --}}
@include( 'website.layouts.footerscripts' )

{{-- Common Footer --}}
@include( 'layouts.components.footer' )
