<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='{{asset('css/bootstrap.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/doctor/toastr.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/doctor/custom.css')}}' rel='stylesheet'/>
    <script src='{{asset('js/moment.min.js')}}'></script>
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <script src='{{asset('js/toastr.min.js')}}'></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @yield('custom_css')
    @yield('custom_js')
</head>
<body>
@yield('page_body')
</body>
</html>
