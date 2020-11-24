<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>RA-METRICS | @yield('title')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
    <meta content="" name="author" />
    
    @section('css')
	
        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="{{asset('color-admin/assets/css/default/app.min.css')}}" rel="stylesheet" />
        <link href="{{asset('color-admin/assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
        <!-- ================== END BASE CSS STYLE ================== -->
        <link href="{{asset('color-admin/assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet" />
    @show
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        
        @include('layouts.header')
		
		@include('layouts.sidebar')
		
		@yield('content')
		
		@include('layouts.footer')
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
    
    @section('js')

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{asset('color-admin/assets/js/app.min.js')}}"></script>
        <script src="{{asset('color-admin/assets/js/theme/default.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
        
        <script src="{{asset('color-admin/assets/plugins/gritter/js/jquery.gritter.js')}}"></script>

        <script>
            @if(!is_null(session('message-success')))
                $(document).ready(function() {
                    $.gritter.add({
                        title: "Success!",
                        text: '{{session('message-success')}}'
                    });
                    return false;
                });
            @elseif(!is_null(session('message-error')))
                $(document).ready(function() {
                    $.gritter.add({
                        title: "Erro!",
                        text: '{{session('message-error')}}'
                    });
                    return false;
                });
            @elseif(!is_null(session('message-warning')))
                $(document).ready(function() {
                    $.gritter.add({
                        title: "Aviso!",
                        text: '{{session('message-warning')}}'
                    });
                    return false;
                });
            @endif
        </script>
    @show
</body>
</html>