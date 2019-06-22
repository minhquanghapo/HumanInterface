<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="call" style="width: 640px; text-align: center; display: none">
    <img src="{{ asset('HI_02/img/phone.png') }}" alt="Phone call" style="max-width: 400px; margin-top:50px;">
</div>

<script>
    var audio = document.getElementById('audio');

    // Get access to the camera!
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        // Not adding `{ audio: true }` since we only want video now
        navigator.mediaDevices.getUserMedia({ audio: true }).then(function(stream) {
            call = document.getElementById('call');
            call.style.display = 'block'
        });
    }
</script>
</body>
</html>
