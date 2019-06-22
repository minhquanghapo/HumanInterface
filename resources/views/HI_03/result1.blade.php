<!-- This file is belong to group HI_04, please not change this file -->
@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
	<link href="{{ asset('HI_03/css/date_picker.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_04/css/lich-kham-benh-nhan.css') }}" rel="stylesheet">
@endsection



@section('content')
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
			<h4 style="margin-top: -40px">HI_02 Lịch khám bị hủy do có lịch khẩn cấp</h4>
			<div class="row">
				<div class="col-lg-12">
					<div class="row"><div class="col-md-6 info-container" onclick="openDetail()"><div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><div class="wrapper wrapper-title"><h3>Ngày hẹn: 12/1/2020 &nbsp;Giờ: 9:00</h3></div><div class="wrapper"><table><tbody><tr><td>Mã số: 1</td><td>Bệnh viện: Tai Mũi Họng trung ương</td></tr><tr><td>Trạng thái: <span style="color: #ffc107">Đã được đổi bác sĩ</span></td><td>Phòng/Khoa: Tai - Mũi - Họng</td></tr><tr><td>Số thứ tự: 23</td><td>Bác sĩ: Nguyễn Văn A</td></tr></tbody></table></div></div></div><div class="col-md-6 info-container" id="2"><div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><div class="wrapper wrapper-title"><h3>Ngày hẹn: 12/5/2019 &nbsp;Giờ: 8:00</h3></div><div class="wrapper"><table><tbody><tr><td>Mã số: 2</td><td>Bệnh viện: Bạch Mai</td></tr><tr><td>Trạng thái: <span style="color: #ffc107">Chưa xong</span></td><td>Phòng/Khoa: Tim mạch</td></tr><tr><td>Số thứ tự: 34</td><td>Bác sĩ: Trần Thị Thúy</td></tr></tbody></table></div></div></div><div class="col-md-6 info-container" id="3"><div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><div class="wrapper wrapper-title"><h3>Ngày hẹn: 12/1/2019 &nbsp;Giờ: 7:00</h3></div><div class="wrapper"><table><tbody><tr><td>Mã số: 3</td><td>Bệnh viện: Bạch Mai</td></tr><tr><td>Trạng thái: <span style="color: #19d873">Đã xong</span></td><td>Phòng/Khoa: Răng - Hàm - Mặt</td></tr><tr><td>Số thứ tự: 11</td><td>Bác sĩ: Lê Văn Lộc</td></tr></tbody></table></div></div></div><div class="col-md-6 info-container" id="4"><div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><div class="wrapper wrapper-title"><h3>Ngày hẹn: 12/8/2018 &nbsp;Giờ: 16:00</h3></div><div class="wrapper"><table><tbody><tr><td>Mã số: 4</td><td>Bệnh viện: Bạch Mai</td></tr><tr><td>Trạng thái: <span style="color: #19d873">Đã xong</span></td><td>Phòng/Khoa: Tai - Mũi - Họng</td></tr><tr><td>Số thứ tự: 55</td><td>Bác sĩ: Nguyễn A</td></tr></tbody></table></div></div></div><div class="col-md-6 info-container" id="5"><div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><div class="wrapper wrapper-title"><h3>Ngày hẹn: 12/6/2018 &nbsp;Giờ: 22:00</h3></div><div class="wrapper"><table><tbody><tr><td>Mã số: 5</td><td>Bệnh viện: Bạch Mai</td></tr><tr><td>Trạng thái: <span style="color: #19d873">Đã xong</span></td><td>Phòng/Khoa: Tai - Mũi - Họng</td></tr><tr><td>Số thứ tự: 66</td><td>Bác sĩ: Nguyễn B</td></tr></tbody></table></div></div></div><div class="col-md-6 info-container" id="6"><div class="box_list wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;"><div class="wrapper wrapper-title"><h3>Ngày hẹn: 11/1/2018 &nbsp;Giờ: 9:00</h3></div><div class="wrapper"><table><tbody><tr><td>Mã số: 6</td><td>Bệnh viện: Bạch Mai</td></tr><tr><td>Trạng thái: <span style="color: #dc3545">Đã hủy</span></td><td>Phòng/Khoa: Tai - Mũi - Họng</td></tr><tr><td>Số thứ tự: 66</td><td>Bác sĩ: Nguyễn C</td></tr></tbody></table></div></div></div></div>
					<!-- /row -->

					<nav aria-label="" class="add_top_20" style="display: none;">
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

		<div class="dark-background" id="detail1" style="display: block;"></div>

		<div class="full-info" name="detail" style="display: block;"><div class="wrapper wrapper-title"><h3 style="text-align: center"><b>Lịch khám được chuyển bác sĩ do bác sĩ có lịch khẩn cấp</b></h3></div><div class="wrapper"><div class="row"><div class="col-md-6" style="font-size: 20px"><div class="full-info-status"><p><span>Mã lịch khám: 1</span><br><span>Bệnh nhân: Nguyễn Anh</span><br><span>Số điện thoại: 09876543210</span><br><br><span>Ngày hẹn: 12/1/2020 &nbsp; 9:00</span><br><span>Trạng thái: <span style="color: #ffc107">Được tự động chuyển bác sĩ do bác sĩ Lê Thị Hương có lịch khẩn cấp</span></span><br><br><span>Bệnh viện: Tai Mũi Họng trung ương</span><br><span>Phòng khám: Tai - Mũi - Họng</span><br><span>Bác sĩ: <a href="/detail-page/doctor" class="show-submenu" style="color: #3f4079; text-decoration: underline;">Nguyễn Văn A</a></span><br><span>Số thứ tự: 23</span><br><span>Triệu chứng: Đau họng, sưng amidan, ho ra đờm</span></p></div></div><div class="col-md-6" id="map" style="width:90%; margin: 0"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8247041000373!2d105.83842441424477!3d20.9996627941484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac776648c633%3A0xe60dbc3ea8ebaae9!2zQuG7h25oIHZp4buHbiBUYWkgTcWpaSBI4buNbmcgVHJ1bmcgxrDGoW5n!5e0!3m2!1svi!2s!4v1557425623862!5m2!1svi!2s" width="600" height="330" frameborder="0" style="border:0" allowfullscreen=""></iframe></div></div></div><div class="button-row"><a href="/detail-page/doctor"><button type="button" class="btn btn-success" style="margin-right: 20px; color: #fff">Đặt lại lịch khám với bác sĩ Lê Thị Hương</button></a><button type="button" class="btn btn-danger btn-close-model" style="margin-right: 20px; color: #fff" id="cancel-1">HỦY LỊCH</button><button type="button" class="btn btn-close-model">THOÁT</button></div></div>
	</main>
	<script type="text/javascript">
		function openDetail(){
			document.getElementsById('detail').style.display = "block";
			document.getElementsById('detail1').style.display = "block";

		}
	</script>
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