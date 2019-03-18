@extends('admin.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <style >
        .row{
            font-size: medium;
        }
        .select2-selection__choice {
            background: #00c0ef;
        }
    </style>
@endsection
@section('pagename')
    <div class="container-fluid">
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
                                    <select style="width: 100%;" class="js-example-basic-multiple" name="states[]" multiple="multiple" placehoder="Chọn chuyên khoa">
                                        <option>Nội khoa</option>
                                        <option>Ngoại khoa</option>
                                        <option>Da liễu</option>
                                        <option>Tim mạch</option>
                                    </select>
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
