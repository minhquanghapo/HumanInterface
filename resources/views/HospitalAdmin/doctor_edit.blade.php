@extends('HospitalAdmin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="content-header">
        <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
            <li><a href="/admin_hospital"><i class="fa fa-dashboard"></i>Trang chủ</a></li>
            <li><a href="/admin_hospital/doctors">Danh sách bác sĩ</a></li>
            <li class="active">Chỉnh sửa thông tin</li>
        </ol>
    </section>
    <section class="content row">
        <div class="col-sm-6">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin bác sĩ</h3>
                </div>
                <div class="box-body" id="doctor">
                    <!-- Body -->
                    <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Họ tên</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" value="Nguyễn Thị Minh Tuyết">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" value="tuyet.ntm@gmail.com">
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
                            <label class="col-sm-2 control-label">Hospital</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Việt Đức" disabled>
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
                        
                    </form>
                </div>
                <div class="box-footer">
                        <button type="submit" class="btn btn-default">Hủy</button>
                        <button type="submit" class="btn btn-info pull-right">Lưu</button>
                    </div>
            </div>
        </div>
        {{-- <div class="col-sm-2">
                <div class="box box-primary">
                    <!-- Header -->
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="box-title">Edit avatar</h3>
                            </div>
                        </div>
                    </div>
                    
                </div>
                          
        </div> --}}
        
        <div class="col-sm-6">
            
                    <div class="box box-widget widget-user-2">
                            
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua-active">
                            <div class="widget-user-image">
                                    <div class="box-body" id="doctor">
                                            <form id="form1" runat="server">
                                                <input type='file' id="imgInp" />
                                                <img id="blah" src="{{asset('img/HI_06/dist/img/bstuyet.jpeg')}}" alt="your image" style="width: 128px;height: 128px"/>
                                            </form>
                                        </div>
                            </div>
                            <!-- /.widget-user-image -->
                            <h3>Nguyễn Thị Lan</h3>
                            <h5>Trưởng khoa</h5>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="#">Số lượt được tìm kiếm <span class="pull-right badge bg-blue">230</span></a></li>
                                <li><a href="#">Số yêu cầu nhận được <span class="pull-right badge bg-aqua">150</span></a></li>
                                <li><a href="#">Số ca khám thực hiện<span class="pull-right badge bg-green">40</span></a></li>
                                <li><a href="#">Số phản hồi từ người bệnh<span class="pull-right badge bg-red">24</span></a></li>
                            </ul>
                        </div>
                        <div class="box-body">
                            <div class="box-footer box-comments">
                                <div class="box-comment">
                                    <img class="img-circle img-sm" src="http://127.0.0.1:8000/img/HI_06/dist/img/user1-128x128.jpg" alt="User Image">
                                    <div class="comment-text">
                                        <span class="username">
                                            Maria Gonzales
                                            <span class="text-muted pull-right">8:03 PM Today</span>
                                        </span>
                                        Bác sỹ rất nhiệt tình
                                    </div>
                                </div>
                                <div class="box-comment">
                                    <img class="img-circle img-sm" src="http://127.0.0.1:8000/img/HI_06/dist/img/user1-128x128.jpg" alt="User Image">
                                    <div class="comment-text">
                                        <span class="username">
                                            Maria Gonzales
                                            <span class="text-muted pull-right">8:03 PM Today</span>
                                        </span>
                                        Bác sỹ rất nhiệt tình
                                    </div>
                                </div>
                                <div class="box-comment">
                                    <img class="img-circle img-sm" src="http://127.0.0.1:8000/img/HI_06/dist/img/user1-128x128.jpg" alt="User Image">
                                    <div class="comment-text">
                                        <span class="username">
                                            Maria Gonzales
                                            <span class="text-muted pull-right">8:03 PM Today</span>
                                        </span>
                                        Bác sỹ rất nhiệt tình
                                    </div>
                                </div>
                                <div class="box-comment">
                                    <img class="img-circle img-sm" src="http://127.0.0.1:8000/img/HI_06/dist/img/user1-128x128.jpg" alt="User Image">
                                    <div class="comment-text">
                                        <span class="username">
                                            Maria Gonzales
                                            <span class="text-muted pull-right">8:03 PM Today</span>
                                        </span>
                                        Bác sỹ rất nhiệt tình
                                    </div>
                                </div>
        
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled"><a href="#">Trước</a></li>
                                    <li class="paginate_button active"><a href="#">1</a></li>
                                    <li class="paginate_button"><a href="#">2</a></li>
                                    <li class="paginate_button"><a href="#">3</a></li>
                                    <li class="paginate_button"><a href="#">4</a></li>
                                    <li class="paginate_button"><a href="#">5</a></li>
                               </ul>
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