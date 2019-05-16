$(document).ready(function () {
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
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
});
