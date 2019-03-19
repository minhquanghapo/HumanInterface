var lich_kham = [
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 1, status: "Chưa khám", no: 23},
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 2, status: "Đang khám", no: 34},
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 3, status: "Đã xong", no: 11},
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 4, status: "Đã xong", no: 55},
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 5, status: "Đã xong", no: 66}
];

function getResultView(array){
	var view = "";
	jQuery.each( array, function( i, val ) {
		view += '<div class="search-result-container" id="' + val["id"] + '"><div class="search-result-container-time"><span>Ngày: </span><span>' + val["date"] + '</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Giờ: </span><span>' + val["time"] + '</span></div><div class="search-result-container-info"><p>ID: ' + val['id'] + '</p><p>Trạng thái: ' + val["status"] + '<p>Bệnh viện: ' + val["hospital"] + '</p><p>Phòng Khám: ' + val["clinic"] + '</p><p>Bác sĩ: ' + val["doctor"] + '</p><p>Số thứ tự: ' + val["no"] + '</p></div></div>';
	});
	return view
}

$('#button-search').click(function(){
	var value = $('#search-value').val();
	console.log(value);
	if(value == '0123456789'){
		$("#search-result").html(getResultView(lich_kham));
	} else {
		$("#search-result").html('Không tìm thấy thông tin!');
	}

});	

$(document).on('click', ".search-result-container", function(event) {
	var div_id = $(this).attr('id');
	$('.dark-shadow').show();
	$('.search-result-container-properties').show();
	jQuery.each(lich_kham, function( i, val ) {
		if(val['id'] == div_id)
			$("#main-content").html('<div class="search-result-container" id="' + val["id"] + '"><div class="search-result-container-time"><span>Ngày: </span><span>' + val["date"] + '</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Giờ: </span><span>' + val["time"] + '</span></div><div class="search-result-container-info"><p>ID: ' + val['id'] + '</p><p>Trạng thái: ' + val["status"] + '<p>Bệnh viện: ' + val["hospital"] + '</p><p>Phòng Khám: ' + val["clinic"] + '</p><p>Bác sĩ: ' + val["doctor"] + '</p><p>Số thứ tự: ' + val["no"] + '</p></div></div>');
	});
	$('body').addClass('anti-scroll');
});

$(document).on('click', ".dark-shadow", function(event) {
	$('.dark-shadow').hide();
	$('.search-result-container-properties').hide();
	$('body').removeClass('anti-scroll');
});