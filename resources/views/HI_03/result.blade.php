<!-- This file is belong to group HI_04, please not change this file -->
@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
	<link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_04/css/lich-kham-benh-nhan.css') }}" rel="stylesheet">
@endsection


@section('content')
	<script>
		var search_value = "<?= $data['search_value'] ?>";
		var search_type = "<?= $data['search_type'] ?>";
	</script>
	<main>
			<div id="results">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h4>Có <span id="result_count">6</span> lịch khám</h4>
						</div>
						<div class="col-md-4">
							<div class="search_bar_list">
								<input type="text" class="form-control" placeholder="Nhập mã lịch khám" id="search_data">
								<input type="submit" value="Tìm kiếm" id="search_button_04">
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
							</li>
							<li>
								<h6>Sắp xếp</h6>
								<select name="orderby" class="selectbox" id="sort-box">
									<option value="all">Tất cả</option>
									<option value="imcomplete">Chưa xong</option>
									<option value="completed">Đã xong</option>
									<option value="canceled">Đã hủy</option>
								</select>
							</li>
						</ul>
					</div>
					<!-- /container -->
			</div>
			<!-- /filters -->
		
		
		<div class="container margin_60_35">
			<h4 style="margin-top: -40px">HI_04 Bệnh nhân, người nhà theo dõi lịch khám</h4>
			<div class="row">
				<div class="col-lg-12">
					<div class="row" id="search-result">
						<div class="col-md-12">								
							<div class="box_list wow fadeIn">
								<div class="wrapper wrapper-title">
									<h3>Ngày hẹn: 25/4/2019 &nbsp; Giờ: 9:00</h3>
								</div>
								<div class="wrapper">
									<table>
										<tr>
											<td>Mã số</td>
											<td>Bệnh viện</td>
										</tr>
										<tr>
											<td>Trạng thái</td>
											<td>Phòng/Khoa</td>
										</tr>
										<tr>
											<td>Số thứ tự</td>
											<td>Bác sĩ:</td>
										</tr>
									</table> 
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
				<div class="col-md-8">
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
    <link href="{{ asset('HI_04/css/result.css') }}" rel="stylesheet">	
@endsection