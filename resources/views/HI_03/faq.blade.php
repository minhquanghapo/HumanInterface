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
                    
                    
       
                    
                    
                    
                    
                    
                    

                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
@endsection
