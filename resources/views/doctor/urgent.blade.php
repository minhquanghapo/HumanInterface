@extends('doctor.urgentmaster')


@section('custom_css')
    <link href='{{asset('css/doctor/fullcalendar.min.css')}}' rel='stylesheet' />
    <link href='{{asset('css/doctor/fullcalendar.print.min.css')}}' rel='stylesheet' media='print' />
    <link href="{{ asset('css/doctor/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    @endsection

@section('page_body')
    <div class="container">
        <div class="col-md-3">
            <div class="form-group">
                <div id="calendar_picker"></div>

            </div>
        </div>
        <div class="col-md-9">
            <div id="calendar"></div>
        </div>
    </div>
    @endsection

@section('custom_js')

    <script src='{{asset('js/fullcalendar.min.js')}}'></script>
    <script src='{{asset('js/doctor/index.js')}}'></script>
    <script src='{{asset('js/doctor/locale-all.js')}}'></script>
    <script src="{{ asset('js/doctor/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/doctor/bootstrap-datepicker.vi.min.js') }}"></script>

@endsection
