<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Porto - Responsive HTML5 Template</title>

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ asset( 'website/porto/img/favicon.ico' ) }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ asset( 'website/porto/img/apple-touch-icon.png' ) }}">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

        <!-- App CSS -->
		<link href="{{ asset( 'assets/css/bootstrap.min.css' ) }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />

        @yield( 'css' )

		<!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset( 'website/porto/css/custom.css' ) }}">

        <!-- Default CSS -->
        @yield( 'css-default' )

		<!-- Head Libs -->
		<script src="{{ asset( 'website/porto/vendor/modernizr/modernizr.min.js' ) }}"></script>

    </head>

	<body class="one-page loading-overlay-showing" data-target="#header" data-spy="scroll" data-offset="100" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
        </div>

		<div class="body">
