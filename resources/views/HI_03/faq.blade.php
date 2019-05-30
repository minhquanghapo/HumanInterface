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
                                <li><a href="#booking"><i class="icon_document_alt"></i>Đặt lịch hẹn</a></li>

                                <li><a href="#hospital"><i class="icon_document_alt"></i>Câu hỏi cho các nhóm khác</a></li>

                                
                            </ul>
                        </div>
                        <!--/sticky -->
                </aside>
                <!--/aside -->
                
                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">Đặt lịch hẹn</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="booking">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator icon_minus_alt2"></i>Làm thế nào để đặt lịch hẹn?</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Đầu tiên, bạn cần chọn dịch vụ khám theo ngày bằng cách click vào ô “khám theo ngày”. Sau đó, bạn ghi triệu chứng của mình, thời gian ngày, giờ mà bạn muốn khám, sau đó bấm nút “Tiếp tục”. Tiếp theo bạn chọn bệnh viện mà mình muốn khám. Sau đó chọn bác sỹ mà bạn mong muốn được khám. Cuối cùng bạn tiến hành thanh toán, lịch hẹn của bạn sẽ được tạo thành. </p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm cách nào để có thể tìm bác sỹ?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần chọn dịch vụ khám theo bác sỹ. Click vào ô khám theo bác sỹ,chọn vào ô bác sỹ sau đó điền tên bác sỹ vào ô tìm kiếm ở trên trang chủ. Hệ thống sẽ hiện gợi ý tên của bác sỹ nếu bác sỹ đó có trong hệ thống, bấm enter, hệ thống sẽ trả lại danh sách các bác sĩ phù hợp với yêu cầu tìm kiếm. Sau đó, click vào bác sỹ mà bạn muốn tìm để đi đến trang thông tin bác sỹ.
									</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để tìm được bênh viện?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần chọn dịch vụ khám theo bác sỹ bằng cách click vào ô khám theo bác sỹ.Bạn cần chọn vào ô bệnh viện. Sau đó điền tên bệnh viện vào ô tìm kiếm ở trên trang chủ. Hệ thống sẽ hiện gợi ý tên của bệnh viện nếu bệnh viện đó có trong hệ thống.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                 
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseFour_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để đặt lịch với bác sỹ tôi đã khám trước đó?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFour_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần chọn dịch vụ khám theo bác sỹ. Click vào ô khám theo bác sỹ, chọn vào ô bác sỹ sau đó điền tên bác sỹ vào ô tìm kiếm ở trên trang chủ. Hệ thống sẽ hiện gợi ý tên của bác sỹ nếu bác sỹ đó có trong hệ thống, bấm enter, hệ thống sẽ trả lại danh sách các bác sĩ phù hợp với yêu cầu tìm kiếm. Sau đó, click vào bác sỹ mà bạn muốn tìm để đi đến trang thông tin bác sỹ.
</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseFive_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để tìm bác sỹ phù hợp với bệnh?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Đầu tiên, bạn cần chọn dịch vụ khám theo ngày bằng cách click vào ô “khám theo ngày”. Sau đó, bạn ghi triệu chứng của mình, thời gian ngày, giờ mà bạn muốn khám, sau đó bấm nút “Tiếp tục”. Hệ thống sẽ tự động tìm bác sỹ có chuyên môn có thể giải quyết được bệnh của bạn.</p>
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
                                    <p>Bạn nhấn vào nút Thanh toán sau khi đặt xong lịch khám. Sau đó chọn thẻ ngân hàng mà muốn thanh toán. Hệ thống sẽ chuyển bạn đến trang giao dịch của ngân hàng tương ứng, ở đây bạn sẽ nhập tài khoản và mật khẩu để tiến hành thanh toán.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseSeven_payment" aria-expanded="false">
                                        <i class="indicator icon_plus_alt2"></i>
                                        Làm thế nào để có thể đặt lịch khám với bác sỹ có trình độ chuyên môn tốt?
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSeven_payment" class="collapse" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Sau khi chọn vào phần “Khám theo ngày”, sau đó gh rõ triệu chứng và chọn lịch. Hệ thống sẽ đưa ra kết quả cho bạn danh sách các bác sỹ. Bạn có thể lựa chọn bác sỹ sau khi đọc thông tin cá nhân, trình độ chuyên môn của bác sỹ.</p>
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
