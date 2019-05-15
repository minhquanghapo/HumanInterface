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
    <style>
        /*nhóm 2*/
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
        
        .notification {
            margin-top: 55px;
            position: relative;
        }
        .notification .badge {
            position: absolute;
            top: -15px;
            right: -10px;
            padding: 8px 10px;
            border-radius: 50%;
            background-color: red;
            color: white;
        }

        input[type='checkbox'] {
            width:20px;
            height:20px;
            background:white;
            border-radius:5px;
            border:2px solid #555;
        }

        .new{
            background-color: #E6E6FA;
        }

        .inbtn{
            width: 48%;
        }
        /*nhóm 2*/
    </style>

    <script>
        function openDetail() {
            $("#urgentModal").modal("hide");
            $("#urgentdetailModal").modal("show");
        }

        function openDetail1() {
            $("#urgentModal").modal("hide");
            $("#superurgentdetailModal").modal("show");
        }

        function openDetail2() {
            $("#urgentModal").modal("hide");
            $("#detailModal").modal("show");
        }

        function openDenyUrgent() {
            $("#urgentModal").modal("hide");
            $("#urgentdetailModal").modal("hide");
            $("#denyModal").modal("show");
        }

        function backToUrgent() {
            $("#superurgentdetailModal").modal("hide");
            $("#urgentdetailModal").modal("hide");
            $("#detailModal").modal("hide");
            $("#denyModal").modal("hide");
            $("#urgentModal").modal("show");
        }

        function superToUrgent() {
            $("#superurgentdetailModal").modal("hide");
            $("#urgentModal").modal("show");
        }

        function denyForm() {

            Swal.fire({
                title: 'Xác nhận ?',
                text: "Bạn sẽ không thể nhận lại lịch khám khẩn cấp đã từ chối",
                type: 'warning',
                width: '30%',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vâng, tôi muốn từ chối!',
                cancelButtonText: 'Không!',
            }).then((result) => {
                if (result.value) {
                    toastr["success"]("Từ chối thành công!");
                }
                else{
                    toastr["error"]("từ chối không không thành công!");
                }
                $("#denyModal").modal("hide");
                $("#urgentModal").modal("show");
            })
        }

        function superdenyForm() {
            Swal.fire({
                title: 'Xác nhận ?',
                text: "Bạn sẽ từ chối lịch khám khẩn cấp với lý do trùng lịch",
                type: 'warning',
                width: '30%',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vâng, tôi muốn từ chối!',
                cancelButtonText: 'Không!',
            }).then((result) => {
                if (result.value) {
                    toastr["success"]("Từ chối thành công!");
                }
                else{
                    toastr["error"]("từ chối không không thành công!");
                }
                $("#denyModal").modal("hide");
                $("#superurgentdetailModal").modal("hide");
                $("#urgentModal").modal("show");
            })
        }

        function urgentAccept() {
            Swal.fire({
                title: 'Xác nhận ?',
                text: "Bạn sẽ hủy hẹn lịch khám bị trùng vì lý do có lịch khám khẩn cấp",
                type: 'warning',
                width: '30%',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vâng, tôi xác nhận!',
                cancelButtonText: 'Không!',
            }).then((result) => {
                if (result.value) {
                    toastr["success"]("Hủy hẹn lịch khám trùng và thêm lịch khám khẩn cấp thành công!");
                }
                else{
                    toastr["error"]("Hủy hẹn không thành công!");
                }
                $("#denyModal").modal("hide");
                $("#superurgentdetailModal").modal("hide");
                $("#urgentModal").modal("show");

            })
        }

        function accept() {
            toastr["success"]("Thêm lịch khám khẩn cấp thành công!");
            $("#urgentdetailModal").modal("hide");
            $("#urgentModal").modal("show");
        }

        function toggle(source) {
          checkboxes = document.getElementsByName('foo');
          for(var i=0, n=checkboxes.length;i<n;i++) {
            checkboxes[i].checked = source.checked;
          }
        }

        function addComment() {
            document.getElementById("comment1").value += 'Tôi đang bận,  ';
        }
        function addComment1() {
            document.getElementById("comment1").value += 'Lịch khám bị trùng không thể hủy,  ';
        }
        function addComment2() {
            document.getElementById("comment1").value += 'Tôi đang không khỏe,  ';
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
                        <button type="button" class="btn btn-primary notification navbar-right" data-toggle="modal" data-target="#urgentModal" style="margin: 20px;"><span>Thông báo khám khẩn cấp</span><span class="badge">3</span></button>


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
                            <li class="active"><a href="#step-1">
                                    <p class="list-group-item-text">Thông tin bệnh nhân</p>
                                </a></li>
                            <li ><a href="#step-2">
                                    <p class="list-group-item-text">Tình trang bệnh</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="row setup-content" id="step-1">
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
                <div class="row setup-content" id="step-2">
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
                <button type="button" onclick="backToUrgent()" class="btn btn-primary">Quay lại</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                            <div class="row card new">
                                <div class="col-sm-12 incard">
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="foo">
                                    </div>
                                    <div class="col-sm-2" onclick="openDetail1()">
                                        <p><strong>10/05 09:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-7">
                                                <strong>Khám khẩn cấp</strong><br>
                                                <div style="color: #d33;text-decoration: underline;">
                                                    <span class="glyphicon glyphicon-list-alt" ></span> Trùng lịch
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <button type="button" onclick="urgentAccept()" class="btn btn-success inbtn" style="padding-left: 8px;">Chấp nhận</button>
                                                <button type="button" onclick="superdenyForm()" class="btn btn-danger inbtn">Từ chối</button>
                                            </div>
                                        </div>
                                        <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                             Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                            Thành bụng căng cứng.
                                            Sốt nhẹ.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row card new">
                                <div class="col-sm-12 incard">
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="foo">
                                    </div>
                                    <div class="col-sm-2" onclick="openDetail()">
                                        <p><strong>10/05 09:30</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-7"><strong>Bệnh nhân đã chờ lâu</strong></div>
                                            <div class="col-sm-5">
                                                <button type="button" onclick="accept()" class="btn btn-success inbtn" style="padding-left: 8px;">Chấp nhận</button>
                                                <button type="button" id="remove-urgent" class="btn btn-danger inbtn" onclick="openDenyUrgent()">Từ chối</button>
                                            </div>
                                            <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                    Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                    Thành bụng căng cứng.
                                                    Sốt nhẹ.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row card new">
                                <div class="col-sm-12 incard">
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="foo">
                                    </div>
                                    <div class="col-sm-2" onclick="openDetail()">
                                        <p><strong>10/05 10:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-7"><strong>Khám Gấp</strong></div>
                                            <div class="col-sm-5">
                                                <button type="button" onclick="accept()" class="btn btn-success inbtn" style="padding-left: 8px;">Chấp nhận</button>
                                                <button type="button" id="remove-urgent" class="btn btn-danger inbtn" onclick="openDenyUrgent()">Từ chối</button>
                                            </div>
                                            <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                    Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                    Thành bụng căng cứng.
                                                    Sốt nhẹ.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail2()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>10/05 08:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-8"><strong>Khám cháu giám đốc</strong></div>
                                            <div class="col-sm-4">
                                                <button type="button" class="btn mybtn" disabled=""><span class="glyphicon glyphicon-remove"></span> Đã từ chối</button>
                                            </div>
                                            <p>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                    Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                    Thành bụng căng cứng.
                                                    Sốt nhẹ.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail2()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>10/05 08:30</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
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
                            </div>
                            <div class="row card">
                                <div class="col-sm-12 incard" onclick="openDetail2()">
                                    <div class="col-sm-1">
                                        <input type="checkbox" disabled>
                                    </div>
                                    <div class="col-sm-2">
                                        <p><strong>10/05 10:30</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-sm-8"><strong>Bệnh nhân đã chờ lâu</strong></div>
                                            <div class="col-sm-4">
                                                <button type="button" class="btn mybtn" disabled=""><span class="glyphicon glyphicon-time"></span> Hết hạn</button>
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
                </div>
                <div class="modal-footer">
                    <input type="checkbox" onclick="toggle(this)"> Chọn tất cả &nbsp;&nbsp;
                    <button type="button" onclick="openDenyUrgent()" class="btn btn-danger" >Từ chối mục đã chọn</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                    <h4 class="modal-title">Thông tin chi tiết lịch khám khẩn cấp</h4>
                </div>
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col-xs-12">
                            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                                <li class="active"><a href="#step-3">
                                        <p class="list-group-item-text">Thông tin bệnh nhân</p>
                                    </a></li>
                                <li ><a href="#step-4">
                                        <p class="list-group-item-text">Tình trang bệnh</p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-3">
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
                    <div class="row setup-content" id="step-4">
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
                    <button type="button" onclick="accept()" class="btn btn-success" style="padding-left: 8px;">Chấp nhận</button>
                    <button type="button" onclick="openDenyUrgent()" class="btn btn-danger" onclick="openDenyUrgent()">Từ chối</button>
                    <button type="button" onclick="backToUrgent()" class="btn btn-primary">Quay lại</button>
                </div>
            </div>
        </div>
    </div>

    <div id="denyModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Từ chối ca khám khẩn cấp</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 10px;">
                        <div class="form-group">
                            <label for="comment">Ghi chú (lý do):</label>
                            <textarea class="form-control" rows="5" id="comment1"></textarea>
                        </div>
                    </div>
                    <div class="row" style="margin: 10px;">
                        <button type="button" onclick="addComment()" value="" class="btn" style="margin: 5px;">Tôi đang bận</button>
                        <button type="button" onclick="addComment1()" value="" class="btn" style="margin: 5px;">Trùng lịch khám</button>
                        <button type="button" onclick="addComment2()" value="" class="btn" style="margin: 5px;">Tôi đang không khỏe</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="denyForm()" value="" class="btn btn-danger">Tiến hành từ chối</button>
                    <button type="button" onclick="backToUrgent();" class="btn btn-primary">Quay lại</button>
                </div>
            </div>

        </div>
    </div>

    <div id="superurgentdetailModal" class="modal fade" role="dialog">
        <div class="modal-dialog" style="width: 80%; height: 80%;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">So sánh lịch khám khẩn cấp với lịch khám bị trùng</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-md-12 well text-center">
                                <table class="table">
                                    <tr>
                                        <td><b>lịch khám</b></td>
                                        <td><b>Thường</b></td>
                                        <td><b>Khẩn cấp</b></td>
                                    </tr>
                                    <tr>
                                        <td><b>Mã hồ sơ</b></td>
                                        <td>35</td>
                                        <td>36</td>
                                    </tr>
                                    <tr>
                                        <td><b>Họ tên</b></td>
                                        <td>Vũ Văn A</td>
                                        <td>Lê Thị B</td>
                                    </tr>
                                    <tr>
                                        <td><b>Giới tính</b></td>
                                        <td>Nam</td>
                                        <td>Nữ</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tuổi</b></td>
                                        <td>30</td>
                                        <td>19</td>
                                    </tr>
                                    <tr>
                                        <td><b>Địa chỉ</b></td>
                                        <td>Hà Nội</td>
                                        <td>Đà Nẵng</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tình trạng bệnh</b></td>
                                        <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn.</td>
                                        <td>Thành bụng căng cứng.
                                    Sốt 40 độ.</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" onclick="urgentAccept()" class="btn btn-success" style="padding-left: 8px;">Chấp nhận</button>
                    <button type="button" onclick="superdenyForm()" class="btn btn-danger">Từ chối</button>
                    <button type="button" onclick="backToUrgent()" class="btn btn-primary">Quay lại</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end Nhóm 2 thêm cửa sổ danh sách khám khẩn cấp -->
</body>
@yield('custom_js')
</html>
