@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
    <link href="{{ asset('HI_03/css/progress_bar.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <div class="progress_bar">
            <div class="bar__container">
                <ul class="bar" id="bar">
                    <li class="active">Chọn bệnh viện</li>
                    <li>Chọn lịch khám</li>
                    <li>Chọn bác sĩ</li>
                    <li>Chọn hình thức khám</li>
                    <li>Thanh toán</li>
                </ul>
            </div>
        </div>
        <div id="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h4><strong>Các bệnh viện phù hợp với bạn</strong></h4>
                    </div>
                    <!-- <div class="col-md-6">
                            <div class="search_bar_list">
                            <input type="text" class="form-control" placeholder="Ex. Specialist, Name, Doctor...">
                            <input type="submit" value="Search">
                        </div>
                    </div> -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /results -->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/vinmec.jpg') }}" class="img-fluid">
                                        <div class="preview showClinic1"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Đa khoa Quốc tế Vinmec Times City</h3>

                                    <p>458 Minh Khai, Q. Hai Bà Trưng Hà Nội</p>
                                    <br>
                                    @if(app('request')->top)
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(300)</small></span>
                                    @else
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    @endif

                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>
                                    @if(app('request')->near)
                                        Bản đồ (1km)
                                    @else
                                        Bản đồ (3km)
                                    @endif
                                    </a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic1"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/quan-y-103.jpg') }}" class="img-fluid">
                                        <div class="preview showClinic1"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện quân y 103</h3>

                                    <p>261 Phùng Hưng, P. Phúc La, Hà Đông, Hà Nội</p>
                                    <br>
                                    @if(app('request')->top)
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(295)</small></span>
                                    @else
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    @endif
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>
                                            @if(app('request')->near)
                                                Bản đồ (2km)
                                            @else
                                                Bản đồ (3km)
                                            @endif
                                        </a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic1"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/bach-mai.jpg') }}" class="img-fluid">
                                        <div class="preview showClinic1"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Bạch Mai</h3>

                                    <p>78 Đường Giải Phóng, Phương Đình, Đống Đa, Hà Nội</p>
                                    <br>
                                    @if(app('request')->top)
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(290)</small></span>
                                    @else
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    @endif
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic1"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img height="260" src="{{ asset('HI_03/img/hospital/108.jpg') }}" class="img-fluid">
                                        <div class="preview showClinic2"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Trung Ương Quân Đội 108</h3>
                                    <p>Số 1 Trần Hưng Đạo, Bạch Đằng, Hai Bà Trưng, Hà Nội </p>
                                    @if(app('request')->top)
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(280)</small></span>
                                    @else
                                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    @endif
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_2.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic2"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/viet-phap.jpg') }}" class="img-fluid">
                                        <div class="preview showClinic3"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Việt Pháp Hà Nội</h3>
                                    <p>1 Phương Mai, Đống Đa, Hà Nội</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_3.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic3"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/yhct-bo-cong-an.jpg') }}" class="img-fluid">
                                        <div class="preview showClinic4"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện y học cổ truyền bộ công an</h3>
                                    <p>37 Hai Bà Trưng, Tràng Tiền, Hoàn Kiếm, Hà Nội</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_3.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 3)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic4"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/tai-mui-hong.jpg') }}" class="img-fluid">
                                        <div class="preview showClinic5"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Tai Mũi Họng Trung Ương</h3>
                                    <p>78 Giải Phóng, Phương Đình, Đống Đa, Hà Nội</p>
                                    <br><br>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic5"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/vinmec-central-park.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview showClinic6"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Đa khoa Quốc tế Vinmec Central Park</h3>
                                    <p>208 Nguyễn Hữu Cảnh, Phường 22, Q.Bình Thạnh, Hồ Chí Minh</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic6"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/y-ha-noi.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview showClinic6"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Đại học Y Hà Nội</h3>
                                    <p>1 Tôn Thất Tùng, Kim Liên, Đống Đa, Hà Nội</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic6"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                        <div class="col-md-6 clinic">
                            <div class="box_list wow fadeIn">
                                <a href="#0" class="wish_bt"></a>
                                <figure>
                                    <a href="{{ route('HI02.pick_schedule', app('request')->query()) }}"><img src="{{ asset('HI_03/img/hospital/yhct-trung-uong.jpg') }}" class="img-fluid" alt="">
                                        <div class="preview showClinic6"><span>Tiếp tục</span></div>
                                    </a>
                                </figure>
                                <div class="wrapper">
                                    <h3>Bệnh viện Y Học Cổ Truyền TW</h3>
                                    <p>29 Nguyễn Bỉnh Khiêm, Nguyễn Du, Hai Bà Trưng, Hà Nội</p>
                                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                                    <a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
                                </div>
                                <ul>
                                    <li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
                                    <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
                                    <li class="showClinic6"><a href="{{ route('HI02.pick_schedule', app('request')->query()) }}">Tiếp tục</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /box_list -->

                    </div>
                    <!-- /row -->

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
                    <!-- /pagination -->
                </div>
                <!-- /col -->

                <aside class="col-lg-4" id="sidebar">
                    <div id="map_listing" class="normal_list">
                    </div>
                </aside>
                <!-- /aside -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </main>
@endsection

@section('SPECIFIC SCRIPTS')
    <!-- SPECIFIC SCRIPTS -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('HI_03/js/map_listing.js') }}"></script>
    <script src="{{ asset('HI_03/js/infobox.js') }}"></script>
@endsection
