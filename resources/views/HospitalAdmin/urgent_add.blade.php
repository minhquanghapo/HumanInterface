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
                            <label class="col-sm-2 control-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" value="Hà Nội">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giới tính</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" value="Nữ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tuổi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Thanh Xuân, Hà Nội">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tình trạng bệnh</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" cols="40" rows="5">Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt. Thành bụng căng cứng. Sốt nhẹ.</textarea>
                                
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Thời gian</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="10/05/2019 10:30">
                                </div>
                            </div>
                        
                        
                    </form>
                </div>
                <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="" class="btn btn-info pull-right">Thêm người nhận</button>
                        <button type="" class="btn btn-info pull-right" style="margin-right: 10px;">Gửi tới các bác sĩ có lịch trống</button>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
                <div class="box box-primary">
                    <!-- Header -->
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="box-title">Danh sách bác sĩ đã nhận</h3>
                            </div>
                        </div>
                    </div>
                    <div class="box-body" id="doctor">
                        <span class="glyphicon glyphicon-check text-green"></span><span class="text-green">Nguyễn Văn A - Chuyên khoa 1 đã thực hiện lịch khám</span> 
                        <hr>
                        <span class="glyphicon glyphicon-ok text-green"></span> Nguyễn Văn A - Chuyên khoa 1 đã chấp nhận
                        <hr>
                        <span class="glyphicon glyphicon-remove text-red"></span> Hoàng Văn B - Chuyên Khoa 2 đã từ chối
                        <hr>
                        <span class="glyphicon glyphicon-share"></span> Nguyễn Thùy C - chuyên khoa D đã đọc
                        <hr>
                        <span class="glyphicon glyphicon-share"></span> Nguyễn Hoàng D - chuyên khoa X đã đọc
                        <hr>
                        <span class="glyphicon glyphicon-share"></span> Đại Cồ Việt - chuyên khoa D đã đọc
                        <hr>
                        Bách Văn Khoa - chuyên khoa X đã nhận
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