var lich_kham = [
    { date: '12/1/2020', time: '9:00', hospital: "Tai Mũi Họng trung ương", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 1, status: "Chưa xong", no: 23, symptom: "Đau họng, sưng amidan, ho ra đờm"},
    { date: '12/5/2019', time: '9:00', hospital: "Bạch Mai", clinic: "Tim mạch" ,doctor: 'Trần Thị Thúy', id: 2, status: "Chưa xong", no: 34, symptom: "Chóng mặt, huyết áp tăng"},
    { date: '12/1/2019', time: '9:00', hospital: "Bạch Mai", clinic: "Răng - Hàm - Mặt" ,doctor: 'Lê Văn Lộc', id: 3, status: "Đã xong", no: 11, symptom: "Đau răng số 6 hàm trên bên trái"},
    { date: '12/8/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn A', id: 4, status: "Đã xong", no: 55, symptom: "Đau họng, sưng amidan, ho ra đờm"},
    { date: '12/6/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn A', id: 5, status: "Đã xong", no: 66, symptom: "Đau họng, sưng amidan, ho ra đờm"},
    { date: '11/1/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn A', id: 6, status: "Đã xong", no: 66, symptom: "Đau họng, sưng amidan, ho ra đờm"}
];

function getResultView(array){
	var view = "";
	jQuery.each( array, function( i, val ) {
		view += '<div class="col-md-4 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><figure><div><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""><div class="preview"><span>Read more</span></div></div></figure><div class="wrapper"><small>' + val["clinic"] + '</small><h3>BS. ' + val["doctor"] + '</h3><p><span>Ngày hẹn: '+ val["date"] +' &nbsp; Giờ: '+ val["time"]+'</span><br><span>Trạng thái: '+ val["status"] +'</span><br><span>Thứ tự: '+ val["no"] +'</span><br></p></div></div></div>'
	});
	return view
}

$("#search-result").html(getResultView(lich_kham));


$(document).on('click', ".info-container", function(event) {
	var view = '';
	var div_id = $(this).attr('id');
	jQuery.each( lich_kham, function( i, val ) {
		if(val["id"] == div_id)
			view = '<div class="col-md-5"><div class="full-info-img"><img src="http://via.placeholder.com/565x565.jpg" class="img-fluid" alt=""></div></div><div class="col-md-7"><div class="full-info-status"><h3>BS. '+ val["doctor"] +'</h3><p><span>Mã lịch khám: '+ val["id"] +'</span><br><br><span>Ngày hẹn: '+ val["date"] +' &nbsp; Giờ: '+ val["time"] +'</span><br><span>Trạng thái: '+ val["status"] +'</span><br><br><span>Bệnh viện: '+ val["hospital"] +'</span><br><span>Phòng khám: '+ val["clinic"] +'</span><br><span>Thứ tự: '+ val["no"] +'</span><br><br><span>'+ val["symptom"] +'</span></p></div></div>'
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