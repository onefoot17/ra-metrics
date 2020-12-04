<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>RA-METRICS | @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

        @section('css')
            <!-- Jquery Toast css -->
            <link href="{{asset('ubold/assets/libs/jquery-toast-plugin/jquery.toast.min.css')}}" rel="stylesheet" type="text/css" />

            <!-- App css -->
            <link href="{{asset('ubold/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
            <link href="{{asset('ubold/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

            <link href="{{asset('ubold/assets/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
            <link href="{{asset('ubold/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

            <!-- icons -->
            <link href="{{asset('ubold/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />


            <!-- Custom CSS -->
            <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        @show

    </head>
    
    <body class="loading ra__{{ Request::segment( 2 ) }} ra__{{ Request::segment( 3 ) }}" data-layout-mode="horizontal" data-layout='{"mode": "dark", "width": "fluid", "menuPosition": "fixed", "showRightSidebarOnPageLoad": false}'>

        <!-- Begin page -->
        <div id="wrapper">

            @include('layouts.topbar')

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
        
                @include('layouts.footer')
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        @include('layouts.right-bar')

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('ubold/assets/js/vendor.min.js')}}"></script>

        <!-- Tost-->
        <script src="{{asset('ubold/assets/libs/jquery-toast-plugin/jquery.toast.min.js')}}"></script>

        @section('js')
        
        @show

        <!-- App js -->
        <script src="{{asset('ubold/assets/js/app.min.js')}}"></script>

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
        
    </body>
</html>
