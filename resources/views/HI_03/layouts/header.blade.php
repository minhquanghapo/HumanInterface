<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="{{ url('/') }}" title="Findoctor">Findoctor</a></h1>
                </div>
            </div>
            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
                <ul id="top_access">
                    <li id="user">
                        <a href="#0">
                            <figure><img src="{{ asset('HI_03/img/doctor/avatar.png') }}" alt="" class="img-fluid"></figure>
                            Nguyen Anh
                        </a>
                    </li>
                </ul>
                <div class="main-menu">
                        <ul>
                            <li><a href="{{ url('/tra-cuu-benh') }}" class="show-submenu">Tra cứu bệnh</a></li>
                            <li class="submenu">
                                <a class="show-submenu">Tư vấn đặt lịch<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{ url('/grid-list') }}" class="show-submenu">Bác sĩ nổi bật</a></li>
                                    <li><a href="{{ url('/grid-list') }}" class="show-submenu">Bệnh viện hàng đầu</a></li>
                                    <li><a href="{{ url('/grid-list') }}" class="show-submenu">Bệnh viện gần nhà</a></li>
                                </ul>
                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- /container -->
</header>
