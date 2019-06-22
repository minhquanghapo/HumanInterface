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
  <style type="text/css">
    .navbar-custom-menu>.navbar-nav>li>.dropdown-menu{
      width: 400px;
    }
  </style>
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
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>

          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-ok text-green"></span> Lịch khám Nguyễn Thị Linh - 10:30 đã được chấp nhận
                    </a>
                  </li>
                  <li>
                    <a href="/admin_hospital/urgent/add">
                      <td><span class="glyphicon glyphicon-remove text-red"></span> Lịch khám Nguyễn Văn A - 8:30 đã bị từ chối
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-check text-green"></span> Lịch khám Nguyễn Thị Linh - 10:30 đã được thực hiện
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-time text-yellow"></span> Lịch khám Nguyễn Thị Linh - 10:30 đã hết hạn
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
              
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src='{{asset("img/HI_06/dist/img/user2-160x160.jpg")}}' class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src='{{asset("img/HI_06/dist/img/user2-160x160.jpg")}}' class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
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
          <img src='{{asset("img/HI_06/dist/img/user2-160x160.jpg")}}' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Quản Văn Lý</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Đang hoạt động</a>
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
          <li class="<?= empty(Request::segment(2)) ? 'active' : ''; ?>">
              <a href="/admin_hospital">
                  <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
              </a>
          </li>
          <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
              <a href="/admin_hospital/doctors">
                  <i class="fa fa-user-md"></i> <span>Bác sĩ</span>
              </a>
          </li>
          <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
              <a href="/admin_hospital/staffs">
                  <i class="fa fa-user"></i> <span>Nhân viên</span>
              </a>
          </li>
          <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
              <a href="/admin_hospital/medicines">
                  <i class="fa fa-medkit"></i> <span>Thuốc</span>
              </a>
          </li>
          <li class="<?= (Request::segment(2)=='hospitals') ? 'active' : ''; ?>">
              <a href="/admin_hospital/edit">
                  <i class="fa fa-hospital-o"></i> <span>Thông tin bệnh viện</span>
              </a>
          </li>
          <!-- Nhóm 2 -->
          <li class="<?= (Request::segment(2)=='urgent') ? 'active' : ''; ?>">
              <a href="/admin_hospital/urgent">
                    <span class="glyphicon glyphicon-exclamation-sign"></span> <span>Lịch khám khẩn cấp</span>
              </a>
          </li>
          <!-- end Nhóm 2 -->
      </ul>   
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
          <li><a href="/admin_hospital"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="/admin_hospital/staffs">Lịch khám khẩn cấp</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-xs-12">
          <!-- /.box -->
  
          <div class="box">
              <div class="box-header">
              <h3 class="box-title">Danh sách lịch khám khẩn cấp</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-3">
                    <a href="/admin_hospital/urgent/add" type="button" class="btn btn-default">
                      <span class="glyphicon glyphicon-plus-sign"></span>
                       Thêm lịch khám khẩn cấp
                    </a>
                  </div>
                  <div class="col-sm-offset-6 col-sm-3">
                  <div class="dataTables_length" id="example1_length">
                                Ngày
                            <div id="datetimepicker" class="input-append date" style="margin-bottom: 15px">
                              <input type="text" placeholder="10/05/2019 19:15:21"></input>
                              <span class="add-on">
                                <span class="glyphicon glyphicon-calendar"></span>
                                <i style="display: none" data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                              </span>
                            </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                  <thead>
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 80px;" aria-sort="ascending">Họ Tên</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 60px;">Địa chỉ</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 30px;">Giới tính</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 20px;">Tuổi</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Tình trạng bệnh</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">Thời gian<a href="#" style="float: right;"><span class="glyphicon glyphicon-sort"></span></a></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 180px;">Bác sĩ <a href="#" style="float: right;"><span class="glyphicon glyphicon-sort"></span></a></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 30px;">Thao tác</th></tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>8:30</td>
                  <td style="color: green"><span class="glyphicon glyphicon-check text-green"></span>Nguyễn Văn A - chuyên khoa 1</td>
                  <td><a href="#" class="btn btn-primary" disabled>Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Văn Minh</td>
                  <td class="">Hà Nội</td>
                  <td>Nam</td>
                  <td>19</td>
                  <td>Buồn nôn đau đầu sau khi ngã xe ...</td>
                  <td>9:30</td>
                  <td>Bác sĩ B - Chuyên khoa 1</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Hoàng Lê Nguyên</td>
                  <td class="">Hà Nội</td>
                  <td>Nam</td>
                  <td>44</td>
                  <td>khó thở tức ngực đầy hơi ...</td>
                  <td>10:30</td>
                  <td>Bác sĩ B - Chuyên khoa 1</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Giang Văn Minh</td>
                  <td class="">Đà Nẵng</td>
                  <td>Nam</td>
                  <td>24</td>
                  <td>Mất niềm vui với cuộc sống, hay gặp ác mộng ...</td>
                  <td>10:30</td>
                  <td>Bác Văn Sĩ -chuyên khoa 3</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Đào Anh</td>
                  <td class="">Hải Phòng</td>
                  <td>Nữ</td>
                  <td>22</td>
                  <td>Nhức đầu mỏi mắt đầy hơi ...</td>
                  <td>10:30</td>
                  <td>Y Văn Tá - chuyên khoa 2</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Lê Thị Dung</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>26</td>
                  <td>Rối loạn chu kì, nhức mỏi chân ...</td>
                  <td>10:30</td>
                  <td>Bệnh Văn Viện - chuyên khoa 1</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Láng Hòa Lạc</td>
                  <td class="">Hà Nội</td>
                  <td>Nam</td>
                  <td>31</td>
                  <td>ù tai chóng mặt ...</td>
                  <td>11:30</td>
                  <td>Nguyễn Văn A - chuyên khoa 1</td>
                  <td><a href="#" class="btn btn-primary">Sửa</a><a href="#" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  
                  </tr></tbody>
                  <tfoot>
                  </tfoot>
              </table></div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite"></div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          <!-- /.col -->
      </div>
      <!-- /.row -->
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
