<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href='{{asset("css/HI_06/bootstrap.min.css")}}'>
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{{asset("css/HI_06/font-awesome.min.css")}}'>
  <!-- Ionicons -->
  <link rel="stylesheet" href='{{asset("css/HI_06/ionicons.min.css")}}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{asset("css/HI_06/AdminLTE.min.css")}}'>
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href='{{asset("css/HI_06/_all-skins.min.css")}}'>
  <!-- Morris chart -->
  <link rel="stylesheet" href='{{asset("css/HI_06/morris.css")}}'>
  <!-- jvectormap -->
  <link rel="stylesheet" href='{{asset("css/HI_06/jquery-jvectormap.css")}}''>
  <!-- Date Picker -->
  <link rel="stylesheet" href='{{asset("css/HI_06/bootstrap-datepicker.min.css")}}'>
  <!-- Daterange picker -->
  <link rel="stylesheet" href='{{asset("css/HI_06/daterangepicker.css")}}'>
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href='{{asset("css/HI_06/bootstrap3-wysihtml5.min.css")}}'>
  <link rel="stylesheet" type="text/css" media="screen" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- Schedule custom-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
	<link rel="stylesheet" href='{{asset("css/HI_06/reset.css")}}'> <!-- CSS reset -->
	<link rel="stylesheet" href='{{asset("css/HI_06/style.css")}}'> <!-- Resource style -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src='{{asset("img/HI_06/dist/img/user2-160x160.jpg")}}' class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src='{{("img/HI_06/dist/img/user2-160x160.jpg")}}' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <ul class="sidebar-menu" data-widget="tree">
          <li class="<?= empty(Request::segment(2)) ? 'active' : ''; ?>">
              <a href="/admin_hospital">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
          </li>
          <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
              <a href="/admin_hospital/doctors">
                  <i class="fa fa-user"></i> <span>Doctor</span>
              </a>
          </li>
          <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
              <a href="/admin_hospital/staffs">
                  <i class="fa fa-user"></i> <span>Staff</span>
              </a>
          </li>
          <li class="<?= (Request::segment(2)=='hospitals') ? 'active' : ''; ?>">
              <a href="/admin_hospital/edit">
                  <i class="fa fa-hospital-o"></i> <span>Hospital Information</span>
              </a>
          </li>
      </ul>   
      <!-- sidebar menu: : style can be found in sidebar.less -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Bác sĩ</p>
            </div>
            
            <a href="{{ url()->current() }}/doctors" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Nhân viên</p>
            </div>

            <a href="{{ url()->current() }}/staffs" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    </section>
    <section class="content-header">
        <h1>
          Lịch làm việc
        </h1>
      </section>
    <section class="content">
      <div id="datetimepicker" class="input-append date" style="margin-bottom: 15px">
        <input type="text"></input>
        <span class="add-on">
          <span class="glyphicon glyphicon-calendar"></span>
          <i style="display: none" data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
        </span>
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <li class="pull-left header"><i class="fa fa-inbox"></i> Thời gian biểu</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="cd-schedule loading">
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
              
                <div class="events">
                  <ul>
                    <li class="events-group">
                      <div class="top-info"><img src='{{("img/HI_06/dist/img/bshung.jpeg")}}' class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ Hùng</span></div>              
                      <ul>
                        <?php echo date("H:i",  9*3600+3*30*60);?>
                        @for ($i =0; $i <=40; $i+=2)
                        <li class="single-event" data-start="<?php echo date("H:i", 9*3600+$i*5*60);?>" data-end="<?php echo date("H:i", 9*3600+($i+1)*5*60);?>" data-content="event-abs-circuit" data-event="event-1">
                          <a href="#0">
                            <em class="event-name">Khám bệnh</em>
                          </a>
                        </li>

                        @endfor

                      </ul>
                    </li>
              
                    <li class="events-group">
                      <div class="top-info"><img src='{{("img/HI_06/dist/img/bstruong.jpeg")}}' class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ Trường</span></div>
              
                      <ul>
                        <li class="single-event" data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2">
                          <a href="#0">
                            <em class="event-name">Họp</em>
                          </a>
                        </li>
              
                        <li class="single-event" data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-4">
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
                      <div class="top-info"><img src='{{("img/HI_06/dist/img/bstuyet.jpeg")}}' class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ Tuyết</span></div>
              
                      <ul>
                        <li class="single-event" data-start="09:00" data-end="10:15" data-content="event-restorative-yoga" data-event="event-4">
                          <a href="#0">
                            <em class="event-name">Khám bệnh</em>
                          </a>
                        </li>
              
                        <li class="single-event" data-start="10:45" data-end="11:45" data-content="event-yoga-1" data-event="event-3">
                          <a href="#0">
                            <em class="event-name">Họp bàn giao</em>
                          </a>
                        </li>
              
                        <li class="single-event" data-start="12:00" data-end="13:45"  data-content="event-rowing-workout" data-event="event-2">
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
                      <div class="top-info"><img src='{{("img/HI_06/dist/img/bstu.jpeg")}}' class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ Tú</span></div>
              
                      <ul>
                        <li class="single-event" data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1">
                          <a href="#0">
                            <em class="event-name">Khám bệnh</em>
                          </a>
                        </li>
              
                        <li class="single-event" data-start="12:00" data-end="13:45" data-content="event-restorative-yoga" data-event="event-4">
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
                      <div class="top-info"><img src='{{("img/HI_06/dist/img/bslan.jpeg")}}' class="img-circle bs-avatar" alt="User Image"><span style="text-align: left">Bác sĩ Lan</span></div>
              
                      <ul>
                        <li class="single-event" data-start="9:00" data-end="18:00"  data-content="event-rowing-workout" data-event="event-2">
                          <a href="#0">
                            <em class="event-name">Đi công tác</em>
                          </a>
                        </li>
              
                      </ul>
                    </li>
                  </ul>
                </div>
              
                <div class="event-modal">
                  <header class="header">
                    <div class="content">
                      <span class="event-date"></span>
                      <h3 class="event-name"></h3>
                    </div>
              
                    <div class="header-bg"></div>
                  </header>
              
                  <div class="body">
                    <div class="event-info">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">Thông tin chi tiết ca khám</h4>
                            </div>
                                
                                <div class="row setup-content" id="step-1" style="">
                                    
                                    <div class="col-xs-12">
                                        <div class="col-md-12 well text-center">
                                            <table class="table">
                                                <tbody><tr>
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
                                            </tbody></table>
                                        </div>
                                    </div>
                                    <h4 class="modal-title">Tình trạng bệnh</h4>
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
                                <h4 class="modal-title">Tình trạng bệnh</h4>
                            <div class="row setup-content" id="step-2" style="">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="body-bg"></div>
                  </div>
              
                  <a href="#0" class="close">Close</a>
                </div>
              
                <div class="cover-layer"></div>
              </div> <!-- .cd-schedule -->
            </div>
          </div>
        </section>
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src='{{asset("js/HI_06/jquery.min.js")}}'></script>
<!-- jQuery UI 1.11.4 -->
<script src='{{asset("js/HI_06/jquery-ui.min.js")}}'></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src='{{asset("js/HI_06/bootstrap.min.js")}}'></script>
<!-- Morris.js charts -->
<script src='{{asset("js/HI_06/raphael.min.js")}}'></script>
<script src='{{asset("js/HI_06/morris.min.js")}}'></script>
<!-- Sparkline -->
<script src='{{asset("js/HI_06/jquery.sparkline.min.js")}}'></script>
<!-- jvectormap -->
<script src='{{asset("js/HI_06/jquery-jvectormap-1.2.2.min.js")}}'></script>
<script src='{{asset("js/HI_06/jquery-jvectormap-world-mill-en.js")}}'></script>
<!-- jQuery Knob Chart -->
<script src='{{asset("js/HI_06/jquery.knob.min.js")}}'></script>
<!-- daterangepicker -->
<script src='{{asset("js/HI_06/moment.min.js")}}'></script>
<script src='{{asset("js/HI_06/daterangepicker.js")}}'></script>
<!-- datepicker -->
<script src='{{asset("js/HI_06/bootstrap-datepicker.min.js")}}'></script>
<!-- Bootstrap WYSIHTML5 -->
<script src='{{asset("js/HI_06/bootstrap3-wysihtml5.all.min.js")}}'></script>
<!-- Slimscroll -->
<script src='{{asset("js/HI_06/jquery.slimscroll.min.js")}}'></script>
<!-- FastClick -->
<script src='{{asset("js/HI_06/fastclick.js")}}'></script>
<!-- AdminLTE App -->
<script src='{{asset("js/HI_06/adminlte.min.js")}}'></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src='{{asset("js/HI_06/dashboard.js")}}'></script>
<!-- AdminLTE for demo purposes -->
<script src='{{asset("js/HI_06/demo.js")}}'></script>
<!-- Schedule script-->
<script src='{{asset("js/HI_06/modernizr.js")}}'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src=\'{{asset("js/HI_06/jquery-3.0.0.min.js")}}\'><\/script>');
</script>
<script src='{{asset("js/HI_06/main.js")}}'></script> <!-- Resource jQuery -->
<script type="text/javascript" src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
  $('#datetimepicker').datetimepicker({
    format: 'dd/MM/yyyy hh:mm:ss',
    language: 'en-US'
  });
</script>
</body>
</html>
</body>
</html>
