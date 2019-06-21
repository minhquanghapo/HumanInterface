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
                    <li class="active">Chọn bác sĩ</li>
                    <li>Chọn hình thức khám</li>
                    <li>Thanh toán</li>
                </ul>
            </div>
        </div>

        <div class="container margin_60">
            <div class="row">
                <aside class="col-xl-3 col-lg-4" id="sidebar">
                    <div class="box_profile">
                        <figure>
                            <img src="{{ asset('HI_03/img/hospital/vinmec.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <h1>Bệnh viện Đa khoa Quốc tế Vinmec Times City</h1>
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
                            <li><b>Địa chỉ</b></br>458 Minh Khai, Q. Hai Bà Trưng Hà Nội</li>
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
                            <h3><i class="icon_circle-slelected"></i>Danh sách bác sĩ bạn nên chọn</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/le-thi-huong.png') }}" class="img-fluid"
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/nguyen-thu-hoai.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Sản phụ, Nội soi</small>
                                        <h3>Bác sĩ Nguyễn Thu Hoài</h3>

                                        <p>12 năm kinh nghiệm trong ngành Sản phụ khoa</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/duong-ba-truc.jpeg') }}" class="img-fluid">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Nhi, Huyết học - Truyền máu</small>
                                        <h3>Bác sĩ Dương Bá Trực</h3>
                                        <p>Có kinh nghiệm gần 40 năm trong ngành và nguyên là Trưởng khoa huyết học lâm sàng</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/huynh-cong-tan.png') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Sản Phụ Khoa</small>
                                        <h3>Bác sĩ Huỳnh Công Tấn</h3>
                                        <p>Có hơn 21 năm kinh nghiệm trong lĩnh vực sản – phụ khoa</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/nguyen-thanh-liem.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Nhi, Tự kỷ & Bại não</small>
                                        <h3>Bác sĩ Đỗ Thanh Liêm</h3>
                                        <p>Là chuyên gia đầu ngành trong lĩnh vực ngoại nhi của Việt Nam</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/vo-thanh-nhan.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Tim mạch</small>
                                        <h3>Bác sĩ Võ Thành Nhân</h3>
                                        <p>Có nhiều năm kinh nghiệm giảng dạy tại Đại học Y Dược TP HCM</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/do-thi-ngoc-lan.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Sản phụ khoa</small>
                                        <h3>Bác sĩ Đỗ Thị Ngọc Lan</h3>
                                        <p>Thầy thuốc ưu tú, bác sĩ chuyên khoa II Đỗ Thị Ngọc Lan nguyên là Trưởng khoa Phụ Ngoại I</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/nguyen-thi-hoan.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Nội tiết, Nhi</small>
                                        <h3>Bác sĩ Nguyễn Thị Hoàn</h3>
                                        <p>Là bác sĩ đầu ngành, có 40 năm kinh nghiệm chuyên khoa nội tiết Nhi tại Việt Nam</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 doctor">
                                <div class="box_list wow fadeIn">
                                    <a href="#0" class="wish_bt"></a>
                                    <figure>
                                        <a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}"><img
                                                src="{{ asset('HI_03/img/doctor/nguyen-tuyet-mai.jpeg') }}" class="img-fluid"
                                                alt="">
                                            <div class="preview"><span>Đọc thêm</span></div>
                                        </a>
                                    </figure>
                                    <div class="wrapper">
                                        <small>Khoa Nội ung bướu</small>
                                        <h3>Bác sĩ Nguyễn Tuyết Mai</h3>
                                        <p>Có trên 30 năm kinh nghiệm trong lĩnh vực hóa trị, nội khoa ung thư</p>
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
                                        <li><a href="{{ route('doctor.detail', ['appointment_type' => 'date']) }}">Tiếp tục</a></li>
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
