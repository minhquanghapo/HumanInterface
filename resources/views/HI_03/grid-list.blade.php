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
                    <form action="">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Chuyên khoa</label>
                                <select name="" class="form-control">
                                    <option value="">Tai mũi họng</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Xương khớp</option>
                                    <option value="">Phụ khoa</option>
                                    <option value="">Nam khoa</option>
                                    <option value="">Nhi</option>
                                    <option value="">Tai mũi họng</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Xương khớp</option>
                                    <option value="">Phụ khoa</option>
                                    <option value="">Nam khoa</option>
                                    <option value="">Nhi</option>
                                    <option value="">Tai mũi họng</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Xương khớp</option>
                                    <option value="">Phụ khoa</option>
                                    <option value="">Nam khoa</option>
                                    <option value="">Nhi</option>
                                    <option value="">Tai mũi họng</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Xương khớp</option>
                                    <option value="">Phụ khoa</option>
                                    <option value="">Nam khoa</option>
                                    <option value="">Nhi</option>
                                    <option value="">Tai mũi họng</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                    <option value="">Tim mạch</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Sắp xếp theo</label>
                                <select name="" class="form-control">
                                    <option value="">Đánh giá</option>
                                    <option value="">Lượt đặt khám</option>
                                    <option value="">Khoảng cách</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Khoảng cách</label>
                                <select name="" class="form-control">
                                    <option value="">< 1km</option>
                                    <option value="">1-3km</option>
                                    <option value="">3-5km</option>
                                    <option value="">5-10km</option>
                                    <option value="">> 10km</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn margin-25">Tìm kiếm</button>
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
						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
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
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
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
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
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
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" height="565" width="565" class="img-fluid" alt="">
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
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
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
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-6 doctor">
							<div class="box_list wow fadeIn">
								<a href="#0" class="wish_bt"></a>
								<figure>
									<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}"><img src="{{ asset('HI_03/img/doctor/doctor.png') }}" class="img-fluid" alt="">
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
									<li><a href="#0" onclick="onHtmlClick('Doctors', 0)"><i class="icon_pin_alt"></i>Bản đồ (3km)</a></li>
									<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"><i class="icon_pin_alt"></i>Directions</a></li>
									<li><a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">Đặt lịch</a></li>
								</ul>
							</div>
						</div>
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
