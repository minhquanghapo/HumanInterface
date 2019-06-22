@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
<link rel="stylesheet" href="{{ asset('/css/admin/dynamic_form.css') }}" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="row">
        <div class="col-sm-8">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="box-title">Tạo tài khoản mới</h3>
                        </div>
                        <div class="col-md-4 col-md-offset-5">
                            <div class="form-horizontal">
                                <select class="form-control" id="role-user-checkbox">
                                    <option value="admin">Quản trị hệ thống</option>
                                    <option value="staff">Nhân viên bệnh viên</option>
                                    <option value="doctor">Bác sĩ</option>
                                    <option value="patient">Bệnh nhân</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Body -->
                <form role="form" class="form-horizontal dynamic-form">
                    <div class="box-body" id="admin">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="box-body" id="staff">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tel</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" placeholder="Telephone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hopital</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Hopital">
                            </div>
                        </div>
                    </div>
                    <div class="box-body" id="doctor">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tel</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" placeholder="Telephone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hopital</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Hopital">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Specialist</label>
                            <div class="col-sm-10">
                                <select class="form-control">
                                    <option>Nội khoa</option>
                                    <option>Ngoại khoa</option>
                                    <option>Da liễu</option>
                                    <option>Tim mạch</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-body" id="patient">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tel</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" placeholder="Telephone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
                </form>

                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div>
            </div>
        </div>
    </section>
    <button style="display:none" type="button" class="btn btn-primary" id="choose_type" data-toggle="modal" data-target="#exampleModal">
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <strong>Chọn loại tài khoản muốn tạo trước khi bắt đầu</strong>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
@endsection
@section('customscript')
<script>
    $("#choose_type").trigger( "click" );
</script>
<script src="/adminlte/js/raphael.min.js"></script>
<script src="/adminlte/js/morris.min.js"></script>
<script src="/adminlte/js/metisMenu.min.js"></script>
<script src="/adminlte/js/startmin.js"></script>
<script src="{{ asset('/css/admin/dynamic_form.js') }}"></script>
@endsection