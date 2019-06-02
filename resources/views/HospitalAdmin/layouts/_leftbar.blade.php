<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/images/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Vo Tuan(HI_06)</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Đang hoạt động</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
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
            <li class="<?= (Request::segment(2)=='static') ? 'active' : ''; ?>">
                    <a href="/admin_hospital/static">
                        <i class="fa fa-line-chart"></i> <span>Thống kê</span>
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