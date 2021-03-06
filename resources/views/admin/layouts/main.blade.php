{{-- Website Theme CSS --}}
@section('css')
    @include( 'admin.layouts.styles' )

    {{-- Jquery Toast css --}}
    <link href="{{ asset( 'admin/assets/libs/jquery-toast-plugin/jquery.toast.min.css' ) }}" rel="stylesheet" type="text/css" />
@stop

{{-- Website Our CSS --}}
@section( 'css-default' )
    <link rel="stylesheet" href="{{ asset( 'admin/assets/css/admin.css' ) }}">
@stop

{{-- Common Header --}}
@include( 'layouts.header' )

{{-- Admin Header --}}
@include( 'admin.layouts.header' )

<!-- Begin page -->
<div id="wrapper">

    @include( 'admin.layouts.topbar' )

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="ra__content__content-page content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="ra__content__content-page__container-fluid container-fluid">
                {{-- <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                                    <li class="breadcrumb-item active"></li>
                                </ol>
                            </div>
                            <h4 class="page-title"></h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->  --}}

                @yield('content')

            </div> <!-- container -->
        </div> <!-- content -->

        @include( 'admin.layouts.footernav' )
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

@include('admin.layouts.right-bar')

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

<!-- Tost-->
<script src="{{asset('admin/assets/libs/jquery-toast-plugin/jquery.toast.min.js')}}"></script>

@section('js')

@show

<!-- App js -->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>

<script>
    !(function (p) {
    "use strict";
    function t() {}
    (t.prototype.send = function (t, i, o, e, n, a, s, r) {
        var c = { heading: t, text: i, position: o, loaderBg: e, icon: n, hideAfter: (a = a || 3e3), stack: (s = s || 1) };
        r && (c.showHideTransition = r), console.log(c), p.toast().reset("all"), p.toast(c);
    }),
        (p.NotificationApp = new t()),
        (p.NotificationApp.Constructor = t);
    })(window.jQuery),
    (function (i) {
        "use strict";

        @if(!is_null(session('message-success')))
            i.NotificationApp.send("Well Done!", "{{session('message-success')}}", "top-right", "#5ba035", "success");
        @elseif(!is_null(session('message-error')))
            i.NotificationApp.send("Oh snap!", "{{session('message-error')}}", "top-right", "#bf441d", "error");
        @elseif(!is_null(session('message-warning')))
            i.NotificationApp.send("Heads up!", "{{session('message-warning')}}", "top-center", "#da8609", "warning");
        @endif
    })(window.jQuery);
</script>

@include( 'layouts.footer' )
