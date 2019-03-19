var lich_kham = [
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 2, status: "Chưa khám"},
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 2, status: "Đang khám" },
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 2, status: "Đã xong" },
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 2, status: "Đã xong" },
    { date: '12/1/2017', time: '9:00', hospital: "Bệnh Viện Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 2, status: "Đã xong" }
];

function getResultView(array){
	var view = "";
	jQuery.each( array, function( i, val ) {
		view += '<div class="search-result-container"><div class="search-result-container-time"><span>Ngày: </span><span>' + val["date"] + '</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Giờ: </span><span>' + val["time"] + '</span></div><div class="search-result-container-info"><p>Bệnh viện: ' + val["hospital"] + '</p><p>Phòng Khám: ' + val["clinic"] + '</p><p>Bác sĩ: ' + val["doctor"] + '</p><p>Số thứ tự: ' + val["id"] + '</p></div></div>';
	});
	return view
}

$('#button-search').click(function(){
	console.log('search');
	$("#search-result").html(getResultView(lich_kham));
});