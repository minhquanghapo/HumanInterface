@extends('HospitalAdmin.template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Bác sĩ</p>
                        </div>

                        <a href="{{ url()->current() }}/doctors" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Nhân viên</p>
                        </div>

                        <a href="{{ url()->current() }}/staffs" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </section>
        <section class="content-header">


        </section>
        <section class="content">

            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <div class="box">
                            <div class="box-header with-border">
                                <h6 class="box-title"  style="font-size: 2.4286vw;">Binh luan xau</h6>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                                        <i class="fa fa-times"></i></button>
                                </div>
                            </div>



                                <div class="box box-widget">
                                    <div class="box-header with-border">
                                        <div class="user-block">
                                            <img class="img-circle" src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                                 alt="User Image">
                                            <span class="username"><a href="#">Đoàn Thi Kiều Thương</a></span>
                                            <span class="description">Shared publicly - 7:30 PM Today</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <div class="box-tools">
                                            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                                    data-original-title="Mark as read">
                                                <i class="fa fa-circle-o"></i></button>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                        class="fa fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                        class="fa fa-times"></i></button>
                                        </div>
                                        <!-- /.box-tools -->
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <!-- post text -->
                                        <p>Tôi　không
                                            hài lòng với dịch vụ, nhà vệ sinh của bệnh viện còn bẩn quá, mất vệ sinh. nơi
                                            đây là
                                            chỗ đi khám nên nhiều người nhiễm bệnh lây truyền . Tôi nghĩ cần phải
                                            tiến hành xây ở nơi tốt hơn.
                                        </p>
                                        <br>
                                        <p>
                                            Benh vien nen tham khao theo link o duoi day, xay dung rat de, gia ca phai chang
                                        </p>

                                        <!-- Attachment -->
                                        <div class="attachment-block clearfix">
                                            <img class="attachment-img"
                                                 src="{{URL::asset('/HI_06/images/nhavesinhsach.jpg')}}"
                                                 alt="Attachment Image">

                                            <div class="attachment-pushed">
                                                <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum
                                                        text
                                                        generator</a></h4>

                                                <div class="attachment-text">
                                                    cong ty hedspi cung cap dich vu xay dung nha ve sinh cho doanh nghiep
                                                    <a href="#">more</a>
                                                </div>
                                                <!-- /.attachment-text -->
                                            </div>
                                            <!-- /.attachment-pushed -->
                                        </div>
                                        <!-- /.attachment-block -->

                                        <!-- Social sharing buttons -->
                                        <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i>
                                            Share
                                        </button>
                                        <button type="button" class="btn btn-default btn-xs"><i
                                                    class="fa fa-thumbs-o-up"></i>
                                            Like
                                        </button>
                                        <span class="pull-right text-muted">45 likes - 2 comments</span>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer box-comments">
                                        <div class="box-comment">
                                            <!-- User image -->
                                            <img class="img-circle img-sm" src="{{URL::asset('/HI_06/images/bacsy3.jpg')}}"
                                                 alt="User Image">

                                            <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                                                It is a long established fact that a reader will be distracted
                                                by the readable content of a page when looking at its layout.
                                            </div>
                                            <!-- /.comment-text -->
                                        </div>
                                        <!-- /.box-comment -->
                                        <div class="box-comment">
                                            <!-- User image -->
                                            <img class="img-circle img-sm" src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                                 alt="User Image">

                                            <div class="comment-text">
                      <span class="username">
                        Nora Havisham
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                                                The point of using Lorem Ipsum is that it has a more-or-less
                                                normal distribution of letters, as opposed to using
                                                'Content here, content here', making it look like readable English.
                                            </div>
                                            <!-- /.comment-text -->
                                        </div>
                                        <!-- /.box-comment -->
                                    </div>
                                    <!-- /.box-footer -->
                                    <div class="box-footer">
                                        <form action="#" method="post">
                                            <img class="img-responsive img-circle img-sm"
                                                 src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                                 alt="Alt Text">
                                            <!-- .img-push is used to add margin to elements next to floating images -->
                                            <div class="img-push">
                                                <input type="text" class="form-control input-sm"
                                                       placeholder="Press enter to post comment">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.box-footer -->
                                </div>

                                <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="img-circle" src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                             alt="User Image">
                                        <span class="username"><a href="#">Đoàn Thi Kiều Thương</a></span>
                                        <span class="description">Shared publicly - 7:30 PM Today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                                data-original-title="Mark as read">
                                            <i class="fa fa-circle-o"></i></button>


                                        <button type="button" class="btn btn-box-tool" data-widget="bad"><i
                                                    class="fa fa-minus" style="color:red"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                    class="fa fa-times"></i></button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- post text -->
                                    <p>Tôi　không
                                        hài lòng với dịch vụ, nhà vệ sinh của bệnh viện còn bẩn quá, mất vệ sinh. nơi
                                        đây là
                                        chỗ đi khám nên nhiều người nhiễm bệnh lây truyền . Tôi nghĩ cần phải
                                        tiến hành xây ở nơi tốt hơn.
                                    </p>
                                    <br>
                                    <p>
                                        Benh vien nen tham khao theo link o duoi day, xay dung rat de, gia ca phai chang
                                    </p>

                                    <!-- Attachment -->

                                    <!-- /.attachment-block -->

                                    <!-- Social sharing buttons -->
                                    {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i>--}}
                                    {{--Share--}}
                                    {{--</button>--}}
                                    {{--<button type="button" class="btn btn-default btn-xs"><i--}}
                                    {{--class="fa fa-thumbs-o-up"></i>--}}
                                    {{--Like--}}
                                    {{--</button>--}}
                                    <span class="pull-right text-muted"> 2 comments</span>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer box-comments">

                                </div>
                                <!-- /.box-footer -->
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <img class="img-responsive img-circle img-sm"
                                             src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                             alt="Alt Text">
                                        <!-- .img-push is used to add margin to elements next to floating images -->
                                        <div class="img-push">
                                            <input type="text" class="form-control input-sm"
                                                   placeholder="Press enter to post comment">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-footer -->
                            </div>



                            <!-- /.box-footer-->
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-outline-primary btn-flat ">Xem thêm</button>
                            </div>
                            <br>
                        </div>
                        <section class="col-lg-12 newcomment">
                </section>

                    </div>

                    <div class="nav-tabs-custom">




                    </div>
                </section>

                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <div class="box">
                            <div class="box-header with-border">
                                <h6 class="box-title"  style="font-size: 2.4286vw;">Binh luan xau</h6>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
                                        <i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                                        <i class="fa fa-times"></i></button>
                                </div>
                            </div>



                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="img-circle" src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                             alt="User Image">
                                        <span class="username"><a href="#">Đoàn Thi Kiều Thương</a></span>
                                        <span class="description">Shared publicly - 7:30 PM Today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                                data-original-title="Mark as read">
                                            <i class="fa fa-circle-o"></i></button>
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                    class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                    class="fa fa-times"></i></button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- post text -->
                                    <p>Tôi　không
                                        hài lòng với dịch vụ, nhà vệ sinh của bệnh viện còn bẩn quá, mất vệ sinh. nơi
                                        đây là
                                        chỗ đi khám nên nhiều người nhiễm bệnh lây truyền . Tôi nghĩ cần phải
                                        tiến hành xây ở nơi tốt hơn.
                                    </p>
                                    <br>
                                    <p>
                                        Benh vien nen tham khao theo link o duoi day, xay dung rat de, gia ca phai chang
                                    </p>

                                    <!-- Attachment -->
                                    <div class="attachment-block clearfix">
                                        <img class="attachment-img"
                                             src="{{URL::asset('/HI_06/images/nhavesinhsach.jpg')}}"
                                             alt="Attachment Image">

                                        <div class="attachment-pushed">
                                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum
                                                    text
                                                    generator</a></h4>

                                            <div class="attachment-text">
                                                cong ty hedspi cung cap dich vu xay dung nha ve sinh cho doanh nghiep
                                                <a href="#">more</a>
                                            </div>
                                            <!-- /.attachment-text -->
                                        </div>
                                        <!-- /.attachment-pushed -->
                                    </div>
                                    <!-- /.attachment-block -->

                                    <!-- Social sharing buttons -->
                                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i>
                                        Share
                                    </button>
                                    <button type="button" class="btn btn-default btn-xs"><i
                                                class="fa fa-thumbs-o-up"></i>
                                        Like
                                    </button>
                                    <span class="pull-right text-muted">45 likes - 2 comments</span>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer box-comments">
                                    <div class="box-comment">
                                        <!-- User image -->
                                        <img class="img-circle img-sm" src="{{URL::asset('/HI_06/images/bacsy3.jpg')}}"
                                             alt="User Image">

                                        <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                                            It is a long established fact that a reader will be distracted
                                            by the readable content of a page when looking at its layout.
                                        </div>
                                        <!-- /.comment-text -->
                                    </div>
                                    <!-- /.box-comment -->
                                    <div class="box-comment">
                                        <!-- User image -->
                                        <img class="img-circle img-sm" src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                             alt="User Image">

                                        <div class="comment-text">
                      <span class="username">
                        Nora Havisham
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                                            The point of using Lorem Ipsum is that it has a more-or-less
                                            normal distribution of letters, as opposed to using
                                            'Content here, content here', making it look like readable English.
                                        </div>
                                        <!-- /.comment-text -->
                                    </div>
                                    <!-- /.box-comment -->
                                </div>
                                <!-- /.box-footer -->
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <img class="img-responsive img-circle img-sm"
                                             src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                             alt="Alt Text">
                                        <!-- .img-push is used to add margin to elements next to floating images -->
                                        <div class="img-push">
                                            <input type="text" class="form-control input-sm"
                                                   placeholder="Press enter to post comment">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-footer -->
                            </div>

                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <img class="img-circle" src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                             alt="User Image">
                                        <span class="username"><a href="#">Đoàn Thi Kiều Thương</a></span>
                                        <span class="description">Shared publicly - 7:30 PM Today</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                                data-original-title="Mark as read">
                                            <i class="fa fa-circle-o"></i></button>


                                        <button type="button" class="btn btn-box-tool" data-widget="bad"><i
                                                    class="fa fa-minus" style="color:red"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                    class="fa fa-times"></i></button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <!-- post text -->
                                    <p>Tôi　không
                                        hài lòng với dịch vụ, nhà vệ sinh của bệnh viện còn bẩn quá, mất vệ sinh. nơi
                                        đây là
                                        chỗ đi khám nên nhiều người nhiễm bệnh lây truyền . Tôi nghĩ cần phải
                                        tiến hành xây ở nơi tốt hơn.
                                    </p>
                                    <br>
                                    <p>
                                        Benh vien nen tham khao theo link o duoi day, xay dung rat de, gia ca phai chang
                                    </p>

                                    <!-- Attachment -->

                                    <!-- /.attachment-block -->

                                    <!-- Social sharing buttons -->
                                    {{--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i>--}}
                                    {{--Share--}}
                                    {{--</button>--}}
                                    {{--<button type="button" class="btn btn-default btn-xs"><i--}}
                                    {{--class="fa fa-thumbs-o-up"></i>--}}
                                    {{--Like--}}
                                    {{--</button>--}}
                                    <span class="pull-right text-muted"> 2 comments</span>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer box-comments">

                                </div>
                                <!-- /.box-footer -->
                                <div class="box-footer">
                                    <form action="#" method="post">
                                        <img class="img-responsive img-circle img-sm"
                                             src="{{URL::asset('/HI_06/images/bacsy2.jpg')}}"
                                             alt="Alt Text">
                                        <!-- .img-push is used to add margin to elements next to floating images -->
                                        <div class="img-push">
                                            <input type="text" class="form-control input-sm"
                                                   placeholder="Press enter to post comment">
                                        </div>
                                    </form>
                                </div>
                                <!-- /.box-footer -->
                            </div>



                            <!-- /.box-footer-->
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-outline-primary btn-flat ">Xem thêm</button>
                            </div>
                            <br>
                        </div>
                        <section class="col-lg-12 newcomment">
                        </section>

                    </div>

                    <div class="nav-tabs-custom">




                    </div>
                </section>
            </div>
        </section>
    </div>
@endsection