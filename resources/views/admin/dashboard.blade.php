@extends('admin.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <style >
        .row{
            font-size: medium;
        }
        .select2-selection__rendered {
            line-height: 20px;
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
                            <span class="info-box-text">Calendar</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
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
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
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
                            <span class="info-box-text">Hospital</span>
                            <span class="info-box-number">410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
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
                            <span class="info-box-text">Comments</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                              </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="nav-tabs-custom" style="cursor: move;">
                                        <!-- Tabs within a box -->
                                        <ul class="nav nav-tabs pull-right ui-sortable-handle">
                                            <li data-type="dayChart" class="active"><a href="#dayChartBox" data-toggle="tab">Day</a></li>
                                            <li data-type="monthChart"><a href="#monthChartBox" data-toggle="tab">Month</a></li>
                                            <li class="pull-left header"><i class="fa fa-inbox"></i> Medical Examination Report</li>
                                        </ul>
                                        <div class="tab-content no-padding col-sm-8 col-xs-12">
                                            <canvas id="areaChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Bệnh viện</label>
                                        <select class="form-control select2" style="width: 100%;">
                                          <option selected="selected">Chọn tất cả</option>
                                          <option>Bệnh viện Bạch Mai</option>
                                          <option>Bệnh viện 198</option>
                                          <option>Bệnh viện Nhi</option>
                                        </select>
                                    </div>

                                    <div>
                                        <span class="label label-default" style="padding-right: 20px; "> </span> : <strong>All bookings</strong>
                                    </div>
                                    <div>
                                        <span class="label label-info" style="background: rgba(60,141,188,0.9) !important; padding-right: 20px;"> </span> : <strong>Success bookings</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
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
        $('.nav-tabs > li').click(function () {
            drawChart($(this).data("type"));
        });

        var data = {
            dayChart : {
                labels  : ['25/12', '26/12', '27/12', '28/12', '29/12', '30/12', '31/12'],
                datasets: [
                    {
                        label               : 'Electronics',
                        fillColor           : 'rgba(210, 214, 222, 1)',
                        strokeColor         : 'rgba(210, 214, 222, 1)',
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : [65, 59, 80, 81, 56, 55, 60]
                    },
                    {
                        label               : 'Digital Goods',
                        fillColor           : 'rgba(60,141,188,0.9)',
                        strokeColor         : 'rgba(60,141,188,0.8)',
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [48, 48, 60, 79, 46, 47, 59]
                    }
                ]
            },
            monthChart : {
                labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [
                    {
                        label               : 'Electronics',
                        fillColor           : 'rgba(210, 214, 222, 1)',
                        strokeColor         : 'rgba(210, 214, 222, 1)',
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : [650, 590, 800, 810, 560, 550, 700]
                    },
                    {
                        label               : 'Digital Goods',
                        fillColor           : 'rgba(60,141,188,0.9)',
                        strokeColor         : 'rgba(60,141,188,0.8)',
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [630, 520, 700, 690, 460, 470, 590]
                    }
                ]              
            }              
        }

        function drawChart(type) {
            $('.tab-content').html('<canvas id="areaChart" style="height: 250px; width: 670px;" width="670" height="250"></canvas>');
            var canvas = $('#areaChart').get(0)
            var areaChartCanvas = canvas.getContext('2d')

            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas)
            areaChartData       = data[type]
            var areaChartOptions = {}

            //Create the line chart
            areaChart.Line(areaChartData, areaChartOptions)
        }
        drawChart("dayChart");
    </script>
@endsection

