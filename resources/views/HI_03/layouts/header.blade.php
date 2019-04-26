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
                    <li><a href="#0"><i class="pe-7s-user"></i></a></li>
                    <li><a href="#0"><i class="pe-7s-add-user"></i></a></li>
                </ul>
                <div class="main-menu">
                    <ul>
                        <li class="submenu">
                            <a href="{{ url('/') }}" class="show-submenu">Trang chủ</a>
                            <!-- <ul>
                                <li><a href="index.html">Home Default</a></li>
                                <li><a href="index-2.html">Home Version 2</a></li>
                                <li><a href="index-3.html">Home Version 3</a></li>
                                <li><a href="index-4.html">Home Version 4</a></li>
                                <li><a href="index-6.html">Revolution Slider</a></li>
                                <li><a href="index-5.html">With Cookie Bar (EU law)</a></li>
                            </ul> -->
                        </li>
                        <li class="submenu">
                            <a href="#0" class="show-submenu">Sức khoẻ<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="{{ url('grid-list') }}">Bài tiết</a></li>
                                <li><a href="{{ url('grid-list') }}">Hô hấp</a></li>
                                <li><a href="{{ url('grid-list') }}">Tim mạch</a></li>
                                <li><a href="{{ url('grid-list') }}">Nội tiết</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('lich-kham-benh-nhan') }}" class="show-submenu">Lịch khám của tôi<i class=""></i></a>
                            <!-- <ul>
                                <li><a href="#0">Diagnostics</a></li>
                                <li><a href="#0">Care Pathways</a></li>
                                <li><a href="#0">Clinics/Services</a></li>
                                <li><a href="#0">Antibiotic & Infection Control</a></li>
                            </ul> -->
                        </li>
                        <!-- <li class="submenu">
                            <a href="#0" class="show-submenu">Liên hệ<i class="icon-down-open-mini"></i></a>
                            <ul>
                                <li><a href="#0">Khẩn cấp</a></li>
                                <li><a href="#0">Đánh giá từ người dùng</a></li>
                                <li><a href="#0">Đường dẫn ngoài</a></li>
                                <li><a href="#0">Câu hỏi thường gặp</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!-- /main-menu -->
            </nav>
        </div>
    </div>
    <!-- /container -->
</header>
