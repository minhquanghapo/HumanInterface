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
            <li class="header">Tiếp đón bệnh nhân </li>
            <li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">
                <a href="/receptionist/checkin">
                    <i class="fa fa-user"></i> <span>Nhập viện</span>
                </a>
            </li>
            <li class="<?= empty(Request::segment(2)) ? 'active' : ''; ?>">
                <a href="/receptionist/checkin">
                    <i class="fa fa-dashboard"></i> <span>Thanh toán ra viện</span>
                </a>
            </li>
            {{--<li class="<?=  (Request::segment(2)=='users') ? 'active' : ''; ?>">--}}
                {{--<a href="/receptionist/pay_for_test">--}}
                    {{--<i class="fa fa-user"></i> <span>Đóng phí xét nghiệm</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="<?= (Request::segment(2)=='hospitals') ? 'active' : ''; ?>">--}}
                {{--<a href="/admin/hospitals">--}}
                    {{--<i class="fa fa-hospital-o"></i> <span>Hospitals</span>--}}
                {{--</a>--}}
            {{--</li>--}}
        </ul>    
    </section>
    <!-- /.sidebar -->
</aside>