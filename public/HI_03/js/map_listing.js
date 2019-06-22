(function(A) {
	if (!Array.prototype.forEach)
		A.forEach = A.forEach || function(action, that) {
			for (var i = 0, l = this.length; i < l; i++)
				if (i in this)
					action.call(that, this[i], i, this);
			};

		})(Array.prototype);

		var
		mapObject,
		markers = [],
		markersData = {
			'Doctors': [
			{
				name: 'Bác sĩ Lê Thị Hương',
				location_latitude: 21.0009521, 
				location_longitude: 105.8406854,
				map_image_url: '/HI_03/img/doctor/le-thi-huong.png',
				type: 'Khoa Tai Mũi Họng',
				name_point: 'Bệnh viện Bạch Mai',
				description_point: 'Chuyên môn chính: Lấy dị vật trong tai, điều trị viêm xoang dị ứng',
				get_directions_start_address: '',
			},
			{
				name: 'Bác sĩ Nguyễn Thu Hoài',
				location_latitude: 21.0009521, 
				location_longitude: 105.8406854,
				map_image_url: '/HI_03/img/doctor/nguyen-thu-hoai.jpeg',
				type: 'Khoa Sản phụ',
				name_point: 'Bệnh viện Vinmec',
				description_point: 'Đã có 12 năm kinh nghiệm trong ngành Sản phụ',
				get_directions_start_address: '',
			},
			{
				name: 'Bác sĩ Dương Bá Trực',
				location_latitude: 21.0009521, 
				location_longitude: 105.8406854,
				map_image_url: '/HI_03/img/doctor/duong-ba-truc.jpeg',
				type: 'Khoa Nhi, Huyết học',
				name_point: 'Bệnh viện Vinmec',
				description_point: 'Có kinh nghiệm gần 40 năm trong ngành',
				get_directions_start_address: '',
			}
			],
			'Hospitals': [
			{
				name: 'Bệnh viện Đa khoa Quốc tế Vinmec Times City',
				location_latitude: 20.9963439, 
				location_longitude: 105.8647761,
				map_image_url: '/HI_03/img/hospital/vinmec.jpg',
				type: 'Bệnh viện Đa khoa Quốc tế Vinmec Times City',
				name_point: 'Q. Hai Bà Trưng Hà Nội',
				description_point: '458 Minh Khai',
				get_directions_start_address: ''
			},
			{
				name: 'Bệnh viện quân y 103',
				location_latitude: 20.9676941, 
				location_longitude: 105.7869382,
				map_image_url: '/HI_03/img/hospital/quan-y-103.jpg',
				type: 'Bệnh viện quân y 103',
				name_point: 'P. Phúc La, Hà Đông, Hà Nội',
				description_point: '261 Phùng Hưng',
				get_directions_start_address: ''
			},
			{
				name: 'Bệnh viện Bạch Mai',
				location_latitude: 21.0009521, 
				location_longitude: 105.8406854,
				map_image_url: '/HI_03/img/hospital/bach-mai.jpg',
				type: 'Bệnh viện Bạch Mai',
				name_point: 'Đống Đa, Hà Nội',
				description_point: '78 Đường Giải Phóng, Phương Đình',
				get_directions_start_address: ''
			}
			]
		};

			var mapOptions = {
				zoom: 10,
				center: new google.maps.LatLng(21.0009521, 105.8406854),
				mapTypeId: google.maps.MapTypeId.ROADMAP,

				mapTypeControl: false,
				mapTypeControlOptions: {
					style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				panControl: false,
				panControlOptions: {
					position: google.maps.ControlPosition.TOP_RIGHT
				},
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				 scrollwheel: false,
				scaleControl: false,
				scaleControlOptions: {
					position: google.maps.ControlPosition.LEFT_CENTER
				},
				streetViewControl: true,
				streetViewControlOptions: {
					position: google.maps.ControlPosition.RIGHT_BOTTOM
				},
				styles: [
											 {
					"featureType": "landscape",
					"stylers": [
						{
							"hue": "#FFBB00"
						},
						{
							"saturation": 43.400000000000006
						},
						{
							"lightness": 37.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.highway",
					"stylers": [
						{
							"hue": "#FFC200"
						},
						{
							"saturation": -61.8
						},
						{
							"lightness": 45.599999999999994
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.arterial",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 51.19999999999999
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "road.local",
					"stylers": [
						{
							"hue": "#FF0300"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 52
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "water",
					"stylers": [
						{
							"hue": "#0078FF"
						},
						{
							"saturation": -13.200000000000003
						},
						{
							"lightness": 2.4000000000000057
						},
						{
							"gamma": 1
						}
					]
				},
				{
					"featureType": "poi",
					"stylers": [
						{
							"hue": "#00FF6A"
						},
						{
							"saturation": -1.0989010989011234
						},
						{
							"lightness": 11.200000000000017
						},
						{
							"gamma": 1
						}
					]
				}
				]
			};
			var
			marker;
			mapObject = new google.maps.Map(document.getElementById('map_listing'), mapOptions);
			for (var key in markersData)
				markersData[key].forEach(function (item) {
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(item.location_latitude, item.location_longitude),
						map: mapObject,
						icon: 'img/pins/' + key + '.png',
					});

					if ('undefined' === typeof markers[key])
						markers[key] = [];
					markers[key].push(marker);
					google.maps.event.addListener(marker, 'click', (function () {
      closeInfoBox();
      getInfoBox(item).open(mapObject, this);
      mapObject.setCenter(new google.maps.LatLng(item.location_latitude, item.location_longitude));
     }));

					
				});				

		function hideAllMarkers () {
			for (var key in markers)
				markers[key].forEach(function (marker) {
					marker.setMap(null);
				});
		};
		
		function toggleMarkers (category) {
			hideAllMarkers();
			closeInfoBox();

			if ('undefined' === typeof markers[category])
				return false;
			markers[category].forEach(function (marker) {
				marker.setMap(mapObject);
				marker.setAnimation(google.maps.Animation.DROP);

			});
		};

		function closeInfoBox() {
			$('div.infoBox').remove();
		};

		function getInfoBox(item) {
			return new InfoBox({
				content:
				'<div class="marker_info">' +
				'<figure><img src="' + item.map_image_url + '" alt="Image"></figure>' +
				'<small>'+ item.type +'</small>' +
				'<h3>'+ item.name_point +'</h3>' +
				'<span>'+ item.description_point +'</span>' +
				'<div class="marker_tools">' +
				'<form action="http://maps.google.com/maps" method="get" target="_blank" style="display:inline-block""><input name="saddr" value="'+ item.get_directions_start_address +'" type="hidden"><input type="hidden" name="daddr" value="'+ item.location_latitude +',' +item.location_longitude +'"><button type="submit" value="Get directions" class="btn_infobox_get_directions">Chỉ đường</button></form>' +
					'</div>' +
				'</div>',
				disableAutoPan: false,
				maxWidth: 0,
				pixelOffset: new google.maps.Size(10, 105),
				closeBoxMargin: '',
				closeBoxURL: "HI_03/img/close_infobox.png",
				isHidden: false,
				alignBottom: true,
				pane: 'floatPane',
				enableEventPropagation: true
			});
		};
		
		function onHtmlClick(location_type, key){
     google.maps.event.trigger(markers[location_type][key], "click");
}
