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
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua">
                            <i class="fa fa-hospital-o"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Hospital
                            </span>
                            <span class="info-box-number">
                                120
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow">
                            <i class="fa fa-user"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">
                                Users
                            </span>
                            <span class="info-box-number">
                                200,000
                            </span>
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
