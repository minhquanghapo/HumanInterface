@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="row">
        <div class="col-sm-7">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="box-title">Thông tin bác sĩ</h3>
                        </div>
                    </div>
                </div>
                <!-- Body -->
                <form role="form" class="form-horizontal">
                    <div class="box-body" id="patient">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" placeholder="Enter email" disabled value="nguyenvana@.gmail.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Mật khẩu</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" value="123123" disabled >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Xác thực mật khẩu</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" value="123123" disabled>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tên</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" value="Nguyễn Thị Lan" disabled>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sđt</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control" value="12328197231" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Địa chỉ</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="Thanh Xuân, Hà Nội" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bệnh viện</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" value="Bạch Mai, Hà Nội" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Chuyên khoa</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" disabled>
                                            <option selected>Nội khoa</option>
                                            <option>Ngoại khoa</option>
                                            <option>Da liễu</option>
                                            <option>Tim mạch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
{{--                             <div class="col-sm-3">
                                <img id="blah" src="{{asset('img/HI_06/dist/img/bstuyet.jpeg')}}" alt="your image" style="width: 128px;height: 128px"/>
                            </div> --}}
                        </div>
                    </div>
                </form>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Hủy</button>
                    <button type="submit" class="btn btn-info pull-right">Lưu</button>
                </div>
            </div>    
        </div>
        <div class="col-sm-5">
            <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                    <div class="widget-user-image">
                        <img class="img-circle" src="{{asset('img/HI_06/dist/img/bstuyet.jpeg')}}" alt="User Avatar">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">Nguyễn Thị Lan</h3>
                    <h5 class="widget-user-desc">Trưởng khoa</h5>
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
                            <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                            <div class="comment-text">
                                <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                </span>
                                Bác sỹ rất nhiệt tình
                            </div>
                        </div>
                        <div class="box-comment">
                            <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                            <div class="comment-text">
                                <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                </span>
                                Bác sỹ rất nhiệt tình
                            </div>
                        </div>
                        <div class="box-comment">
                            <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                            <div class="comment-text">
                                <span class="username">
                                    Maria Gonzales
                                    <span class="text-muted pull-right">8:03 PM Today</span>
                                </span>
                                Bác sỹ rất nhiệt tình
                            </div>
                        </div>
                        <div class="box-comment">
                            <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
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
{{--             <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="box-title">Doctor activity</h3>
                        </div>
                    </div>
                </div>

                <div class="box-body">
                    <div class="progress-group">
                        <span class="progress-text">Số lượt được tìm kiếm</span>
                        <span class="progress-number"><b>160</b></span>
                        <div class="progress sm">
                            <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Số yêu cầu nhận được</span>
                        <span class="progress-number"><b>310</b></span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Số ca khám thực hiện</span>
                        <span class="progress-number"><b>480</b></span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Số phản hồi từ người bệnh</span>
                        <span class="progress-number"><b>250</b></span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                </div>
                <div class="box-footer box-comments">
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/bstuyet.jpeg')}}" alt="User Image">

                        <div class="comment-text">
                            <span class="username">
                                        Maria Gonzales
                                        <span class="text-muted pull-right">8:03 PM Today</span>
                            </span>
                            <!-- /.username -->
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layouts.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                </div>
            </div> --}}
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
