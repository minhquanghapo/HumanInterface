@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <div class="box box-primary">
        <!-- Header -->
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="box-title">Edit Admin</h3>
                </div>
            </div>
        </div>
        <!-- Body -->
        <form role="form" class="dynamic-form">
            <div class="box-body" id="admin">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm-password" placeholder="Password">
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
@endsection
