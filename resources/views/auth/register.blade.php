@section( 'html_class' ) {{ $html_class ?? __( 'ra__authentication' ) }} @stop

@section( 'login_class' ) {{ $login_class ?? __( 'loading authentication-bg authentication-bg-pattern' ) }} @stop

@section( 'login_data' ){{ $login_data ?? __( 'horizontal' ) }}@stop

@section( 'title' ) {{ $title ?? __( 'Register' ) }} @stop

@include('admin.layouts.styles')

@section('css-default')
    <link rel="stylesheet" href="{{asset('admin/assets/css/admin.css')}}">
@stop

@include('layouts.header')

<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
		<!-- begin register -->
		<div class="register register-with-news-feed">
			<!-- begin news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url({{asset('color-admin/assets/img/login-bg/login-bg-15.jpg')}})"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>RA</b>-METRICS</h4>
					<p>
						As a Color Admin app administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
					</p>
				</div>
			</div>
			<!-- end news-feed -->
			<!-- begin right-content -->
			<div class="right-content">
				<!-- begin register-header -->
				<h1 class="register-header">
					Sign Up
					<small>Create your RA-METRICS Account. It’s free and always will be.</small>
				</h1>
				<!-- end register-header -->
				<!-- begin register-content -->
				<div class="register-content">
					<form action="{{ route('register') }}" method="POST" class="margin-bottom-0">
                    @csrf
						<label class="control-label">{{ __('Name') }} <span class="text-danger">*</span></label>
						<div class="row row-space-10">
							<div class="col-md-12 m-b-15">
								<input type="text" class="form-control" placeholder="Name" id='name' name='name' value='{{old('name')}}' required />
							</div>
							<!-- <div class="col-md-6 m-b-15">
								<input type="text" class="form-control" placeholder="Last name" required />
							</div> -->
						</div>
						<label class="control-label">{{ __('Email') }} <span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="text" class="form-control" placeholder="Email address" id="email" name="email" value='{{old('email')}}' required />
							</div>
						</div>
						<label class="control-label">{{ __('Password') }} <span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="password" class="form-control" placeholder="Password" id="password" name="password" required />
							</div>
                        </div>
                        <label class="control-label">{{ __('Confirm Password') }} <span class="text-danger">*</span></label>
						<div class="row m-b-15">
							<div class="col-md-12">
								<input type="password" class="form-control" placeholder="Password" id="password_confirmation" name="password_confirmation" required />
							</div>
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<div class="checkbox checkbox-css m-b-30">
								<input type="checkbox" id="agreement_checkbox" value="">
								<label for="agreement_checkbox">
								By clicking Sign Up, you agree to our <a href="javascript:;">Terms</a> and that you have read our <a href="javascript:;">Data Policy</a>, including our <a href="javascript:;">Cookie Use</a>.
								</label>
							</div>
						</div>
						<div class="register-buttons">
							<button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>

                        <br/>
                        <br/>

                        <div class="text-danger">
                            <x-jet-validation-errors class="mb-4" />
                        </div>

						<div class="m-t-30 m-b-30 p-b-30">
							Already registered? Click <a href="{{route('login')}}">here</a> to login.
						</div>
						<hr />
						<p class="text-center mb-0">
							&copy; RA-METRICS All Right Reserved 2020
						</p>
					</form>
				</div>
				<!-- end register-content -->
			</div>
			<!-- end right-content -->
		</div>
		<!-- end register -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('color-admin/assets/js/app.min.js')}}"></script>
	<script src="{{asset('color-admin/assets/js/theme/default.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</body>
</html>
