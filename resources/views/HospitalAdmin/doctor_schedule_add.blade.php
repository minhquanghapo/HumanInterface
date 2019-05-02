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
            <li><a href="/admin_hospital/doctors">Doctors</a></li>
            <li class="active"> Add</li>
        </ol>
    </section>
    <section class="content row">
        <div class="col-sm-8">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="box-title">Thêm lịch khám</h3>
                        </div>
                    </div>
                </div>
                <div class="box-body" id="doctor">
                        
                    <!-- Body -->
                    <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Thời điểm</label>
                                <div class="col-sm-10">
                                <input type="datetime-local" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Họ tên</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giới tính</label>
                            <div class="col-sm-10">
				<input type="text" class="form-control">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tuổi</label>
                            <div class="col-sm-10">
				<input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
