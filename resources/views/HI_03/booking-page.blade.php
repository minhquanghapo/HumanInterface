@extends('HI_03.layouts.master')

@section('content')
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="{{ url('/') }}">Trang chủ</a></li>
					<li><a href="{{ url('grid-list') }}">Danh sách bác sĩ</a></li>
					<li><a href="{{ url('detail-page') }}">Thông tin bác sĩ</a></li>
					<li>Đặt lịch</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<!-- <div class="message">
						<p>Existing Customer? <a href="#0">Click here to login</a></p>
					</div> -->
					<div class="form_title">
						<h3><strong>1</strong>Thông tin của bạn</h3>
						<p>
							<!-- Mussum ipsum cacilds, vidis litro abertis. -->
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Họ</label>
									<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Nguyễn">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Tên</label>
									<input type="text" class="form-control" id="lastname_booking" name="lastname_booking" placeholder="Vũ">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" id="email_booking" name="email_booking" class="form-control" placeholder="nguyenvu@gmail.com">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Xác nhận email</label>
									<input type="email" id="email_booking_2" name="email_booking_2" class="form-control" placeholder="nguyenvu@gmail.com">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Điện thoại</label>
									<input type="text" id="telephone_booking" name="telephone_booking" class="form-control" placeholder="0975 095 416">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>2</strong>Thông tin thanh toán</h3>
						<p>
							<!-- Mussum ipsum cacilds, vidis litro abertis. -->
						</p>
					</div>
					<div class="step">
						<div class="form-group">
							<label>Tên trên thẻ</label>
							<input type="text" class="form-control" id="name_card_booking" name="name_card_booking" placeholder="nguyenvu">
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Mã số thẻ</label>
									<input type="text" id="card_number" name="card_number" class="form-control" placeholder="xxxx - xxxx - xxxx - xxxx">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<img src="{{ asset('HI_03/img/payments.png') }}" alt="Cards" class="cards">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Ngày hết hạn</label>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="Tháng">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Năm">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Mã an ninh</label>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
											</div>
										</div>
										<div class="col-md-8">
											<img src="{{ asset('HI_03/img/icon_ccv.gif') }}" width="50" height="29" alt="ccv"><small>3 chữ số cuối</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End row -->

						<h5>Hoặc thanh toán bằng Paypal</h5>
						<p>
							<!-- Lorem ipsum dolor sit amet, vim id accusata sensibus, id ridens quaeque qui. Ne qui vocent ornatus molestie, reque fierent dissentiunt mel ea. -->
						</p>
						<!-- <p>
							<img src="{{ asset('HI_03/img/paypal_bt.png') }}" alt="Image">
						</p> -->
						<div class="paypal col-md-2">
						</div>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>3</strong>Địa chỉ hoá đơn</h3>
						<p>
							<!-- Mussum ipsum cacilds, vidis litro abertis. -->
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Địa chỉ</label>
									<input type="text" id="street_1" name="street_1" class="form-control" placeholder="Số 1 Đại Cồ Việt, Hai Bà Trưng">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Tỉnh/Thành phố</label>
									<input type="text" id="city_booking" name="city_booking" class="form-control" placeholder="Hà Nội">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Quận/Huyện</label>
									<input type="text" id="state_booking" name="state_booking" class="form-control" placeholder="Hai Bà Trưng">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Mã bưu điện</label>
									<input type="text" id="postal_code" name="postal_code" class="form-control" placeholder="00342">
								</div>
							</div>
						</div>
						<!--End row -->
					</div>
					<hr>
					<!--End step -->
					<div id="policy">
						<h4>Điều khoản sử dụng</h4>
						<div class="form-group">
							<label>
								<input type="checkbox" name="policy_terms" id="policy_terms" checked> Tôi chấp nhận <a href="#policy_modal" class="" data-toggle="modal">chính sách và điều khoản chung</a> khi sử dụng dịch vụ này.
							</label>
						</div>
					</div>
				</div>
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
						<form>
							<div class="title">
								<h3>Hoá đơn của bạn</h3>
							</div>
							<div class="summary">
								<ul>
									<li>Ngày: <strong class="float-right">11/12/2017</strong></li>
									<li>Thời gian: <strong class="float-right">10:30 </strong></li>
									<li>Bác sĩ: <strong class="float-right">Lê Thị Hương</strong></li>
								</ul>
							</div>
							<ul class="treatments checkout clearfix">
								<li>
									Lấy dị vật trong tai <strong class="float-right">200.000 VNĐ</strong>
								</li>
								<li>
									Phẫu thuật vá màng nhĩ <strong class="float-right">200.000 VNĐ</strong>
								</li>
								<li class="total">
									Tổng cộng <strong class="float-right">400.000 VNĐ</strong>
								</li>
							</ul>
							<hr>
							<a href="{{ url('confirm') }}" class="btn_1 full-width">Xác nhận và thanh toán</a>
						</form>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
@endsection

@section('SPECIFIC SCRIPTS')
	<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
	<script>paypal.Buttons().render('.paypal');</script>
@endsection
