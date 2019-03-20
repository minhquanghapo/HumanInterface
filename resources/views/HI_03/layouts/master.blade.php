<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>FINDOCTOR - Find easily a doctor and book online an appointment</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('HI_03/img/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('HI_03/img/apple-touch-icon-57x57-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('HI_03/img/apple-touch-icon-72x72-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('HI_03/img/apple-touch-icon-114x114-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('HI_03/img/apple-touch-icon-144x144-precomposed.png') }}">

	<!-- BASE CSS -->
	<link href="{{ asset('HI_03/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_03/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_03/css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_03/css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('HI_03/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">
    
    @yield('SPECIFIC CSS')
    
	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('HI_03/css/custom.css') }}" rel="stylesheet">
	
	<!-- Modernizr -->
	<script src="{{ asset('HI_03/js/modernizr.js') }}"></script>

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

    @include('HI_03.layouts.header')
	<!-- /header -->	
	
	@yield('content')
	<!-- /main content -->
	
	@include('HI_03.layouts.footer')
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('HI_03/js/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('HI_03/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('HI_03/js/functions.js') }}"></script>
    
    @yield('SPECIFIC SCRIPTS')

</body>

</html>