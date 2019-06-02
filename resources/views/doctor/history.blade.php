@extends('doctor.master')

@section('custom_css')
    <link href="{{ asset('css/doctor/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection


@section('page_body')
    <div class="container">
        <form class="form-inline" style="margin-top: 10px; margin-bottom: 10px;">
            <strong>Chọn ngày để xem:</strong>
            <div class="input-group date" id="date_picker">
                <input type="text" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
        </form>
        <table class="table" id="historyTable">
            <thead>
            <tr>
                <th>Thời gian</th>
                <th>Tên bệnh nhân</th>
                <th>Bênh lý</th>
                <th>Trạng thái</th>
            </tr>
            </thead>
            <tbody>
            <tr class="success">
                <td>10:30</td>
                <td>Nguyễn Văn </td>
                <td>Viêm ruột thừa</td>
                <td>Đã khám</td>
            </tr>
            <tr class="danger">
                <td>10:45</td>
                <td>Nguyễn Thị B</td>
                <td>Gãy chân</td>
                <td>Đã huỷ</td>
            </tr>
            <tr class="success">
                <td>10:50</td>
                <td>Nguyễn Văn </td>
                <td>Viêm ruột thừa</td>
                <td>Đã khám</td>
            </tr>
            <tr class="success">
                <td>11:00</td>
                <td>Nguyễn Văn </td>
                <td>Viêm ruột thừa</td>
                <td>Đã khám</td>
            </tr>
            <tr class="success">
                <td>11:30</td>
                <td>Nguyễn Văn </td>
                <td>Viêm ruột thừa</td>
                <td>Đã khám</td>
            </tr>
            <tr class="success">
                <td>12:00</td>
                <td>Nguyễn Văn </td>
                <td>Viêm ruột thừa</td>
                <td>Đã khám</td>
            </tr>
            <tr class="success">
                <td>12:30</td>
                <td>Nguyễn Văn </td>
                <td>Viêm ruột thừa</td>
                <td>Đã khám</td>
            </tr>

            </tbody>
        </table>
    </div>

@endsection

@section('custom_js')
    <script src='{{asset('js/doctor/history.js')}}'></script>
    <script src="{{ asset('js/doctor/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/doctor/bootstrap-datepicker.vi.min.js') }}"></script>
    <script src="{{ asset('//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}"></script>

@endsection

@section('page-title')
    HI_01_Lịch sử khám
@endsection
