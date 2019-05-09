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
    </style>
@endsection
@section('pagename')
    <div class="container-fluid">
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
              </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
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
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="box box-success">
                        <div class="box-header with-border">
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
                                    <li><a data-toggle="tab">Day</a></li>
                                    <li class="active"><a data-toggle="tab">Month</a></li>
                                    <li class="pull-left"><strong>Chọn bệnh viện</strong></li>
                                    <li class="pull-left">
                                        <div class="form-group form-inline">
                                            <select class="form-control select2" data-placeholder="Select a State" style="width: 100%;">
                                              <option selected="selected">Chọn tất cả</option>
                                              <option>Bệnh viện Bạch Mai</option>
                                              <option>Bệnh viện 198</option>
                                              <option>Bệnh viện Nhi</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                                <div class="chart">
                                    <canvas id="barChart" style="height:230px"></canvas>
                                </div>
                                <div style="text-align: center;">
                                    <i class="fa fa-inbox"></i>Báo cáo kiểm tra y tế
                                </div>
                            </div>                              
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="box box-success">
                        <div class="box-body">
                            <p class="text-center">
                                <strong>Thống kê hoạt động</strong>
                            </p>

                            <div class="progress-group">
                                <span class="progress-text">Số lượt truy cập</span>
                                <span class="progress-number"><b>1600</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Số lượt tìm kiếm (93%)</span>
                                <span class="progress-number"><b>1500</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-red" style="width: 93%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Số lượt đặt lịch (67%)</span>
                                <span class="progress-number"><b>1220</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-yellow" style="width: 67%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Gửi yêu cầu thành công (60%)</span>
                                <span class="progress-number"><b>1150</b></span>

                                <div class="progress sm">
                                    <div class="progress-bar progress-bar-green" style="width: 60%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <canvas id="pieChart1" style="height:250px"></canvas>
                                    <p style="text-align: center;">Tìm bác sĩ</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <canvas id="pieChart2" style="height:250px"></canvas>
                                    <p style="text-align: center;">Đặt lịch</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <canvas id="pieChart3" style="height:250px"></canvas>
                                    <p style="text-align: center;">Gửi yêu cầu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
                
            <!-- LINE CHART -->
            <div class="box box-success" style="display: none">
                <div class="box-header with-border">
                <h3 class="box-title"></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="lineChart" style="height:250px"></canvas>
                    </div>
                </div>
            <!-- /.box-body -->
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
                        data: [28, 48, 40, 29, 76, 57, 90, 70]
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
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
            var lineChart = new Chart(lineChartCanvas)
            var lineChartOptions = areaChartOptions
            lineChartOptions.datasetFill = false
            lineChart.Line(areaChartData, lineChartOptions)
            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas1 = $('#pieChart1').get(0).getContext('2d')
            var pieChartCanvas2 = $('#pieChart2').get(0).getContext('2d')
            var pieChartCanvas3 = $('#pieChart3').get(0).getContext('2d')
            var pieChart1       = new Chart(pieChartCanvas1)
            var pieChart2       = new Chart(pieChartCanvas2)
            var pieChart3       = new Chart(pieChartCanvas3)
            var PieData1        = [
                {
                value    : 1400,
                    color    : '#dd4b39',
                    highlight: '#dd4b39',
                    label    : 'Find doctors'
                },
                {
                    value    :100,
                    color    : '#efefef',
                    highlight: '#efefef',
                    label    : 'None'
                }
            ]
            var PieData2        = [
                {
                value    : 900,
                    color    : '#f39c12',
                    highlight: '#f39c12',
                    label    : 'Create calendar'
                },
                {
                    value    : 400,
                    color    : '#efefef',
                    highlight: '#efefef',
                    label    : 'None'
                }
            ]
            var PieData3        = [
                {
                value    : 900,
                    color    : '#00a65a',
                    highlight: '#00a65a',
                    label    : 'Sent request'
                },
                {
                    value    : 500,
                    color    : '#efefef',
                    highlight: '#efefef',
                    label    : 'IE'
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
                percentageInnerCutout: 50, // This is 0 for Pie charts
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
                labelFontFamily : "Arial",
                labelFontStyle : "normal",
                labelFontSize : 24,
                labelFontColor : "#666"
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            pieChart1.Doughnut(PieData1, pieOptions)
            pieChart2.Doughnut(PieData2, pieOptions)
            pieChart3.Doughnut(PieData3, pieOptions)

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
            barChart.Bar(barChartData, barChartOptions)
        })
    </script>
@endsection

