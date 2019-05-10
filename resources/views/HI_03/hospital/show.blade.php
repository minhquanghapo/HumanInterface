@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
    <link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
    <link href="{{ asset('HI_02/css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main class="detail-page">
        <div id="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li><a href="{{ url('hospital/list') }}">Danh sách bệnh viện</a></li>
                    <li>Thông tin bệnh viện</li>
                </ul>
            </div>
        </div>
        <!-- /breadcrumb -->

        <div class="container margin_60">
            <div class="row">
                <aside class="col-xl-3 col-lg-4" id="sidebar">
                    <div class="box_profile">
                        <figure>
                            <img src="{{ asset('HI_03/img/hospital/hospital.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <h1><a href="#general-tab">Bệnh viện VinMec</a></h1>
                        <span class="rating">
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star"></i>
							<small>(145)</small>
							<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level"
                               class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15"
                                                         height="15" alt=""></a>
						</span>
                        <ul class="statistic">
                            <li>70 chuyên khoa</li>
                            <li>224 bác sĩ</li>
                        </ul>
                        <ul class="contacts">
                            <li><b>Địa chỉ</b></br>29 Nguyễn Bỉnh Khiêm, Nguyễn Du, Hai Bà Trưng, Hà Nội</li>
                            <li><b>Hotline</b></br><a href="tel://000434323342">0975 056 124</a></li>
                        </ul>
                        <div class="text-center"><a
                                href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361"
                                class="btn_1 outline" target="_blank"><i class="icon_pin"></i> Xem trên bản đồ</a></div>
                    </div>
                </aside>
                <!-- /asdide -->

                <div class="col-xl-9 col-lg-8">
                    <div>
                        <div class="main_title_4">
                            <h3><i class="icon_circle-slelected"></i>Danh sách bác sĩ</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid"
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid"
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid"
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid"
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid"
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid"
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Đặt lịch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            </div>
                                <nav aria-label="" class="add_top_20">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Trước</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Sau</a>
                                        </li>
                                    </ul>
                                </nav>
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
