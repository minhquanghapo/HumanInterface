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
    $("#st1 a").trigger('click');
    // $('ul.setup-panel li.active a').trigger('click');

    // DEMO ONLY //
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        $(this).remove();
    })
    $('#activate-step-4').on('click', function(e) {
        $('ul.setup-panel li:eq(3)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-4"]').trigger('click');
        $(this).remove();
    })


    $(document).on('click',"#complete-btn", function(e) {
        toastr["success"]("Ca khám kết thúc!");
        setTimeout(function(){ window.location = "/doctor"; }, 1000);

    })

});

