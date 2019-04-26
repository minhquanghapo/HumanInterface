
$(document).ready(function() {

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listWeek'
        },
        navLinks: true, // can click day/week names to navigate views
        eventLimit: true, // allow "more" link when too many events
        locale: 'vi',
        events: [
            {
                id: 1,
                title: 'ca khám',
                start: '2019-04-12T10:30:00',
                
            },
            {
                id: 2,
                title: 'ca khám',
                start: '2019-04-19T11:00:00',
                
            },
            {
                id: 3,
                title: 'ca khám',
                start: '2019-04-19T13:00:00',
                
            },
            {
                id: 4,
                title: 'ca khám',
                start: '2019-04-19T15:00:00',
                
            },
            {
                id: 5,
                title: 'ca khám',
                start: '2019-04-19T15:30:00',
                
            },
            {

                id: 6,
                title: 'ca khám',
                start: '2019-04-19T16:00:00',
                
            },
            {
                id: 7,
                title: 'ca khám',
                start: '2019-04-20T8:30:00',
                
            },
            {
                id: 8,
                title: 'ca khám',
                start: '2019-04-20T10:00:00',
                
            },
            {
                id: 9,
                title: 'ca khám',
                start: '2019-04-22T9:00:00',
                
            },
            {
                id: 10,
                title: 'ca khám',
                start: '2019-04-22T13:30:00',
                
            },
            {
                id: 11,
                title: 'ca khám',
                start: '2019-04-24T14:00:00',
                
            },
            {
                id: 12,
                title: 'ca khám',
                start: '2019-04-24T14:30:00',
                
            },
            {
                id: 13,
                title: 'ca khám',
                start: '2019-04-25T8:00:00',
                
            },
            {
                id: 14,
                title: 'ca khám',
                start: '2019-04-25T10:30:00',
                
            },
            {
                id: 15,
                title: 'ca khám',
                start: '2019-04-26T15:51:00',
                
            },
            {
                id: 16,
                title: 'ca khám',
                start: '2019-04-27T13:30:00',
                
            },
            {
                id: 20,
                title: 'ca khám',
                start: '2019-04-26T9:20:00',

            },
            {
                id: 21,
                title: 'ca khám',
                start: '2019-04-26T9:40:00',

            },
            {
                id: 22,
                title: 'ca khám',
                start: '2019-04-26T10:00:00',

            },
            {
                id: 17,
                title: 'ca khám',
                start: '2019-04-27T15:30:00',
                
            },
            {
                id: 18,
                title: 'ca khám',
                start: '2019-04-30T8:30:00',
                
            },
            {
                id: 19,
                title: 'ca khám',
                start: '2019-04-30T10:30:00',
                
            },
        ],
        eventClick: function(info) {
            $("#idhoso").html(info.id);
            $("#start-examination").val(info.id);
            $("#accept-remove").val(info.id);
            $("#detailModal").modal("show");
        },

    });

    $current = moment($('#calendar').fullCalendar('getDate'));
    $list_event = $("#calendar").fullCalendar('clientEvents');
    for($i=0;$i<$list_event.length;$i++){
        $event = $list_event[$i];
        if(($current - $event.start) > 600000){
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
        $date = moment($("#calendar").fullCalendar('clientEvents', $id)[0].start);
        // window.location = "/doctor/examination";
        if(Math.abs($current - $date) <= 600000){
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

    $("#update-info").on("click",function () {
        $("#infoModal").modal("hide");
        toastr["success"]("Cập nhật thành công!");
    });

    $("#update-password").on("click",function () {
        $("#infoModal").modal("hide");
        $("#passModal").modal("show");
    });

    $("#accept-pass").on("click",function () {
        $("#passModal").modal("hide");
        toastr["success"]("Cập nhật mật khẩu thành công!");
    });

    $("#calendar").on("mouseover",".fc-event",function () {
        $color = $(this).css("background");
        $(this).css("background"," #e83e8c");
        $(this).on("mouseout",function () {
            $(this).css("background",$color);
        });
    });



});
