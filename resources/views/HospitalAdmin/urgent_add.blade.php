@extends('HospitalAdmin.layouts.master')
@section('customcss')
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href='{{asset("css/HI_06/bootstrap.min.css")}}'>
    <!-- Theme style -->
  <link rel="stylesheet" href='{{asset("css/HI_06/AdminLTE.min.css")}}'>
  <!-- Schedule custom-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
    <link rel="stylesheet" href='{{asset("css/HI_06/reset.css")}}'> <!-- CSS reset -->
    <link rel="stylesheet" href='{{asset("css/HI_06/style.css")}}'> <!-- Resource style -->
    <style type="text/css">
        .cd-schedule .events .events-group > ul {
            height: auto;
        }
        .cd-schedule .events .single-event a {
            padding: 5px;
        }
        input[type='checkbox'] {
            width:20px;
            height:20px;
            background:white;
            border-radius:5px;
            border:2px solid #555;
        }
.my ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.my ul li {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  position: relative;
}

.my ul li:hover {
  background-color: #eee;
}

.my .close {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 0%;
  padding: 12px 16px;
  transform: translate(0%, -50%);
}

.my .close:hover {background: #bbb;}
    </style>


@endsection
@section('pagename')
<div class="container-fluid">
    <section class="content-header">
        <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
            <li><a href="/admin_hospital"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin_hospital/urgent">Lịch khám khẩn cấp</a></li>
            <li class="active"> add</li>
        </ol>
    </section>
    <section class="content row">
        <div class="col-sm-12">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="box-title">Lịch khám khẩn cấp</h3>
                        </div>
                    </div>
                </div>
                <div class="box-body" id="doctor">
                    <!-- Body -->
                    <form role="form" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Họ tên</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" value="Nguyễn Thị Linh">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Địa chỉ</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" value="Hà Nội">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giới tính</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" value="Nữ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tuổi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="18">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Tình trạng bệnh</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" cols="40" rows="5">Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt. Thành bụng căng cứng. Sốt nhẹ.</textarea>
                                
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Thời gian</label>
                          <div class="col-sm-10">
                            <input type="datetime-local" class="form-control" value="2019-05-10T10:30">
                          </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Bác sĩ nhận</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="Hoàng Văn A" readonly="readonly">
                            </div>
                        </div>
                        
                        
                    </form>
                </div>
                <div class="box-footer">
                        <a href="/admin_hospital/urgent"><button class="btn btn-default">Cancel</button></a>
                        <button type="" class="btn pull-right" style="margin-right: 10px; color: black" onclick="updatesuccess()">cập nhật</button>
                        <button type="" class="btn btn-info pull-right" onclick="openadddoctorModal()" style="margin-right: 10px;">Thêm người nhận</button>

                    </div>
            </div>
        </div>
    </section>
</div>
<div id="adddoctorModal" class="modal fade" role="dialog" >
        <div class="modal-dialog" style="width: 80%; height: 80%">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Gửi yêu cầu khẩn cấp cho bác sĩ</h4>
                </div>
                <div class="modal-body" >
                    <div class="row" >
                        <div class="col-sm-8">
                            <div class="nav-tabs-custom" style="margin-bottom: -15px;">
                            <!-- Tabs within a box -->
                            <ul class="nav nav-tabs pull-right">
                              <li name="tobehide" class="pull-left header"><i class="fa fa-inbox"></i> Thời gian biểu 1-5/12 bác sĩ chuyên khoa 1 rảnh lúc  10:30 </li>
                              <li name="tobeshow" class="pull-left header" style="display: none;"><i class="fa fa-inbox"></i> Thời gian biểu bác sĩ Hoàng Văn A </li>
                            </ul>
                            
                            <div class="row" style="margin: 20px;">
                                <div class="col-sm-3">
                                    <select class="form-control" style="width: 100%;" onclick="showhide()">
                                        <option selected="selected">Chuyên khoa 1</option>
                                        <option>Chuyên Khoa 2</option>
                                        <option>Chuyên Khoa 3</option>
                                        <option>Chuyên Khoa 4</option>
                                        <option>Chuyên Khoa 5</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <form>
                                        <input class="form-control" list="browsers" name="browser" placeholder="Tìm Bác sĩ theo tên" onclick="addDoctor()" style="width: 100%;">
                                        <datalist id="browsers">
                                            <option value="Hoàng Văn A - chuyên khoa 1">
                                            <option value="Vũ Hoàng B - chuyên khoa 2">
                                            <option value="Nguyễn Vũ C - chuyên khoa 3">
                                            <option value="Lê thị D - chuyên khoa 2">
                                            <option value="A Văn Bê - chuyên khoa 999">
                                        </datalist>
                                    </form>
                                </div>
                                <div class="col-sm-3" name="tobehide" style="padding: 0px;">
                                    <input type="checkbox">Chỉ hiện BS phù hợp<br>
                                </div>
                                <dir class="col-sm-3" name="tobehide">
                                  <div class="dataTables_paginate paging_simple_numbers" style="margin-top: -40px; margin-bottom: -50px;" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">&lt;</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">1/3</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">&gt;</a></li></ul></div>
                                </dir>
                            </div>
                            <div class="tab-content no-padding" style="overflow-y: scroll; overflow-x: auto; height: 400px;width: 100%;">
                              <!-- Morris chart - Sales -->
                              <div class="cd-schedule loading" style="margin-top: 0px;">
                                <div class="timeline">
                                  <ul>
                                    <li><span>09:00</span></li>
                                    <li><span>09:30</span></li>
                                    <li><span>10:00</span></li>
                                    <li><span>10:30</span></li>
                                    <li><span>11:00</span></li>
                                    <li><span>11:30</span></li>
                                    <li><span>12:00</span></li>
                                    <li><span>12:30</span></li>
                                    <li><span>13:00</span></li>
                                    <li><span>13:30</span></li>
                                    <li><span>14:00</span></li>
                                    <li><span>14:30</span></li>
                                    <li><span>15:00</span></li>
                                    <li><span>15:30</span></li>
                                    <li><span>16:00</span></li>
                                    <li><span>16:30</span></li>
                                    <li><span>17:00</span></li>
                                    <li><span>17:30</span></li>
                                    <li><span>18:00</span></li>
                                  </ul>
                                </div> <!-- .timeline -->
                              
                                <div class="events" style="cursor: pointer;">
                                    <ul name="tobeshow" style="display: none;">
                                        <li class="events-group">
                                          <div class="top-info" onclick="addB()"><img src="/img/HI_06/dist/img/bstruong.jpeg" class="img-circle bs-avatar" alt="User Image" ><span style="text-align: left;">Hoàng Văn A</span></div>
                                  
                                          <ul>
                                  
                                            <li class="single-event" data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-3">
                                              <a href="#0">
                                                <em class="event-name">Khám bệnh</em>
                                              </a>
                                            </li>
                                  
                                            <li class="single-event" data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1">
                                              <a href="#0">
                                                <em class="event-name">Khám bệnh</em>
                                              </a>
                                            </li>
                                  
                                            <li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
                                              <a href="#0">
                                                <em class="event-name">Phẫu thuật</em>
                                              </a>
                                            </li>
                                          </ul>
                                        </li>
                                    </ul>
                                  <ul name="tobehide">
                                    <li class="events-group">
                                      <div class="top-info" style="background-color: #ddd;cursor: not-allowed;" onclick="tooMuchForm()"><img src="/img/HI_06/dist/img/bshung.jpeg" class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ A</span></div>              
                                      <ul>
                                        <li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-restorative-yoga" data-event="event-4">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>

                                      </ul>
                                    </li>
                              
                                    <li class="events-group">
                                      <div class="top-info" onclick="addB()"><img src="/img/HI_06/dist/img/bstruong.jpeg" class="img-circle bs-avatar" alt="User Image" ><span style="text-align: left">Hoàng Văn A</span></div>
                              
                                      <ul>
                              
                                        <li class="single-event" data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-3">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3">
                                          <a href="#0">
                                            <em class="event-name">Phẫu thuật</em>
                                          </a>
                                        </li>
                                      </ul>
                                    </li>
                              
                                    <li class="events-group">
                                      <div class="top-info" style="background-color: #ddd;cursor: not-allowed;" onclick="tooMuchForm()"><img src="/img/HI_06/dist/img/bstuyet.jpeg" class="img-circle bs-avatar" alt="User Image"><span style="text-align: left;">Bác sĩ C</span></div>
                              
                                      <ul>
                                        <li class="single-event" data-start="09:00" data-end="10:15" data-content="event-restorative-yoga" data-event="event-4">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="11:00" data-end="11:45" data-content="event-yoga-1" data-event="event-4">
                                          <a href="#0">
                                            <em class="event-name">Họp bàn giao</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-4">
                                          <a href="#0">
                                            <em class="event-name">Phẫu thuật</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="13:45" data-end="15:00" data-content="event-yoga-1" data-event="event-3">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                                      </ul>
                                    </li>
                              
                                    <li class="events-group">
                                      <div class="top-info" onclick="superdenyForm()"><img src="/img/HI_06/dist/img/bstu.jpeg" class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ D</span></div>
                              
                                      <ul>
                                        <li class="single-event" data-start="10:00" data-end="11:00" data-content="event-abs-circuit" data-event="event-1">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="12:00" data-end="13:45" data-content="event-restorative-yoga" data-event="event-3">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="15:30" data-end="16:30" data-content="event-abs-circuit" data-event="event-1">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                              
                                        <li class="single-event" data-start="17:00" data-end="18:30"  data-content="event-rowing-workout" data-event="event-2">
                                          <a href="#0">
                                            <em class="event-name">Khám bệnh</em>
                                          </a>
                                        </li>
                                      </ul>
                                    </li>
                              
                                    <li class="events-group">
                                      <div class="top-info" onclick="tooMuchForm()"><img src="/img/HI_06/dist/img/bslan.jpeg" class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ E</span></div>
                              
                                      <ul>
                                        <li class="single-event" data-start="12:00" data-end="18:00"  data-content="event-rowing-workout" data-event="event-2">
                                          <a href="#0">
                                            <em class="event-name">Đi công tác</em>
                                          </a>
                                        </li>
                              
                                      </ul>
                                    </li>
                                  </ul>

                                


                              
                                <div class="event-modal" id="detailModal">
                                  <header class="header">
                                    <div class="content">
                                      <span class="event-date"></span>
                                      <h3 class="event-name"></h3>
                                    </div>
                              
                                    <div class="header-bg"></div>
                                  </header>
                              
                                  <div class="body" style="">
                                    <div class="event-info">
                                        <div class="modal-dialog" style="margin: 0px;  padding: 0px;">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" onclick="closeDetail()">×</button>
                                                    <h4 class="modal-title">Thông tin chi tiết ca khám</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row form-group">
                                                        <div class="col-xs-12">
                                                            <ul class="nav nav-pills nav-justified thumbnail setup-panel" style="margin-bottom: -10px;">
                                                                <li class="active"><a href="#step-1" id="step-11">
                                                                        <p class="list-group-item-text">Thông tin bệnh nhân</p>
                                                                    </a></li>
                                                                <li class=""><a href="#step-2" id="step-22">
                                                                        <p class="list-group-item-text">Tình trang bệnh</p>
                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row setup-content" id="step-1" style="margin-bottom: -20px;">
                                                        <div class="col-xs-12">
                                                            <div class="col-md-12 well text-center">
                                                                <table class="table">
                                                                    <tbody><tr>
                                                                        <td><b>Mã hồ sơ</b></td>
                                                                        <td id="idhoso">8</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><b>Thời gian</b></td>
                                                                        <td>10:30</td>
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
                                                                </tbody></table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row setup-content" id="step-2" style="display: none;">
                                                        <div class="col-xs-12">
                                                            <div class="col-md-12 well">
                                                                <p>
                                                                    Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng.
                                                                    Xuất hiện các triệu chứng rối loạn tiêu hóa như chướng bụng, khó tiểu, tiểu dắt.
                                                                    Thành bụng căng cứng.
                                                                    Sốt nhẹ.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" onclick="superdenyForm()" class="btn btn-danger">Yêu cầu hủy lịch hẹn do khám khẩn cấp</button>
                                                    
                                                </div>
                                            </div>
                                    
                                        </div>
                                    </div>
                                    
                                    <div class="body-bg"></div>
                                  </div>

                                </div>
                              
                                <div class="cover-layer"></div>
                              </div> <!-- .cd-schedule -->
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="box box-primary">
                                    <!-- Header -->
                                    <div class="box-header with-border">
                                        <div class="row">
                                                <h3 class="box-title">&nbsp;&nbsp;Bác sĩ nhận</h3>
                                        </div>
                                    </div>
                                    <div class="my">
                                        <ul>
                                          <li id="doctorB" style="display: none">Hoàng Văn A - chuyên khoa 1<span class="close">&times;</span></li>
                                          <li id="doctorC" style="display: none">Bác sĩ C - chuyên khoa 1<span class="close">&times;</span></li>
                                          <li id="doctorD" style="display: none">Bác sĩ D - chuyên khoa 1<span class="close">&times;</span></li>
                                        </ul>
                                    </div>
                                </div>
                                          
                            </div>
                            </div>
                        </div>
                    </div>
                          
                <div class="modal-footer">
                    <button type="button" onclick="success()" class="btn btn-primary" >Gửi yêu cầu</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>  

        </div>
    </div>
@endsection
@section('content')
@endsection
@section('customscript')
<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

<script>
var closebtns = document.getElementsByClassName("close");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
</script>

<script>
    function addDoctor(){
        setTimeout(function(){
            checkboxes = document.getElementsByName('tobehide');
              for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].style.display = "none";
              }
            checkboxes = document.getElementsByName('tobeshow');
              for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].style.display = "";
              }

        }, 2000);
        
    }
    function showhide(){
        setTimeout(function(){
            checkboxes = document.getElementsByName('tobehide');
              for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].style.display = "";
              }
            checkboxes = document.getElementsByName('tobeshow');
              for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].style.display = "none";
              }

        }, 2000);
        
    }
    function addB(){
        document.getElementById("doctorB").style.display = "";
    }

    function addD(){
        document.getElementById("doctorD").style.display = "";
    }
    function showList() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "";
      } else {
        x.style.display = "none";
      }
    }

    function success(){
        toastr["success"]("Gửi yêu cầu khẩn cấp thành công!");
        $("#adddoctorModal").modal("hide");
    }
    function updatesuccess(){
        toastr["success"]("Cập nhật thành công!");
        $("#adddoctorModal").modal("hide");
    }

    function tooMuchForm() {
      Swal.fire({
        type: 'error',
        title: 'Không thể gửi!',
        text: 'Bác sĩ đã có lịch khẩn cấp trùng thời gian hoặc đã nhận 3 lịch khẩn cấp. Không thể gửi!',
        confirmButtonText: 'Xác nhận!',
      })
    }

    function superdenyForm() {
            Swal.fire({
                title: 'Xác nhận ?',
                text: "Bạn sẽ yêu cầu bác sĩ hủy hẹn để khám khẩn cấp",
                type: 'warning',
                width: '30%',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vâng, tôi xác nhận!',
                cancelButtonText: 'Không!',
            }).then((result) => {
                if (result.value) {
                    toastr["success"]("Đã thêm bác sĩ vào danh sách nhận yêu cầu khẩn cấp!");
                    document.getElementById("doctorD").style.display = "block";
                }
                $("#detailModal").modal("hide");
            })
            $("#detailModal").modal("hide");
        }



    function openadddoctorModal(){
        $("#adddoctorModal").modal("show");
    }
    function closeDetail(){
        $("#detailModal").modal("hide");
    }
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
        
            reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
            }
        
            reader.readAsDataURL(input.files[0]);
        }
    }
        
    $("#imgInp").change(function() {
        readURL(this);
    });
jQuery(document).ready(function($){
    var transitionEnd = 'webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend';
    var transitionsSupported = ( $('.csstransitions').length > 0 );
    //if browser does not support transitions - use a different event to trigger them
    if( !transitionsSupported ) transitionEnd = 'noTransition';
    
    //should add a loding while the events are organized 

    function SchedulePE( element ) {
        this.element = element;
        this.timeline = this.element.find('.timeline');
        this.timelineItems = this.timeline.find('li');
        this.timelineItemsNumber = this.timelineItems.length;
        this.timelineStart = getScheduleTimestamp(this.timelineItems.eq(0).text());
        //need to store delta (in our case half hour) timestamp
        this.timelineUnitDuration = getScheduleTimestamp(this.timelineItems.eq(1).text()) - getScheduleTimestamp(this.timelineItems.eq(0).text());

        this.eventsWrapper = this.element.find('.events');
        this.eventsGroup = this.eventsWrapper.find('.events-group');
        this.singleEvents = this.eventsGroup.find('.single-event');
        this.eventSlotHeight = this.eventsGroup.eq(0).children('.top-info').outerHeight();

        this.modal = this.element.find('.event-modal');
        this.modalHeader = this.modal.find('.header');
        this.modalHeaderBg = this.modal.find('.header-bg');
        this.modalBody = this.modal.find('.body'); 
        this.modalBodyBg = this.modal.find('.body-bg'); 
        this.modalMaxWidth = 800;
        this.modalMaxHeight = 480;

        this.animating = false;

        this.initSchedule();
    }

    SchedulePE.prototype.initSchedule = function() {
        this.scheduleReset();
        this.initEvents();
    };

    SchedulePE.prototype.scheduleReset = function() {
        var mq = this.mq();
        if( mq == 'desktop' && !this.element.hasClass('js-full') ) {
            //in this case you are on a desktop version (first load or resize from mobile)
            this.eventSlotHeight = this.eventsGroup.eq(0).children('.top-info').outerHeight();
            this.element.addClass('js-full');
            this.placeEvents();
            this.element.hasClass('modal-is-open') && this.checkEventModal();
        } else if(  mq == 'mobile' && this.element.hasClass('js-full') ) {
            //in this case you are on a mobile version (first load or resize from desktop)
            this.element.removeClass('js-full loading');
            this.eventsGroup.children('ul').add(this.singleEvents).removeAttr('style');
            this.eventsWrapper.children('.grid-line').remove();
            this.element.hasClass('modal-is-open') && this.checkEventModal();
        } else if( mq == 'desktop' && this.element.hasClass('modal-is-open')){
            //on a mobile version with modal open - need to resize/move modal window
            this.checkEventModal('desktop');
            this.element.removeClass('loading');
        } else {
            this.element.removeClass('loading');
        }
    };

    SchedulePE.prototype.initEvents = function() {
        var self = this;

        this.singleEvents.each(function(){
            //create the .event-date element for each event
            var durationLabel = '<span class="event-date">'+$(this).data('start')+' - '+$(this).data('end')+'</span>';
            $(this).children('a').prepend($(durationLabel));

            //detect click on the event and open the modal
            $(this).on('click', 'a', function(event){
                event.preventDefault();
                if( !self.animating ) self.openModal($(this));
            });
        });

        //close modal window
        this.modal.on('click', '.close', function(event){
            event.preventDefault();
            if( !self.animating ) self.closeModal(self.eventsGroup.find('.selected-event'));
        });
        this.element.on('click', '.cover-layer', function(event){
            if( !self.animating && self.element.hasClass('modal-is-open') ) self.closeModal(self.eventsGroup.find('.selected-event'));
        });
    };

    SchedulePE.prototype.placeEvents = function() {
        var self = this;
        this.singleEvents.each(function(){
            //place each event in the grid -> need to set top position and height
            var start = getScheduleTimestamp($(this).attr('data-start')),
                duration = getScheduleTimestamp($(this).attr('data-end')) - start;

            var eventTop = self.eventSlotHeight*(start - self.timelineStart)/self.timelineUnitDuration,
                eventHeight = self.eventSlotHeight*duration/self.timelineUnitDuration;
            
            $(this).css({
                top: (eventTop -1) +'px',
                height: (eventHeight+1)+'px'
            });
        });

        this.element.removeClass('loading');
    };

    SchedulePE.prototype.openModal = function(event) {
        var self = this;
        var mq = self.mq();
        this.animating = true;

        //update event name and time
        this.modalHeader.find('.event-name').text(event.find('.event-name').text());
        this.modalHeader.find('.event-date').text(event.find('.event-date').text());
        this.modal.attr('data-event', event.parent().attr('data-event'));

        //update event content
        this.modalBody.find('.event-info').load(event.parent().attr('data-content')+'.html .event-info > *', function(data){
            //once the event content has been loaded
            self.element.addClass('content-loaded');
        });

        this.element.addClass('modal-is-open');

        setTimeout(function(){
            //fixes a flash when an event is selected - desktop version only
            event.parent('li').addClass('selected-event');
        }, 10);

        if( mq == 'mobile' ) {
            self.modal.one(transitionEnd, function(){
                self.modal.off(transitionEnd);
                self.animating = false;
            });
        } else {
            var eventTop = event.offset().top - $(window).scrollTop(),
                eventLeft = event.offset().left,
                eventHeight = event.innerHeight(),
                eventWidth = event.innerWidth();

            var windowWidth = $(window).width(),
                windowHeight = $(window).height();

            var modalWidth = ( windowWidth*.8 > self.modalMaxWidth ) ? self.modalMaxWidth : windowWidth*.8,
                modalHeight = ( windowHeight*.8 > self.modalMaxHeight ) ? self.modalMaxHeight : windowHeight*.8;

            var modalTranslateX = parseInt((windowWidth - modalWidth)/2 - eventLeft),
                modalTranslateY = parseInt((windowHeight - modalHeight)/2 - eventTop);
            
            var HeaderBgScaleY = modalHeight/eventHeight,
                BodyBgScaleX = (modalWidth - eventWidth);

            //change modal height/width and translate it
            self.modal.css({
                top: eventTop+'px',
                left: eventLeft+'px',
                height: modalHeight+'px',
                width: modalWidth+'px',
            });
            transformElement(self.modal, 'translateY('+modalTranslateY+'px) translateX('+modalTranslateX+'px)');

            //set modalHeader width
            self.modalHeader.css({
                width: eventWidth+'px',
            });
            //set modalBody left margin
            self.modalBody.css({
                marginLeft: eventWidth+'px',
            });

            //change modalBodyBg height/width ans scale it
            self.modalBodyBg.css({
                height: eventHeight+'px',
                width: '1px',
            });
            transformElement(self.modalBodyBg, 'scaleY('+HeaderBgScaleY+') scaleX('+BodyBgScaleX+')');

            //change modal modalHeaderBg height/width and scale it
            self.modalHeaderBg.css({
                height: eventHeight+'px',
                width: eventWidth+'px',
            });
            transformElement(self.modalHeaderBg, 'scaleY('+HeaderBgScaleY+')');
            
            self.modalHeaderBg.one(transitionEnd, function(){
                //wait for the  end of the modalHeaderBg transformation and show the modal content
                self.modalHeaderBg.off(transitionEnd);
                self.animating = false;
                self.element.addClass('animation-completed');
            });
        }

        //if browser do not support transitions -> no need to wait for the end of it
        if( !transitionsSupported ) self.modal.add(self.modalHeaderBg).trigger(transitionEnd);
    };

    SchedulePE.prototype.closeModal = function(event) {
        var self = this;
        var mq = self.mq();

        this.animating = true;

        if( mq == 'mobile' ) {
            this.element.removeClass('modal-is-open');
            this.modal.one(transitionEnd, function(){
                self.modal.off(transitionEnd);
                self.animating = false;
                self.element.removeClass('content-loaded');
                event.removeClass('selected-event');
            });
        } else {
            var eventTop = event.offset().top - $(window).scrollTop(),
                eventLeft = event.offset().left,
                eventHeight = event.innerHeight(),
                eventWidth = event.innerWidth();

            var modalTop = Number(self.modal.css('top').replace('px', '')),
                modalLeft = Number(self.modal.css('left').replace('px', ''));

            var modalTranslateX = eventLeft - modalLeft,
                modalTranslateY = eventTop - modalTop;

            self.element.removeClass('animation-completed modal-is-open');

            //change modal width/height and translate it
            this.modal.css({
                width: eventWidth+'px',
                height: eventHeight+'px'
            });
            transformElement(self.modal, 'translateX('+modalTranslateX+'px) translateY('+modalTranslateY+'px)');
            
            //scale down modalBodyBg element
            transformElement(self.modalBodyBg, 'scaleX(0) scaleY(1)');
            //scale down modalHeaderBg element
            transformElement(self.modalHeaderBg, 'scaleY(1)');

            this.modalHeaderBg.one(transitionEnd, function(){
                //wait for the  end of the modalHeaderBg transformation and reset modal style
                self.modalHeaderBg.off(transitionEnd);
                self.modal.addClass('no-transition');
                setTimeout(function(){
                    self.modal.add(self.modalHeader).add(self.modalBody).add(self.modalHeaderBg).add(self.modalBodyBg).attr('style', '');
                }, 10);
                setTimeout(function(){
                    self.modal.removeClass('no-transition');
                }, 20);

                self.animating = false;
                self.element.removeClass('content-loaded');
                event.removeClass('selected-event');
            });
        }

        //browser do not support transitions -> no need to wait for the end of it
        if( !transitionsSupported ) self.modal.add(self.modalHeaderBg).trigger(transitionEnd);
    }

    SchedulePE.prototype.mq = function(){
        //get MQ value ('desktop' or 'mobile') 
        var self = this;
        return window.getComputedStyle(this.element.get(0), '::before').getPropertyValue('content').replace(/["']/g, '');
    };

    SchedulePE.prototype.checkEventModal = function(device) {
        this.animating = true;
        var self = this;
        var mq = this.mq();

        if( mq == 'mobile' ) {
            //reset modal style on mobile
            self.modal.add(self.modalHeader).add(self.modalHeaderBg).add(self.modalBody).add(self.modalBodyBg).attr('style', '');
            self.modal.removeClass('no-transition');    
            self.animating = false; 
        } else if( mq == 'desktop' && self.element.hasClass('modal-is-open') ) {
            self.modal.addClass('no-transition');
            self.element.addClass('animation-completed');
            var event = self.eventsGroup.find('.selected-event');

            var eventTop = event.offset().top - $(window).scrollTop(),
                eventLeft = event.offset().left,
                eventHeight = event.innerHeight(),
                eventWidth = event.innerWidth();

            var windowWidth = $(window).width(),
                windowHeight = $(window).height();

            var modalWidth = ( windowWidth*.8 > self.modalMaxWidth ) ? self.modalMaxWidth : windowWidth*.8,
                modalHeight = ( windowHeight*.8 > self.modalMaxHeight ) ? self.modalMaxHeight : windowHeight*.8;

            var HeaderBgScaleY = modalHeight/eventHeight,
                BodyBgScaleX = (modalWidth - eventWidth);

            setTimeout(function(){
                self.modal.css({
                    width: modalWidth+'px',
                    height: modalHeight+'px',
                    top: (windowHeight/2 - modalHeight/2)+'px',
                    left: (windowWidth/2 - modalWidth/2)+'px',
                });
                transformElement(self.modal, 'translateY(0) translateX(0)');
                //change modal modalBodyBg height/width
                self.modalBodyBg.css({
                    height: modalHeight+'px',
                    width: '1px',
                });
                transformElement(self.modalBodyBg, 'scaleX('+BodyBgScaleX+')');
                //set modalHeader width
                self.modalHeader.css({
                    width: eventWidth+'px',
                });
                //set modalBody left margin
                self.modalBody.css({
                    marginLeft: eventWidth+'px',
                });
                //change modal modalHeaderBg height/width and scale it
                self.modalHeaderBg.css({
                    height: eventHeight+'px',
                    width: eventWidth+'px',
                });
                transformElement(self.modalHeaderBg, 'scaleY('+HeaderBgScaleY+')');
            }, 10);

            setTimeout(function(){
                self.modal.removeClass('no-transition');
                self.animating = false; 
            }, 20);
        }
    };

    var schedules = $('.cd-schedule');
    var objSchedulesPE = [],
        windowResize = false;
    
    if( schedules.length > 0 ) {
        schedules.each(function(){
            //create SchedulePE objects
            objSchedulesPE.push(new SchedulePE($(this)));
        });
    }

    $(window).on('resize', function(){
        if( !windowResize ) {
            windowResize = true;
            (!window.requestAnimationFrame) ? setTimeout(checkResize) : window.requestAnimationFrame(checkResize);
        }
    });

    $(window).keyup(function(event) {
        if (event.keyCode == 27) {
            objSchedulesPE.forEach(function(element){
                element.closeModal(element.eventsGroup.find('.selected-event'));
            });
        }
    });

    function checkResize(){
        objSchedulesPE.forEach(function(element){
            element.scheduleReset();
        });
        windowResize = false;
    }

    function getScheduleTimestamp(time) {
        //accepts hh:mm format - convert hh:mm to timestamp
        time = time.replace(/ /g,'');
        var timeArray = time.split(':');
        var timeStamp = parseInt(timeArray[0])*60 + parseInt(timeArray[1]);
        return timeStamp;
    }

    function transformElement(element, value) {
        element.css({
            '-moz-transform': value,
            '-webkit-transform': value,
            '-ms-transform': value,
            '-o-transform': value,
            'transform': value
        });
    }
});
</script>

@endsection