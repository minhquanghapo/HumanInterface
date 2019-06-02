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
                                <li><a href="#hospital"><i class="icon_document_alt"></i>Dành cho lễ tân </a></li>
                                <li><a href="#hospital"><i class="icon_document_alt"></i>Dành cho quản trị bệnh viện </a></li>
                                <li><a href="#admin"><i class="icon_document_alt"></i>Dành cho quản trị hệ thống </a></li>
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

                    <h4 class="nomargin_top">Dành lễ tân bệnh viện</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="booking">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true">
                                        <i class="indicator icon_minus_alt2"></i> làm sao để đón tiếp bênh nhân nhập viện</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Nếu trường hợp bệnh nhân đã đăng ký và lên lịch hẹn trước,hoặc có thông tin trong hệ thống, bạn có thể giơ thẻ chứng minh thư hoặc thẻ bảo hiểm y tế của bệnh nhân để camera quét. Sau khi quét thành công ( thông tin được hiển thị lên và có tiếng bíp ) hãy xác nhận lại thông tin bệnh nhân.
                                        nếu đúng bạn có thể tiến hành cho bệnh nhân thực hiện thăm khám bình thường.
                                    Nếu trường hợp bệnh nhân không có thông tin, bạn cần nhập tay vào các ô tương ứng.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse show" href="#collapseOne_payment" aria-expanded="true">
                                        <i class="indicator icon_minus_alt2"></i> làm sao để đón tiếp bênh nhân ra viện viện</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn chỉ cần giơ thẻ bảo hiểm hoặc chứng min thư của bênh nhân lên cho camera quét. hoặc nhập tay vào trong trường camera hỏng hoặc bệnh nhân bị mất giấy tờ.Thông tin sau khi được xác nhận đúng. Bạn nhấn "Tiếp" để chuyển sang bước tiếp theo. hệ thống hiển thị chữ kỹ của các bác sỹ bệnh nhân có thể xinh phép để ra viện. Bạn hãy so sánh chữ ký trên đơn xin ra viện và chữ ký của bác sỹ tương ứng.Nêú ổn hãy chụp ảnh lại đơn xin và nhấn nút "Tiếp". Hệ thống tiếp tục hiển thị danh sách các mục cần thanh toán và số tiền cần thanh toán.
                                    Sau khi thanh toán xong, bạn hãy ấn "Tiếp". Hệ thống xuất màn hình in ấn, tại đây bạn có thể in hóa đơn cho bệnh nhân và hoàn tất thủ tục ra viện.</p>
                                </div>
                            </div>
                        </div>




                        <!-- /card -->


                    </div>

                    <h4 class="nomargin_top">Dành cho quản trị bệnh viện</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="booking">

                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse show" href="#collapseOne_payment" aria-expanded="true">
                                        <i class="indicator icon_minus_alt2"></i> làm thế nào để xem lịch một bác sỹ</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn có thể nhấn vào ô chọn ngày, hoặc tìm kiếm theo tên bác sỹ. Kết quả lịch khám sẽ được hiển thị ngay bên dưới.</p>
                                </div>
                            </div>
                        </div>



                    <h4 class="nomargin_top">Dành cho quản trị hệ thống</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="admin">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#admin1" aria-expanded="false"><i class="indicator icon_minus_alt2"></i>Có bao nhiêu loại người dùng trên hệ thống?</a>
                                </h5>
                            </div>

                            <div id="admin1" class="collapse" role="tabpanel" data-parent="#admin">
                                <div class="card-body">
                                    <p>Hệ thống gồm có: Người quản trị hệ thống, Nhân viên bệnh viện, Bác sĩ, Bệnh nhân.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#admin2" aria-expanded="false">
                                        <i class="indicator icon_minus_alt2"></i>
                                        Tôi có thể chỉnh sửa quyền người dùng hệ thống được không?
                                    </a>
                                </h5>
                            </div>
                            <div id="admin2" class="collapse" role="tabpanel" data-parent="#admin">
                                <div class="card-body">
                                    <p>Không. Quyền người dùng sẽ được hệ thống quy định. Bạn chỉ có thể xem được danh sách các quyền, chi tiết các quyền người sử dụng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#admin3" aria-expanded="false">
                                        <i class="indicator icon_minus_alt2"></i>
                                        Làm thế nào để tối có thể quản lý dữ liệu của hệ thống, sao lưu dữ liệu phòng trường hợp hệ thống xảy ra sự cố?
                                    </a>
                                </h5>
                            </div>
                            <div id="admin3" class="collapse" role="tabpanel" data-parent="#admin">
                                <div class="card-body">
                                    <p>Bạn có thể tạo bản sao lưu dữ liệu của hệ thống tại trang quan lý hệ thống. Tại đó bạn sẽ có danh sách những nhóm dữ liệu được lưu trong hệ thống và button cho phép tạo bản sao lưu dữ liệu trên máy tính.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#admin4" aria-expanded="false">
                                        <i class="indicator icon_minus_alt2"></i>
                                        Bạn có thể cho tôi biết quy trình tạo người dùng mới trong hệ thống không?
                                    </a>
                                </h5>
                            </div>
                            <div id="admin4" class="collapse" role="tabpanel" data-parent="#admin">
                                <div class="card-body">
                                    <p>
                                        Nhập thông tin cần thiết của mỗi người dùng phù hợp với loại người dùng. <br> 
                                        Nhấn Save để gửi yêu cầu tạo người dùng. <br>
                                        Chờ đến khi thông email thông báo tạo người dùng mới được chấp nhận. <br>
                                        Khi thông báo được chấp nhận bạn sẽ có tin nhắn thông báo tạo người dùng thành công.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /card -->
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#admin5" aria-expanded="false">
                                        <i class="indicator icon_minus_alt2"></i>
                                        Bạn có thể cho tôi biết quy trình đăng ký một bệnh viện mới trong hệ thống không?
                                    </a>
                                </h5>
                            </div>
                            <div id="admin5" class="collapse" role="tabpanel" data-parent="#admin">
                                <div class="card-body">
                                    <p>
                                    Nhập thông tin cần thiết của bệnh viện muốn tạo. <br>
                                    Nhấn Save để gửi yêu cầu tạo bệnh viện. <br>
                                    Hệ thống điều hướng trực tiếp sang trang tạo người quản trị bệnh viện. Bạn bắt buộc phải tạo ít nhất một người quản trị bệnh viện cho mỗi bệnh viện. Nếu không chức năng tạo bệnh viện sẽ thất bại.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--HI_02_BEGIN--}}
                    <h4 class="nomargin_top">Tư vấn đặt lịch</h4>
                    <div role="tablist" class="add_bottom_45 accordion" id="consulting">
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#consulting1" aria-expanded="false"><i class="indicator icon_minus_alt2"></i>Tôi chưa biết rõ về bênh tình của mình. Làm thế nào để đặt được lịch khám?</a>
                                </h5>
                            </div>

                            <div id="consulting1" class="collapse" role="tabpanel" data-parent="#consulting">
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
                                    <a data-toggle="collapse show" href="#collapseOne_payment" aria-expanded="true">
                                        <i class="indicator icon_minus_alt2"></i> làm thế nào quản lý thông tin bác sỹ</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần nhấn vào nút bác sỹ tại thanh điều khiển bên trái.Hệ thông sẽ hiển thị màn hình quản lý. Tại dây một bảng thông tin các bác sỹ được hiển thị đi kèm tương ứng với nút chỉnh thông tin và nút xóa.
                                        Nút chỉnh thông tin cho phép bạn sửa thông tin của bac sỹ, sau khi ấn tại đây sẽ có biểu mẫu hiện thị để bạn sửa thông tin của bác sỹ tương ứng. sau khi sửa xong, bạn nhấn nút "Lưu" để lưu ..

                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse show" href="#collapseOne_payment" aria-expanded="true">
                                        <i class="indicator icon_minus_alt2"></i> làm thế nào quản lý thông tin nhân viên</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần nhấn vào nút nhân viên tại thanh điều khiển bên trái.Hệ thông sẽ hiển thị màn hình quản lý. Tại dây một bảng thông tin các nhân viên
                                        được hiển thị đi kèm tương ứng với nút chỉnh thông tin và nút xóa.
                                        Nút chỉnh thông tin cho phép bạn sửa thông tin của nhân viên, sau khi ấn tại đây sẽ có biểu mẫu hiện thị để bạn sửa thông tin của nhân viên tương ứng. sau khi sửa xong, bạn nhấn nút "Lưu" để lưu ..

                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse show" href="#collapseOne_payment" aria-expanded="true">
                                        <i class="indicator icon_minus_alt2"></i> làm thế nào quản lý thông tin thuốc</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần nhấn vào nút thuốc tại thanh điều khiển bên trái.Hệ thông sẽ hiển thị màn hình quản lý.
                                        Tại dây một bảng thông tin các thuốc
                                        được hiển thị đi kèm tương ứng với nút chỉnh thông tin và nút xóa.
                                        Nút chỉnh thông tin cho phép bạn sửa thông tin của thuốc, sau khi ấn tại đây sẽ có biểu mẫu hiện thị
                                        để bạn sửa thông tin của thuốc tương ứng. sau khi sửa xong, bạn nhấn nút "Lưu" để lưu ..

                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse show" href="#collapseOne_payment" aria-expanded="true">
                                        <i class="indicator icon_minus_alt2"></i> làm thế nào quản lý thông tin bệnh viện</a>
                                </h5>
                            </div>

                            <div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#booking">
                                <div class="card-body">
                                    <p>Bạn cần nhấn vào nút thuốc tại thanh điều khiển bên trái.Hệ thông sẽ hiển thị màn hình quản lý.
                                        Hệ thống hiển thị thông tin cho phép bạn sửa thông tin của bệnh viện. sau khi sửa xong, bạn nhấn nút "Lưu" để lưu ..

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
                                    <a data-toggle="collapse" href="#emergency1" aria-expanded="false"><i class="indicator icon_minus_alt2"></i>Lịch khám của tôi hiện số ở trên, điều này nghĩa là gì?</a>
                                </h5>
                            </div>

                            <div id="emergency1" class="collapse" role="tabpanel" data-parent="#emergency">
                                <div class="card-body">
                                    <p> Lịch khám của bạn đã bị chuyển bác sĩ do bác sĩ cũ bận khám khẩn cấp. Bạn hãy ấn vào để xem chi tiết, từ đây bạn có thể giữ lịch mới, hủy lịch hoặc đặt lịch khám khác với bác sĩ cũ.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#emergency1" aria-expanded="false"><i class="indicator icon_minus_alt2"></i>Lịch khám của tôi bị chuyển bác sĩ, tôi phải làm thế nào?</a>
                                </h5>
                            </div>

                            <div id="emergency1" class="collapse" role="tabpanel" data-parent="#emergency">
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
