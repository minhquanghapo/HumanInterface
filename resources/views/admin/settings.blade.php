@extends('admin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
<style>
    .table {
        font-size: 16px;
    }
    .can_edit {
        color: #337ab7;
    }
    .can_delete {
        color: #dd4b39;
    }
    .can_view {
        color: #00c0ef;
    }
</style>
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="content">
        <div class="row">
            <div class="col-sm-8">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Số lượt truy cập (lượt/s)</h3>
                        <div class="box-tools pull-right">
                            Real time
                            <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                                <button type="button" class="btn btn-default btn-xs active" data-toggle="on">On</button>
                                <button type="button" class="btn btn-default btn-xs" data-toggle="off">Off</button>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id="interactive" style="height: 300px;"></div>
                    </div>
                </div>
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quản lý bộ nhớ</h3>
                        <p><b>56.2GB khả dụng</b> <span>/ tổng 80.2GB</span></p>
                        <div class="progress-group">
                            <div class="progress sm" style="height:20px; background: lightgray; border-radius: 10px;">
                                <div class="progress-bar progress-bar-aqua" style="background: #f4cb42;width: 35%">
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-body">
                        <form method="get" action="/adminlte/data_backup.pdf">
                            <table class="table">
                                <tr>
                                    <th>Phân vùng</th>
                                    <th>Dung lượng</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>Khám chữa bệnh</td>
                                    <td>2.5GB</td>
                                    <td><a href="/adminlte/data_backup.pdf" download class="btn btn-primary">Back up</a></td>
                                <tr>
                                    <td>Kho dược</td>
                                    <td>2GB</td>
                                    <td><a href="/adminlte/data_backup.pdf" download class="btn btn-primary">Back up</a></td>                                    </tr>
                                <tr>
                                    <td>Hồ sơ bệnh nhân</td>
                                    <td>4.5GB</td>
                                    <td><a href="/adminlte/data_backup.pdf" download class="btn btn-primary">Back up</a></td>                                    </tr>
                                <tr>
                                    <td>Báo cáo tài chính</td>
                                    <td>1GB</td>
                                    <td><a href="/adminlte/data_backup.pdf" download class="btn btn-primary">Back up</a></td>                                    </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-bar-chart-o"></i>
                        <h3 class="box-title">Phân quyền hệ thống</h3>
                        <button type="button" class="pull-right btn btn-default" data-toggle="modal" data-target="#modal-default">Phân quyền</button>

                    </div>
                    <div class="box-body">
                        <ul class="nav nav-stacked">
                            <li><a href="#">Quản trị kĩ thuật</a></li>
                            <li><a href="#">Quản trị điều hành</a></li>
                        </ul>   
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Phân quyền</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <th>Chức năng</th>
                        <th>Quản trị kỹ thuật</th>
                        <th>Quản trị điều hành</th>
                    </tr>
                    <tr>
                        <td>Xem danh sách bệnh viện</td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Đăng ký bệnh viện</td>
                        <td>
                            <input type="checkbox" value="" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Sửa thông tin bệnh viện</td>
                        <td>
                            <input type="checkbox" value="" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gỡ bệnh viện</td>
                        <td>
                            <input type="checkbox" value="" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Xem danh sách bác sỹ</td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>

                    <tr>
                        <td>Thêm bác sỹ</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Sửa thông tin bác sỹ</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gỡ bác sỹ</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Xem danh sách quản lý bệnh viện</td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>

                    <tr>
                        <td>Thêm quản lý bệnh viện</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Sửa thông tin quản lý bệnh viện</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gỡ quản lý bệnh viện</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Xem danh sách bệnh nhân</td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>

                    <tr>
                        <td>Thêm bệnh nhân</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Sửa thông tin bệnh nhân</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Gỡ bệnh nhân</td>
                        <td>
                            <input type="checkbox" value="checked" disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>

                    <tr>
                        <td>Sao lưu dữ liệu</td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                        <td>
                            <input type="checkbox" value="" checked disabled></label>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
@section('content')
@endsection
@section('customscript')
<script src="/adminlte/js/raphael.min.js"></script>
<script src="/adminlte/js/morris.min.js"></script>
<script src="/adminlte/js/metisMenu.min.js"></script>
<script src="/adminlte/js/startmin.js"></script>
<script src="/adminlte/js/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/adminlte/js/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="/adminlte/js/jquery.flot.pie.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="/adminlte/js/jquery.flot.categories.js"></script>
<script>
    $(function() {
        /*
            * Flot Interactive Chart
            * -----------------------
            */
        // We use an inline data source in the example, usually data would
        // be fetched from a server
        var data = [],
            totalPoints = 100

        function getRandomData() {

            if (data.length > 0)
                data = data.slice(1)

            // Do a random walk
            while (data.length < totalPoints) {

                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5

                if (y < 0) {
                    y = 0
                } else if (y > 100) {
                    y = 100
                }

                data.push(y)
            }

            // Zip the generated y values with the x values
            var res = []
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]])
            }

            return res
        }

        var interactive_plot = $.plot('#interactive', [getRandomData()], {
            grid: {
                borderColor: '#f3f3f3',
                borderWidth: 1,
                tickColor: '#f3f3f3'
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: '#3c8dbc'
            },
            lines: {
                fill: true, //Converts the line chart to area chart
                color: '#3c8dbc'
            },
            yaxis: {
                min: 0,
                max: 100,
                show: true
            },
            xaxis: {
                show: false
            }
        })

        var updateInterval = 500 //Fetch data ever x milliseconds
        var realtime = 'on' //If == to on then fetch data every x seconds. else stop fetching
        function update() {

            interactive_plot.setData([getRandomData()])

            // Since the axes don't change, we don't need to call plot.setupGrid()
            interactive_plot.draw()
            if (realtime === 'on')
                setTimeout(update, updateInterval)
        }

        //INITIALIZE REALTIME DATA FETCHING
        if (realtime === 'on') {
            update()
        }
        //REALTIME TOGGLE
        $('#realtime .btn').click(function() {
                if ($(this).data('toggle') === 'on') {
                    realtime = 'on'
                } else {
                    realtime = 'off'
                }
                update()
            })
    /*
    * END INTERACTIVE CHART
    */
    })
</script>
@endsection