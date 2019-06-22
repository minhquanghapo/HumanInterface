@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="content">
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <!-- Header -->
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="box-title">Admin</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Body -->
                    <form role="form" class="form-horizontal">
                        <div class="box-body" id="admin">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="Enter email">
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
                                    <input type="password" class="form-control" id="confirm-password" placeholder="Password">
                                </div>
                            </div>
                        </div>

                    </form>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Hủy</button>
                        <button type="submit" class="btn btn-info pull-right">Lưu</button>
                    </div>
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