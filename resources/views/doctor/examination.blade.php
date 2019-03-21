<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <link href='{{asset('css/bootstrap.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/toastr.min.css')}}' rel='stylesheet' />
    <script src='{{asset('js/jquery.min.js')}}'></script>
    <script src='{{asset('js/bootstrap.min.js')}}'></script>
    <script src='{{asset('js/toastr.min.js')}}'></script>
    <script src='{{asset('js/doctor/examination.js')}}'></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <style>

        body {
            margin: 40px auto;
            padding: 0;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
            font-size: 14px;
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
                <a href="/doctor" class="btn btn-info" role="button">Quay lại trang chủ</a>
            </center>

        </div>
    </div>
    <div class = "col-md-10">
        <div class="row form-group">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                    <li class="active"><a href="#step-1">
                            <p class="list-group-item-text">Thông tin bệnh nhân</p>
                        </a></li>
                    <li ><a href="#step-2">
                            <p class="list-group-item-text">Tình trang bệnh</p>
                        </a></li>
                    <li class="disabled"><a href="#step-3">
                            <p class="list-group-item-text">Chuẩn đoán và yêu cầu</p>
                        </a></li>
                    <li class="disabled"><a href="#step-4">
                            <p class="list-group-item-text">Kết luận</p>
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
                            <td id="idhoso">1</td>
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
                <div class="col-md-12 well text-center">
                    <p>
                        Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                        Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                        Thành bụng căng cứng.
                        Sốt nhẹ.
                    </p>
                    <button id="activate-step-3" class="btn btn-primary btn-lg">Tiến hành khám</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12 well">
                    <table class="table">
                        <tr>
                            <td class="col-sm-3"><b>Chẩn đoán</b></td>
                            <td class="col-sm-9"><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td class="col-sm-3"><b>Các yêu cầu xét nghiệm</b></td>
                            <td class="col-sm-9">
                                <div class="col-md-4">
                                    <h4>Các xét nghiệm</h4>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Xét nghiệm máu</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Xét nghiệm nước tiểu</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h4>Chụp chiếu</h4>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm não xuyên thóp</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm các tuyến mang tai</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm vú</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm tuyến giáp (bao gồm hạch cổ)</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm bụng</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm vùng nách</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm bẹn</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm thận, bàng quang</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm vùng chậu</label>
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Siêu âm doppler động tĩnh mạch ngoại biên</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h4>Nội soi</h4>
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="">Nội soi dạ dày</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <button id="activate-step-4" class="btn btn-primary btn-lg">Kết luận</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-4">
            <div class="col-xs-12">
                <div class="col-md-12 well">
                    <table class="table">
                        <tr>
                            <td><b>Kết luận bệnh</b></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><b>Chỉ định</b></td>
                            <td><input type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><b>Đơn thuốc</b></td>
                            <td>
                                <textarea class="form-control" rows="5" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td><b>Hẹn khám lại</b></td>
                            <td>
                                <input type="date" class="form-control">
                            </td>
                        </tr>
                    </table>
                    <button id="complete-btn" class="btn btn-primary btn-lg">Kết thúc ca khám</button>
                    {{--<a href="/doctor" id="ketthuc" class="btn btn-primary btn-lg" style="margin-top: 10px" role="button">Kết thúc ca khám</a>--}}
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
