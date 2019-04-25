var lich_kham = [
    {img:'HI_04/images/doctor-4.jpg', date: '12/1/2020', time: '9:00', hospital: "Tai Mũi Họng trung ương", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn Khắc Nam', id: 1, status: "imcomplete", no: 23, symptom: "Đau họng, sưng amidan, ho ra đờm"},
    {img:'HI_04/images/doctor-3.jpg', date: '12/5/2019', time: '9:00', hospital: "Bạch Mai", clinic: "Tim mạch" ,doctor: 'Trần Thị Thúy', id: 2, status: "imcomplete", no: 34, symptom: "Chóng mặt, huyết áp tăng"},
    {img:'HI_04/images/person_4.jpg', date: '12/1/2019', time: '9:00', hospital: "Bạch Mai", clinic: "Răng - Hàm - Mặt" ,doctor: 'Lê Văn Lộc', id: 3, status: "completed", no: 11, symptom: "Đau răng số 6 hàm trên bên trái"},
    {img:'HI_04/images/image_3.jpg', date: '12/8/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn A', id: 4, status: "completed", no: 55, symptom: "Đau họng, sưng amidan, ho ra đờm"},
    {img:'HI_04/images/person_3.jpg', date: '12/6/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn B', id: 5, status: "completed", no: 66, symptom: "Đau họng, sưng amidan, ho ra đờm"},
    {img:'HI_04/images/image_6.jpg', date: '11/1/2018', time: '9:00', hospital: "Bạch Mai", clinic: "Tai - Mũi - Họng" ,doctor: 'Nguyễn C', id: 6, status: "completed", no: 66, symptom: "Đau họng, sưng amidan, ho ra đờm"}
];

function getStatus(status){
	if(status == "imcomplete") return "Chưa xong";
	if(status == "completed") return "Đã xong";
	if(status == "canceled") return "Đã hủy";
}

function getResultView(array, sort_type = null){
	var view = "";
	if(sort_type == null || sort_type == "all")
		jQuery.each( array, function( i, val ) {
			view += '<div class="col-md-4 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><figure><div><img src="' + val["img"] + '" class="img-fluid" alt=""><div class="preview"><span>Read more</span></div></div></figure><div class="wrapper"><small>' + val["clinic"] + '</small><h3>BS. ' + val["doctor"] + '</h3><p><span>Ngày hẹn: '+ val["date"] +' &nbsp; Giờ: '+ val["time"]+'</span><br><span>Trạng thái: '+ getStatus(val["status"]) +'</span><br><span>Thứ tự: '+ val["no"] +'</span><br></p></div></div></div>'
		});
	else
		jQuery.each( array, function( i, val ) {
			console.log(sort_type);
			if(val["status"] == sort_type) view += '<div class="col-md-4 info-container" id="'+ val["id"] +'"><div class="box_list wow fadeIn"><figure><div><img src="' + val["img"] + '" class="img-fluid" alt=""><div class="preview"><span>Read more</span></div></div></figure><div class="wrapper"><small>' + val["clinic"] + '</small><h3>BS. ' + val["doctor"] + '</h3><p><span>Ngày hẹn: '+ val["date"] +' &nbsp; Giờ: '+ val["time"]+'</span><br><span>Trạng thái: '+ getStatus(val["status"]) +'</span><br><span>Thứ tự: '+ val["no"] +'</span><br></p></div></div></div>'
		});
	return view
}

$("#search-result").html(getResultView(lich_kham));
$(".add_top_20").hide();

function getDetailView(val){
	var view = '';
	view = '<div class="row"><div class="col-md-5"><div class="full-info-img"><img src="' + val["img"] + '" class="img-fluid" alt=""></div></div><div class="col-md-7"><div class="full-info-status"><h3>BS. '+ val["doctor"] +'</h3><p><span>Mã lịch khám: '+ val["id"] +'</span><br><br><span>Ngày hẹn: '+ val["date"] +' &nbsp; Giờ: '+ val["time"] +'</span><br><span>Trạng thái: '+ getStatus(val["status"]) +'</span><br><br><span>Bệnh viện: '+ val["hospital"] +'</span><br><span>Phòng khám: '+ val["clinic"] +'</span><br><span>Thứ tự: '+ val["no"] +'</span><br><br><span>Triệu chứng: '+ val["symptom"] +'</span></p></div></div>';
	// if(val["status"] == "imcomplete") view += '</div><div class="button-row"><button type="button" class="btn btn-danger">HỦY</button></div>';
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

$( "#sort-box" ).change(function() {
	console.log($("#sort-box").val());
	$("#search-result").html(getResultView(lich_kham, $("#sort-box").val()));
	if($("#sort-box").val() == "all") $("#result_count").html(6);
	if($("#sort-box").val() == "imcomplete") $("#result_count").html(2);
	if($("#sort-box").val() == "completed") $("#result_count").html(4);
});