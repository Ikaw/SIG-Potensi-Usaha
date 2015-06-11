<?php empty( $app ) ? header('location:../index.php') : '' ;?>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAqhJ6sg9DMHKhLvWrzUs96NDMemaDXriw&sensor
=false"></script>
<style>
	#map {
	width: auto;
	height: 600px;
	}
</style>
<script type="text/javascript">
(function() {window.onload = function() {
		// Membuat konfigurasi umum peta berbasis Google Maps
		// zoom: untuk perbesaran/skala peta;
		// center: untuk menentukan titik koordinat tengah peta;
		// mapTypeId: untuk menentukan tipe peta yang digunakan;
	var options = {
	zoom: 12,
	center: new google.maps.LatLng(-6.886791,107.615238),
	mapTypeId: google.maps.MapTypeId.ROADMAP
	};
		// Membuat objek peta Google Maps, memanggil elemen HTML dengan id = 'map'
	var map = new google.maps.Map(document.getElementById('map'), options);
		// Menambahkan marker (penanda) ke dalam peta
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(-6.886791,107.615238),
		map: map,
		title: 'Silahkan Klik'
	});
		// Membuat InfoWindow dengan memunculkan informasi/teks ketika di-klik
	var infowindow = new google.maps.InfoWindow({
		content: 'UNIKOM'
	});
		// Menambahkan event Click pada marker
	google.maps.event.addListener(marker, 'click', function() {
		// Memanggil 'open method' InfoWindow
		infowindow.open(map, marker);
	});
};
})();
</script>
</head>
<body>
<center>
	<div class="container">
	 <div class="row">
	  <div class="span6">
	  <h3>Berikut Adalah Data Informasi Usaha di Kabupaten Bandung Barat</h3>
	   <div id="map"></div>
	  </div>
	 </div>
	</div>
</center>
