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
                <li>Khám theo ngày</li>
            </ul>
        </div>
    </div>
    <div class="date_box add_bottom_45">
        <div class="main_title_4">
            <h3><i class="icon_circle-slelected"></i>Triệu chứng của bạn</h3>
        </div>
        <div class="row add_bottom_30">
            <div class="col-lg-12">
                <input type="text" name="search" id="form-autocomplete" class="form-control mdb-autocomplete" placeholder="Triệu chứng...">
            </div>
        </div>
        <div class="main_title_4">
            <h3><i class="icon_circle-slelected"></i>Chọn ngày và giờ khám</h3>
        </div>

        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <div id="calendar"></div>
                    <input type="hidden" id="my_hidden_input">
                    <ul class="legend">
                        <li><strong></strong>Lịch trống</li>
                        <li><strong></strong>Bận</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <ul class="time_select version_2 add_top_20">
                    <li>
                        <input type="radio" id="radio1" name="radio_time" value="09.30am">
                        <label for="radio1">09:30</label>
                    </li>
                    <li>
                        <input type="radio" id="radio2" name="radio_time" value="10.00am">
                        <label for="radio2">10:00</label>
                    </li>
                    <li>
                        <input type="radio" id="radio3" name="radio_time" value="10.30am">
                        <label for="radio3">10:30</label>
                    </li>
                    <li>
                        <input type="radio" id="radio4" name="radio_time" value="11.00am">
                        <label for="radio4">11:00</label>
                    </li>
                    <li>
                        <input type="radio" id="radio5" name="radio_time" value="11.30am">
                        <label for="radio5">11:30</label>
                    </li>
                    <li>
                        <input type="radio" id="radio6" name="radio_time" value="12.00am">
                        <label for="radio6">12:00</label>
                    </li>
                    <li>
                        <input type="radio" id="radio7" name="radio_time" value="01.30pm">
                        <label for="radio7">13:30</label>
                    </li>
                    <li>
                        <input type="radio" id="radio8" name="radio_time" value="02.00pm">
                        <label for="radio8">14:00</label>
                    </li>
                    <li>
                        <input type="radio" id="radio9" name="radio_time" value="02.30pm">
                        <label for="radio9">14:30</label>
                    </li>
                    <li>
                        <input type="radio" id="radio10" name="radio_time" value="03.00pm">
                        <label for="radio10">15:00</label>
                    </li>
                    <li>
                        <input type="radio" id="radio11" name="radio_time" value="03.30pm">
                        <label for="radio11">15:30</label>
                    </li>
                    <li>
                        <input type="radio" id="radio12" name="radio_time" value="04.00pm">
                        <label for="radio12">16:00</label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center">
            <p><a href="{{ url('hospital/list') }}" class="btn_1 medium">Tiếp tục</a></p>
        </div>
    </div>
</main>
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
