<!doctype html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Lịch Khám Bệnh Nhân</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

        <base href="{{asset('')}}">
        <link rel="stylesheet" href="/HI_04/css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="/HI_04/css/animate.css">
        
        <link rel="stylesheet" href="/HI_04/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/HI_04/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/HI_04/css/magnific-popup.css">

        <link rel="stylesheet" href="/HI_04/css/aos.css">

        <link rel="stylesheet" href="/HI_04/css/ionicons.min.css">

        <link rel="stylesheet" href="/HI_04/css/bootstrap-datepicker.css">
        <link rel="stylesheet" href="/HI_04/css/jquery.timepicker.css">

        
        <link rel="stylesheet" href="/HI_04/css/flaticon.css">
        <link rel="stylesheet" href="/HI_04/css/icomoon.css">
        <link rel="stylesheet" href="/HI_04/css/style.css">

        <link rel="stylesheet" href="/HI_04/css/lich-kham-benh-nhan.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <section class="content">
            <div class="container">
                <div class="full-heigh col-md-3 ftco-animate py-5 nav-link-wrap fadeInUp ftco-animated">
                    <div class="fix-left">
                        <div class="search-box">
                            <input id="search-value" type="text" class="form-control" placeholder="Tìm kiếm">
                            <i id="button-search" class="fas fa-search"></i>
                        </div>                    

                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Lịch khám mới nhất
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Lịch khám cũ nhất
                            </label>
                        </div>
                    </div>
                </div>
                <div class="full-heigh col-md-9 ftco-animate p-4 p-md-5 d-flex fadeInUp ftco-animated dark-color">
                    <div style="width: 100%">
                        <h1>Lịch khám</h1>
                        <div id="search-result">
                        </div>
                        <div class="search-result-container-properties">
                            <div class="container">
                                <div class="properties-title">
                                    <h1>Thông tin chi tiết</h1>
                                </div>
                                <div id="main-content"></div>
                                <p class="cancel-button"><button type="button" class="btn btn-danger">HỦY LỊCH</button></p>
                                
                            </div>
                            
                        </div>
                        <div class="dark-shadow"></div>
                    </div>
                </div>
            </div>
        </section>
        <script src="HI_04/js/lich-kham-benh-nhan.js"></script>
    </body>
</html>
