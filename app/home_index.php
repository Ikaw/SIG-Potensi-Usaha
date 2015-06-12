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
    //<![CDATA[
    function load() { //meload map
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(-6.913785, 107.407542),
        zoom: 12, //tingkat zoom map, sesuaikan kebutuhan
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // download XML dokumen
      downloadUrl("tampilmarker.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address+ "</b>";
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: 'img/universitas.png' //ganti icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };
      request.open('GET', url, true);
      request.send(null);
    }
    function doNothing() {}
    //]]>
  </script>
</head>
<body onLoad="load()">
<center>
	<div class="container">
	<h3>Berikut Adalah Data Informasi Usaha di Kabupaten Bandung Barat</h3>
	 <div class="row">
	  <div class="span6">
		  <div class="col-lg-3">
		  <h4>Filter Data Usaha : </h4>
	           <div class="input-group" align="center">
	                <input type="text" class="form-control" placeholder="Pencarian...">
	                <span class="input-group-btn">
	                     <button class="btn btn-primary" type="button">Cari</button>
	                </span>
	            </div>
	       </div>
	    <div id="map"></div>
	  </div>
	 </div>	
	</div>
</center>

