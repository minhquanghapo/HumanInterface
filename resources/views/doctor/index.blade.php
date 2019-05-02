<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='{{asset('css/fullcalendar.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/bootstrap.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/toastr.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />
    <script src='{{asset('js/moment.min.js')}}'></script>
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <script src='{{asset('js/toastr.min.js')}}'></script>
    <script src='{{asset('js/fullcalendar.min.js')}}'></script>
    <script src='{{asset('js/doctor/index.js')}}'></script>
    <script src='{{asset('js/doctor/locale-all.js')}}'></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
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
    </style>
</head>
<body>
<div class="container">
    <div class="col-md-2">
        <div class="avatar">
            <img src="{{asset('img/avatar.jpg')}}" class="img-responsive" style="margin: auto" alt="Cinque Terre">
            <center>
                <h4>BS. Lê Hoàng Vũ</h4>
                <p>Khoa: Chấn thương chỉnh hình</p>
                <p>sdt: 0123456789</p>
                <button type="button" class="btn btn-primary" style="margin-: 10px" data-toggle="modal" data-target="#infoModal">Cập nhật thông tin</button>
            </center>

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
                <a href="/doctor/examination" class="btn btn-primary" role="button">Bắt đầu ca khám</a>
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
</body>
</html>
