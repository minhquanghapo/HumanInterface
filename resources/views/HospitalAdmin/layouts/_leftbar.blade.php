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
                <a href="/admin_hospital">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
                <a href="/admin_hospital/doctors">
                    <i class="fa fa-user-md"></i> <span>Doctor</span>
                </a>
            </li>
            <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
                    <a href="/admin_hospital/staffs">
                        <i class="fa fa-user"></i> <span>Staff</span>
                    </a>
                </li>
                <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
                        <a href="/admin_hospital/medicines">
                            <i class="fa fa-medkit"></i> <span>Medicine</span>
                        </a>
                    </li>
            <li class="<?= (Request::segment(2)=='hospitals') ? 'active' : ''; ?>">
                <a href="/admin_hospital/edit">
                    <i class="fa fa-hospital-o"></i> <span>Hospital Information</span>
                </a>
            </li>
        </ul>    
    </section>
    <!-- /.sidebar -->
</aside>