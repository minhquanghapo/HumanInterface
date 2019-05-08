$(document).ready(function() {
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
        if(!$item.hasClass('disabled')){
            var tmp = $item.attr('id');
            if(tmp!=null){
                $current_step = tmp.substring(2,3);
                for($i=1;$i<=4;$i++){
                    $id_st = "st"+$i;
                    if($("#"+$id_st).hasClass("passed")){
                        $("#"+$id_st).removeClass("passed");
                    }
                }
                for($i=1;$i<=$current_step;$i++){
                    $id_st = "st"+$i;
                    $("#"+$id_st).addClass("passed");
                }
            }
        }
    });

    $(".pagination-btn button").on("click",function () {
       if(!$(this).hasClass("disabled")){
           var current_id = $(".process-nav li.active").attr('id');
           var temp = parseInt(current_id.split('st')[1]);
           if(temp == 2 || temp == 3){
               // console.log($("ul.setup-panel li#st"+(temp+1)));
               $("ul.setup-panel li#st"+(temp+1)).removeClass('disabled');
           }
           if($(this).hasClass("next")){
               $("ul.setup-panel li#st"+(temp+1)+" a").trigger('click');
               if(temp ==  1){
                   $(".pagination-btn button.prev").removeClass("disabled");
               }
               else if(temp == 3){
                   $(this).addClass("disabled");
               }
           }
           else{
               $("ul.setup-panel li#st"+(temp-1)+" a").trigger('click');
               if(temp ==  4){
                   $(".pagination-btn button.next").removeClass("disabled");
               }
               else if(temp == 2){
                   $(this).addClass("disabled");
               }
           }


       }
    });

    $("#st1 a").trigger('click');
    // $('ul.setup-panel li.active a').trigger('click');



    $(document).on('click',"#complete-btn", function(e) {
        // $("#prescription").html("<p><strong>Đơn thuốc: </strong></p>\n" +
        //     "                <table width=\"100%\">\n" +
        //     "                    <tr>\n" +
        //     "                        <th>#</th>\n" +
        //     "                        <th>Tên </th>\n" +
        //     "                        <th>Số lượng</th>\n" +
        //     "                        <th>Đơn vị</th>\n" +
        //     "                        <th>Liều dùng</th>\n" +
        //     "                        <th>Số lần / ngày</th>\n" +
        //     "                        <th>Chỉ định</th>\n" +
        //     "                    </tr>\n" +
        //                         $("#medicine_list").html()+
        //     "                </table>")
        var newWin=window.open("");
        newWin.document.open();
        newWin.document.write('<html><body>'+$("#print-form").html()+'</body></html>');
        newWin.print();
        newWin.close();
        toastr["success"]("Ca khám kết thúc!");
        setTimeout(function(){ window.location = "/doctor"; }, 1000);

    })

});

