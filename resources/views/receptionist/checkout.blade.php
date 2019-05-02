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

    <style> video { border-left:200px ;width:265px; height:200px; border:1px solid blue; } </style>
    {{--<style> #check_su_dung_bhyt { width:50px; height:50px; border:1px solid blue; } </style>--}}
@endsectio  n
@section('pagename')
    <div id="checkin_form">
    <form id="signup" action="somewhere" method="POST">
        <ul id="checkin-tabs">
            <li class="current active"><span>1.</span> thông tin bệnh nhân</li>
            <li><span>2.</span> Thanh toán tiền ra viện</li>
            <li><span>2.</span> </li>
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
                        <div class="row">
                            <div class="col-sm-4" >
                                <label name="so_bhyt"   > chữ ký bác sỹ</label>
                            </div>
                            <div class="col-sm-4">
                                <input type="checkbox"  value="Boat">
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







            </fieldset>



            <a class="btn" id="next">Next Section ▷</a>
            <input type="submit" class="btn">
        </div>
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

    <script> var video=document.querySelector("#videoElement");
        navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUserMedia||navigator.mozGetUserMedia||navigator.msGetUserMedia||navigator.oGetUserMedia;
        if(navigator.getUserMedia){ navigator.getUserMedia({video:true},handleVideo,videoError); }
        function handleVideo(stream){ video.srcObject = stream; }
        function videoError(e){ } </script>﻿

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
