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
                    <h3 class="box-title">Edit Doctor</h3>
                </div>
            </div>
        </div>
        <!-- Body -->
        <form role="form" class="form-horizontal">
            
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
                <!-- Body -->
                <form role="form" class="dynamic-form">
                    
                    <div class="box-body" id="doctor">
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
                        <div class="form-group">
                            <label for="tel">Tel</label>
                            <input type="tel" class="form-control" id="tel" placeholder="Telephone Number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="hopital">Hopital</label>
                            <input type="text" class="form-control" id="hopital" placeholder="Hopital">
                        </div>
                        <div class="form-group">
                            <label for="specialist">Specialist</label>
                            <div class="form-horizontal">
                                <select class="form-control" id="specialist">
                                    <option>Nội khoa</option>
                                    <option>Ngoại khoa</option>
                                    <option>Da liễu</option>
                                    <option>Tim mạch</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    

<<<<<<< HEAD
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
=======
            <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
>>>>>>> 19cc9c0bae867d86a8eaafef8db5b28d23b81a55
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