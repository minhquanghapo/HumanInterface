@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="row">
        <div class="col-sm-8">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Tài khoản nhân viên</h3>
                        </div>
                    </div>
                </div>

                <!-- Body -->
                <div class="box-body">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Enter email" disabled value="nguyenvana@.gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" value="123123" disabled >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Xác thực mật khẩu</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" value="123123" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sdt</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" value="12328197231" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Địa chỉ email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Thanh Xuân, Hà Nội" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bệnh viện</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Bạch Mai, Hà Nội" disabled>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Hủy</button>
                    <button type="submit" class="btn btn-info pull-right">Lưu</button>
                </div>
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