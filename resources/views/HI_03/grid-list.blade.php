@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
	<link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
@endsection


@section('content')
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="{{ url('/') }}">Trang chủ</a></li>
					<li>Kết quả tìm kiếm</li>
				</ul>
				<div class="row">
					<div class="col-md-6">
						<h4><strong>Hiển thị 10</strong> trong 140 kết quả tìm thấy</h4>
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
		
		<div class="filters_listing">
				<div class="container">
					<ul class="clearfix">
						<li>
							<h6>Hiển thị</h6>
							<div class="switch-field">
								<input type="radio" id="all" name="type_patient" value="all" checked>
								<label for="all">Tất cả</label>
								<input type="radio" id="doctors" name="type_patient" value="doctors">
								<label for="doctors">Chỉ bác sĩ</label>
								<input type="radio" id="clinics" name="type_patient" value="clinics">
								<label for="clinics">Chỉ bệnh viện</label>
							</div>
						</li>
						<!-- <li>
							<h6>Layout</h6>
							<div class="layout_view">
								<a href="#0" class="active"><i class="icon-th"></i></a>
								<a href="#0"><i class="icon-th-list"></i></a>
								<a href="#0"><i class="icon-map-1"></i></a>
							</div>
						</li> -->
						<li>
							<h6>Sắp xếp theo</h6>
							<select name="orderby" class="selectbox">
							<option value="Best rated">Kết quả đánh giá</option>
							<option value="Men">Nam</option>
							<option value="Women">Nữ</option>
							</select>
						</li>
					</ul>
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
						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Tai Mũi Họng</small>
									<h3>Bác sĩ Lê Thị Hương</h3>

									<p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ url('detail-page') }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Tai Mũi Họng</small>
									<h3>Bác sĩ Lê Thị Hương</h3>

									<p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ url('detail-page') }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Tai Mũi Họng</small>
									<h3>Bác sĩ Lê Thị Hương</h3>

									<p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ url('detail-page') }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" height="565" width="565" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Tai Mũi Họng</small>
									<h3>Bác sĩ Lê Thị Hương</h3>

									<p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ url('detail-page') }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Tai Mũi Họng</small>
									<h3>Bác sĩ Lê Thị Hương</h3>

									<p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ url('detail-page') }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
										<div class="preview"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<small>Khoa Tai Mũi Họng</small>
									<h3>Bác sĩ Lê Thị Hương</h3>

									<p>Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ url('detail-page') }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 clinic">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/hospital/hospital.jpg') }}" class="img-fluid" alt="">
										<div class="preview showClinic1"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<h3>Bệnh viện Bạch Mai</h3>

									<p>78 Đường Giải Phóng, Phương Đình, Đống Đa, Hà Nội</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_1.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li class="showClinic1"><a href="{{ url('detail-page') }}">Đọc thêm</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 clinic">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/hospital/hospital.jpg') }}" class="img-fluid" alt="">
										<div class="preview showClinic2"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<h3>Bệnh viện Trung Ương Quân Đội 108</h3>
									<p>Số 1 Trần Hưng Đạo, Bạch Đằng, Hai Bà Trưng, Hà Nội </p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_2.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li class="showClinic2"><a href="{{ url('detail-page') }}">Đọc thêm</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 clinic">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/hospital/hospital.jpg') }}" class="img-fluid" alt="">
										<div class="preview showClinic3"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<h3>Bệnh viện Việt Pháp Hà Nội</h3>
									<p>1 Phương Mai, Đống Đa, Hà Nội</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_3.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li class="showClinic3"><a href="{{ url('detail-page') }}">Đọc thêm</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 clinic">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/hospital/hospital.jpg') }}" class="img-fluid" alt="">
										<div class="preview showClinic4"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<h3>Bệnh viện Việt Nam Cuba</h3>
									<p>37 Hai Bà Trưng, Tràng Tiền, Hoàn Kiếm, Hà Nội</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_3.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 3)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li class="showClinic4"><a href="{{ url('detail-page') }}">Đọc thêm</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 clinic">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/hospital/hospital.jpg') }}" class="img-fluid" alt="">
										<div class="preview showClinic5"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<h3>Bệnh viện Tai Mũi Họng Trung ương</h3>
									<p>78 Giải Phóng, Phương Đình, Đống Đa, Hà Nội</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 1)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li class="showClinic5"><a href="{{ url('detail-page') }}">Đọc thêm</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 clinic">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ url('detail-page') }}"><img src="{{ asset('HI_03/img/hospital/hospital.jpg') }}" class="img-fluid" alt="">
										<div class="preview showClinic6"><span>Đọc thêm</span></div>
									</a>
								</figure>
								<div class="wrapper">
									<h3>Bệnh viện Y Học Cổ Truyền Trung Ương</h3>
									<p>29 Nguyễn Bỉnh Khiêm, Nguyễn Du, Hai Bà Trưng, Hà Nội</p>
									<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
									<a href="#0" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="{{ asset('HI_03/img/badges/badge_4.svg') }}" width="15" height="15" alt=""></a>
								</div>
								<ul>
									<li><a href="#0" onclick="onHtmlClick('Doctors', 2)"><i class="icon_pin_alt"></i>Xem trên bản đồ</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li class="showClinic6"><a href="{{ url('detail-page') }}">Đọc thêm</a></li>
								</ul>
							</div>
						</div>
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
	<script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('HI_03/js/map_listing.js') }}"></script>
    <script src="{{ asset('HI_03/js/infobox.js') }}"></script>
    <script>
    	$(document).ready(function(){
		  $("#doctors").click(function(){
		    $(".doctor").show();
		    $(".clinic").hide();
		    $("#clinic1").css("display", "none");
		    $("#clinic2").css("display", "none");
		    $("#clinic3").css("display", "none");
		    $("#clinic4").css("display", "none");
		    $("#clinic5").css("display", "none");
		    $("#clinic6").css("display", "none");
		  });

		  $("#clinics").click(function(){
		    $(".clinic").show();
		    $(".doctor").hide();
		    $("#clinic1").css("display", "none");
		    $("#clinic2").css("display", "none");
		    $("#clinic3").css("display", "none");
		    $("#clinic4").css("display", "none");
		    $("#clinic5").css("display", "none");
		    $("#clinic6").css("display", "none");
		  });

		  $("#all").click(function(){
		    $(".clinic").show();
		    $(".doctor").show();
		    $("#clinic1").css("display", "none");
		    $("#clinic2").css("display", "none");
		    $("#clinic3").css("display", "none");
		    $("#clinic4").css("display", "none");
		    $("#clinic5").css("display", "none");
		    $("#clinic6").css("display", "none");
		  });

		  $(".showClinic1").click(function(){
		    $(".doctor").show();
		    $(".clinic").hide();
		    $("#clinic1").css("display", "block");
		  });

		  $(".showClinic2").click(function(){
		    $(".doctor").show();
		    $(".clinic").hide();
		    $("#clinic2").css("display", "block");
		  });

		  $(".showClinic3").click(function(){
		    $(".doctor").show();
		    $(".clinic").hide();
		    $("#clinic3").css("display", "block");
		  });

		  $(".showClinic4").click(function(){
		    $(".doctor").show();
		    $(".clinic").hide();
		    $("#clinic4").css("display", "block");
		  });

		  $(".showClinic5").click(function(){
		    $(".doctor").show();
		    $(".clinic").hide();
		    $("#clinic5").css("display", "block");
		  });

		  $(".showClinic6").click(function(){
		    $(".doctor").show();
		    $(".clinic").hide();
		    $("#clinic6").css("display", "block");
		  });
		});
    </script>
@endsection
