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
        .fa-star {
            color: #f4d742;
        }
    </style>
@endsection
@section('pagename')

    <div class="container-fluid">
        <section class="content">
            <div class="row" style="background-color: white">
                <div class="col-lg-12">
                    <h1 class="page-header">Tài khoản bác sỹ</h1>

                    <div class="body-box">
                    <!--Create , Edit -->
                    <div style="margin:10px 0px 10px 0px">
                        <a href="/admin/users/create" type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                        Tạo tài khoản mới
                        </a>   
                    </div>

                    <!--Show entries,search-->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group" style="width: 50%">
                                <span class="input-group-addon" title="Show">Hiển thị</span>
                                <select class="form-control">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                            </div>                  
                        </div>
                         <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" placeholder="Nhập tên người dùng..."> 
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
                    <div>
                        <table id="doctor_table" class="table table-bordered table-hover">
                            <thead class="bg-info">
                                <tr>
                                    <th>#</th>
                                    <th>Tên</th>
                                    <th>Bệnh viện</th>
                                    <th>Khoa</th>
                                    <th>Ngày sinh</th>
                                    <th>Tỉnh/TP</th>
                                    <th>Đánh giá</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nguyễn Văn A</td>
                                    <td>Bạch Mai</td>
                                    <td>Da liểu</td>
                                    <td>19-2-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">2</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Nguyễn Văn B</td>
                                    <td>Bạch Mai</td>
                                    <td>Hồi sức cấp cứu</td>
                                    <td>19-2-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Nguyễn Văn C</td>
                                    <td>Bạch Mai</td>
                                    <td>Da liễu</td>
                                    <td>19-2-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">4</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Nguyễn Văn D</td>
                                    <td>Bạch Mai</td>
                                    <td>Nội khoa</td>
                                    <td>19-2-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nguyễn Văn E</td>
                                    <td>Việt Đức</td>
                                    <td>Ngoại khoa</td>
                                    <td>19-2-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Nguyễn Văn F</td>
                                    <td>Việt Đức</td>
                                    <td>Nội khoa</td>
                                    <td>9-12-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Nguyễn Văn G</td>
                                    <td>Quân Đội</td>
                                    <td>Ngoại khoa</td>
                                    <td>19-2-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Nguyễn Văn H</td>
                                    <td>Xanh Pôn</td>
                                    <td>Thần kinh</td>
                                    <td>5-2-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Nguyễn Văn I</td>
                                    <td>Thanh Nhàn</td>
                                    <td>Ngoại khoa</td>
                                    <td>19-6-1997</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Nguyễn Văn K</td>
                                    <td>Bạch Mai</td>
                                    <td>Ngoại khao</td>
                                    <td>19-2-1987</td>
                                    <td>Hà Nội</td>
                                    <td><span style="display: none">3</span>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </td>
                                    <td><a class="btn btn-default" href="/admin/users/view_doctor"><i class="fa fa-edit"></i>Chỉnh sửa</a></td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            Hiển thị 1 to 10 of 57
                        </div>
                        <div class="col-sm-7">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled"><a href="#">Trước</a></li>
                                <li class="paginate_button active"><a href="#">1</a></li>
                                <li class="paginate_button"><a href="#">2</a></li>
                                <li class="paginate_button"><a href="#">3</a></li>
                                <li class="paginate_button"><a href="#">4</a></li>
                                <li class="paginate_button"><a href="#">5</a></li>
                                <li class="paginate_button"><a href="#">6</a></li>
                                <li class="paginate_button"><a href="#">Tiếp</a></li>
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
    <script>
        $(function () {
            $('#doctor_table').DataTable({
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": false,
                "bInfo": false,
                "bAutoWidth": false
            });
        })
    </script>
@endsection
