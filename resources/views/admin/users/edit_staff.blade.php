@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="content-header">
        <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin/users">Users</a></li>
            <li class="active"> Edit</li>
        </ol>
    </section>
    <section class="content row">
        <div class="col-sm-8">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="box-title">Edit Staff</h3>
                        </div>
                    
                    </div>
                </div>
                <div class="box-body" id="staff">
                    <form role="form" class="form-horizontal">           
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
                    </form>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
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