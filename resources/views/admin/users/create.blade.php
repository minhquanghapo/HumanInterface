@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
<link rel="stylesheet" href="{{ asset('/admin/dynamic_form.css') }}" />
@endsection
@section('pagename')
<div class="container-fluid">
    <div class="box box-primary">
        <!-- Header -->
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="box-title">Create User</h3>
                </div>
                <div class="col-md-3 col-md-offset-6">
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
        <form role="form" class="dynamic-form">
            <div class="box-body" id="admin">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Password">
                </div>
            </div>
            <div class="box-body" id="staff">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control"  placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Tel</label>
                    <input type="tel" class="form-control" placeholder="Telephone Number">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address">
                </div>
                <div class="form-group">
                    <label>Hopital</label>
                    <input type="text" class="form-control" placeholder="Hopital">
                </div>
            </div>
            <div class="box-body" id="doctor">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Tel</label>
                    <input type="tel" class="form-control" placeholder="Telephone Number">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address">
                </div>
                <div class="form-group">
                    <label>Hopital</label>
                    <input type="text" class="form-control" placeholder="Hopital">
                </div>
                <div class="form-group">
                    <label>Specialist</label>
                    <div class="form-horizontal">
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
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Tel</label>
                    <input type="tel" class="form-control" placeholder="Telephone Number">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="Address">
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
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
<script src="{{ asset('/admin/dynamic_form.js') }}"></script>
@endsection