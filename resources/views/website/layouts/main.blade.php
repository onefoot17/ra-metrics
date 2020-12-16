@section( 'title' ) {{ $title ?? __( 'Home' ) }} @stop

@section( 'css' )
    @include( 'website.layouts.styles' )
@stop

@section( 'css-default' )
    <link rel="stylesheet" href="{{ asset( 'website/assets/css/frontend.css' ) }}" />
@stop

@include( 'website.layouts.header' )

@include( 'website.layouts.topbar' )

@yield( 'content' )

@include( 'website.layouts.footerscripts' )

@include( 'layouts.footer' )
