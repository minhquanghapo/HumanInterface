@extends('HI_03.layouts.master')

@section('SPECIFIC CSS')
    <link href="{{ asset('HI_03/css/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main>
        <div id="breadcrumb">
            <div class="container">
                <ul>
                    <li><a href="{{ url('/') }}">Trang chủ</a></li>
                    <li>Câu hỏi thường gặp</li>
                </ul>
            </div>
        </div>
        <!-- /breadcrumb -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main_title">
                        <h2>Câu hỏi thường gặp</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <aside class="col-lg-3" id="sidebar">
                        <div class="box_style_cat" id="faq_box">
                            <ul id="cat_nav">
                                <li><a href="#booking"><i class="icon_document_alt"></i>Đặt lịch khám</a></li>

                                {{--//HI_02_BEGIN--}}
                                <li><a href="#consulting"><i class="icon_document_alt"></i>Tư vấn đặt lịch</a></li>
                                <li><a href="#emergency"><i class="icon_document_alt"></i>Lịch khám khẩn cấp</a></li>
                                {{--//HI_02_END--}}


                                <li><a href="#hospital"><i class="icon_document_alt"></i>Câu hỏi của các nhóm khác</a></li>

                                
                            </ul>
                        </div>
                        <!--/sticky -->
                </aside>
                <!--/aside -->
                
                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">Đặt lịch khám</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="booking">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator icon_minus_alt2"></i>Làm thế nào để đặt lịch khám?</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Đầu tiên, bạn cần chọn dịch vụ khám theo ngày bằng cách nhấn vào nút “Khám theo ngày”. Sau đó, bạn ghi triệu chứng của mình, chọn ngày giờ mà bạn muốn khám, sau đó bấm nút “Tiếp tục”. Tiếp theo bạn chọn bệnh viện mà mình muốn khám. Sau đó chọn bác sĩ mà bạn mong muốn được khám. Cuối cùng bạn tiến hành điền thông tin cá nhân và thanh toán, lịch khám của bạn sẽ được tạo. </p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm cách nào để có thể tìm và khám với bác sĩ bạn muốn?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần chọn dịch vụ khám theo bác sĩ. Nhấn vào nút "Khám theo bác sĩ", sau đó điền tên bác sĩ vào ô "Nhập tên bác sĩ". Hệ thống sẽ hiện gợi ý tên của bác sĩ nếu bác sĩ đó có trong hệ thống. Sau khi nhập tên xong bấm nút "Tìm kiếm", hệ thống sẽ trả lại danh sách các bác sĩ phù hợp với yêu cầu tìm kiếm. Sau đó, chọn khung thông tin bác sĩ mà bạn muốn để đi đến trang thông tin bác sĩ.
									</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                 
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseFour_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để đặt lịch với bác sĩ tôi đã khám trước đó?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần chọn dịch vụ khám theo bác sĩ. Nhấn vào nút "Khám theo bác sĩ", sau đó điền tên bác sĩ vào ô "Nhập tên bác sĩ". Hệ thống sẽ hiện gợi ý tên của bác sĩ nếu bác sĩ đó có trong hệ thống. Sau khi nhập tên xong bấm nút "Tìm kiếm", hệ thống sẽ trả lại danh sách các bác sĩ phù hợp với yêu cầu tìm kiếm. Sau đó, chọn khung thông tin bác sĩ mà bạn muốn để đi đến trang thông tin bác sĩ.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseFive_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để tìm bác sĩ phù hợp với triệu chứng bạn đang mắc phải?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Đầu tiên, bạn cần chọn dịch vụ khám theo ngày bằng cách nhấn vào nút “Khám theo ngày” ở trang chủ. Sau đó, bạn ghi triệu chứng của mình, chọn ngày, giờ mà bạn muốn khám, sau đó bấm nút “Tiếp tục”. Hệ thống sẽ tự động tìm bác sĩ có chuyên môn phù hợp với triệu chứng của bạn.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseSix_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để thanh toán tiền khám?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSix_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Ở phần điền thông tin cá nhân và thông tin thanh toán ở bước cuối cùng, bạn nhập thông tin thẻ có thể giao dịch online để thanh toán. Hoặc bạn có thể chọn "Thanh toán bằng Paypal", khi đó hệ thống sẽ chuyển bạn đến trang giao dịch của Paypal, ở đây bạn sẽ nhập tài khoản và mật khẩu để tiến hành đăng nhập và thanh toán.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseSeven_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để có thể đặt lịch khám với bác sĩ có trình độ chuyên môn tốt?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSeven_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Khi chọn vào phần “Khám theo bác sĩ”, bạn có thể tìm kiếm các bác sĩ phù hợp với tiêu chuẩn mà bạn muốn. Hệ thống sẽ đưa ra kết quả là danh sách các bác sĩ phù hợp. Bạn có thể lựa chọn bác sĩ sau khi đọc thông tin cá nhân và trình độ chuyên môn của các bác sĩ.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                    </div>
                    <!-- /accordion booking -->



                    {{--HI_02_BEGIN--}}
                    <h4 class="nomargin_top">Tư vấn đặt lịch</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="consulting">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#consulting1" aria-expanded="false"><i class="indicator icon_minus_alt2"></i>Tôi chưa biết rõ về bênh tình của mình. Làm thế nào để đặt được lịch khám?</a>
                                </h5>
                            </div>

                            <div id="consulting1" class="collapse show" role="tabpanel" data-parent="#consulting">
                                <div class="card-body">
                                    <p>Đầu tiên, bạn chọn chức năng "tra cứu bệnh" ở trên thanh menu. Gõ vào triệu chứng của mình và tham khảo những bài viết đã được các bác sĩ giỏi nhất của chúng tôi biên soạn. Bạn có thể đặt lịch khám ngay trong màn hình bài viết.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#consulting2" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Tôi đã tìm được bệnh của mình khi tham khảo bài viết. Làm sao để đặt lịch khám?
                                    </a>
                                </h5>
                            </div>
                            <div id="consulting2" class="collapse" role="tabpanel" data-parent="#consulting">
                                <div class="card-body">
                                    <p>Bạn có thể ấn vào nút "Đặt lịch khám ngay ở phía bên phải màn hình. Chọn 1 bác sĩ trong danh sách được gợi ý hoặc ấn "Xem thêm" để xem thêm những bác sĩ khác có chuyên môn điều trị bệnh của bạn.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#consulting3" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Tôi không chắc về bệnh của mình mặc dù đã tìm hiểu thông qua các triệu chứng?
                                    </a>
                                </h5>
                            </div>
                            <div id="consulting3" class="collapse" role="tabpanel" data-parent="#consulting">
                                <div class="card-body">
                                    <p>Bạn có thể chat trực tiếp với nhân viên bệnh viện bằng cách nhấn vào chatbox nằm ở góc phải dưới. Có thể lựa chọn nhắn trực tiếp, gọi thoại hoặc gọi camera. Nhân viên bệnh viện sẽ gửi link đăng ký trực tiếp cho bạn để có thể đăng ký khám một cách nhanh chóng nhất.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                    </div>
                    <h4 class="nomargin_top">Lịch khám khẩn cấp</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="emergency">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#emergency1" aria-expanded="false"><i class="indicator icon_minus_alt2"></i>Lịch khám của tôi bị chuyển bác sĩ, tôi phải làm thế nào?</a>
                                </h5>
                            </div>

                            <div id="emergency1" class="collapse show" role="tabpanel" data-parent="#emergency">
                                <div class="card-body">
                                    <p>Bác sĩ bạn đã hẹn đã phải chuyển đi khám khẩn cấp. Lịch hẹn có thời gian không đổi, chỉ chuyển bác sĩ cùng bệnh viện, vì vậy bạn chỉ cần đến hẹn đúng giờ và khám bác sĩ như trong lịch khám.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#emergency2" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Lịch khám của tôi bị chuyển bác sĩ do khám khẩn cấp, tôi phải làm sao để hẹn lại bác sĩ đó?
                                    </a>
                                </h5>
                            </div>
                            <div id="emergency2" class="collapse" role="tabpanel" data-parent="#emergency">
                                <div class="card-body">
                                    <p>Bạn ấn vào thẻ lịch khám của bạn, ở dưới cùng bạn có thể ấn vào nút "Đặt lại lịch khám với bác sĩ ABC" để đặt lịch khám lại với bác sĩ cũ.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                    </div>

                    {{--HI_02_END--}}





                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
@endsection
