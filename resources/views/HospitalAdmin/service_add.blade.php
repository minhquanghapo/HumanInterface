@extends('HospitalAdmin.layouts.master')
@section('customcss')
<link rel="stylesheet" href="/adminlte/css/toggle-switch.css" />
<link rel="stylesheet" href="/adminlte/css/startmin.css" />
@endsection
@section('pagename')
<div class="container-fluid">
    <section class="content-header">
        <ol class="breadcrumb" style="float: left; left : 0px; top : 0px;">
            <li><a href="/admin_hospital"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/admin_hospital/medicines">Medicines</a></li>
            <li class="active"> Add</li>
        </ol>
    </section>
    <section class="content row">
        <div class="col-sm-8">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="box-title">Add Medicine</h3>
                        </div>
                    </div>
                </div>
                <div class="box-body" id="doctor">
                        
                    <!-- Body -->
                    <form role="form" class="form-horizontal">
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tên thuốc</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Paraceltamol">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Mã Vạch</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="123456789">
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Danh mục</label>
                            <div class="col-sm-10">
                                    <select class="form-control">
                                            <option value="">--Please choose an option--</option>
                                            <option >Thuốc giảm đau</option>
                                            <option >Thuốc da liễu</option>
                                            <option >Thuốc tim mạch</option>
                                            <option >Thực phẩm chức năng</option>
                                            <option >Chế phẩm cho mắt</option>
                                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label">Xuất Xứ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Công ty dược Hà Nội">
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Số lượng</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="2500">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Số lượng còn lại</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" placeholder="500">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Ngày hết hạn</label>
                            <div class="col-sm-10">
                                    <input type="month" class="form-control" placeholder="31-3-2020">
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="box box-primary">
                <!-- Header -->
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="box-title">Upload Medicine Image</h3>
                        </div>
                    </div>
                </div>
                <div class="box-body" id="doctor">
                    <form id="form1" runat="server">
                        <input type='file' id="imgInp" />
                        <img id="blah" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQg7FtCSu3uWN9E9gvZrtQ-h36tY0gv55Scm5kfEw_4_tKl-ftz" alt="your image" style="width: 128px;height: 128px"/>
                    </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }
  
      reader.readAsDataURL(input.files[0]);
    }
  }
  
  $("#imgInp").change(function() {
    readURL(this);
  });
</script>
@endsection