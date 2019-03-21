<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('HI_02/css/app.css') }}">
</head>
<body>

<div class="container">
    <div class="chat-bubble-container">
        <div class="chat-box" style="display: none">
            <div class="chat-box-top">
                <h2>Need help?</h2>
                <p>Let's chat with our supporter</p>
            </div>
            <div class="chat-box-content">
                <div class="chat-message message-reply">
                    <div class="avatar">
                        <img src="{{ asset('HI_02/svg/female-35.svg') }}" class="img-responsive img-rounded" alt="">
                    </div>
                    <div class="messages">
                        <div class="message-wrapper">
                            <div class="message">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, sequi.</p>
                            </div>
                            <div class="message-time">
                                <span>12:30</span>
                            </div>
                        </div>
                        <div class="message-wrapper">
                            <div class="message">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, sequi.</p>
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
                        <div class="col-12">
                            <div class="file-preview">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <input id="messageInp" type="text" class="form-control message-input" placeholder="Type and press [Enter]">
                        </div>
                        <div class="col-3 action-group">
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

<script
    src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="{{ asset('HI_02/js/chat-box.js') }}"></script>


<script>
    // open video call
    $(document).ready(function () {
        $('#videoCallBtn').click(function () {
            window.open("{{ route('video_call') }}", "", "width=640,height=480");
        })
    })
</script>

</body>
</html>
