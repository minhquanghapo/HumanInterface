$(document).ready(function () {
    $('#date_picker').datepicker({
        autoclose: true,
        language: "vi",
        todayHighlight: true,
        todayBtn: "linked",
    });
    $('#date_picker').datepicker('setDate', 'today');
    // $('#historyTable').DataTable();
    $('#historyTable').DataTable( {
        "language": {
            "lengthMenu": "Hiển thị _MENU_ bản ghi",
            "zeroRecords": "Không thể tìm kiếm - xin lỗi",
            "info": "Hiển thị trang _PAGE_ / _PAGES_",
            "infoEmpty": "Không có bản ghi nào",
            "infoFiltered": "(Đã tìm kiếm từ _MAX_ bản ghi)",
            "oPaginate": {
                "sPrevious": "Trước",
                "sNext":     "Tiếp",
            },
            "sSearch":       "Tìm kiếm:",
        }
    } );

    $("#history_nav").addClass('active');
    $("#schedule_nav").removeClass('active');
});
