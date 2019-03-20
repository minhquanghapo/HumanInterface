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
            </div>
        </section>
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
