
$(document).ready(function() {

    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2019-03-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        locale: 'vi',
        events: [
            {
                title: 'Họp cả ngày',
                start: '2019-03-18'
            },
            {
                title: 'Đi công tác',
                start: '2019-03-07',
                end: '2019-03-10'
            },
            // {
            //     id: 999,
            //     title: 'Repeating Event',
            //     start: '2019-03-09T16:00:00'
            // },
            {
                title: 'Dự hội thảo',
                start: '2019-03-11',
                end: '2019-03-13'
            },
            {
                id: 1,
                title: 'ca khám',
                start: '2019-03-12T10:30:00',
            },
            {
                id: 2,
                title: 'ca khám',
                start: '2019-03-19T11:00:00',
            },
            {
                id: 3,
                title: 'ca khám',
                start: '2019-03-19T13:00:00',
            },
            {
                id: 4,
                title: 'ca khám',
                start: '2019-03-19T15:00:00',
            },
            {
                id: 5,
                title: 'ca khám',
                start: '2019-03-19T15:30:00',
            },
            {

                id: 6,
                title: 'ca khám',
                start: '2019-03-19T16:00:00',
            },
            {
                id: 7,
                title: 'ca khám',
                start: '2019-03-20T8:30:00',
            },
            {
                id: 8,
                title: 'ca khám',
                start: '2019-03-20T10:00:00',
            },
            {
                id: 9,
                title: 'ca khám',
                start: '2019-03-22T9:00:00',
            },
            {
                id: 10,
                title: 'ca khám',
                start: '2019-03-22T13:30:00',
            },
            {
                id: 11,
                title: 'ca khám',
                start: '2019-03-23T14:00:00',
            },
            {
                id: 12,
                title: 'ca khám',
                start: '2019-03-23T14:30:00',
            },
            {
                id: 13,
                title: 'ca khám',
                start: '2019-03-25T8:00:00',
            },
            {
                id: 14,
                title: 'ca khám',
                start: '2019-03-25T10:30:00',
            },
            {
                id: 15,
                title: 'ca khám',
                start: '2019-03-25T10:30:00',
            },
            {
                id: 16,
                title: 'ca khám',
                start: '2019-03-27T13:30:00',
            },
            {
                id: 17,
                title: 'ca khám',
                start: '2019-03-27T15:30:00',
            },
            {
                id: 18,
                title: 'ca khám',
                start: '2019-03-30T8:30:00',
            },
            {
                id: 19,
                title: 'ca khám',
                start: '2019-03-30T10:30:00',
            },
        ],
        eventClick: function(info) {
            $("#idhoso").html(info.id);
            $("#accept-remove").val(info.id);
            $("#detailModal").modal("show");
        }
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

});
