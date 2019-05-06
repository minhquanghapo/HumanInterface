<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>HI_01_Bác sĩ quản lý lịch làm việc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="container">
    <nav class="navbar navbar-default" style="background: #fff;border: none" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/doctor"><img src="{{asset('HI_03/img/logo.png')}}" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav nav-mobile">
                    <li><a href="#" data-toggle="modal" data-target="#infoModal">Thông tin cá nhân</a></li>
                    <li><a href="/doctor/login">Đăng xuất</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right nav-pc">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('img/avatar.jpg')}}" class="img-circle" style="height: 40px;border: 1px solid" alt="Cinque Terre">
                            <span>BS.Lê Hoàng Vũ</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" data-toggle="modal" data-target="#infoModal">Thông tin cá nhân</a></li>
                            <li><a href="/doctor/login">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>
@yield('page_body')
</body>
</html>
