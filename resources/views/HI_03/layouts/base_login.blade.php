<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
    <title>
        @yield('title', 'HI_03 Bệnh nhân đặt lịch khám')
    </title>
	
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

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('HI_02/css/app.css') }}">

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

    @yield('header')
	<!-- /header -->

	@yield('content')
	<!-- /main content -->

	@include('HI_03.layouts.footer')
	<!--/footer-->
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
        crossorigin="anonymous"></script>

	<script src="{{ asset('HI_03/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('HI_03/js/functions.js') }}"></script>

    @yield('SPECIFIC SCRIPTS')

</body>

</html>
