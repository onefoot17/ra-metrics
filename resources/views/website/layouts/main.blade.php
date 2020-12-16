{{-- Website Theme CSS --}}
@section( 'css' )
    @include( 'website.layouts.styles' )

    {{-- Theme Custom CSS --}}
    <link rel="stylesheet" href="{{ asset( 'website/porto/css/custom.css' ) }}">
@stop

{{-- Website Our CSS --}}
@section( 'css-default' )
    <link rel="stylesheet" href="{{ asset( 'website/assets/css/frontend.css' ) }}" />
@stop

@section( 'js' )
    {{-- Head Libs --}}
    <script src="{{ asset( 'website/porto/vendor/modernizr/modernizr.min.js' ) }}"></script>
@stop

{{-- Common Header --}}
@include( 'layouts.header' )

{{-- Website Header --}}
@include( 'website.layouts.header' )

{{-- Navbar --}}
@include( 'website.layouts.topbar' )

{{-- Content --}}
@yield( 'content' )

{{-- Website Footer Scripts --}}
@include( 'website.layouts.footerscripts' )

{{-- Common Footer --}}
@include( 'layouts.footer' )
