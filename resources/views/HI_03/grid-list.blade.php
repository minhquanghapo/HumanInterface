@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
	<link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_03/css/progress_bar.css') }}" rel="stylesheet">
@endsection


@section('content')
	<main>
		<div class="progress_bar">
			<div class="bar__container">
				<ul class="bar" id="bar">
					<li class="active">Chọn bác sĩ</li>
					<li>Chọn lịch khám</li>
					<li>Thanh toán</li>
				</ul>
			</div>
		</div>

		{{-- <div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="{{ url('home') }}">Trang chủ</a></li>
					<li>Kết quả tìm kiếm</li>
				</ul>
				<div class="row">
					<!-- <div class="col-md-6" id="search_result" style="display:none;">
						<h4><strong>Hiển thị 10</strong> trong 140 kết quả tìm thấy</h4>
					</div> -->
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
		</div> --}}
		<!-- /results -->
		
		<div class="filters_listing">
				<div class="container">
                    <form action="">
                        <div class="row">
				            <div class="col-md-4">
				            	<label><b>Nhập tên bác sĩ</b></label>
				                <input type="text" name="search" id="form-autocomplete" class="form-control mdb-autocomplete" placeholder="Vd. Lê Thị Hương">
				            </div>
					        <div class="col-md-4">
                                <label><b>Bệnh viện</b></label>
                                <select name="" class="form-control">
                                    <option value="">Bệnh viện Bạch Mai</option>
                                    <option value="">Bệnh viện Trung Ương Quân Đội 108</option>
                                    <option value="">Bệnh viện Việt Pháp Hà Nội</option>
                                    <option value="">Bệnh viện Việt Nam Cuba</option>
                                    <option value="">Bệnh viện Tai Mũi Họng Trung ương</option>
                                    <option value="">Bệnh viện Y Học Cổ Truyền Trung Ương</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label><b>Chuyên khoa</b></label>
                                <select name="" class="form-control">
                                    <option value="">Đa khoa</option>
                                    <option value="">Tai mũi họng</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Xương khớp</option>
                                    <option value="">Phụ khoa</option>
                                    <option value="">Nam khoa</option>
                                    <option value="">Nhi</option>
									<option value="">Da liễu</option>
									<option value="">Nội khoa</option>
									<option value="">Nội tiết</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">	
                            <div class="col-md-4">
                                <label><b>Sắp xếp theo</b></label>
                                <select name="" class="form-control">
                                    <option value="">Đánh giá</option>
                                    <option value="">Lượt đặt khám</option>
                                    <option value="">Khoảng cách</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label><b>Khoảng cách</b></label>
                                <select name="" class="form-control">
                                    <option value="">< 1km</option>
                                    <option value="">1-3km</option>
                                    <option value="">3-5km</option>
                                    <option value="">5-10km</option>
                                    <option value="">> 10km</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="button" id="search_button" class="btn_1 medium margin-25" style="font-size: 1rem; margin-left: 25px" onClick="window.location.reload();"><b>Tìm kiếm</b></button>
                            </div>
                        </div>
                    </form>
				</div>
				<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="container margin_60_35">
			<h1 style="display: none;" id="clinic1">Bệnh viện Bạch Mai</h1>
			<h1 style="display: none;" id="clinic2">Bệnh viện Trung Ương Quân Đội 108</h1>
			<h1 style="display: none;" id="clinic3">Bệnh viện Việt Pháp Hà Nội</h1>
			<h1 style="display: none;" id="clinic4">Bệnh viện Việt Nam Cuba</h1>
			<h1 style="display: none;" id="clinic5">Bệnh viện Tai Mũi Họng Trung ương</h1>
			<h1 style="display: none;" id="clinic6">Bệnh viện Y Học Cổ Truyền Trung Ương</h1>

			<div class="row">
				<div class="col-lg-8">
					<div class="row">
                        @if(!app('request')->has('clinic'))
						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/le-thi-huong.png') }}" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Tai Mũi Họng - Bệnh viện Bạch Mai</small>
									<h3>Bác sĩ Lê Thị Hương</h3>

									<p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/nguyen-thu-hoai.jpeg') }}" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Sản phụ, Nội soi - Bệnh viện Vinmec</small>
									<h3>Bác sĩ Nguyễn Thu Hoài</h3>

									<p>Đã có 12 năm kinh nghiệm trong ngành Sản phụ khoa</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img
											src="{{ asset('HI_03/img/doctor/duong-ba-truc.jpeg') }}" class="img-fluid">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Nhi, Huyết học - Truyền máu</small>
									<h3>Bác sĩ Dương Bá Trực</h3>
									<p>Có kinh nghiệm gần 40 năm trong ngành và nguyên là Trưởng khoa huyết học lâm sàng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img
											src="{{ asset('HI_03/img/doctor/huynh-cong-tan.png') }}" class="img-fluid"
											alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Sản Phụ Khoa</small>
									<h3>Bác sĩ Huỳnh Công Tấn</h3>
									<p>Có hơn 21 năm kinh nghiệm trong lĩnh vực sản – phụ khoa</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img
											src="{{ asset('HI_03/img/doctor/nguyen-thanh-liem.jpeg') }}" class="img-fluid"
											alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Nhi, Tự kỷ & Bại não</small>
									<h3>Bác sĩ Đỗ Thanh Liêm</h3>
									<p>Là chuyên gia đầu ngành trong lĩnh vực ngoại nhi của Việt Nam</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
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
									<p>Đã có 23 kinh nghiệm trong chuyên ngành sản phụ khoa.</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
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
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img
											src="{{ asset('HI_03/img/doctor/do-thi-ngoc-lan.jpeg') }}" class="img-fluid"
											alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Sản phụ khoa</small>
									<h3>Bác sĩ Đỗ Thị Ngọc Lan</h3>
									<p>Thầy thuốc ưu tú, bác sĩ chuyên khoa II Đỗ Thị Ngọc Lan nguyên là Trưởng khoa Phụ Ngoại I</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
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
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img
											src="{{ asset('HI_03/img/doctor/nguyen-thi-hoan.jpeg') }}" class="img-fluid"
											alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Nội tiết, Nhi</small>
									<h3>Bác sĩ Nguyễn Thị Hoàn</h3>
									<p>Là bác sĩ đầu ngành, có 40 năm kinh nghiệm chuyên khoa nội tiết Nhi tại Việt Nam</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+B%E1%BA%A1ch+Mai/@21.0009521,105.8406854,15z/data=!4m12!1m6!3m5!1s0x0:0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!8m2!3d21.0009521!4d105.8406854!3m4!1s0x0:0xa37d3ed4526ea954!8m2!3d21.0009521!4d105.8406854" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Tiếp tục</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

                        @endif
						<!-- /box_list -->
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyRy2MAdBIFtFflL1Ug6RE5MpX9ponFQI"></script>
  	<script src="{{ asset('HI_03/js/map_listing.js') }}"></script>
  	<script src="{{ asset('HI_03/js/infobox.js') }}"></script>

@endsection
