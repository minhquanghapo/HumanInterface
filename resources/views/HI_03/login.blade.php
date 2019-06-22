@extends('HI_03.layouts.base_login')

@section('header')
    <!-- HI02 -->
<style type="text/css">
    .badge {
            position: absolute;
            top: -15px;
            right: -10px;
            padding: 4px 6px;
            border-radius: 50%;
            background-color: red;
            color: white;
        }
</style>
<!-- HI02 -->

<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo_home">
                    <h1><a href="{{ url('/') }}" title="Findoctor">Findoctor</a></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</header>

@endsection

@section('content')
<main>
    <div class="container margin_30" style="padding-top: 80px">
        <div class="main_title">
            <h3>Chọn vai trò đăng nhập hệ thống</h3>
        </div>
    </div>
    <div class="container margin_30">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('home') }}" target="_blank" class="box_role_home">
                    <i class="icon-info-4"></i>
                    <img src="{{ asset('HI_03/img/patient.svg') }}" width="180" height="180" alt="">
                    <h3>Bệnh nhân</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('doctor') }}" target="_blank" class="box_role_home">
                    <i class="icon-info-4"></i>
                    <img src="{{ asset('HI_03/img/doctor.svg') }}" width="180" height="180" alt="">
                    <h3>Bác sĩ</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('admin_hospital') }}" target="_blank" class="box_role_home">
                    <i class="icon-info-4"></i>
                    <img src="{{ asset('HI_03/img/pharmacy.svg') }}" width="180" height="180" alt="">
                    <h3>Quản lý bệnh viện</h3>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="{{ url('admin') }}" target="_blank" class="box_role_home">
                    <i class="icon-info-4"></i>
                    <img src="{{ asset('HI_03/img/admin.svg') }}" width="180" height="180" alt="">
                    <h3>Quản trị hệ thống</h3>
                </a>
            </div>
        </div>
        <!-- /row -->
    </div>
</main>
@endsection
