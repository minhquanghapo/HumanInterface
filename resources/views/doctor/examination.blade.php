
@extends('doctor.master')

@section('custom_css')
    <link href='{{asset('css/doctor/selectize.default.css')}}' rel='stylesheet'/>
    <style>
        li.active > a{
            background: #74d1c6!important;
        }
        .nav-pills li:hover > a{
            background: #e74e84!important;
            color: #fff!important;
        }
    </style>
@endsection

@section('custom_js2')
    <script src='{{asset('js/doctor/examination.js')}}'></script>
    <script src='{{asset('js/doctor/selectize.min.js')}}'></script>
    <script src='{{asset('js/doctor/select_index.js')}}'></script>

    <script>
        function textCounter(field,field2,maxlimit)
        {
            var countfield = document.getElementById(field2);
            if ( field.value.length > maxlimit ) {
                field.value = field.value.substring( 0, maxlimit );
                return false;
            } else {
                countfield.innerHTML = maxlimit - field.value.length;
            }
        }
    </script>

@endsection

@section('page_body')<div class="container">
    <div class="title">
        <h3>HI_01 Bác sĩ thực hiện một ca khám</h3>
    </div>
    <div class="row form-group">
        <div class="col-xs-12">
            <ul class="process-nav nav nav-pills nav-justified thumbnail setup-panel">
                <li id="st1" class="active passed"><a href="#step-1">
                        <p class="list-group-item-text">Thông tin bệnh nhân</p>
                    </a></li>
                <li id="st2"><a href="#step-2">
                        <p class="list-group-item-text">Tình trang bệnh</p>
                    </a></li>
                <li class="disabled" id="st3"><a href="#step-3">
                        <p class="list-group-item-text">Chuẩn đoán và yêu cầu</p>
                    </a></li>
                <li class="disabled" id="st4"><a href="#step-4">
                        <p class="list-group-item-text">Kết luận</p>
                    </a></li>
            </ul>
        </div>
    </div>
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <table class="table">
                    <tr>
                        <td><b>Mã hồ sơ</b></td>
                        <td id="idhoso">1</td>
                    </tr>
                    <tr>
                        <td><b>Họ tên</b></td>
                        <td>Vũ Văn A</td>
                    </tr>
                    <tr>
                        <td><b>Giới tính</b></td>
                        <td>Nam</td>
                    </tr>
                    <tr>
                        <td><b>Tuổi</b></td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td><b>Địa chỉ</b></td>
                        <td>Hà Nội</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well ">
                <div>
                    <h3>Triệu chứng</h3>
                    <p>
                        Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                        Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                        Thành bụng căng cứng.
                        Sốt nhẹ.
                    </p>
                </div>
                <hr>
                <div>
                    <h3>Tiền sử bệnh</h3>
                    <p>
                        Từng mắc bệnh dạ dày ngày bé
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <table class="table">
                    <tr>
                        <td class="col-sm-3"><b>Chẩn đoán</b></td>
                        <td class="col-sm-9">
                            <div class="form-group" style="position:relative">
                                <div style="position:absolute;right: 10px;top:5px"><span id="counter">100</span>/100</div>
                                <textarea onkeyup="textCounter(this,'counter',100);" id="chuandoan" class="form-control" rows="5"  style="padding-right:40px;resize: none"></textarea>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="col-sm-3"><b>Các yêu cầu xét nghiệm</b></td>
                        <td class="col-sm-9">
                            <div class="">
                                <div class="control-group">
                                    <select id="select-test" name="state[]" multiple class="demo-default" style="max-width: 100%"  placeholder="Lựa chọn các loại xét nghiệm...">
                                        <option value="">Select a state...</option>
                                        <option value="Xét nghiệm máu">Xét nghiệm máu</option>
                                        <option value="Xét nghiệm nước tiểu">Xét nghiệm nước tiểu</option>
                                        <option value="Siêu âm não xuyên thóp">Siêu âm não xuyên thóp</option>
                                        <option value="Siêu âm các tuyến mang tai">Siêu âm các tuyến mang tai</option>
                                        <option value="Siêu âm vú">Siêu âm vú</option>
                                        <option value="Siêu âm tuyến giáp (bao gồm hạch cổ)">Siêu âm tuyến giáp (bao gồm hạch cổ)</option>
                                        <option value="Siêu âm bụng">Siêu âm bụng</option>
                                        <option value="Siêu âm vùng nách">Siêu âm vùng nách</option>
                                        <option value="Siêu âm bẹn">Siêu âm bẹn</option>
                                        <option value="Siêu âm thận, bàng quang">Siêu âm thận, bàng quang</option>
                                        <option value="Nội soi dạ dày">Nội soi dạ </option>
                                    </select>
                                </div>
                                <script>
                                    $('#select-test').selectize({
                                        closeAfterSelect: true
                                    });
                                </script>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên </th>
                                    </tr>
                                    </thead>
                                    <tbody id="test_list" >

                                    </tbody>
                                </table>
                            </div>
                        </td>

                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well">
                <button id="find_result" style="margin-bottom: 10px" data-toggle="modal" data-target="#findResultModal">Xem kết quả xét nghiệm</button>
                <table class="table">
                    <tr>
                        <td><b>Kết luận bệnh</b></td>
                        <td class="col-sm-10">
                            <div class="form-group" style="position:relative">
                                <div style="position:absolute;right: 10px;top:5px"><span id="counter1">100</span>/100</div>
                                <textarea onkeyup="textCounter(this,'counter1',100);" id="ketluan" class="form-control" rows="5" style="padding-right:40px;resize: none"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Chỉ định</b></td>
                        <td>
                            <div class="form-group" style="position:relative">
                                <div style="position:absolute;right: 10px;top:5px"><span id="counter2">100</span>/100</div>
                                <textarea onkeyup="textCounter(this,'counter2',100);" id="chuandoan" class="form-control" rows="5" style="padding-right:40px;resize: none"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Đơn thuốc</b></td>
                        <td>
                            <div class="">
                                <div class="control-group">
                                    <select id="select-medicine" name="state[]" multiple class="demo-default" style="max-width: 100%"  placeholder="Select a medicine...">
                                        <option value="">Select a state...</option>
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="California">California</option>
                                        <option value="Colorado">Colorado</option>
                                        <option value="Connecticut">Connecticut</option>
                                        <option value="Delaware">Delaware</option>
                                        <option value="District of Columbia">District of Columbia</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Idaho">Idaho</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Indiana">Indiana</option>
                                        <option value="Iowa">Iowa</option>
                                        <option value="Kansas">Kansas</option>
                                        <option value="Kentucky">Kentucky</option>
                                        <option value="Louisiana">Louisiana</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="Massachusetts">Massachusetts</option>
                                        <option value="Michigan">Michigan</option>
                                        <option value="Minnesota">Minnesota</option>
                                        <option value="Mississippi">Mississippi</option>
                                        <option value="Missouri">Missouri</option>
                                        <option value="Montana">Montana</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="Nevada">Nevada</option>
                                        <option value="New Hampshire">New Hampshire</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New Mexico">New Mexico</option>
                                        <option value="New York">New York</option>
                                        <option value="North Carolina">North Carolina</option>
                                        <option value="North Dakota">North Dakota</option>
                                        <option value="Ohio">Ohio</option>
                                        <option value="Oklahoma">Oklahoma</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Pennsylvania">Pennsylvania</option>
                                        <option value="Rhode Island">Rhode Island</option>
                                        <option value="outh Carolina">South Carolina</option>
                                        <option value="South Dakota">South Dakota</option>
                                        <option value="Tennessee">Tennessee</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Utah">Utah</option>
                                        <option value="Vermont">Vermont</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Washington">Washington</option>
                                        <option value="West Virginia">West Virginia</option>
                                        <option value="West VirginiaI">West Virginia</option>
                                        <option value="Wyoming">Wyoming</option>
                                    </select>
                                </div>
                                <script>
                                    $('#select-medicine').selectize({
                                        closeAfterSelect: true
                                    });
                                </script>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên </th>
                                        <th>Số lượng</th>
                                        <th>Đơn vị</th>
                                        <th>Liều dùng</th>
                                        <th>Số lần / ngày</th>
                                        <th>Chỉ định</th>
                                        <th>Xoá</th>
                                    </tr>
                                    </thead>
                                    <tbody id="medicine_list" >

                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Hẹn khám lại</b></td>
                        <td>
                            <input type="date" class="form-control">
                        </td>
                    </tr>
                </table>
                <div class="pager">
                    <button id="complete-btn">Kết thúc ca khám</button>
                </div>
                {{--<a href="/doctor" id="ketthuc" class="btn btn-primary btn-lg" style="margin-top: 10px" role="button">Kết thúc ca khám</a>--}}
            </div>
        </div>
    </div>
    <div class="pagination-btn">
        <ul class="pager">
            <li><button class="prev disabled">Quay lại</button></li>
            <li><button class="next">Tiếp tục</button></li>

        </ul>
    </div>

    <div id="print-form" style="display:none">
        <div style="width: 80%;margin: auto">
            <div class="title" style="text-align: center">
                <h3>Bệnh viện quốc tế AS_K60</h3>
                <h3>Khoa nội khoa</h3>
                <h3>Đơn thuốc</h3>
            </div>
            <div class="info">
                <table width="100%">
                    <tr>
                        <td><strong style="">Họ tên:</strong> Vũ Văn A</td>
                        <td><strong>Tuổi</strong> 30</td>
                        <td><strong>Giới tính</strong> Nam</td>
                    </tr>
                </table>
                <p><strong>Địa chỉ:</strong> Hai Bà Trưng - Hà Nội</p>
                <p><strong>Chẩn đoán:</strong> Đau dạ dày cấp tính</p>
            </div>
            <div id="prescription">
                <p><strong>Đơn thuốc: </strong></p>
                <table width="100%" style="text-align: center">
                    <tr>
                        <th>#</th>
                        <th>Tên </th>
                        <th>Số lượng</th>
                        <th>Đơn vị</th>
                        <th>Liều dùng</th>
                        <th>Số lần / ngày</th>
                        <th>Chỉ định</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Alaska</td>
                        <td>30</td>
                        <td>Viên</td>
                        <td>2 Viên</td>
                        <td>2</td>
                        <td>Sau ăn</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Arkansas</td>
                        <td>30</td>
                        <td>Viên</td>
                        <td>2 Viên</td>
                        <td>2</td>
                        <td>Sau ăn</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Florida</td>
                        <td>30</td>
                        <td>Viên</td>
                        <td>2 Viên</td>
                        <td>2</td>
                        <td>Sau ăn</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Connecticut</td>
                        <td>30</td>
                        <td>Viên</td>
                        <td>2 Viên</td>
                        <td>2</td>
                        <td>Sau ăn</td>
                    </tr>
                </table>
            </div>
            <div style="margin-top: 30px">
                <p><strong>Lời dặn:</strong> Khám lại sau 2 tuần</p>
                <p>Khám lại xin mang theo đơn này.</p>
            </div>
            <div style="width: 50%;float: right;text-align: center">
                <p>Ngày…… tháng…… năm 20.....</p>
                <p>Bác sỹ/Y sỹ khám bệnh</p>
                <p><i>(Ký, ghi rõ họ tên)</i></p>
            </div>
        </div>
    </div>
</div>
<div id="findResultModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Kết quả xét nghiêm</h4>
            </div>
            <div class="modal-body">
                <p>Nhập tên bênh nhân:</p>
                <div class="control-group">
                    <select id="select-name" name="state[]" class="demo-default" style="max-width: 100%"  placeholder="Select a medicine...">
                        <option value="">Select a name...</option>
                        <option value="Alabama">Nguyễn Văn A</option>
                        <option value="Alaska">Nguyễn Văn B</option>
                        <option value="Arizona">Lê Văn C</option>
                        <option value="Arizona">Trần Văn C</option>
                        <option value="Arizona">Nguyễn Văn D</option>
                        <option value="Arizona">Nguyễn Mạnh C</option>
                        <option value="Arizona">Nguyễn Mạnh D</option>
                    </select>
                </div>
                <script>
                    $('#select-name').selectize({

                    });
                </script>
                <div id="info_history" style="display: none">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Tên xét nghiệm</th>
                                <th>Kết quả </th>
                            </tr>
                            </thead>
                            <tbody id="medicine_list" >
                            <tr>
                                <td>Xét nghiệm máu</td>
                                <td>Bình thường</td>
                            </tr>
                            <tr>
                                <td>Xét nghiệm nước tiểu</td>
                                <td>Bình thường</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
@endsection
