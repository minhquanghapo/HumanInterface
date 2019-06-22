
$(document).ready(function() {
    $("#schedule_nav").addClass('active');
    $("#history_nav").removeClass('active');
    $('#calendar_picker').datepicker({
        language: "vi",
        todayHighlight: true,
        format: "yyyy-mm-dd",
        todayBtn: "linked",
    });
    $('#calendar_picker').datepicker('setDate', new Date());
    $picked_date = $('#calendar_picker').datepicker('getDate');

    $('#calendar_picker').datepicker().on('changeDate', function (e) {
        $picked_date = e.date;
        $('#calendar').fullCalendar('gotoDate', $picked_date);
        $('#calendar').fullCalendar('changeView', 'listDay');
    });

    $('#calendar').fullCalendar({
        header: {
            left: '',
            center: 'title',
            right: 'listDay,month'
        },
        defaultView: 'listDay',
        defaultDate: $picked_date,
        navLinks: true, // can click day/week names to navigate views
        eventLimit: true, // allow "more" link when too many events
        locale: 'vi',
        events: [
            {
                id: 65,
                title: 'ca khám bệnh nhân Nguyễn Văn A',
                start: '2019-06-22T10:30:00',

            },
            {
                id: 66,
                title: 'ca khám bệnh nhân Nguyễn Văn L',
                start: '2019-06-22T11:00:00',

            },
            {
                id: 67,
                title: 'ca khám bệnh nhân Nguyễn Thị C',
                start: '2019-06-22T08:00:00',

            },
            {
                id: 68,
                title: 'ca khám bệnh nhân Lê Văn Hậu',
                start: '2019-06-22T09:00:00',

            },
            {
                id: 69,
                title: 'ca khám bệnh nhân Nguyễn Minh Quang',
                start: '2019-06-22T09:30:00',
            },
            {
                id: 70,
                title: 'ca khám bệnh nhân Nguyễn Văn X',
                start: '2019-06-22T13:00:00'

            },
            {
                id: 71,
                title: 'ca khám bệnh nhân Trần Thị Nụ',
                start: '2019-06-22T15:00:00',

            },
            {
                id: 72,
                title: 'ca khám bệnh nhân Nguyễn Đình Hưng ',
                start: '2019-06-22T15:30:00',

            },
            {
                id: 73,
                title: 'ca khám bệnh nhân Trần Thị Sen',
                start: '2019-06-22T16:00:00',

            },
            {
                id: 1,
                title: 'ca khám bệnh nhân Nguyễn Văn A',
                start: '2019-06-21T10:30:00',
                
            },
            {
                id: 2,
                title: 'ca khám bệnh nhân Nguyễn Văn B',
                start: '2019-06-23T11:00:00',

            },
            {
                id: 3,
                title: 'ca khám bệnh nhân Nguyễn Thị C',
                start: '2019-06-23T08:00:00',

            },
            {
                id: 4,
                title: 'ca khám bệnh nhân Lê Văn Hậu',
                start: '2019-06-23T09:00:00',

            },
            {
                id: 5,
                title: 'ca khám bệnh nhân Nguyễn Minh Quang',
                start: '2019-06-23T09:30:00',
            },
            {
                id: 6,
                title: 'ca khám bệnh nhân Nguyễn Văn C',
                start: '2019-06-23T13:00:00',

            },
            {
                id: 7,
                title: 'ca khám bệnh nhân Trần Thị Nụ',
                start: '2019-06-23T15:00:00',

            },
            {
                id: 8,
                title: 'ca khám bệnh nhân Nguyễn Đình Hưng ',
                start: '2019-06-23T15:30:00',

            },
            {

                id: 9,
                title: 'ca khám bệnh nhân Trần Thị Sen',
                start: '2019-06-23T16:00:00',

            },
            {
                id: 74,
                title: 'ca khám bệnh nhân Nguyễn Văn A',
                start: '2019-06-23T07:30:00',

            },
            {
                id: 75,
                title: 'ca khám bệnh nhân Nguyễn Văn L',
                start: '2019-06-23T08:30:00',

            },
            {
                id: 76,
                title: 'ca khám bệnh nhân Nguyễn Thị C',
                start: '2019-06-23T10:00:00',

            },
            {
                id: 77,
                title: 'ca khám bệnh nhân Lê Văn Hậu',
                start: '2019-06-23T11:30:00',

            },
            {
                id: 78,
                title: 'ca khám bệnh nhân Nguyễn Minh Quang',
                start: '2019-06-23T12:00:00',
            },
            {
                id: 79,
                title: 'ca khám bệnh nhân Nguyễn Văn X',
                start: '2019-06-23T12:30:00'

            },
            {
                id: 80,
                title: 'ca khám bệnh nhân Trần Thị Nụ',
                start: '2019-06-23T14:00:00',

            },
            {
                id: 81,
                title: 'ca khám bệnh nhân Nguyễn Đình Hưng ',
                start: '2019-06-23T14:30:00',

            },
            {
                id: 82,
                title: 'ca khám bệnh nhân Trần Thị Sen',
                start: '2019-06-23T10:30:00',

            },
            {
                id: 10,
                title: 'ca khám',
                start: '2019-06-20T08:30:00',
            },
            {
                id: 11,
                title: 'ca khám',
                start: '2019-06-20T10:00:00',

            },
            {
                id: 12,
                title: 'ca khám bệnh nhân Nguyễn Văn A',
                start: '2019-06-24T09:00:00',

            },
            {
                id: 13,
                title: 'ca khám bệnh nhân Nguyễn Văn B',
                start: '2019-06-22T13:30:00',

            },
            {
                id: 14,
                title: 'ca khám',
                start: '2019-06-24T14:00:00',

            },
            {
                id: 15,
                title: 'ca khám',
                start: '2019-06-24T14:30:00',

            },
            {
                id: 16,
                title: 'ca khám',
                start: '2019-06-25T08:00:00',
            },
            {
                id: 17,
                title: 'ca khám',
                start: '2019-06-25T10:30:00',

            },
            {
                id: 18,
                title: 'ca khám',
                start: '2019-06-26T15:51:00',

            },
            {
                id: 19,
                title: 'ca khám',
                start: '2019-06-27T13:30:00',

            },
            {
                id: 20,
                title: 'ca khám',
                start: '2019-06-26T10:00:00',

            },
            {
                id: 21,
                title: 'ca khám',
                start: '2019-06-26T10:30:00',

            },
            {
                id: 22,
                title: 'ca khám',
                start: '2019-06-27T15:30:00',

            },
            {
                id: 23,
                title: 'ca khám bệnh nhân Trần Minh Hậu',
                start: '2019-06-30T08:30:00',
            },
            {
                id: 24,
                title: 'ca khám bệnh nhân Vũ Hồng Quang',
                start: '2019-06-30T10:30:00',

            },
            {
                id: 25,
                title: 'ca khám',
                start: '2019-06-16T08:00:00',

            },
            {
                id: 26,
                title: 'ca khám',
                start: '2019-06-16T08:30:00',

            },
            {
                id: 27,
                title: 'ca khám',
                start: '2019-06-16T09:30:00',

            },
            {
                id: 28,
                title: 'ca khám',
                start: '2019-06-16T10:30:00',

            },
            {
                id: 29,
                title: 'ca khám',
                start: '2019-06-17T08:00:00',

            },
            {
                id: 30,
                title: 'ca khám',
                start: '2019-06-17T08:30:00',

            },
            {
                id: 31,
                title: 'ca khám',
                start: '2019-06-17T09:30:00',

            },
            {
                id: 32,
                title: 'ca khám',
                start: '2019-06-17T10:30:00',

            },
            {
                id: 33,
                title: 'ca khám',
                start: '2019-06-17T09:00:00',

            },
            {
                id: 34,
                title: 'ca khám',
                start: '2019-06-17T10:00:00',

            },
            {
                id: 35,
                title: 'ca khám',
                start: '2019-06-18T08:30:00',

            },
            {
                id: 36,
                title: 'ca khám',
                start: '2019-06-18T08:30:00',

            },
            {
                id: 37,
                title: 'ca khám',
                start: '2019-06-18T09:30:00',

            },
            {
                id: 38,
                title: 'ca khám',
                start: '2019-06-18T10:30:00',

            },
            {
                id: 39,
                title: 'ca khám',
                start: '2019-06-18T11:30:00',

            },
            {
                id: 40,
                title: 'ca khám',
                start: '2019-06-18T12:30:00',

            },
            {
                id: 41,
                title: 'ca khám',
                start: '2019-06-19T10:30:00',

            },
            {
                id: 42,
                title: 'ca khám',
                start: '2019-06-19T11:30:00',

            },
            {
                id: 43,
                title: 'ca khám',
                start: '2019-06-19T12:00:00',

            },
            {
                id: 44,
                title: 'ca khám',
                start: '2019-06-19T12:30:00',

            },
            {
                id: 45,
                title: 'ca khám',
                start: '2019-06-19T13:30:00',

            },
            {
                id: 46,
                title: 'ca khám',
                start: '2019-06-19T14:00:00',

            },
            {
                id: 47,
                title: 'ca khám',
                start: '2019-06-15T07:00:00',

            },
            {
                id: 48,
                title: 'ca khám',
                start: '2019-06-15T07:30:00',

            },
            {
                id: 49,
                title: 'ca khám',
                start: '2019-06-15T08:30:00',

            },
            {
                id: 50,
                title: 'ca khám',
                start: '2019-06-15T09:30:00',

            },
            {
                id: 51,
                title: 'ca khám',
                start: '2019-06-15T10:30:00',

            },
            {
                id: 52,
                title: 'ca khám bệnh nhân Nguyễn Văn A',
                start: '2019-06-12T10:30:00',

            },
            {
                id: 53,
                title: 'ca khám bệnh nhân Nguyễn Văn B',
                start: '2019-06-05T11:00:00',

            },
            {
                id: 54,
                title: 'ca khám bệnh nhân Nguyễn Thị C',
                start: '2019-06-05T08:00:00',

            },
            {
                id:55,
                title: 'ca khám bệnh nhân Lê Văn Hậu',
                start: '2019-06-05T09:00:00',

            },
            {
                id: 56,
                title: 'ca khám bệnh nhân Nguyễn Minh Quang',
                start: '2019-06-05T09:30:00',
            },
            {
                id: 57,
                title: 'ca khám bệnh nhân Nguyễn Văn B',
                start: '2019-06-05T13:00:00',

            },
            {
                id: 58,
                title: 'ca khám bệnh nhân Trần Thị Nụ',
                start: '2019-06-05T15:00:00',

            },
            {
                id: 59,
                title: 'ca khám bệnh nhân Nguyễn Đình Hưng ',
                start: '2019-06-05T15:30:00',

            },
            {
                id: 60,
                title: 'ca khám bệnh nhân Trần Thị Sen',
                start: '2019-06-05T16:00:00',

            },

            {
                id: 61,
                title: 'ca khám bệnh nhân Nguyễn Văn B',
                start: '2019-06-03T13:00:00',

            },
            {
                id: 62,
                title: 'ca khám bệnh nhân Trần Thị Nụ',
                start: '2019-06-03T15:00:00',

            },
            {
                id: 63,
                title: 'ca khám bệnh nhân Nguyễn Đình Hưng ',
                start: '2019-06-03T15:30:00',

            },
            {
                id: 64,
                title: 'ca khám bệnh nhân Trần Thị Sen',
                start: '2019-06-03T16:00:00',

            },
        ],
        eventClick: function(info) {
            $("#idhoso").html(info.id);
            $("#start-examination").val(info.id);
            $("#accept-remove").val(info.id);
            $("#detailModal").modal("show");
        },
        viewRender: function () {
            if($('#calendar').fullCalendar('getView').name == 'listDay'){
                $picked_date=$('#calendar').fullCalendar('getView').start.format("YYYY-MM-DD");
                $current_date = $picked_date;
                $('#calendar_picker').datepicker('setDate', $picked_date);
                $list_event = $("#calendar").fullCalendar('clientEvents');
                $count = 0;
                for($i=0;$i<$list_event.length;$i++){
                    $event = $list_event[$i];
                    if(($current_date == $event.start.format("YYYY-MM-DD"))){
                        $count +=1;
                    }
                };
                $("#count_examination").html($count);
            }
        },
        dayClick: function (date) {
            $picked_date = date.format();
            $('#calendar_picker').datepicker('setDate', $picked_date);
        }

    });

    // $current = moment($('#calendar').fullCalendar('getDate'));
    $current = (new Date($.now())).getTime();
    $list_event = $("#calendar").fullCalendar('clientEvents');
    for($i=0;$i<$list_event.length;$i++){
        $event = $list_event[$i];
        if(($current - (new Date((moment($event.start).format()))).getTime()) > 3600000){
            $event.color = "#6c757d";
            $('#calendar').fullCalendar('updateEvent', $event);
        }
    };

    $list_event_html = $(".fc-event");
    $list_event_html.each(function () {
       $(this).css("cursor","pointer");
    });


    // $("#calendar").on("click",".fc-content",function () {
    //
    //    $("#detailModal").modal("show");
    // });
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');

        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });

    $('ul.setup-panel li.active a').trigger('click');

    $("#start-examination").on("click",function () {
        $id = $(this).val();
        $date = moment($("#calendar").fullCalendar('clientEvents', $id)[0].start).format();
        $e_time = (new Date($date)).getTime();
        if(Math.abs($current - $e_time) <= 3600000){
            window.location = "/doctor/examination";
        }
        else{
            toastr["error"]("Hiện tại chưa thể bắt đầu ca khám! Xin quay lại sau!");
        }

    });

    $("#remove-examination").on("click",function () {
        $("#detailModal").modal("hide");
        $("#removeModal").modal("show");
    });

    // Nhóm 2
    $("#remove-urgent").on("click",function () {
        $("#urgentModal").modal("hide");
        $("#denyModal").modal("show");
    });

    $("#backto-urgent").on("click",function () {
    $("#urgentdetailModal").modal("hide");
    $("#urgentModal").modal("show");
    });

        $('#urgent-calendar').fullCalendar({
        defaultView: 'listDay',
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'listDay,month'
        },
        navLinks: true, // can click day/week names to navigate views
        eventLimit: true, // allow "more" link when too many events
        locale: 'vi',
        events: [
            {
                id: 1,
                title: 'ca khám',
                start: '`-12T10:30:00',

            },
            {
                id: 2,
                title: 'ca khám',
                start: '2019-05-05T11:00:00',

            },
            {
                id: 3,
                title: 'ca khám',
                start: '2019-05-05T08:00:00',

            },
            {
                id: 4,
                title: 'ca khám',
                start: '2019-05-03T09:00:00',

            },
            {
                id: 5,
                title: 'ca khám',
                start: '2019-05-03T09:30:00',
            },
            {
                id: 6,
                title: 'ca khám',
                start: '2019-05-03T13:00:00',

            },
            {
                id: 7,
                title: 'ca khám',
                start: '2019-05-03T15:00:00',

            },
            {
                id: 8,
                title: 'ca khám',
                start: '2019-05-03T15:30:00',

            },
            {

                id: 9,
                title: 'ca khám',
                start: '2019-05-03T16:00:00',
                
            },
            {
                id: 10,
                title: 'Vũ Văn A, Nam - 30, Chán ăn, không thấy đói, ...',
                start: '2019-05-17T08:30:00',
            },
            {
                id: 11,
                title: 'Vũ Văn A, Nam - 30, Chán ăn, không thấy đói, ...',
                start: '2019-05-17T09:00:00',
                
            },
            {
                id: 12,
                title: 'ca khám',
                start: '2019-05-22T09:00:00',
                
            },
            {
                id: 13,
                title: 'ca khám',
                start: '2019-05-22T13:30:00',
                
            },
            {
                id: 14,
                title: 'ca khám',
                start: '2019-05-24T14:00:00',
                
            },
            {
                id: 15,
                title: 'ca khám',
                start: '2019-05-24T14:30:00',
                
            },
            {
                id: 16,
                title: 'ca khám',
                start: '2019-05-25T08:00:00',
            },
            {
                id: 17,
                title: 'ca khám',
                start: '2019-05-25T10:30:00',
                
            },
            {
                id: 18,
                title: 'ca khám',
                start: '2019-05-26T15:51:00',
                
            },
            {
                id: 19,
                title: 'ca khám',
                start: '2019-05-27T13:30:00',
                
            },
            {
                id: 20,
                title: 'ca khám',
                start: '2019-05-26T10:00:00',

            },
            {
                id: 21,
                title: 'ca khám',
                start: '2019-05-26T10:30:00',

            },
            {
                id: 22,
                title: 'ca khám',
                start: '2019-05-27T15:30:00',
                
            },
            {
                id: 23,
                title: 'ca khám',
                start: '2019-05-30T08:30:00',
            },
            {
                id: 24,
                title: 'ca khám',
                start: '2019-05-30T10:30:00',
                
            },
        ],
    });

    $("#deny-urgent").on("click",function () {
        console.log($(this).val());
        var del_val = $(this).val();
        Swal.fire({
            title: 'Xác nhận ?',
            text: "Bạn sẽ không thể nhận lại lịch khám khẩn cấp đã từ chối",
            type: 'warning',
            width: '30%',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Vâng, tôi muốn từ chối!',
            cancelButtonText: 'Không!',
        }).then((result) => {
            if (result.value) {
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // );
                $("#calendar").fullCalendar('removeEvents', del_val);
                toastr["success"]("Từ chối thành công!");
            }
            else{
                toastr["error"]("từ chối không không thành công!");
            }
            $("#removeModal").modal("hide");
        })
    });
    // end Nhóm 2

    $("#accept-remove").on("click",function () {
        console.log($(this).val());
        var del_val = $(this).val();
        Swal.fire({
            title: 'Xác nhận ?',
            text: "Bạn sẽ không thể khôi phục lại lịch khám này!",
            type: 'warning',
            width: '30%',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Vâng, tôi muốn xoá!',
            cancelButtonText: 'Không!',
        }).then((result) => {
            if (result.value) {
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // );
                $("#calendar").fullCalendar('removeEvents', del_val);
                toastr["success"]("Huỷ thành công ca khám!");
            }
            else{
                toastr["error"]("Huỷ không thành công!");
            }
            $("#removeModal").modal("hide");
        })
    });



    $("#calendar").on("mouseover",".fc-event",function () {
        $color = $(this).css("background");
        $(this).css("background"," #e83e8c");
        $(this).on("mouseout",function () {
            $(this).css("background",$color);
        });
    });

});