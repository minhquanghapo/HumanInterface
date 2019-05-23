<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/adminlte/images/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?= empty(Request::segment(2)) ? 'active' : ''; ?>">
                <a href="/admin">
                    <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
                </a>
            </li>
            <li class="treeview <?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Người dùng</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?=  (Request::segment(3)=='system_admin') ? 'active' : ''; ?>">
                        <a href="/admin/users/system_admin"><i class="fa fa-circle-o"></i> Quản trị hệ thống</a>
                    </li>
                    <li class="<?=  (Request::segment(3)=='hospital_staff') ? 'active' : ''; ?>">
                        <a href="/admin/users/hospital_staff"><i class="fa fa-circle-o"></i> Nhân viên bệnh viện</a>
                    </li>
                    <li class="<?=  (Request::segment(3)=='doctor') ? 'active' : ''; ?>">
                        <a href="/admin/users/doctor"><i class="fa fa-circle-o"></i> Bác sỹ</a>
                    </li>
                    <li class="<?=  (Request::segment(3)=='patient') ? 'active' : ''; ?>">
                        <a href="/admin/users/patient"><i class="fa fa-circle-o"></i> Bệnh nhân</a>
                    </li>
                </ul>
            </li>
            <li class="<?= (Request::segment(2)=='hospitals') ? 'active' : ''; ?>">
                <a href="/admin/hospitals">
                    <i class="fa fa-hospital-o"></i> <span>Bệnh viện</span>
                </a>
            </li>
        </ul>    
    </section>
    <!-- /.sidebar -->
</aside>