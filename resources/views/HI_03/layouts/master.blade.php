<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
    <title>
        @yield('title', 'HI_03 Bệnh nhân đặt lịch khám')
    </title>
	
	<!-- Favicons-->
	<link rel="shortcut icon" href="{{ asset('HI_03/img/favicon.ico') }}" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('HI_03/img/apple-touch-icon-57x57-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('HI_03/img/apple-touch-icon-72x72-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('HI_03/img/apple-touch-icon-114x114-precomposed.png') }}">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('HI_03/img/apple-touch-icon-144x144-precomposed.png') }}">

	<!-- BASE CSS -->
	<link href="{{ asset('HI_03/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_03/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_03/css/menu.css') }}" rel="stylesheet">
	<link href="{{ asset('HI_03/css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('HI_03/css/icon_fonts/css/all_icons_min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('HI_02/css/app.css') }}">

    @yield('SPECIFIC CSS')

	<!-- YOUR CUSTOM CSS -->
	<link href="{{ asset('HI_03/css/custom.css') }}" rel="stylesheet">

	<!-- Modernizr -->
	<script src="{{ asset('HI_03/js/modernizr.js') }}"></script>

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

    @include('HI_03.layouts.header')
	<!-- /header -->

	@yield('content')
	<!-- /main content -->

	@include('HI_03.layouts.footer')
	<!--/footer-->

    <div class="need-help">
        <p>Cần giúp đỡ ?</p>
    </div>
    <div class="tutorial-icons" style="display:none">
        <div class="need-help">
            <p>Làm theo hướng dẫn -> </p>
        </div>
        <div class="tutorial-icon open">
            <i class="far fa-question-circle"></i>
        </div>
        <div class="tutorial-icon close">
            <i class="fas fa-times"></i>
        </div>
    </div>
    <div>
        <div class="chat-bubble-container">
            <div class="need-help">
                <p>Liên hệ ngay với chúng tôi -> </p>
            </div>
            <div class="chat-box" style="display: none">
                <div class="chat-box-top">
                    <h2>Cần giúp đỡ?</h2>
                    <p>Liên hệ với chúng tôi</p>
                </div>
                <div class="chat-box-content">
                    <div class="chat-message message-reply">
                        <div class="avatar">
                            <img src="{{ asset('HI_02/svg/female-35.svg') }}" class="img-responsive img-rounded" alt="">
                        </div>
                        <div class="messages">
                            <div class="message-wrapper">
                                <div class="message">
                                    <p>Xin chào, tôi có thể giúp gì cho bạn ?</p>
                                </div>
                                <div class="message-time">
                                    <span>12:30</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-box-footer">
                    <form id="chatForm" class="no-margin">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="file-preview">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <input id="messageInp" type="text" class="form-control message-input" placeholder="Nhấn phím [Enter] để gửi">
                            </div>
                            <div class="col-md-3 action-group">
                                <i class="fas fa-paperclip action" id="btnAddFile"></i>
                                <i class="fas fa-images action" id="btnAddImage"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="chat-icons">
                <div class="chat-bubble">
                    <div class="chat-icon open">
                        <i class=" fas fa-comments"></i>
                    </div>
                    <div class="chat-icon close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="chat-bubble video-call">
                    <div class="chat-icon">
                        <i class="fas fa-video action" id="videoCallBtn"></i>
                    </div>
                </div>
                <div class="chat-bubble voice-call ">
                    <div class="chat-icon">
                        <i class="fas fa-phone action" id="voiceCallBtn"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
        crossorigin="anonymous"></script>

	<script src="{{ asset('HI_03/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('HI_03/js/functions.js') }}"></script>

    <script src="{{ asset('HI_02/js/chat-box.js') }}"></script>
    <script src="{{ asset('HI_02/js/tutorial.js') }}"></script>

    <script>
        // open video call
        $(document).ready(function () {
            $('#videoCallBtn').click(function () {
                window.open("{{ route('video_call') }}", "", "width=640,height=480");
            });
            $('#voiceCallBtn').click(function () {
                window.open("{{ route('voice_call') }}", "", "width=640,height=480");
            });

            setTimeout(function() {
                $('body').append(`<div id="overlay"></div>`);
                $('.need-help').show();
                let interval = setInterval(function(){
                    $('.tutorial-icons .need-help, .chat-bubble-container .need-help')
                        .effect("bounce", {direction: 'left', distance: 10}, 5000);
                }, 5000);

                $('body').on('click.show_help', function () {
                    $('#overlay').remove();
                    clearInterval(interval);
                    $('.need-help').stop(true).hide();
                    $('body').off('click.show_help');
                });
            }, 1000 * 60 * 2);
        })
    </script>

    @yield('SPECIFIC SCRIPTS')

</body>

</html>
