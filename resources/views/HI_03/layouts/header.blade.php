<!-- HI02 -->
<style type="text/css">
    .badge {
            position: absolute;
            top: -15px;
            right: -10px;
            padding: 4px 6px;
            border-radius: 50%;
            background-color: red;
            color: white;
        }
</style>
<!-- HI02 -->

<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="{{ url('home') }}" title="Findoctor">Findoctor</a></h1>
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
                            </li>
                            <li><a href="{{ route('result') }}" class="show-submenu">Lịch khám của tôi<span class="badge">1</span></a></li>
                            <li><a href="{{ url('/faq') }}" class="show-submenu">Câu hỏi thường gặp</a></li>
                        </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- /container -->
</header>
