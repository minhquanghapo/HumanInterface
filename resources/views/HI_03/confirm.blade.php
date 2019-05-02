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

		<div class="container margin_120">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div id="confirm">
						<div class="icon icon--order-success svg add_bottom_15">
							<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
								<g fill="none" stroke="#8EC343" stroke-width="2">
									<circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
									<path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
								</g>
							</svg>
						</div>
					<h2>Cảm ơn vì đã sử dụng dịch vụ!</h2>
					<p>Email xác nhận sẽ được gửi đến hộp thư của bạn. Xin hãy kiểm tra và bấm vào đường dẫn trong thư để hoàn tất thủ tục.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
@endsection
