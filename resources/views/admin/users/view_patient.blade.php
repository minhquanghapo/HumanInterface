@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<style>
    .calendar-tab:focus {
        background: lightgray;
    }
    .badge {
        margin-left: 2px;
    }
    .box-comment {
        border-bottom: 1px solid lightgray;
    }
</style>
<div class="container-fluid">
    <section class="row">
        <div class="col-sm-7 col-xs-12">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="box-title">Thông tin bệnh nhân</h3>
                        </div>
                    </div>
                </div>

                <!-- Body -->
                <form role="form" class="form-horizontal">

                    <div class="box-body" id="patient">
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
                            <label class="col-sm-2 control-label">Sdt</label>
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
                    </div>
                </form>

                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Hủy</button>
                    <button type="submit" class="btn btn-info pull-right">Lưu</button>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="box box-widget  widget-user-2">
                <div class="widget-user-header">
                    <div class="widget-user-image">
                        <img class="img-circle" src="{{asset('img/HI_06/dist/img/avatar.png')}}" alt="User Avatar">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username">Nguyễn Thị Lan</h3>
                    <h5 class="widget-user-desc">Thanh Xuân Hà Nội</h5>
                </div>
                <div class="box-footer no-padding">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1" data-toggle="tab">Lịch đã đặt <span class="pull-right badge bg-blue">4</span></a> 
                            </li>
                            <li>
                                <a href="#tab_2" data-toggle="tab">Lịch đã khám <span class="pull-right badge bg-green">2</span></a>
                            </li>
                            <li>
                                <a href="#tab_3" data-toggle="tab">Lịch đã hủy <span class="pull-right badge bg-red">2</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="box-footer box-comments">
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/bstuyet.jpeg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Nguyễn Thị Tuyết
                                                <span class="text-muted pull-right">10:03 PM Tommorow</span>
                                            </span>
                                            <p>Bệnh viện XYZ</p>
                                            <p>Khám mắt</p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Maria Gonzales
                                                <span class="text-muted pull-right">8:03 PM Today</span>
                                            </span>
                                            <p>Bệnh viện ABC</p>
                                            <p>Điều trị bệnh abc</p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Maria Gonzales
                                                <span class="text-muted pull-right">8:03 PM 2019/06/31</span>
                                            </span>
                                            <p>Bệnh viện ABC</p>
                                            <p>Điều trị bệnh abc</p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Maria Gonzales
                                                <span class="text-muted pull-right">8:03 PM 2019/07/09</span>
                                            </span>
                                            <p>Bệnh viện CUCXILAU</p>
                                            <p>Điều trị bệnh ongbelap</p>
                                        </div>
                                    </div>                      
                                </div>  
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2">
                                <div class="box-footer box-comments">
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Maria Gonzales
                                                <span class="text-muted pull-right">8:03 PM 2019/06/31</span>
                                            </span>
                                            <p>Bệnh viện ABC</p>
                                            <p>Điều trị bệnh abc</p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Maria Gonzales
                                                <span class="text-muted pull-right">8:03 PM 2019/07/09</span>
                                            </span>
                                            <p>Bệnh viện CUCXILAU</p>
                                            <p>Điều trị bệnh ongbelap</p>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3">
                                <div class="box-footer box-comments">
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Maria Koala
                                                <span class="text-muted pull-right">8:03 PM 2019/06/31</span>
                                            </span>
                                            <p>Bệnh viện Koala</p>
                                            <p>Điều trị bệnh XYZ</p>
                                        </div>
                                    </div>
                                    <div class="box-comment">
                                        <img class="img-circle img-sm" src="{{asset('img/HI_06/dist/img/user1-128x128.jpg')}}" alt="User Image">
                                        <div class="comment-text">
                                            <span class="username">
                                                Bs.Maria Gonzales
                                                <span class="text-muted pull-right">8:03 PM 2019/07/09</span>
                                            </span>
                                            <p>Bệnh viện CUCXILAU</p>
                                            <p>Điều trị bệnh ongbelap</p>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                            <!-- /.tab-pane -->
                        </div>
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
    $('#tabs1').trigger('click')
</script>
@endsection