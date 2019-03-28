$(function() {
	// var $medicine_list = $('#medicine_list');
    //
	// // show current input values
	// $('select.selectized,input.selectized', $medicine_list).each(function() {
	// 	var $container = $('<div>').addClass('value').html('Current Value: ');
	// 	var $value = $('<span>').appendTo($container);
	// 	var $input = $(this);
	// 	var update = function(e) { $value.text(JSON.stringify($input.val())); }
    //
	// 	$(this).on('change', update);
	// 	update();
	// 	$container.insertAfter($input);
	// });
	//
    $("#select-medicine").on("change",function () {
        $list = $(this).val();
        $length = $list.length;
        $("#medicine_list").html("");
        for($i=0;$i<$length;$i++){
            $medicine = "<tr>\n" +
                "                                            <td>"+($i+1)+"</td>\n" +
                "                                            <td>"+$list[$i]+"</td>\n" +
                "                                            <td><input type=\"number\" style=\"width: 50px\"></td>\n" +
                "                                            <td>Viên</td>\n" +
                "                                            <td><input type=\"number\" style=\"width: 50px\"> viên</td>\n" +
                "                                            <td><input type=\"number\" style=\"width: 50px\"></td>\n" +
                "                                            <td>\n" +
                "                                                <select name=\"\" id=\"\">\n" +
                "                                                    <option value=\"\" selected>Sau ăn</option>\n" +
                "                                                    <option value=\"\">Trước ăn</option>\n" +
                "                                                </select>\n" +
                "                                            </td>\n" +
                "                                            <td><button type=\"button\"  class=\"btn btn-sm btn-danger remove-medicine\">X</button></td>\n" +
                "                                        </tr>";
            $("#medicine_list").append($medicine);
        }
    });

    $("#select-test").on("change",function () {
        $list = $(this).val();
        $length = $list.length;
        $("#test_list").html("");
        for($i=0;$i<$length;$i++){
            $test = "<tr>\n" +
                "                                            <td>"+($i+1)+"</td>\n" +
                "                                            <td>"+$list[$i]+"</td>\n" +
                "                                        </tr>";
            $("#test_list").append($test);
        }
    });

    $(document).on("click",".remove-medicine",function () {
    })
});
