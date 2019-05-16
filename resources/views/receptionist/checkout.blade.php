@extends('receptionist.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <link rel="stylesheet" href="/css/receptionist/checkout.css">
    <style >
        .row{
            font-size: medium;
        }
    </style>

    <style> video { border-left:200px ;width:100%; height:500px;} </style>
    {{--<style> #check_su_dung_bhyt { width:50px; height:50px; border:1px solid blue; } </style>--}}
@endsectio  n
@section('pagename')
    <div id="checkin_form">
    <form id="signup" action="somewhere" method="POST">
        <ul id="checkin-tabs">
            <li class="current active"><span>1.</span> thông tin bệnh nhân</li>
            <li><span>2.</span> Xác nhận đơn ra viện </li>
            <li><span>3.</span> Thanh toán tiền ra viện</li>
            <li><span>4.</span> Xuất hóa đơn </li>
        </ul>
        <div id="fieldsets">

            <fieldset class="current">
                <div class="row"  >
                   <div class="col-md-6"><video autoplay='true' id='videoElement'> </video><br></div>




                    <div class="col-md-6" id="doublecheckinfo">
                        <div class="row">
                            <div class="col-sm-4" >
                                <label name="so_bhyt"   >Số BHYT: </label>
                            </div>
                            <div class="col-sm-4">

                                <input id="so_bhyt" minlength="10" class="required" val="" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4" >
                                <label name="ten_nb" >Tên : </label>
                            </div>
                            <div class="col-sm-4">
                                <input id="ten_nb" minlength="10" class="required"  value="a">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4" >
                                <label name="so_bhyt" >Số CMT</label>
                            </div>
                            <div class="col-sm-4">
                                <input id="so_cmt" minlength="10" class="required"  val="">
                            </div>
                        </div>
                        <br><br>


                    </div>
                </div>




            </fieldset>

            <fieldset class="next">
                <div class="row"  >
                    <div class="col-md-6">
                        <div class="row"> <video autoplay='true' id='videoElement_2'> </video><br></div>
                        <br>
                        <div class="row" ><div class="col-md-3"></div>
                            <div class="col-md-6"><div style="border: #5dade2 solid 2px; width: 30%; margin: auto; text-align: center;">
                                    <div><i ><img src="/img/receptionist/camera_icon.png"/></i></div>
                                    <div>Chụp đơn</div></div></div>
                            </div>



                    </div>


                    <div class="col-md-6" id="doublecheckinfo">

                        <div class="row">
                            </div>
                            <div class="col-sm-12">
                                <div class="row">

                                    <div> <select>
                                            <option value="volvo">Khoa Tai mũi họng</option>
                                            <option value="saab">Khoa phụ khoa</option>
                                            <option value="mercedes">Khoa răng hàm mặt</option>
                                            <option value="audi">Khoa y học phương đông</option>
                                        </select> </div>

                                    <br>
                                </div>

                                <div>
                                    <div class="row">
                                        <div class="col-md-4" style="border: #5dade2 solid 2px; height: 164px;">
                                            <div>Lê Thu Trang </div>
                                            <div><img style="width: 80%"src="/img/receptionist/trang.png"/></div>
                                        </div>
                                        <div class="col-md-4" style="border: #5dade2 solid 2px; height: 164px;">
                                            <div>Phan Mạnh Điệp </div>
                                            <div><img style="width: 80%"src="/img/receptionist/diep.png"/></div>
                                        </div>

                                        <div class="col-md-4" style="border: #5dade2 solid 2px; height: 164px;">
                                            <div>Phan Mạnh Điệp </div>
                                            <div><img style="width:  80%"src="/img/receptionist/duc.png"/></div>
                                        </div>

                                    </div>


                                </div>
                                <label class="label-big-check">
                                    <input type="checkbox" value="1" name="option_1" id="option_1">
                                    <label for="option_1" class="check-title">Xác nhận chữ ký bác sỹ</label>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>




            </fieldset>
            <fieldset class="next">


                <div class="row">
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >tên mục </label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >lượng tiền</label>
                    </div>
                    <div class="col-sm-4">
                        <label name="so_bhyt"   > sau miễn giảm</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >xét nghiệm hàm lượng tiểu cầu trong máu </label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >200.000</label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >200.000</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" >
                        <label name="so_bhyt"  >chup city cắt lớp </label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >300.000</label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >0</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >xét nghiệm hàm lượng tiểu cầu trong máu </label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >1.500.000</label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >1.200.000</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   > </label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt" size=""   >Tổng tiền</label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >2.000.000</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   > </label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt" size=""   >Tiền đặt cọc</label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >1.000.000</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   > </label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt" size=""   >Tiền cần thanh toán</label>
                    </div>
                    <div class="col-sm-4" >
                        <label name="so_bhyt"   >1.000.000</label>
                    </div>
                </div>







            </fieldset>
            <fieldset class="next">


                <div class="row">
                    <div class="col-sm-4" >
                        <div class="row" style="position:relative;">
                            <h3>Print</h3>
                            <h4>Total:<b>1 sheet of paper</b> </h4>

                            <br><br>
                            <h1>
                                <button type="button" class="btn " style="margin-right: 75px;">   Print</button> <button type="button" class="btn bg-white ">Cancel</button>

                            </h1>

                        </div><hr>

                        <div class="row">

                            <div class="col-sm-4" >Máy đích</div>
                            <div class="col-sm-8" >
                                <select>
                                    <option value="volvo">Máy in Canon< PSQ 235 </option>
                                    <option value="saab">Panasonic 952TX</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-4" >Page</div>
                            <div class="col-sm-8" >
                                <select>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-4" >Màu mực</div>
                            <div class="col-sm-8" >
                                <select>
                                    <option value="volvo">Đen</option>
                                    <option value="saab">Màu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-4" >Kích thước </div>
                            <div class="col-sm-8" >
                                <select>
                                    <option value="volvo">A5 </option>
                                    <option value="saab">A4</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-8" >
                        <div class="bg-gray" style="padding: 20px;margin: 20px; width:450px"><img src="/img/receptionist/don_ra_vien.jpg" style="width: 400px"></div>

                    </div>

                </div>







            </fieldset>




        </div>
        <a class="btn" id="next">Tiếp ▷</a>
        <input type="submit" class="btn" value="Thanh Toán">
    </form>
    </div>
@endsection
@section('content')
@endsection
@section('customscript')
    <script src="/adminlte/js/raphael.min.js"></script>
    <script src="/adminlte/js/morris.min.js"></script>
    <script src="/adminlte/js/metisMenu.min.js"></script>
    <script src="/adminlte/js/startmin.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="/js/receptionist/index.js"></script>

    <script>

        var video=document.querySelector("#videoElement");
        navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUserMedia||navigator.mozGetUserMedia||navigator.msGetUserMedia||navigator.oGetUserMedia;
        if(navigator.getUserMedia){ navigator.getUserMedia({video:true},handleVideo,videoError); }
        function handleVideo(stream){ video.srcObject = stream; }
        function videoError(e){ }




    </script>﻿

    <script>
        $('#so_bhyt').val('');
        $('#ten_nb').val('');
        $('#so_cmt').val('');
        setTimeout(function(){
                    $.playSound('https://notificationsounds.com/notification-sounds/unconvinced-569/download/mp3');
                    $('#so_bhyt').val('SV | 4 | 01 | 012 161 9422');
                    $('#ten_nb').val('Lê Huy Hùng');
                    $('#so_cmt').val('0011 8300 0001');

                },5000);

        // $("#check_su_dung_bhyt").prop("checked", false);

        // $("#check_su_dung_bhyt").change(function() {
        //     if(this.checked) {
        //
        //
        //         document.getElementById("videoElement").style.visibility = "visible";
        //         document.getElementById("doublecheckinfo").style.visibility = "visible";
        //         setTimeout(function(){
        //             $.playSound('https://notificationsounds.com/notification-sounds/unconvinced-569/download/mp3');
        //             $('#so_bhyt').val('SV | 4 | 01 | 012 161 9422');
        //             $('#ten_nb').val('Lê Huy Hùng');
        //             $('#so_cmt').val('0011 8300 0001');
        //
        //         },2000);
        //
        //     }
        //     else{
        //         document.getElementById("videoElement").style.visibility = "hidden";
        //         document.getElementById("doublecheckinfo").style.visibility = "hidden";
        //     }
        // });
    </script>
@endsection
