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
                  <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column descending" style="width: 80px;" aria-sort="ascending">Họ Tên</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 60px;">Địa chỉ</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 30px;">Giới tính</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 20px;">Tuổi</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Tình trạng bệnh</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 80px;">Thời gian<a href="#" style="float: right;"><span class="glyphicon glyphicon-sort"></span></a></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 180px;">Trạng thái <a href="#" style="float: right;"><span class="glyphicon glyphicon-sort"></span></a></th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 30px;">Thao tác</th></tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>8:30</td>
                  <td>Đang chờ <br> 5 người đã xem</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>9:30</td>
                  <td>Đang chờ <br> 3 người đã xem</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>10:30</td>
                  <td>Đang chờ <br> Bác sĩ Nguyễn Văn A - chuyên khoa 1 đã xem</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>10:30</td>
                  <td><span class="glyphicon glyphicon-remove text-red"></span> Bị từ chối <br> Bác sĩ Hoàng Văn B - chuyên khoa 2 và 3 người khác</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>10:30</td>
                  <td><span class="glyphicon glyphicon-time text-yellow"></span> Hết hạn <br> 20 người đã xem</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>10:30</td>
                  <td><span class="glyphicon glyphicon-ok text-green"></span> Đã được nhận <br> Bác sĩ Nguyễn Văn A - chuyên khoa 1</td>
                  <td><a href="/admin_hospital/urgent/add" class="btn btn-primary">Sửa</a><a href="" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  <tr role="row" class="odd" id="s1">
                  <td class="sorting_1">Nguyễn Thị Linh</td>
                  <td class="">Hà Nội</td>
                  <td>Nữ</td>
                  <td>30</td>
                  <td>Chán ăn, không thấy đói, mất cảm giác thèm ăn, ăn không ngon miệng. Xuất hiện các triệu chứng rối ...</td>
                  <td>10:30</td>
                  <td style="color: green"><span class="glyphicon glyphicon-check text-green"></span> Đã thực hiện <br> Bác sĩ Nguyễn Văn A - chuyên khoa 1</td>
                  <td><a href="#" class="btn btn-primary" disabled>Sửa</a><a href="#" class="delbut glyphicon glyphicon-trash" style="float: right;"></a></td>
                  
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <h1>
          Thống kê
        </h1>
    </section>
    <section class="content" data-select2-id="11">
         <!-- BAR CHART -->
        <div class="row" id="crawl">
        </div>
        <div class="row" data-select2-id="10">
            <div class="col-lg-8 col-md-8 col-sm-8" data-select2-id="9">
                <div class="box box-success" data-select2-id="8">
                    <div class="box-header with-border">
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body" data-select2-id="7">
                        <div class="nav-tabs-custom" style="cursor: move;" data-select2-id="6">
                            <!-- Tabs within a box -->
                            <ul class="nav nav-tabs pull-right ui-sortable-handle in" data-select2-id="5">
                                <li><a data-toggle="tab" class="active">Day</a></li>
                                <li class="active"><a data-toggle="tab" class="active">Month</a></li>
                                <li class="pull-left"><strong>Chọn chuyên khoa</strong></li>
                                <li class="pull-left">
                                    <div class="form-group form-inline">
                                        <select class="form-control" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                          <option selected="selected">Chọn tất cả</option>
                                          <option>Khoa tim mạch</option>
                                          <option>Khoa cấp cứu</option>
                                          <option>Khoa Răng hàm mặt</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                            <div class="chart">
                                <canvas id="barChart" style="height: 231px; width: 413px;" width="413" height="231"></canvas>
                            </div>
                            <div style="text-align: center;">
                                <i class="fa fa-inbox"></i> Thống kê lịch khám
                            </div>
                        </div>                              
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="box box-success">
                    <div class="box-body">
                        <p class="text-center">
                            <strong>Thống kê hoạt động</strong>
                        </p>

                        <div class="progress-group">
                            <span class="progress-text">Số lượt tìm kiếm</span>
                            <span class="progress-number"><b>1600</b></span>

                            <div class="progress sm">
                                <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">Số lượt truy cập (93%)</span>
                            <span class="progress-number"><b>1500</b></span>

                            <div class="progress sm">
                                <div class="progress-bar progress-bar-red" style="width: 93%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">Số ca khám đặt lịch (67%)</span>
                            <span class="progress-number"><b>1220</b></span>

                            <div class="progress sm">
                                <div class="progress-bar progress-bar-yellow" style="width: 67%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                        <div class="progress-group">
                            <span class="progress-text">Số ca khám thành công (60%)</span>
                            <span class="progress-number"><b>1150</b></span>

                            <div class="progress sm">
                                <div class="progress-bar progress-bar-green" style="width: 60%"></div>
                            </div>
                        </div>
                        <!-- /.progress-group -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer" style="display: none">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <canvas id="pieChart1" style="height: 221px; width: 443px;" width="443" height="221"></canvas>
                                <p style="text-align: center;">Tìm bác sĩ</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <canvas id="pieChart2" style="height: 221px; width: 443px;" width="443" height="221"></canvas>
                                <p style="text-align: center;">Đặt lịch</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <canvas id="pieChart3" style="height: 221px; width: 443px;" width="443" height="221"></canvas>
                                <p style="text-align: center;">Gửi yêu cầu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->
            
        <!-- LINE CHART -->
        <div class="box box-success" style="display: none">
            <div class="box-header with-border">
            <h3 class="box-title"></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="chart">
                    <canvas id="lineChart" style="height: 0px; width: 0px;" width="0" height="0"></canvas>
                </div>
            </div>
        <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
<!-- jQuery 3 -->
<script src="/adminlte/js/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/adminlte/js/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/js/bootstrap.min.js"></script>
<script src="/adminlte/js/Chart.js"></script>
<!-- Morris.js charts -->
<script src="/adminlte/js/raphael.min.js"></script>
<script src="/adminlte/js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/adminlte/js/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/adminlte/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/adminlte/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminlte/js/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/adminlte/js/moment.min.js"></script>
<script src="/adminlte/js/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/adminlte/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/adminlte/js/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/adminlte/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminlte/js/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="/adminlte/js/bootstrap-timepicker.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/adminlte/js/demo.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://gist.github.com/raw/2625891/waitForKeyElements.js"></script>
<script src="/adminlte/js/select2.full.min.js"></script>
    <script src="/adminlte/js/raphael.min.js"></script>
    <script src="/adminlte/js/morris.min.js"></script>
    <script src="/adminlte/js/metisMenu.min.js"></script>
    <script src="/adminlte/js/startmin.js"></script>
    <script>
        $(function() {
            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August'],
                datasets: [
                    {
                        label: 'Digital Goods',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 29, 76, 57, 90, 70]
                    }
                ]
            }

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            }

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
            var lineChart = new Chart(lineChartCanvas)
            var lineChartOptions = areaChartOptions
            lineChartOptions.datasetFill = false
            lineChart.Line(areaChartData, lineChartOptions)
            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas1 = $('#pieChart1').get(0).getContext('2d')
            var pieChartCanvas2 = $('#pieChart2').get(0).getContext('2d')
            var pieChartCanvas3 = $('#pieChart3').get(0).getContext('2d')
            var pieChart1       = new Chart(pieChartCanvas1)
            var pieChart2       = new Chart(pieChartCanvas2)
            var pieChart3       = new Chart(pieChartCanvas3)
            var PieData1        = [
                {
                value    : 1400,
                    color    : '#dd4b39',
                    highlight: '#dd4b39',
                    label    : 'Find doctors'
                },
                {
                    value    :100,
                    color    : '#efefef',
                    highlight: '#efefef',
                    label    : 'None'
                }
            ]
            var PieData2        = [
                {
                value    : 900,
                    color    : '#f39c12',
                    highlight: '#f39c12',
                    label    : 'Create calendar'
                },
                {
                    value    : 400,
                    color    : '#efefef',
                    highlight: '#efefef',
                    label    : 'None'
                }
            ]
            var PieData3        = [
                {
                value    : 900,
                    color    : '#00a65a',
                    highlight: '#00a65a',
                    label    : 'Sent request'
                },
                {
                    value    : 500,
                    color    : '#efefef',
                    highlight: '#efefef',
                    label    : 'IE'
                }
            ]
            var pieOptions     = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke    : true,
                //String - The colour of each segment stroke
                segmentStrokeColor   : '#fff',
                //Number - The width of each segment stroke
                segmentStrokeWidth   : 2,
                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 50, // This is 0 for Pie charts
                //Number - Amount of animation steps
                animationSteps       : 100,
                //String - Animation easing effect
                animationEasing      : 'easeOutBounce',
                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate        : true,
                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale         : false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive           : true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio  : true,
                //String - A legend template
                legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
                labelFontFamily : "Arial",
                labelFontStyle : "normal",
                labelFontSize : 24,
                labelFontColor : "#666"
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            pieChart1.Doughnut(PieData1, pieOptions)
            pieChart2.Doughnut(PieData2, pieOptions)
            pieChart3.Doughnut(PieData3, pieOptions)

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChart = new Chart(barChartCanvas)
            var barChartData = areaChartData
            barChartData.datasets[0].fillColor = '#00a65a'
            barChartData.datasets[0].strokeColor = '#00a65a'
            barChartData.datasets[0].pointColor = '#00a65a'
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 15,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            }

            barChartOptions.datasetFill = false
            barChart.Bar(barChartData, barChartOptions)
        })
    </script>
    <script>
    // Basic example
    $(document).ready(function () {
        $('#listtable').DataTable({
        });
        $('.select2').select2()
        $('.timepicker').timepicker({
          showInputs: false
        });
    });
    // $(document).ready(function () {
    //   $("#crawl").load("/admin #crawl");
    // });
    function waitForKeyElements (
    selectorTxt,    /* Required: The jQuery selector string that
                        specifies the desired element(s).
                    */
    actionFunction, /* Required: The code to run when elements are
                        found. It is passed a jNode to the matched
                        element.
                    */
    bWaitOnce,      /* Optional: If false, will continue to scan for
                        new elements even after the first match is
                        found.
                    */
    iframeSelector  /* Optional: If set, identifies the iframe to
                        search.
                    */
) {
    var targetNodes, btargetsFound;

    if (typeof iframeSelector == "undefined")
        targetNodes     = $(selectorTxt);
    else
        targetNodes     = $(iframeSelector).contents ()
                                           .find (selectorTxt);

    if (targetNodes  &&  targetNodes.length > 0) {
        btargetsFound   = true;
        /*--- Found target node(s).  Go through each and act if they
            are new.
        */
        targetNodes.each ( function () {
            var jThis        = $(this);
            var alreadyFound = jThis.data ('alreadyFound')  ||  false;

            if (!alreadyFound) {
                //--- Call the payload function.
                var cancelFound     = actionFunction (jThis);
                if (cancelFound)
                    btargetsFound   = false;
                else
                    jThis.data ('alreadyFound', true);
            }
        } );
    }
    else {
        btargetsFound   = false;
    }

    //--- Get the timer-control variable for this selector.
    var controlObj      = waitForKeyElements.controlObj  ||  {};
    var controlKey      = selectorTxt.replace (/[^\w]/g, "_");
    var timeControl     = controlObj [controlKey];

    //--- Now set or clear the timer as appropriate.
    if (btargetsFound  &&  bWaitOnce  &&  timeControl) {
        //--- The only condition where we need to clear the timer.
        clearInterval (timeControl);
        delete controlObj [controlKey]
    }
    else {
        //--- Set a timer, if needed.
        if ( ! timeControl) {
            timeControl = setInterval ( function () {
                    waitForKeyElements (    selectorTxt,
                                            actionFunction,
                                            bWaitOnce,
                                            iframeSelector
                                        );
                },
                300
            );
            controlObj [controlKey] = timeControl;
        }
    }
    waitForKeyElements.controlObj   = controlObj;
  }
    waitForKeyElements (".datepicker",function commentCallbackFunction (jNode) {
    //console.log(1);
    //console.log(jNode);
    jNode.remove();
    });

</script>
<script src='{{asset('js/fullcalendar.min.js')}}'></script>
<script src="{{ asset('js/doctor/bootstrap-datepicker.min.js') }}"></script>
<script src='{{asset('js/HI_06/index.js')}}'></script>
<script src="{{ asset('js/doctor/bootstrap-datepicker.vi.min.js') }}"></script>
<script>
  $("#search").on("keyup", function(){
    var str = this.value;
    var arr = document.getElementsByClassName("drname");
    for (i=0; i<arr.length; i++) {
      t = arr[i].id;
      // console.log(t);
      if (!t.includes(str.toLowerCase())) {
        arr[i].style.display = "none";
      } else {
        arr[i].style.display = "block";
      }
    }
    console.log(arr);
  });
</script>
</body>
</html>
</body>
</html>
