@extends('HospitalAdmin.layouts.master')
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
    </style>
@endsection
@section('pagename')
    <div class="container-fluid">
        <section class="content-header">
            <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
                <li><a href="/admin"><i class="fa fa-hospital"></i> Home</a></li>
                <li><a href="/admin/hospitals">Hospitals</a></li>
                <li class="active"> Edit</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-8">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"><strong>EDIT HOSPITAL FORM</strong></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tên</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="inputEmail3" value="Bệnh viện Việt Đức">
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
                                        <input class="form-control" id="inputEmail3" value="40 Tràng Thi, Hàng Bông, Hoàn Kiếm, Hà Nội">
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
                                    <label for="inputEmail3" class="col-sm-2 control-label">Tel</label>
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
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-info pull-right">Save</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>
                    <!-- /.box -->

                </div>
                <div class="col-sm-4">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-bar-chart-o"></i>
                                <h3 class="box-title">Phân quyền hệ thống</h3>
                                <button type="button" class="pull-right btn btn-default" data-toggle="modal" data-target="#modal-default">Phân quyền</button>
        
                            </div>
                            <div class="box-body">
                                <ul class="nav nav-stacked">
                                    <li><a href="#">Quản trị kĩ thuật</a></li>
                                    <li><a href="#">Quản trị điều hành</a></li>
                                </ul>   
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Phân quyền</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <tr>
                                <th>Chức năng</th>
                                <th>Quản trị kỹ thuật</th>
                                <th>Quản trị điều hành</th>
                            </tr>
                            <tr>
                                <td>Sửa thông tin bệnh viện</td>
                                <td>
                                    <input type="checkbox" value="" disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Xem danh sách bác sỹ</td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
        
                            <tr>
                                <td>Thêm bác sỹ</td>
                                <td>
                                    <input type="checkbox" value="checked" disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Sửa thông tin bác sỹ</td>
                                <td>
                                    <input type="checkbox" value="checked" disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Gỡ bác sỹ</td>
                                <td>
                                    <input type="checkbox" value="checked" disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Xem danh sách nhân viên</td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
        
                            <tr>
                                <td>Thêm nhân viên</td>
                                <td>
                                    <input type="checkbox" value="checked" disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Sửa thông tin nhân viên</td>
                                <td>
                                    <input type="checkbox" value="checked" disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
                            <tr>
                                <td>Gỡ nhân viên</td>
                                <td>
                                    <input type="checkbox" value="checked" disabled></label>
                                </td>
                                <td>
                                    <input type="checkbox" value="" checked disabled></label>
                                </td>
                            </tr>
                            <tr>
                                    <td>Thêm danh mục thuốc</td>
                                    <td>
                                        <input type="checkbox" value="checked" disabled></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" value="" checked disabled></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sửa danh mục thuốc</td>
                                    <td>
                                        <input type="checkbox" value="checked" disabled></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" value="" checked disabled></label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gỡ danh mục thuốc</td>
                                    <td>
                                        <input type="checkbox" value="checked" disabled></label>
                                    </td>
                                    <td>
                                        <input type="checkbox" value="" checked disabled></label>
                                    </td>
                                </tr>
                                <tr>
                                        <td>Xem thống kê</td>
                                        <td>
                                            <input type="checkbox" value="" checked disabled></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" value="" checked disabled></label>
                                        </td>
                                    </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
@endsection
@section('content')
@endsection
@section('customscript')
    <script src="/adminlte/js/raphael.min.js"></script>
    <script src="/adminlte/js/morris.min.js"></script>
    <script src="/adminlte/js/metisMenu.min.js"></script>
    <script src="/adminlte/js/startmin.js"></script>
@endsection
