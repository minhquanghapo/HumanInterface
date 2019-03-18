@extends('admin.layouts.master')
@section('customcss')
    <link rel="stylesheet" href="/adminlte/css/toggle-switch.css"/>
    <link rel="stylesheet" href="/adminlte/css/startmin.css"/>
    <style >
        .row{
            font-size: medium;
        }
    </style>
@endsection
@section('pagename')
    <div class="container-fluid">
        <div class="row" style="background-color: white">
            <div class="col-lg-12">
                <h1 class="page-header">Hospitals manager</h1>

                <div class="body-box">
                    
                <!--Create , Edit -->
                <div style="margin:10px 0px 10px 0px">
                    <a href="#" type="button" class="btn btn-default">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                     Create hospitals page
                    </a>
                    <a href="#" type="button" class="btn btn-info">
                    <span class="glyphicon glyphicon-pencil"></span>
                     Edit hospitals page
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
                            <span class="input-group-addon" title="City">City</span>
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
                            <span class="input-group-addon" title="Level">Level</span>
                            <select class="form-control">
                                <option value="TU">TrungUong</option>
                                <option value="TP">ThanhPho</option>
                                <option value="HUYEN">Huyen</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q" placeholder="Search ..."> 
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
                            <th>Customer</th>
                            <th>Location</th>
                            <th style="width: 15%">Order date</th>
                            <th>Status</th>
                            <th>Net Amount</th>
                            <th style="width: 10%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img style="width: 10%" class="img-circle" src="/adminlte/images/user2-160x160.jpg">NguyenVanA</td>
                            <td>Internet
                            </td>
                            <td>Jun 18,2019</td>
                            <td><img style="width: 8px" src="/adminlte/images/green_dot.png"> Delivered</td>
                            <td>250$</td>
                            <td><img style="width: 20%" src="/adminlte/images/next_action.png"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img style="width: 10%" class="img-circle" src="/adminlte/images/user2-160x160.jpg">NguyenVanB</td>
                            <td>Internet
                            </td>
                            <td>Jun 18,2019</td>
                            <td><img style="width: 8px" src="/adminlte/images/blue_dot.png"> Cancelled</td>
                            <td>130$</td>
                            <td><img style="width: 20%" src="/adminlte/images/next_action.png"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img style="width: 10%" class="img-circle" src="/adminlte/images/user2-160x160.jpg">NguyenVanB</td>
                            <td>Internet
                            </td>
                            <td>Jun 18,2019</td>
                            <td><img style="width: 8px" src="/adminlte/images/red_dot.png"> Cancelled</td>
                            <td>290$</td>
                            <td><img style="width: 20%" src="/adminlte/images/next_action.png"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img style="width: 10%" class="img-circle" src="/adminlte/images/user2-160x160.jpg">NguyenVanB</td>
                            <td>Internet
                            </td>
                            <td>Jun 18,2019</td>
                            <td><img style="width: 8px" src="/adminlte/images/yellow_dot.png"> Pending</td>
                            <td>800$</td>
                            <td><img style="width: 20%" src="/adminlte/images/next_action.png"></td>
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
