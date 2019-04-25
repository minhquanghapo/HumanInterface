<!-- This file is belong to group HI_04, please not change this file -->
@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
	<link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_04/css/lich-kham-benh-nhan.css') }}" rel="stylesheet">
@endsection


@section('content')
	<script>
		var search_value = <?= $data['search_value'] ?>;
		var search_type = <?= $data['search_type'] ?>;
	</script>
	<main>
		<form method="post" action="{{ route('result') }}">
			@csrf
			<div id="results">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h4>Có <span id="result_count">6</span> kết quả</h4>
						</div>
						<div class="col-md-4">
								<div class="search_bar_list">
								<input type="text" class="form-control" placeholder="Tìm kiếm">
								<input type="submit" value="Tìm kiếm">
							</div>
						</div>
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
								<h6>Tìm kiếm theo</h6>
								<div class="switch-field">
									<input type="radio" id="phone_number" name="type_patient" value="phone_number" checked>
									<label for="phone_number">Số điện thoại</label>
									<input type="radio" id="email" name="type_patient" value="email">
									<label for="email">Email</label>
									<input type="radio" id="Code" name="type_patient" value="Code">
									<label for="Code">Mã lịch khám</label>
								</div>
							</li>
							<li>
								<h6>Sắp xếp</h6>
								<select name="orderby" class="selectbox" id="sort-box">
								<option value="all">Tất cả</option>
								<option value="imcomplete">Chưa xong</option>
								<option value="completed">Đã xong</option>
								</select>
							</li>
						</ul>
					</div>
					<!-- /container -->
			</div>
			<!-- /filters -->
		</form>
		
		
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="search-result">
						<div class="col-md-4">
							<div class="box_list wow fadeIn">
								<figure>
									<div><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
										<div class="preview"><span>Read more</span></div>
									</div>
								</figure>
								<div class="wrapper">
									<small>Tai - Mũi - Họng</small>
									<h3>Dr. Sickman</h3>

									<p>
										<span>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</span><br>
										<span>Trạng thái: Chưa khám</span><br>
										<span>Mã số: 44</span><br>
									</p>
								</div>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-4">
							<div class="box_list wow fadeIn">
								<figure>
									<div><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
										<div class="preview"><span>Read more</span></div>
									</div>
								</figure>
								<div class="wrapper">
									<small>Tai - Mũi - Họng</small>
									<h3>Dr. Sickman</h3>

									<p>
										<span>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</span><br>
										<span>Trạng thái: Chưa khám</span><br>
										<span>Mã số: 44</span><br>
									</p>
								</div>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-4">
							<div class="box_list wow fadeIn">
								<figure>
									<div><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
										<div class="preview"><span>Read more</span></div>
									</div>
								</figure>
								<div class="wrapper">
									<small>Tai - Mũi - Họng</small>
									<h3>Dr. Sickman</h3>

									<p>
										<span>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</span><br>
										<span>Trạng thái: Chưa khám</span><br>
										<span>Mã số: 44</span><br>
									</p>
								</div>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-4">
							<div class="box_list wow fadeIn">
								<figure>
									<div><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
										<div class="preview"><span>Read more</span></div>
									</div>
								</figure>
								<div class="wrapper">
									<small>Tai - Mũi - Họng</small>
									<h3>Dr. Sickman</h3>

									<p>
										<span>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</span><br>
										<span>Trạng thái: Chưa khám</span><br>
										<span>Mã số: 44</span><br>
									</p>
								</div>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-4">
							<div class="box_list wow fadeIn">
								<figure>
									<div><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
										<div class="preview"><span>Read more</span></div>
									</div>
								</figure>
								<div class="wrapper">
									<small>Tai - Mũi - Họng</small>
									<h3>Dr. Sickman</h3>

									<p>
										<span>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</span><br>
										<span>Trạng thái: Chưa khám</span><br>
										<span>Mã số: 44</span><br>
									</p>
								</div>
							</div>
						</div>
						<!-- /box_list -->

						<div class="col-md-4">
							<div class="box_list wow fadeIn">
								<figure>
									<div><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
										<div class="preview"><span>Read more</span></div>
									</div>
								</figure>
								<div class="wrapper">
									<small>Tai - Mũi - Họng</small>
									<h3>Dr. Sickman</h3>

									<p>
										<span>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</span><br>
										<span>Trạng thái: Chưa khám</span><br>
										<span>Mã số: 44</span><br>
									</p>
								</div>
							</div>
						</div>
						<!-- /box_list -->

					</div>
					<!-- /row -->

					<nav aria-label="" class="add_top_20">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<div class="dark-background"></div>

		<div class="full-info">
			<div class="row">
				<div class="col-md-5">
					<div class="full-info-img">
						<img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt="">
					</div>
				</div>
				<div class="col-md-7">
					<div class="full-info-status">
						<h3>BS. Sickman</h3>

						<p>
							<span>Mã lịch khám: 1</span><br><br>
							<span>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</span><br>
							<span>Trạng thái: Chưa khám</span><br><br>
							<span>Bệnh viện: Bạch Mai</span><br>
							<span>Phòng khám: Tai - Mũi - Họng</span><br>
							<span>Thứ tự: 44</span><br><br>
							<span>Triệu chứng: Đau họng, sưng amidan, ho ra đờm</span>
						</p>
					</div>
				</div>
			</div>

			<div class="button-row">
				<button type="button" class="btn btn-danger">CANCEL</button>
			</div>

		</div>
	</main>
@endsection

@section('SPECIFIC SCRIPTS')
	<!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="{{ asset('HI_03/js/map_listing.js') }}"></script>
    <script src="{{ asset('HI_03/js/infobox.js') }}"></script>
    <script src="{{ asset('HI_03/js/infobox.js') }}"></script>
    <script src="{{ asset('HI_04/js/lich-kham-benh-nhan.js') }}"></script>
@endsection