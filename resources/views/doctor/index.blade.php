@extends('doctor.master')

@section('custom_css')
    <link href='{{asset('css/doctor/fullcalendar.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/doctor/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />
    <style>

        body {
            margin: 40px auto;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
        }

        #calendar {
            width: 90%;
            margin: auto;
        }

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
            overflow: hidden;
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
            top: -24px;
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

        /*nhóm 2*/
    </style>
    <!-- nhóm 2 -->
    <script>
        function openDetail() {
            $("#urgentModal").modal("hide");
            $("#urgentdetailModal").modal("show");
        }
    </script>
    <!-- nhóm 2 -->

    @endsection

@section('custom_js')

    <script src='{{asset('js/fullcalendar.min.js')}}'></script>
    <script src='{{asset('js/doctor/index.js')}}'></script>
    <script src='{{asset('js/doctor/locale-all.js')}}'></script>

@endsection

@section('page_body')
    <div class="container">
        <div class="col-md-2" style="overflow: hidden; margin-bottom: 10px">
            <div class="avatar">
                <div class="col-sm-4 col-md-12">
                    <!-- Nhóm 2  thêm button-->
                    <button type="button" class="btn btn-primary notification" data-toggle="modal" data-target="#urgentModal" style="padding-left: 4px;"><span>Thông báo khám khẩn cấp</span></button>
                    <!-- end Nhóm 2  thêm button-->
                    <br><br>    
                    <img src="{{asset('img/avatar.jpg')}}" class="img-responsive" style="margin: auto" alt="Cinque Terre">
                </div>
                <div class="col-sm-8 col-md-12">
                    <center>
                        <h4>BS. Lê Hoàng Vũ</h4>
                        <p>Khoa: Chấn thương chỉnh hình</p>
                        <p>sdt: 0123456789</p>
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#infoModal">Cập nhật thông tin</button>
                        <a href="/doctor/login" class="btn btn-info" role="button">Đăng xuất</a>
                    </center>
                </div>

            </div>
        </div>
        <div class = "col-md-10">
            <div id="calendar"></div>
        </div>
    </div>

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
                    {{--<a href="/doctor/examination" class="btn btn-primary" role="button">Bắt đầu ca khám</a>--}}
                    <button type="button" id="start-examination" class="btn btn-primary" value="">Bắt đầu ca khám</button>
                    <button type="button" id="remove-examination" class="btn btn-danger">Huỷ ca khám</button>
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
                                        <p><strong>10/05 10:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Khám khẩn cấp</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn">Đã được nhận</button>
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
                                        <p><strong>10/05 9:30</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Bệnh nhân đã chờ lâu</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn">Đã được nhận</button>
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
                                        <p><strong>10/05 9:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Khám Gấp</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn"><span class="glyphicon glyphicon-remove"></span> Đã từ chối</button>
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
                                        <p><strong>10/05 9:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Khám cháu giám đốc</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn"><span class="glyphicon glyphicon-time"></span> Hết hạn</button>
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
                                        <p><strong>10/05 8:30</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Bệnh nhân đã bị hủy hẹn nhiều lần</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn"><span class="glyphicon glyphicon-ok"></span> Đã nhận</button>
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
                                        <p><strong>10/05 8:00</strong></p>
                                        <p>Vũ Văn A</p>
                                        <p>Nam - 30</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="col-sm-8"><strong>Bệnh nhân đã chờ lâu</strong></div>
                                        <div class="col-sm-4">
                                            <button type="button" class="btn mybtn"><span class="glyphicon glyphicon-remove"></span> Đã từ chối</button>
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
                    <h4 class="modal-title">Thông tin chi tiết ca khám</h4>
                </div>
                <div class="modal-body">
                    <div class="row form-group">
                        <div class="col-xs-12">
                            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                                <li ><a href="#step-3">
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
                    <button type="button" id="backto-urgent" class="btn btn-primary">Quay lại</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- end Nhóm 2 thêm cửa sổ danh sách khám khẩn cấp -->

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
    @endsection
