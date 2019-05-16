<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>HI_01_Bác sĩ quản lý lịch làm việc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='{{asset('css/bootstrap.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/doctor/toastr.min.css')}}' rel='stylesheet'/>
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link href='{{asset('css/doctor/custom.css')}}' rel='stylesheet'/>
    <script src='{{asset('js/moment.min.js')}}'></script>
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <script src='{{asset('js/toastr.min.js')}}'></script>
    <script src='{{asset('js/doctor/normal.js')}}'></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @yield('custom_css')
    @yield('custom_js2')
    <!-- Nhóm 2 -->
    <style type="text/css">
        .card{
            border-bottom: solid;
            border-color: #ddd;
            cursor: pointer;
        }
        .card:hover{
            background-color: #f5f5f5;
        }
        .incard{
            height: 80px;
            overflow-y: hidden;
            margin: 10px;
        }
        .mybtn{
            width: 100%;
        }

        input[type='checkbox'] {
            width:20px;
            height:20px;
            background:white;
            border-radius:5px;
            border:2px solid #555;
        }

    </style>
    <script>
        function openDetail() {
            $("#urgentModal").modal("hide");
            $("#urgentdetailModal").modal("show");
        }
    </script>
    <!-- end nhóm 2 -->
</head>
<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
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
                            <li>
                                <a href="/doctor">Trang chủ</a>
                            </li>
                            <li><a href="#" data-toggle="modal" data-target="#infoModal">Thông tin cá nhân</a></li>
                            <li><a href="/doctor/login">Đăng xuất</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right nav-pc">
                            <li>
                                <a href="/doctor" style="line-height: 40px!important;">Trang chủ</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 0">
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
                        <button type="button" class="btn btn-primary notification navbar-right" data-toggle="modal" data-target="#urgentModal" style="margin: 20px;"><span>Thông báo khám khẩn cấp</span></button> 

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
@yield('page_body')

<div id="detailModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thông tin chi tiết ca khám</h4>
            </div>
            <div class="modal-body">
                <div class="row form-group">
                    <div class="col-xs-12">
                        <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                            <li class="active"><a href="#urgent1">
                                    <p class="list-group-item-text">Thông tin bệnh nhân</p>
                                </a></li>
                            <li ><a href="#urgent2">
                                    <p class="list-group-item-text">Tình trang bệnh</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row setup-content" id="urgent1">
                    <div class="col-xs-12">
                        <div class="col-md-12 well text-center">
                            <table class="table">
                                <tr>
                                    <td><b>Mã hồ sơ</b></td>
                                    <td id="idhoso"></td>
                                </tr>
                                <tr>
                                    <td><b>Họ tên</b></td>
                                    <td>Vũ Văn A</td>
                                </tr>
                                <tr>
                                    <td><b>Giới tính</b></td>
                                    <td>Nam</td>
                                </tr>
                                <tr>
                                    <td><b>Tuổi</b></td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td><b>Địa chỉ</b></td>
                                    <td>Hà Nội</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="urgent2">
                    <div class="col-xs-12">
                        <div class="col-md-12 well">
                            <p>
                                Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                Thành bụng căng cứng.
                                Sốt nhẹ.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{--<a href="/doctor/examination" class="btn btn-primary" role="button">Bắt đầu ca khám</a>--}}
                <button type="button" id="start-examination" class="btn btn-primary" value="">Bắt đầu ca khám</button>
                <button type="button" id="remove-examination" class="btn btn-danger">Huỷ ca khám</button>
            </div>
        </div>

    </div>
</div>
<div id="removeModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Huỷ ca khám</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="comment">Ghi chú (lý do):</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="accept-remove" value="" class="btn btn-danger">Tiến hành huỷ</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            </div>
        </div>

    </div>
</div>
<div id="infoModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Thông tin cá nhân</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('img/avatar.jpg')}}" class="img-responsive" alt="Cinque Terre">
                    </div>
                    <div class="col-sm-8">
                        <form action="">
                            <div class="form-group">
                                <label for="name">Họ tên</label>
                                <input type="text" class="form-control" value="Lê Hoàng Vũ" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="vu.hl@gmail.com" disabled>
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:</label>
                                <input type="number" class="form-control" value="0123456789">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ:</label>
                                <input type="text" class="form-control" value="Thanh Xuân-Hà Nội">
                            </div>
                            <button type="button" id="update-password" class="btn btn-success">Thay đổi mật khẩu</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="update-info" class="btn btn-primary">Cập nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            </div>
        </div>

    </div>
</div>
<div id="passModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cập nhật mật khẩu</h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <label for="oldpass">Mật khẩu cũ:</label>
                        <input type="password" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="newpass">Mật khẩu mới:</label>
                        <input type="password" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="confirmpass">Nhập lại mật khẩu:</label>
                        <input type="password" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="accept-pass" class="btn btn-primary">Cập nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
            </div>
        </div>

    </div>
</div>

<!-- Nhóm 2 thêm cửa sổ danh sách khám khẩn cấp -->
    <div id="urgentModal" class="modal fade" role="dialog" >
        <div class="modal-dialog" style="width: 80%; height: 80%;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Danh sách yêu cầu khám khẩn cấp</h4>
                </div>
                <div class="modal-body" >
                    <div class="row">
                        <div class="col-sm-5">
                            <div id="urgent-calendar"></div>
                        </div>
                        <div class="col-sm-7" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>17/05 08:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Khám khẩn cấp</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn" disabled>Đã được nhận</button>
                                        </div>
                                        <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                Thành bụng căng cứng.
                                                Sốt nhẹ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>17/05 08:30</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Bệnh nhân đã chờ lâu</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn" disabled>Đã được nhận</button>
                                        </div>
                                        <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                Thành bụng căng cứng.
                                                Sốt nhẹ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>17/05 09:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Khám Gấp</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn" disabled><span class="glyphicon glyphicon-remove"></span> Đã từ chối</button>
                                        </div>
                                        <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                Thành bụng căng cứng.
                                                Sốt nhẹ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>17/05 09:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Khám cháu giám đốc</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn" disabled><span class="glyphicon glyphicon-time"></span> Hết hạn</button>
                                        </div>
                                        <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                Thành bụng căng cứng.
                                                Sốt nhẹ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>17/05 09:30</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Bệnh nhân đã bị hủy hẹn nhiều lần</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn" disabled><span class="glyphicon glyphicon-ok"></span> Đã nhận</button>
                                        </div>
                                        <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                Thành bụng căng cứng.
                                                Sốt nhẹ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>17/05 10:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Bệnh nhân đã chờ lâu</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn" disabled><span class="glyphicon glyphicon-remove"></span> Đã từ chối</button>
                                        </div>
                                        <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                Thành bụng căng cứng.
                                                Sốt nhẹ.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="checkbox" disabled> Chọn tất cả &nbsp;&nbsp;
                    <button type="button" id="" class="btn btn-danger" disabled>Từ chối mục đã chọn</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                </div>
            </div>

        </div>
    </div>

    <div id="urgentdetailModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông tin chi tiết ca khám</h4>
                </div>
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col-xs-12">
                            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                                <li ><a href="#urgent3">
                                        <p class="list-group-item-text">Thông tin bệnh nhân</p>
                                    </a></li>
                                <li ><a href="#urgent4">
                                        <p class="list-group-item-text">Tình trang bệnh</p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row setup-content" id="urgent3">
                        <div class="col-xs-12">
                            <div class="col-md-12 well text-center">
                                <table class="table">
                                    <tr>
                                        <td><b>Mã hồ sơ</b></td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td><b>Họ tên</b></td>
                                        <td>Vũ Văn A</td>
                                    </tr>
                                    <tr>
                                        <td><b>Giới tính</b></td>
                                        <td>Nam</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tuổi</b></td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td><b>Địa chỉ</b></td>
                                        <td>Hà Nội</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="urgent4">
                        <div class="col-xs-12">
                            <div class="col-md-12 well">
                                <p>
                                    Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                    Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                    Thành bụng căng cứng.
                                    Sốt nhẹ.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="backto-urgent" class="btn btn-primary">Quay lại</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                </div>
            </div>

        </div>
    </div>
    <!-- end Nhóm 2 thêm cửa sổ danh sách khám khẩn cấp -->
</body>
@yield('custom_js')
</html>
