@extends('HospitalAdmin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="content-header">
        <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
            <li><a href="/admin_hospital"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin_hospital/doctors">Staffs</a></li>
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
                            <h3 class="box-title">Edit Doctor</h3>
                        </div>
                    </div>
                </div>
                <div class="box-body" id="doctor">
                    <!-- Body -->
                    <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Họ tên</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" value="Nguyễn Thị Linh">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" value="linh.nt@gmail.com">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tel</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" value="0123456789">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Thanh Xuân, Hà Nội">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Phòng</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Kế toán">
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Chức vụ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="Trưởng phòng">
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
        <div class="col-sm-3">
                <div class="box box-primary">
                    <!-- Header -->
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="box-title">Upload avatar</h3>
                            </div>
                        </div>
                    </div>
                    <div class="box-body" id="doctor">
                        <form id="form1" runat="server">
                            <input type='file' id="imgInp" />
                            <img id="blah" src="https://ddpnetwork.org/wp-content/plugins/buddypress/bp-core/images/mystery-man.jpg" alt="your image" style="width: 128px;height: 128px"/>
                        </form>
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
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
            }
        
            reader.readAsDataURL(input.files[0]);
        }
    }
        
    $("#imgInp").change(function() {
        readURL(this);
    });
</script>
@endsection