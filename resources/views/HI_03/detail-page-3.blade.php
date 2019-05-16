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
                    @if($appointment_type == "date")
                        <li class="active">Chọn lịch khám</li>
                        <li class="active">Chọn bệnh viện</li>
                    @endif
                    <li class="active">Chọn bác sĩ</li>
                    <li class="active">Đặt lịch khám</li>
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
                            <img src="{{ asset('HI_03/img/doctor/doctor.png') }}" alt="" class="img-fluid">
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
                                <a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book" aria-expanded="true">Đặt lịch khám</a>
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
                                    <div class="text-center"><a href="{{ route('booking', ['appointment_type' => $appointment_type]) }}" class="btn_1 medium">Tiếp tục</a>
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
                                        <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg"
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
                                        <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg"
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
                                        <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150.jpg"
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
                                                src="data:image/jpeg;base64,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" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Tim mạch</small>
                                        <h3>Bác sĩ Lê Thị Hương</h3>

                                        <p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
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
                                                src="data:image/jpeg;base64,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" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Tim mạch</small>
                                        <h3>Bác sĩ Lê Thị Hương</h3>

                                        <p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
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
                                                src="data:image/jpeg;base64,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" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Tim mạch</small>
                                        <h3>Bác sĩ Lê Thị Hương</h3>
                                        <p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
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
