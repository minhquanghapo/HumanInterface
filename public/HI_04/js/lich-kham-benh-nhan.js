var lich_kham = [
    {img:'HI_04/images/image_6.jpg', date: '12/1/2020', time: '9:00', hospital: "Bạch mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Lê Thị Hương', id: 1, status: "imcomplete", no: 23, symptom: "Đau tai, thường bị ù", canceled_by: ""},
    {img:'HI_04/images/image_6.jpg', date: '12/5/2019', time: '8:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Thu Hoài', id: 2, status: "imcomplete", no: 34, symptom: "Đau tai, tai thường xuyên ẩm ướt, ngứa", canceled_by: ""},
    {img:'HI_04/images/person_4.jpg', date: '12/1/2019', time: '7:00', hospital: "Răng - Hàm - Mặt Trung Ương", clinic: "Răng - Hàm - Mặt" ,doctor: 'Lê Văn Lộc', id: 3, status: "completed", no: 11, symptom: "Đau răng số 6 hàm trên bên trái", canceled_by: ""},
    {img:'HI_04/images/image_3.jpg', date: '12/8/2018', time: '16:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Viết Cảnh', id: 4, status: "completed", no: 55, symptom: "Đau họng, sưng amidan, ho ra đờm", canceled_by: ""},
    {img:'HI_04/images/person_3.jpg', date: '12/6/2018', time: '22:00', hospital: "Răng - Hàm - Mặt Trung Ương", clinic: "Răng - Hàm - Mặt" ,doctor: 'Nguyễn Thị Xuân', id: 5, status: "completed", no: 66, symptom: "Gãy răng cửa trên, mẻ răng cửa hàm dưới", canceled_by: ""},
    {img:'HI_04/images/image_6.jpg', date: '14/1/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Đặng Quốc Toàn', id: 6, status: "completed", no: 102, symptom: "Đau họng, sưng amidan, ho ra đờm", canceled_by: ""},
    {img:'HI_04/images/image_6.jpg', date: '11/1/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Đặng Quốc Toàn', id: 7, status: "canceled", no: 2, symptom: "Đau họng, sưng amidan, ho ra đờm", canceled_by: "doctor"},
    {img:'HI_04/images/image_6.jpg', date: '22/9/2017', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Trịnh Xuân Thành', id: 8, status: "completed", no: 31, symptom: "Đau họng, sưng amidan, ho ra đờm", canceled_by: ""},
    {img:'HI_04/images/image_6.jpg', date: '15/1/2017', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Vũ Tuấn', id: 9, status: "completed", no: 45, symptom: "Đau họng, sưng amidan, ho ra đờm", canceled_by: ""},
    {img:'HI_04/images/image_6.jpg', date: '11/1/2017', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Hữu Nam', id: 10, status: "canceled", no: 66, symptom: "Đau họng, sưng amidan, ho ra đờm", canceled_by: "patient"}
];

function getCancelOne(status){
	if(status == "doctor") return "Bác sĩ ";
	if(status == "patient") return "Người bệnh ";
	if(status == "") return "";
}

function getStatus(status){
	if(status == "imcomplete") return "Chưa xong";
	if(status == "completed") return "Đã xong";
	if(status == "canceled") return "đã hủy";
}

function getColor(status){
	if(status == "imcomplete") return "#ffc107";
	if(status == "completed") return "#19d873";
	if(status == "canceled") return "#dc3545";
}

// function getResultView(array, sort_type = null){
// 	var view = "";
// 	if(sort_type == null || sort_type == "all")
// 		jQuery.each( array, function( i, val ) {
// 			view += '<div class="col-md-4 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><figure><div><img src="' + val["img"] + '" class="img-fluid" alt=""><div class="preview"><span>Read more</span></div></div></figure><div class="wrapper"><small>' + val["clinic"] + '</small><h3>BS. ' + val["doctor"] + '</h3><p><span>Ngày hẹn: '+ val["date"] +' &nbsp; Giờ: '+ val["time"]+'</span><br><span>Trạng thái: '+ getStatus(val["status"]) +'</span><br><span>Thứ tự: '+ val["no"] +'</span><br></p></div></div></div>'
// 		});
// 	else
// 		jQuery.each( array, function( i, val ) {
// 			if(val["status"] == sort_type) view += '<div class="col-md-4 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><figure><div><img src="' + val["img"] + '" class="img-fluid" alt=""><div class="preview"><span>Read more</span></div></div></figure><div class="wrapper"><small>' + val["clinic"] + '</small><h3>BS. ' + val["doctor"] + '</h3><p><span>Ngày hẹn: '+ val["date"] +' &nbsp; Giờ: '+ val["time"]+'</span><br><span>Trạng thái: '+ getStatus(val["status"]) +'</span><br><span>Thứ tự: '+ val["no"] +'</span><br></p></div></div></div>'
// 		});
// 	return view
// }

function getResultView(array, sort_type = null){
	var view = "";
	if(sort_type == null || sort_type == "all")
		jQuery.each( array, function( i, val ) {
			view += '<div class="col-md-6 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><div class="wrapper wrapper-title"><h3>Ngày hẹn: ' + val["date"] +' &nbsp;Giờ: ' + val["time"] + '</h3></div><div class="wrapper"><table><tr><td>Mã số: ' + val["id"] + '</td><td>Bệnh viện: ' + val["hospital"] + '</td></tr><tr><td>Trạng thái: <span style="color: '+ getColor(val["status"]) +'">' + getCancelOne(val["canceled_by"]) + getStatus(val["status"]) + '</span></td><td>Phòng/Khoa: ' + val["clinic"] + '</td></tr><tr><td>Số thứ tự: ' + val["no"] + '</td><td>Bác sĩ: ' + val["doctor"] + '</td></tr></table></div></div></div>'
		});
	else
		jQuery.each( array, function( i, val ) {
			if(val["status"] == sort_type) view += '<div class="col-md-6 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><div class="wrapper wrapper-title"><h3>Ngày hẹn: ' + val["date"] +' &nbsp;Giờ: ' + val["time"] + '</h3></div><div class="wrapper"><table><tr><td>Mã số: ' + val["id"] + '</td><td>Bệnh viện: ' + val["hospital"] + '</td></tr><tr><td>Trạng thái: <span style="color: '+ getColor(val["status"]) +'">' + getCancelOne(val["canceled_by"]) + getStatus(val["status"]) + '</span></td><td>Phòng/Khoa: ' + val["clinic"] + '</td></tr><tr><td>Số thứ tự: ' + val["no"] + '</td><td>Bác sĩ: ' + val["doctor"] + '</td></tr></table></div></div></div>'

		});
	return view
}

$("#search-result").html(getResultView(lich_kham));
$(".add_top_20").hide();

function search(data, array, sort_type = null){
	var view = '';
	if (data == 1 || data  == 2 || data == 3 || data == 4 || data == 5 || data == 6){
		jQuery.each( array, function( i, val ) {
			if(val["id"] == data) view += '<div class="col-md-6 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><div class="wrapper wrapper-title"><h3>Ngày hẹn: ' + val["date"] +' &nbsp;Giờ: ' + val["time"] + '</h3></div><div class="wrapper"><table><tr><td>Mã số: ' + val["id"] + '</td><td>Bệnh viện: ' + val["hospital"] + '</td></tr><tr><td>Trạng thái: <span style="color: '+ getColor(val["status"]) +'">' + getCancelOne(val["canceled_by"]) + getStatus(val["status"]) + '</span></td><td>Phòng/Khoa: ' + val["clinic"] + '</td></tr><tr><td>Số thứ tự: ' + val["no"] + '</td><td>Bác sĩ: ' + val["doctor"] + '</td></tr></table></div></div></div>'
		});
		if($("#sort-box").val() == "all") $("#result_count").html(1);
	}
	else {
		view = '';
		if($("#sort-box").val() == "all") $("#result_count").html(0);
	}
	return view;
}

$('#search_button_04').click(function(){
	var data = $('#search_data').val();
	$("#search-result").html(search(data, lich_kham));
})

function getDetailView(val){
	var view = '';
	view = '<div class="wrapper wrapper-title"><h3 style="text-align: center"><b>Thông tin lịch khám</b></h3></div><div class="wrapper"><div class="row"><div class="col-md-6" style="font-size: 20px"><div class="full-info-status"><p><span>Mã lịch khám: '+ val["id"] +'</span><br><span>Bệnh nhân: Nguyễn Anh</span><br><span>Số điện thoại: 09876543210</span><br><br><span>Ngày hẹn: '+ val["date"] +' &nbsp; '+ val["time"] +'</span><br><span>Trạng thái: <span style="color: '+ getColor(val["status"]) +'">'+ getCancelOne(val["canceled_by"]) + getStatus(val["status"]) +'</span></span><br><br><span>Bệnh viện: '+ val["hospital"] +'</span><br><span>Phòng khám: '+ val["clinic"] +'</span><br><span>Bác sĩ: <a href="./detail-page/doctor" class="show-submenu" style="color: #3f4079; text-decoration: underline;">'+ val["doctor"] +'</a></span><br><span>Số thứ tự: '+ val["no"] +'</span><br><span>Triệu chứng: '+ val["symptom"] +'</span></p></div></div><div class="col-md-6" id="map" style="width:90%; margin: 0"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.792404235112!2d105.83849671424484!3d21.000957094104365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac7a76c79c0f%3A0xa37d3ed4526ea954!2zQuG7h25oIFZp4buHbiBC4bqhY2ggTWFp!5e0!3m2!1svi!2sus!4v1559494427667!5m2!1svi!2sus" width="600" height="330" frameborder="0" style="border:0" allowfullscreen></iframe></div></div>';
	view += '</div><div class="button-row">';
	if(val["status"] == "imcomplete") view += '<button type="button" class="btn btn-danger btn-cancel-schedule" style="margin-right: 20px; color: #fff">HỦY LỊCH</button><button type="button" class="btn btn-danger btn-cancel-confirm" style="display: none; margin-right: 20px; color: #fff" id="cancel-' + val["id"] + '">HỦY LỊCH</button>';
	view += '<button type="button" class="btn btn-default btn-prevent-cancel" style="display: none">KHÔNG HỦY</button><button type="button" class="btn btn-default btn-close-model">THOÁT</button></div>';
	return view;
}


$(document).on('click', ".info-container", function(event) {
	var view = '';
	var div_id = $(this).attr('id');
	console.log(div_id);
	jQuery.each( lich_kham, function( i, val ) {
		if(val["id"] == div_id){
			console.log("val id:" + val["id"]);
			$(".full-info").html(getDetailView(val));
		}
	});	
	$('.dark-background').show();
	$('.full-info').show();
	$('body').addClass('anti-scroll');
});

$(document).on('click', ".dark-background", function(event) {
	$('.dark-background').hide();
	$('.full-info').hide();
	$('body').removeClass('anti-scroll');
});

$(document).on('click', ".btn-close-model", function(event) {
	$('.dark-background').hide();
	$('.full-info').hide();
	$('body').removeClass('anti-scroll');
});

$(document).on('click', ".btn-cancel-schedule", function(event) {
	// $('.dark-background').hide();
	// $('.full-info').hide();
	setTimeout(function(){
		$(".full-info .row").html('<div style="display: flex; justify-content: center; align-items: center; height: 50vh; width: 100%;"><h1 style="text-align: center; line-height: 50vh">Bạn muốn hủy lịch khám?</h1><div>');
		$('.btn-cancel-schedule').hide();
		$('.btn-cancel-confirm').show();
		$('.btn-close-model').hide();
		$('.btn-prevent-cancel').show();
		$("#search-result").html(getResultView(lich_kham));
	}, 300);
	
	// $('body').removeClass('anti-scroll');
	var button_id = $(this).attr('id');
	var id = button_id.replace("cancel-", "");
});

$(document).on('click', ".btn-cancel-confirm", function(event) {
	// $('.dark-background').hide();
	// $('.full-info').hide();
	setTimeout(function(){
		$(".full-info .row").html('<div style="display: flex; justify-content: center; align-items: center; height: 50vh; width: 100%;"><h1 style="text-align: center; line-height: 50vh"><img src="HI_04/images/Complete_Symbol-128.png" style="height: 40px;">Đã hủy thành công!</h1><div>');
		$('.btn-cancel-confirm').hide();
		$('.btn-close-model').show();
		$('.btn-prevent-cancel').hide();
		$("#search-result").html(getResultView(lich_kham));
	}, 300);
	
	// $('body').removeClass('anti-scroll');
	var button_id = $(this).attr('id');
	var id = button_id.replace("cancel-", "");
	jQuery.each( lich_kham, function( i, val ) {
		console.log(id);
		if(val["id"] == id){
			val["status"] = "canceled";
			val["canceled_by"] = "patient";
		}
	});
});

$(document).on('click', ".btn-prevent-cancel", function(event) {
	// $('.dark-background').hide();
	// $('.full-info').hide();
	setTimeout(function(){
		$(".full-info .row").html('<div style="display: flex; justify-content: center; align-items: center; height: 50vh; width: 100%;"><h1 style="text-align: center; line-height: 50vh"><img src="HI_04/images/false-2061132_960_720.png" style="height: 50px; margin-top: -10px;">Đã thôi hủy lịch!</h1><div>');
		$('.btn-cancel-confirm').hide();
		$('.btn-close-model').show();
		$('.btn-prevent-cancel').hide();
		$("#search-result").html(getResultView(lich_kham));
	}, 300);
	
	// $('body').removeClass('anti-scroll');
	var button_id = $(this).attr('id');
	var id = button_id.replace("cancel-", "");
});

$( "#sort-box" ).change(function() {
	console.log($("#sort-box").val());
	$("#search-result").html(getResultView(lich_kham, $("#sort-box").val()));
	if($("#sort-box").val() == "all") $("#result_count").html(6);
	if($("#sort-box").val() == "imcomplete") $("#result_count").html(2);
	if($("#sort-box").val() == "completed") $("#result_count").html(3);
	if($("#sort-box").val() == "canceled") $("#result_count").html(1);
});