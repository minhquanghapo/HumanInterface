@extends('admin.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <style >
        .row{
            font-size: medium;
        }
        .select2-selection__choice {
            background: #00c0ef !important;
            border: 1px #fff !important;
        }
        .select2-selection__choice__remove {
            color: #fff !important;
        }
        h4 {
            text-decoration: underline;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#detail">Thông tin chung</a></li>
                            <li><a data-toggle="tab" href="#account">Cấp tài khoản</a></li>
                            <li><a data-toggle="tab" href="#account_manager">Quản lý nhân viên</a></li>
                        </ul>
                        <!-- <h3 class="box-title"><strong>Thông tin chung</strong></h3> -->
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="detail">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" value="Bệnh viện Bạch Mai">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Thành phố</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true" >
                                                <option selected="selected">Hà Nội</option>
                                                <option>Hải Dương</option>
                                                <option>Hải Phòng</option>
                                                <option>Thanh Hóa</option>
                                                <option>Bắc Giang </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">BV tuyến</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                                <option selected="selected">Trung ương</option>
                                                <option>Tỉnh/Thành phố</option>
                                                <option>Quận, Huyện</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Địa chỉ</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" value="78 Giải Phóng, Phương Mai, Đống Đa, Hà Nội">
                                        </div>                                
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Chuyên khoa</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select2" multiple="multiple" data-placeholder="Chọn chuyên khoa"style="width: 100%;">
                                                <option selected="selected">Nội khoa</option>
                                                <option>Ngoại khoa</option>
                                                <option>Da liễu</option>
                                                <option>Tim mạch</option>
                                            </select>
                                        </div>                                
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Giờ làm việc:</label>
                                        <div class="col-sm-4 bootstrap-timepicker">
                                            <div class="input-group">
                                                <input type="text" placeholder="Từ" class="form-control timepicker">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 bootstrap-timepicker">
                                            <div class="input-group">
                                                <input type="text"  placeholder="đến" class="form-control timepicker">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div>
                                        <!-- /.input group -->
                                        </div>
                                        <!-- /.form group -->
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Sđt</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" value="(084 – 4) 38686390; (084 – 4) 36291818" placeholder="Nhập số điện thoại">
                                        </div>                                
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Fax</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" id="inputEmail3" value="(084-4) 38687524" placeholder="Nhập số điện thoại" >
                                        </div>                                
                                    </div>
                                    <button type="submit" class="btn btn-default">Hủy</button>
                                    <button type="submit" class="btn btn-info pull-right">Lưu</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="account">
                                <form class="form-horizontal">
                                    <p><strong>Cấp tài khoản mới cho nhân viên bệnh viện</strong></p>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tài khoản</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="admin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Mật khẩu</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Xác thực mật khẩu</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Gửi tới</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info pull-right">Gửi</button>
                                </form>
                            </div>    
                            <div class="tab-pane fade" id="account_manager">
                                <table class="table table-bordered table-hover">
                                    <thead class="bg-info">
                                        <tr>
                                            <th>Chức vụ</th>
                                            <th>Số lượng</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bác sỹ</td>
                                            <td>150</td>
                                            <td>
                                                <a class="btn btn-primary" target="_blank" href="/admin_hospital/doctors"><i class="fa fa-eye"></i>Chi tiết</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nhân viên bệnh viện</td>
                                            <td>20</td>
                                            <td>
                                                <a class="btn btn-primary" target="_blank" href="/admin_hospital/staffs"><i class="fa fa-eye"></i>Chi tiết</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- /.box -->
            <div class="col-sm-5">
                <div class="box box-primary">
                    <div class="box-body">   
                        <span class="box-title pull-left" style="padding-bottom: 10px;"><strong>Thông tin hoạt động</strong></span>
                        <a target="_blank" href="/admin_hospital" class="btn btn-primary pull-right">Xem chi tiết</a><br>
                    </div>
                    <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                            <li><a href="#">Số lượng phòng khám <span class="pull-right badge bg-blue">230</span></a></li>
                            <li><a href="#">Số lượng bác sỹ <span class="pull-right badge bg-aqua">50</span></a></li>
                            <li><a href="#">Tiếp nhận lịch khám/ngày<span class="pull-right badge bg-green">640</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('adminlte/images/benh-vien-bach-mai-1710478.jpg')}}" alt="Card image" style="width:100%">
                    <div class="card-body">
                    <div class="card-title"><strong>Bệnh viện Bạch Mai</strong></div>
                    <p class="card-text">78 Giải Phóng, Phương Mai, Đống Đa, Hà Nội</p>
                    <i style="color:orange" class="fa fa-star"></i>
                    <i style="color:orange" class="fa fa-star"></i>
                    <i style="color:orange" class="fa fa-star"></i>
                    <i style="color:orange" class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <br>
                    <a href="#" class="btn btn-primary" id="tabs1" onclick="showStuff(this)">Chi tiết</a>
                    <div id="tabs-1" class="tabContent">
                        <div class="card-text">
                            Bệnh viện Bạch Mai (tên giao dịch tiếng Anh: Bach Mai Hospital) nằm ở 78 Giải Phóng, Phương Mai, Đống Đa, Hà Nội. Bệnh viện Bạch Mai là một trong những bệnh viện lớn nhất của Việt Nam.
                            Bệnh viện Bạch Mai là bệnh viện đầu tiên trong nước được nhận danh hiệu đặc biệt. Hiện tại bệnh viện Bạch Mai có 1.400 giường bệnh, tất cả trưởng khoa, giám đốc các trung tâm đều có trình độ sau đại học. Tỉ lệ tử vong của bệnh nhân chỉ từ 0,8-0,9% và tỉ lệ sử dụng giường bệnh đạt 153% (so với tiêu chí đề ra là 85%).
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('customscript')
    <script src="/adminlte/js/raphael.min.js"></script>
    <script src="/adminlte/js/morris.min.js"></script>
    <script src="/adminlte/js/metisMenu.min.js"></script>
    <script src="/adminlte/js/startmin.js"></script>
@endsection
