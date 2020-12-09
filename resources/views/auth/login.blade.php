@section( 'html_class' ) {{ $html_class ?? __( 'ra__authentication' ) }} @stop

@section('title') {{ $title ?? __('Log In') }} @stop

@section('css-admin')
    <!-- Admin CSS -->
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@stop

@include('layouts.header')

    <body class="@yield('html_class') ra__light @if ( !empty( Request::segment( 1 ) ) ) ra__{{ Request::segment( 1 ) }}@endif @if ( !empty( Request::segment( 2 ) ) ) ra__{{ Request::segment( 2 ) }}@endif @if ( !empty( Request::segment( 3 ) ) ) ra__{{ Request::segment( 3 ) }}@endif loading authentication-bg authentication-bg-pattern" data-layout-mode="horizontal" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "showRightSidebarOnPageLoad": false}'>

        <div class="account-pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="{{route('index')}}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
												{{-- <img src="{{asset('ubold/assets/images/logo-dark.png')}}" alt="" height="22"> --}}
												<img src="{{asset('images/logo-dark.png')}}" alt="" height="30">
                                            </span>
                                        </a>
                    
                                        <a href="{{route('index')}}" class="logo logo-light text-center">
                                            <span class="logo-lg">
												{{-- <img src="{{asset('ubold/assets/images/logo-light.png')}}" alt="" height="22"> --}}
												<img src="{{asset('images/logo-light.png')}}" alt="" height="30">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form action="{{ route('authenticate') }}" method="POST">
									@csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">@lang('auth.email_address')</label>
                                        <input class="form-control" type="email" placeholder="Enter your email" name='email' id="email" required autofocus>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">@lang('auth.password_')</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="" id="remember_me" name='remember' checked>
                                            <label class="" for="checkbox-signin">@lang('auth.remember_me')</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> @lang('auth.log_in') </button>
									</div>

									<br>
									
									<div class="text-danger">
										<x-jet-validation-errors class="mb-4" />
                                    </div>
                                    
                                    @if (session('status'))
                                        <div class="text-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                </form>

                                {{-- <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> --}}

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="ra__account-pages__bottom row">
                            <div class="col-12 text-center">
                                <p class="ml-1"><a href="{{route('password.request')}}" class="ml-1">Forgot your password?</a></p>
                                
                                {{-- <p class="text-white-50">Don't have an account? <a href="auth-register.html" class="text-white ml-1"><b>Sign Up</b></a></p> --}}
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

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
        <script src="{{asset('ubold/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('ubold/assets/js/app.min.js')}}"></script>
        
    </body>
</html>
