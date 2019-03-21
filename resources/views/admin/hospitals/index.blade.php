@extends('admin.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <style >
        .row{
            font-size: medium;
        }
        .input-group-addon {
            border: none;
        }
    </style>
@endsection
@section('pagename')
    <div class="container-fluid">
        <section class="content-header">
            <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Hospitals</a></li>
            </ol>
        </section>
        <section class="content">
            <div class="row" style="background-color: white">
                <div class="col-lg-12">
                    <h1 class="page-header">Hospitals manager</h1>

                    <div class="body-box">
                        
                    <!--Create , Edit -->
                    <div style="margin:10px 0px 10px 0px">
                        <a href="/admin/hospitals/create" type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                         Create hospital
                        </a>
                    </div>

                    <!--Show entries,search-->
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="input-group">
                                <span class="input-group-addon" title="Show">Show</span>
                                <select class="form-control">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>                  
                        </div>
                        <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon" title="City">Tỉnh/TP</span>
                                <select class="form-control">
                                    <option value="1">HaNoi</option>
                                    <option value="2">ThaiBinh</option>
                                    <option value="3">DaNang</option>
                                    <option value="4">TP.HCM</option>
                                </select>
                            </div>
                        </div>
                         <div class="col-sm-3">
                            <div class="input-group">
                                <span class="input-group-addon" title="Level">Tuyến</span>
                                <select class="form-control">
                                    <option value="TU">Trung ương</option>
                                    <option value="TP">Tỉnh/thành phố</option>
                                    <option value="HUYEN">Quận/huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" placeholder="Nhập tên bệnh viện"> 
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>

                    <!--Table content-->
                    <table class="table table-bordered table-hover">
                        <thead class="bg-info">
                            <tr>
                                <th>#</th>
                                <th>Bệnh viện</th>
                                <th>Địa chỉ</th>
                                <th>Tuyến</th>
                                <th>Tỉnh/TP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bạch Mai</td>
                                <td>78 Giải Phóng, Hà Nội</td>
                                <td>Trung ương</td>
                                <td>Hà Nội</td>
                                <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Edit</a></td>
                            </tr>
                           <tr>
                                <td>2</td>
                                <td>Bạch Mai</td>
                                <td>78 Giải Phóng, Hà Nội</td>
                                <td>Trung ương</td>
                                <td>Hà Nội</td>
                                <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Edit</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Bạch Mai</td>
                                <td>78 Giải Phóng, Hà Nội</td>
                                <td>Trung ương</td>
                                <td>Hà Nội</td>
                                <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Edit</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Bạch Mai</td>
                                <td>78 Giải Phóng, Hà Nội</td>
                                <td>Trung ương</td>
                                <td>Hà Nội</td>
                                <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Edit</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Bạch Mai</td>
                                <td>78 Giải Phóng, Hà Nội</td>
                                <td>Trung ương</td>
                                <td>Hà Nội</td>
                                <td><a class="btn btn-default" href="/admin/hospitals/15/edit"><i class="fa fa-edit"></i>Edit</a></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-5">
                            Showing 1 to 10 of 57 entries
                        </div>
                        <div class="col-sm-7">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled"><a href="#">Previous</a></li>
                                <li class="paginate_button active"><a href="#">1</a></li>
                                <li class="paginate_button"><a href="#">2</a></li>
                                <li class="paginate_button"><a href="#">3</a></li>
                                <li class="paginate_button"><a href="#">4</a></li>
                                <li class="paginate_button"><a href="#">5</a></li>
                                <li class="paginate_button"><a href="#">6</a></li>
                                <li class="paginate_button"><a href="#">Next</a></li>
                            </ul> 
                        </div>
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
@endsection
