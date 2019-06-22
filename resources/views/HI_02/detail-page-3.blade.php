@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
    <link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
    <link href="{{ asset('HI_02/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('HI_03/css/progress_bar.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main class="detail-page">
        <div class="progress_bar">
            <div class="bar__container">
                <ul class="bar" id="bar">
                    <li class="active">
                        <a href="{{ route('HI02.hospital_list', app('request')->query()) }}">Chọn bệnh viện</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Chọn lịch khám</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('HI02.hospital_show', app('request')->query()) }}">Chọn bác sĩ</a>
                    </li>
                    <li class="active">
                        Chọn hình thức khám
                    </li>
                    <li>Thanh toán</li>
                </ul>
            </div>
        </div>
        {{-- <div id="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li><a href="{{ url('grid-list') }}">Danh sách bác sĩ</a></li>
                    <li>Thông tin bác sĩ</li>
                </ul>
            </div>
        </div> --}}
        <!-- /breadcrumb -->

        <div class="container margin_60">
            <div class="row">
                <aside class="col-xl-3 col-lg-4" id="sidebar">
                    <div class="box_profile" style="padding-bottom: 0">
                        <figure>
                            <img src="{{ asset('HI_03/img/doctor/le-thi-huong.png') }}" alt="" class="img-fluid">
                        </figure>
                        <small>Khoa Tai Mũi Họng</small>
                        <h1>Bác sĩ Lê Thị Hương</h1>
                        <span class="rating">
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star"></i>
							<small>(145)</small>
							<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level"
                               class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                        </span>
                        <ul class="statistic">
                            <li>854 lượt xem</li>
                            <li>124 bệnh nhân</li>
                        </ul>
                        <ul class="contacts">
                            <li><b>Điện thoại</b></br><a href="tel://000434323342">0975 056 124</a></li>
                            <li><b>Bệnh viện đang công tác: </b></br>Bệnh viện Bạch Mai</li>
                        </ul>
                        
                    </div>
                </aside>
                <!-- /asdide -->

                <div class="col-xl-9 col-lg-8">
                    <!-- /box_general -->

                    <div class="tabs_styled_2">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book" aria-expanded="true"><b>Đặt lịch khám</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true"><b>Thông tin bác sĩ</b></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"><b>Đánh giá</b></a>
                            </li>
                        </ul>
                        <!--/nav-tabs -->

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
                                <div class="box_general_2 add_bottom_45">
                                    @if($appointment_type == "doctor")
                                        <div class="main_title_4">
                                            <h3><i class="icon_circle-slelected"></i>Chọn ngày và giờ khám</h3>
                                        </div>
                
                                        <div class="row add_bottom_45">
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div id="calendar"></div>
                                                    <input type="hidden" id="my_hidden_input">
                                                    <ul class="legend">
                                                        <li><strong></strong>Lịch trống</li>
                                                        <li><strong></strong>Bận</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <ul class="time_select version_2 add_top_20">
                                                    <li>
                                                        <input type="radio" id="radio1" name="radio_time" value="09.30am">
                                                        <label for="radio1">09:30</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio2" name="radio_time" value="10.00am">
                                                        <label for="radio2">10:00</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio3" name="radio_time" value="10.30am">
                                                        <label for="radio3">10:30</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio4" name="radio_time" value="11.00am">
                                                        <label for="radio4">11:00</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio5" name="radio_time" value="11.30am">
                                                        <label for="radio5">11:30</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio6" name="radio_time" value="12.00am">
                                                        <label for="radio6">12:00</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio7" name="radio_time" value="01.30pm">
                                                        <label for="radio7">13:30</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio8" name="radio_time" value="02.00pm">
                                                        <label for="radio8">14:00</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio9" name="radio_time" value="02.30pm">
                                                        <label for="radio9">14:30</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio10" name="radio_time" value="03.00pm">
                                                        <label for="radio10">15:00</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio11" name="radio_time" value="03.30pm">
                                                        <label for="radio11">15:30</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="radio12" name="radio_time" value="04.00pm">
                                                        <label for="radio12">16:00</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                    @endif
            
                                    <div class="main_title_4">
                                        <h3><i class="icon_circle-slelected"></i>Chọn hình thức khám</h3>
                                    </div>
                                    <ul class="treatments clearfix">
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" class="css-checkbox" id="visit1" name="visit1">
                                                <label for="visit1" class="css-label">Khám tổng quát <strong>200.000
                                                        VNĐ</strong></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" class="css-checkbox" id="visit2" name="visit2">
                                                <label for="visit2" class="css-label">Lấy dị vật trong tai <strong>200.000
                                                        VNĐ</strong></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" class="css-checkbox" id="visit3" name="visit3">
                                                <label for="visit3" class="css-label">Lấy dị vật trong mũi <strong>200.000
                                                        VNĐ</strong></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" class="css-checkbox" id="visit4" name="visit4">
                                                <label for="visit4" class="css-label">Bệnh lý về họng – thanh quản <strong>200.000
                                                        VNĐ</strong></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" class="css-checkbox" id="visit5" name="visit5">
                                                <label for="visit5" class="css-label">Phẫu thuật xoang mũi <strong>200.000
                                                        VNĐ</strong></label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="checkbox">
                                                <input type="checkbox" class="css-checkbox" id="visit6" name="visit6">
                                                <label for="visit6" class="css-label">Phẫu thuật vá màng nhĩ <strong>200.000
                                                        VNĐ</strong></label>
                                            </div>
                                        </li>
                                    </ul>
                                    <hr>
                                    <div class="text-center">
                                        <a href="{{ route('HI02.booking', app('request')->query()) }}" class="btn_1 medium">
                                            Tiếp tục
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="general" role="tabpanel"aria-labelledby="general-tab">

                                <p class="lead add_bottom_30">Bác sĩ Lê Thị Hương hiện đang là trưởng khoa Tai Mũi Họng
                                    tại Bệnh viện Tai Mũi Họng Trung ương.</p>
                                <div class="indent_title_in">
                                    <i class="pe-7s-user"></i>
                                    <h3>Kinh nghiệm làm việc</h3>
                                    <!-- <p>Mussum ipsum cacilds, vidis litro abertis.</p> -->
                                </div>
                                <div class="wrapper_indent">
                                    <p>Bác sĩ Lê Thị Hương từng có 5 năm làm việc tại Bệnh viện Trung ương Huế. Tháng
                                        6/2012 chuyển công tác ra Hà Nội và làm việc tại Bệnh viện Tai Mũi Họng Trung
                                        ương cho đến nay.
                                    </p>
                                    <h6>Chuyên môn</h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="bullets">
                                                <li>Điều trị viêm tai giữa</li>
                                                <li>Điều trị dị tật ống tai</li>
                                                <li>Chữa thủng màng nhĩ</li>
                                                <li>Điều trị viêm tai xương chũm</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul class="bullets">
                                                <li>Điều trị viêm mũi dị ứng</li>
                                                <li>Điều trị viêm xoang mũi</li>
                                                <li>Điều trị lệch vách ngăn mũi</li>
                                                <li>Điều trị phẫu thuật xoang mũi</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /row-->
                                </div>
                                <!-- /wrapper indent -->

                                <hr>

                                <div class="indent_title_in">
                                    <i class="pe-7s-news-paper"></i>
                                    <h3>Bằng cấp</h3>
                                    <!-- <p>Mussum ipsum cacilds, vidis litro abertis.</p> -->
                                </div>
                                <div class="wrapper_indent">
                                    <p>Bác sĩ Lê Thị Hương tốt nghiệp loại giỏi tại trường Đại học Y Đa khoa Huế vào năm
                                        2004. Sau đó học lên bác sĩ nội trú đến năm 2007.</p>
                                    <h6>Vị trí công tác</h6>
                                    <ul class="list_edu">
                                        <li><strong>Bệnh viện Trung ương Huế</strong> - Bác sĩ Tai Mũi Họng</li>
                                        <li><strong>Bệnh viện Tai Mũi Họng Trung ương</strong> - Trưởng khoa Tai Mũi
                                            Họng
                                        </li>
                                    </ul>
                                </div>
                                <!--  End wrapper indent -->

                                <hr>

                            </div>
                            <!-- /tab_2 -->

                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div id="review_summary">
                                                <strong>4.7</strong>
                                                <div class="rating">
                                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                        class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                        class="icon_star"></i>
                                                </div>
                                                <small>Dựa trên 4 đánh giá</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%"
                                                             aria-valuenow="90" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>5 sao</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 95%"
                                                             aria-valuenow="95" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>4 sao</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                                             aria-valuenow="60" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>3 sao</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%"
                                                             aria-valuenow="20" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>2 sao</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0"
                                                             aria-valuenow="0" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3">
                                                    <small><strong>1 sao</strong></small>
                                                </div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <hr>

                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="{{ asset('HI_03/img/doctor/commentor.png') }}"
                                                                       alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rating">
                                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star"></i>
                                            </div>
                                            <div class="rev-info">
                                                Trịnh Hữu Chính – 03/04/2016
                                            </div>
                                            <div class="rev-text">
                                                <p>
                                                    Bác sĩ rất vui vẻ, tư vấn chi tiết
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End review-box -->

                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="{{ asset('HI_03/img/doctor/commentor.png') }}"
                                                                       alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rating">
                                                <i class="icon-star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star"></i>
                                            </div>
                                            <div class="rev-info">
                                                Vũ Huy Tuấn - 01/04/2016
                                            </div>
                                            <div class="rev-text">
                                                <p>
                                                    Dịch vụ rất tốt, giá cả ok
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End review-box -->

                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="{{ asset('HI_03/img/doctor/commentor.png') }}"
                                                                       alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rating">
                                                <i class="icon-star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                    class="icon_star"></i>
                                            </div>
                                            <div class="rev-info">
                                                Vũ Tuấn Bình - 31/03/2016
                                            </div>
                                            <div class="rev-text">
                                                <p>
                                                    Rất tốt
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End review-box -->
                                </div>
                                <!-- End review-container -->
                            </div>
                            <!-- /tab_3 -->
                        </div>
                        <!-- /tab-content -->
                    </div>
                    <!-- /tabs_styled -->

                    <div class="padding-top-50">
                        <h5 class="title">
                            Danh sách bác sĩ cùng chuyên khoa:
                        </h5>
                        <div class="row">
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img

                                                src="{{ asset('HI_03/img/doctor/nguyen-thi-huong-linh.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Sản phụ khoa</small>

                                        <h3>Bác sĩ Nguyễn Thị Hương Linh</h3>
                                        <p>Có 23 kinh nghiệm trong chuyên ngành sản phụ khoa</p>
                                        <span class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star voted"></i><i class="icon_star"></i><i
                                                class="icon_star"></i>
                                            <small data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Số lượt đặt lịch khám" class="badge_list_1">(145)</small>
                                        </span>
                                    </div>
                                    <ul>
                                        <li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i
                                                    class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                        <li>
                                            <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                               target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img

                                                src="{{ asset('HI_03/img/doctor/nguyen-thi-tan-sinh.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Sản phụ khoa</small>

                                        <h3>Bác sĩ Nguyễn Thị Tấn Sinh</h3>
                                        <p>Nguyên là Phó Trưởng khoa Phụ Sản Bệnh viện Bạch Mai</p>
                                        <span class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star voted"></i><i class="icon_star"></i><i
                                                class="icon_star"></i>
                                            <small data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Số lượt đặt lịch khám" class="badge_list_1">(145)</small>
                                        </span>
                                    </div>
                                    <ul>
                                        <li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i
                                                    class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                        <li>
                                            <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                               target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/le-thi-thu-hang.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Khám bệnh & Nội khoa</small>
                                        <h3>Bác sĩ Lê Thị Thu Hằng</h3>
                                        <p>10 năm dày dặn kinh nghiệm trong điều trị bệnh da liễu người lớn và trẻ em</p>
                                        <span class="rating">
                                            <i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                                class="icon_star voted"></i><i class="icon_star"></i><i
                                                class="icon_star"></i>
                                            <small data-toggle="tooltip" data-placement="top"
                                                   data-original-title="Số lượt đặt lịch khám" class="badge_list_1">(145)</small>
                                        </span>
                                    </div>
                                    <ul>
                                        <li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i
                                                    class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                        <li>
                                            <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                               target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12 show-more">
                                <h3><a href="{{ url('/grid-list') }}">Xem thêm (100) ...</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
@endsection

@section('SPECIFIC SCRIPTS')
    <script src="{{ asset('HI_03/js/bootstrap-datepicker.js') }}"></script>
    <script>
        $('#calendar').datepicker({
            todayHighlight: true,
            daysOfWeekDisabled: [0],
            weekStart: 1,
            format: "yyyy-mm-dd",
            datesDisabled: ["2017/10/20", "2017/11/21", "2017/12/21", "2018/01/21", "2018/02/21", "2018/03/21"],
        });

    </script>
@endsection
