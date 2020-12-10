@section( 'html_class' ) {{ $html_class ?? __( 'ra__authentication' ) }} @stop

@section('title') {{ $title ?? __('Forgot Password') }} @stop

@include('admin.layouts.styles')

@section('css-default')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@stop

@include('layouts.header')

    <body class="@yield('html_class') ra__light @if ( !empty( Request::segment( 1 ) ) ) ra__{{ Request::segment( 1 ) }}@endif @if ( !empty( Request::segment( 2 ) ) ) ra__{{ Request::segment( 2 ) }}@endif @if ( !empty( Request::segment( 3 ) ) ) ra__{{ Request::segment( 3 ) }}@endif loading authentication-bg authentication-bg-pattern" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "showRightSidebarOnPageLoad": false}'>

        <div class="account-pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">
                            
                            @if (session('status'))

                                <div class="card-body p-4">
                                    
                                    <div class="text-center w-75 m-auto">
                                        <div class="auth-logo">
                                            <a href="{{route('index')}}" class="logo logo-dark text-center">
                                                <span class="logo-lg">
                                                    <img src="{{asset('/images/logo-dark.png')}}" alt="" height="30">
                                                </span>
                                            </a>
                        
                                            <a href="{{route('index')}}" class="logo logo-light text-center">
                                                <span class="logo-lg">
                                                    <img src="{{asset('/images/logo-light.png')}}" alt="" height="30">
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mt-3 text-center">
                                        <svg version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 98 98"
                                            style="height: 120px;" xml:space="preserve">
                                            <style type="text/css">
                                                .st0{fill:#FFFFFF;}
                                                .st1{fill:#1abc9c;}
                                                .st2{fill:#FFFFFF;stroke:#1abc9c;stroke-width:2;stroke-miterlimit:10;}
                                                .st3{fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;}
                                            </style>
                                                <g i:extraneous="self">
                                                    <circle id="XMLID_50_" class="st0" cx="49" cy="49" r="49"/>
                                                    <g id="XMLID_4_">
                                                        <path id="XMLID_49_" class="st1" d="M77.3,42.7V77c0,0.6-0.4,1-1,1H21.7c-0.5,0-1-0.5-1-1V42.7c0-0.3,0.1-0.6,0.4-0.8l27.3-21.7
                                                            c0.3-0.3,0.8-0.3,1.2,0l27.3,21.7C77.1,42.1,77.3,42.4,77.3,42.7z"/>
                                                        <path id="XMLID_48_" class="st2" d="M66.5,69.5h-35c-1.1,0-2-0.9-2-2V26.8c0-1.1,0.9-2,2-2h35c1.1,0,2,0.9,2,2v40.7
                                                            C68.5,68.6,67.6,69.5,66.5,69.5z"/>
                                                        <path id="XMLID_47_" class="st1" d="M62.9,33.4H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                            c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,33,63.4,33.4,62.9,33.4z"/>
                                                        <path id="XMLID_46_" class="st1" d="M62.9,40.3H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                            c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,39.9,63.4,40.3,62.9,40.3z"/>
                                                        <path id="XMLID_45_" class="st1" d="M62.9,47.2H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                            c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,46.8,63.4,47.2,62.9,47.2z"/>
                                                        <path id="XMLID_44_" class="st1" d="M62.9,54.1H47.2c-0.5,0-0.9-0.4-0.9-0.9v-0.2c0-0.5,0.4-0.9,0.9-0.9h15.7
                                                            c0.5,0,0.9,0.4,0.9,0.9v0.2C63.8,53.7,63.4,54.1,62.9,54.1z"/>
                                                        <path id="XMLID_43_" class="st2" d="M41.6,40.1h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                            C42.6,39.7,42.2,40.1,41.6,40.1z"/>
                                                        <path id="XMLID_42_" class="st2" d="M41.6,54.2h-5.8c-0.6,0-1-0.4-1-1v-6.7c0-0.6,0.4-1,1-1h5.8c0.6,0,1,0.4,1,1v6.7
                                                            C42.6,53.8,42.2,54.2,41.6,54.2z"/>
                                                        <path id="XMLID_41_" class="st1" d="M23.4,46.2l25,17.8c0.3,0.2,0.7,0.2,1.1,0l26.8-19.8l-3.3,30.9H27.7L23.4,46.2z"/>
                                                        <path id="XMLID_40_" class="st3" d="M74.9,45.2L49.5,63.5c-0.3,0.2-0.7,0.2-1.1,0L23.2,45.2"/>
                                                    </g>
                                                </g>
                                        </svg>

                                        <h3>Success !</h3>
                                        <p class="text-muted font-14 mt-2"> {{ session('status') }} </p>

                                        <a href="{{route('index')}}" class="btn btn-block btn-primary waves-effect waves-light mt-3">Back to Home</a>
                                    </div>

                                </div> <!-- end card-body -->
                            @else
                                <div class="card-body p-4">
                                    
                                    <div class="text-center w-75 m-auto">
                                        <div class="auth-logo">
                                            <a href="index.html" class="logo logo-dark text-center">
                                                <span class="logo-lg">
                                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="30">
                                                </span>
                                            </a>
                        
                                            <a href="{{route('index')}}" class="logo logo-light text-center">
                                                <span class="logo-lg">
                                                    <img src="{{asset('images/logo-light.png')}}" alt="" height="30">
                                                </span>
                                            </a>
                                        </div>
                                        <p class="text-muted mb-4 mt-3">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                                    </div>

                                    <form action={{route('password.email')}} method="POST">
                                        @csrf

                                        <div class="form-group mb-3">
                                            <label for="emailaddress">Email address</label>
                                            <input class="form-control" type="email" id="email" required="" placeholder="Enter your email" name="email" autofocus>
                                        </div>

                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block" type="submit"> Reset Password </button>
                                        </div>

                                        <br>
                                        
                                        <div class="text-danger">
                                            <x-jet-validation-errors class="mb-4" />
                                        </div>
                                    </form>
                                </div> <!-- end card-body -->
                            @endif
                        </div>
                        <!-- end card -->

                        @if (!session('status'))

                        <div class="ra__account-pages__bottom row">
                                <div class="col-12 text-center">
                                    <p class="ml-1">Back to <a href="{{route('login')}}" class="text-white ml-1"><b>Log in</b></a></p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                        @endif

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer">
            <script>document.write(new Date().getFullYear())</script> &copy; {{env('APP_NAME')}} by <a href="https://vcompinc.com" target='_blank' class="text-white-50">VCOMP Inc.</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
        
    </body>
</html>
