@extends('admin.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <style >
        .row{
            font-size: medium;
        }
        .select2-container--default .select2-selection--single {
            border-radius: 0px;
            height: 34px;
            border: 1px solid #d2d6de;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            font-size: 14px;
            color: #444;
        }
        .fa-star {
            color: #f4d742;
        }
        .progress-group {
            font-size: 20px;
        }
    </style>
@endsection
@section('pagename')
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Lịch khám</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Tăng 70% trong 30 ngày
                              </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-user"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Bệnh nhân</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Tăng 70% trong 30 ngày
                              </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="fa fa-hospital-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Bệnh viện</span>
                            <span class="info-box-number">410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Tăng 70% trong 30 ngày
                              </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Bình luận</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Tăng 70% trong 30 ngày
                              </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
             <!-- BAR CHART -->
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="box-title"><strong><i class="fa fa-calendar"></i> Giờ cao điểm trong ngày</strong></div>
                            <p style="text-align: center;"><strong>17-05-2019</strong></p>
                        </div>
                        <!-- LINE CHART -->
                        <div class="box-body">
                            <div class="nav-tabs-custom" style="cursor: move;">
                                <!-- Tabs within a box -->
                                <ul class="nav nav-tabs pull-right ui-sortable-handle">
                                    <li class="pull-left"><strong>Chọn bệnh viện</strong></li>
                                    <li class="pull-left">
                                        <div class="form-group form-inline">
                                            <select class="form-control select2" id="hour_select_hospital" data-placeholder="Select a State" style="width: 100%;">
                                              <option selected="selected">Chọn tất cả</option>
                                              <option>Bệnh viện Bạch Mai</option>
                                              <option>Bệnh viện 198</option>
                                              <option>Bệnh viện Nhi</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chart">
                                    <canvas id="lineChart" style="height:300px"></canvas>
                                </div>
                            </div>
                        </div>  
                        <div class="overlay" id="overlay_hour" style="display: none">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-inbox"></i> <strong>Thống kê số lượng lịch khám</strong></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="nav-tabs-custom" style="cursor: move;">
                                <!-- Tabs within a box -->
                                <ul class="nav nav-tabs pull-right ui-sortable-handle">
                                    <li class="time-tab"><a data-toggle="tab">Day</a></li>
                                    <li class="active time-tab"><a data-toggle="tab">Month</a></li>
                                    <li class="pull-left"><strong>Chọn bệnh viện</strong></li>
                                    <li class="pull-left">
                                        <div class="form-group form-inline">
                                            <select class="form-control select2" id="calendar_select_hospital" data-placeholder="Select a State" style="width: 100%;">
                                              <option selected="selected">Chọn tất cả</option>
                                              <option>Bệnh viện Bạch Mai</option>
                                              <option>Bệnh viện 198</option>
                                              <option>Bệnh viện Nhi</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chart">
                                    <canvas id="barChart" style="height:300px"></canvas>
                                </div>
                            </div>                              
                        </div>
                        <div class="overlay" id="overlay_calendar" style="display: none">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="box-title"><strong>Phân bố bệnh viện</strong></div>
                        </div>
                        <div class="box-body">
                            <div class="chart">
                                <div id="piechart_bv" style="width: 100%;"></div>
{{--                                 <canvas id="pieChart" style="height:auto"></canvas> --}}
                            </div>
                        </div>
                    </div>
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <div class="box-title"><strong>Thống kê hoạt động</strong>
                            </div>
                        </div>
                        <div class="box-body">
                            <p>Hiện có 500 khách và 400 thành viên trực tuyến</p>
                            <div class="input-group">
                                <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                                    <span>
                                        <i class="fa fa-calendar"></i> Lọc theo...
                                    </span>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                            </div>

                            <div class="progress-group">
                                <span class="progress-text">Số lượt truy cập</span>
                                <span class="progress-number"><b>1600</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Số lượt tìm kiếm</span>
                                <span class="progress-number"><b>1500</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-red" style="width: 93%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Số lượt đặt lịch</span>
                                <span class="progress-number"><b>1220</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-yellow" style="width: 67%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Số yêu cầu gửi thành công</span>
                                <span class="progress-number"><b>1150</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-green" style="width: 60%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                        </div>
                        <div class="overlay" id="overlay_bv" style="display: none">
                            <i class="fa fa-refresh fa-spin"></i>
                        </div>
                        <!-- /.box-body -->
                        {{-- <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <canvas id="pieChart1" style="height:300px"></canvas>
                                    <p style="text-align: center;">Tìm bác sĩ</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <canvas id="pieChart2" style="height:300px"></canvas>
                                    <p style="text-align: center;">Đặt lịch</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <canvas id="pieChart3" style="height:300px"></canvas>
                                    <p style="text-align: center;">Gửi yêu cầu</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
{{--                 <div class="col-sm-8">
                    <div id="piechart" style="width:100%;heigh:auto"></div>
                </div>
                <div class="col-sm-8">
                    <div id="piechart_bv" style="width:100%;heigh:auto"></div>
                </div> --}}
            </div>
            <!-- /.box -->
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-inbox"></i> <strong>Top bác sỹ được yêu thích</strong></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <table id="doctor_table" class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Bệnh viện</th>
                                        <th>Khoa</th>
                                        <th>Đánh giá</th>
                                        <th>Thao tác</th>
                                    </tr>
                                    <tr>
                                        <td>Nguyễn Văn A</td>
                                        <td>Bạch Mai</td>
                                        <td>Hồi sức cấp cứu</td>
                                        <td><span style="display: none">2</span>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>Nguyễn Văn A</td>
                                        <td>Bạch Mai</td>
                                        <td>Hồi sức cấp cứu</td>
                                        <td><span style="display: none">2</span>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>Nguyễn Văn B</td>
                                        <td>Bạch Mai</td>
                                        <td>Hồi sức cấp cứu</td>
                                        <td><span style="display: none">3</span>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </td>
                                        <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>Nguyễn Văn C</td>
                                        <td>Bạch Mai</td>
                                        <td>Da liễu</td>
                                        <td><span style="display: none">4</span>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </td>
                                        <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chi tiết</a></td>
                                    </tr>                                
                                    <tr>
                                        <td>Nguyễn Văn A</td>
                                        <td>Bạch Mai</td>
                                        <td>Hồi sức cấp cứu</td>
                                        <td><span style="display: none">2</span>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                        </td>
                                        <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chi tiết</a></td>
                                    </tr>
                                </tbody>
                            </table>   
                        </div>
                    </div>
                </div>
            </div>                
            
        </section>
    </div>
@endsection
@section('content')
@endsection
@section('customscript')
    <script src="/adminlte/js/raphael.min.js"></script>
    <script src="/adminlte/js/morris.min.js"></script>
    <script src="/adminlte/js/metisMenu.min.js"></script>
    <script src="/adminlte/js/startmin.js"></script>
    <script>
        $(function() {
            $('#daterange-btn')
            $('#daterange-btn').daterangepicker(
              {
                ranges   : {
                  'Hôm nay'       : [moment(), moment()],
                  'Hôm qua'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                  '7 ngày qua' : [moment().subtract(6, 'days'), moment()],
                  'tháng này'  : [moment().startOf('month'), moment().endOf('month')],
                  'tháng vừa rồi'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
              },
              function (start, end) {
                $('#overlay_bv').css("display", "block")
                setTimeout(function () {
                    $('.overlay').css("display", "none")
                }, 1000)
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
              }
            )
            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August'],
                datasets: [
                    {
                        label: 'Digital Goods',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [281, 483, 400, 299, 761, 576, 905, 701]
                    }
                ]
            }

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            }

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartData = {
                labels: ['6h', '7h', '8h', '9h', '10h', '11h', '13h', '14h', '15h', '16h', '17h'],
                datasets: [
                    {
                        label: 'Digital Goods',
                        fillColor: '#2f43f9',
                        strokeColor: '#2f43f9',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188)',
                        data: [28, 48, 40, 50, 76, 57, 90, 70, 50, 48, 40]
                    },
                    {
                        label               : 'Electronics',
                        fillColor           : '#f3aefc',
                        strokeColor         : '#f3aefc',
                        pointColor          : '#f3aefc',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : [70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70]
                    }
                ]
            }
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
            var lineChart = new Chart(lineChartCanvas)
            var lineChartOptions = areaChartOptions
            lineChartOptions.datasetFill = false
            function drawLineChart() {
                lineChart.Line(lineChartData, lineChartOptions)
            }
            drawLineChart();
            $('#hour_select_hospital').change(function () {
                drawLineChart();
            })
            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            // var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            // var pieChart       = new Chart(pieChartCanvas)
            var PieData        = [
                {
                    value    : 1400,
                    color    : '#dd4b39',
                    highlight: '#dd4b39',
                    label    : 'Tìm bác sĩ',
                    labelColor : 'white',
                    labelFontSize : '16'
                },
                // {
                //     value    :100,
                //     color    : '#efefef',
                //     highlight: '#efefef',
                //     label    : 'None',
                //     labelColor : 'white',
                //     labelFontSize : '16'
                // },
                {
                value    : 1000,
                    color    : '#f39c12',
                    highlight: '#f39c12',
                    label    : 'Tạo lịch',
                    labelColor : 'white',
                    labelFontSize : '16'
                },
                {
                value    : 900,
                    color    : '#00a65a',
                    highlight: '#00a65a',
                    label    : 'Gửi yêu cầu',
                    labelColor : 'white',
                    labelFontSize : '16'
                }
            ]
            var pieOptions     = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke    : true,
                //String - The colour of each segment stroke
                segmentStrokeColor   : '#fff',
                //Number - The width of each segment stroke
                segmentStrokeWidth   : 2,
                //Number - The percentage of the chart that we cut out of the middle
                percentageInnerCutout: 0, // This is 0 for Pie charts
                //Number - Amount of animation steps
                animationSteps       : 100,
                //String - Animation easing effect
                animationEasing      : 'easeOutBounce',
                //Boolean - Whether we animate the rotation of the Doughnut
                animateRotate        : true,
                //Boolean - Whether we animate scaling the Doughnut from the centre
                animateScale         : false,
                //Boolean - whether to make the chart responsive to window resizing
                responsive           : true,
                // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio  : true,
                //String - A legend template
                legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
                legend: {
                    display: true,
                }
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            // pieChart.Doughnut(PieData, pieOptions)
             
            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChart = new Chart(barChartCanvas)
            var barChartData = areaChartData
            barChartData.datasets[0].fillColor = '#00a65a'
            barChartData.datasets[0].strokeColor = '#00a65a'
            barChartData.datasets[0].pointColor = '#00a65a'
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 15,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            }

            barChartOptions.datasetFill = false
            function drawBarChart() {
                barChart.Bar(barChartData, barChartOptions)
            }
            drawBarChart();
            $('.time-tab').click(function () {
                drawBarChart();
            })
            $('#calendar_select_hospital').change(function () {
                drawBarChart();
            })
        })
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Bạch Mai',2200],
          ['Việt Đức', 900],
          ['Nhiệt Đới', 1500],
          ['Xanh Pôn', 800],
          ['108', 500],
          ['Việt Xô', 700],
          ['Khác', 200],
        ]);

        var data_bv = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Hà Nội',2200],
          ['Hồ Chí Minh', 3200],
          ['Thái Bình', 1200],
          ['Khác', 200],
        ]);

        var options = {
          title: 'Bệnh Viện làm việc'
        };

        var options_bv = {
            fontSize: 18,
            chartArea: {width: 500, height: 300}
        };

        // var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        var chart_bv = new google.visualization.PieChart(document.getElementById('piechart_bv'));

        // chart.draw(data, options);
        chart_bv.draw(data_bv, options_bv);
      }
    </script>
@endsection

