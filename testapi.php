<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Earth API in V3 example</title>
    <style>
      body {
        font-size: 83%;
      }
      #map {
        height: 500px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script
      src="https://www.google.com/jsapi?key=ABQIAAAA_KNcKfoyaTskjEp-kSSEjxSsDbTxMRg-JrUcPZT14QWonZA5mxRqx3ct_DbeHVelXNr1WbKEEJ5k-A"></script>
    <script src="../src/googleearth-compiled.js"></script>

    <script>
      google.load('earth', '1');
      var map;
      var googleEarth;
      function init() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: new google.maps.LatLng(41.8397, -87.644),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        googleEarth = new GoogleEarth(map);
        google.maps.event.addListenerOnce(map, 'tilesloaded', addOverlays);
      }
      function addInfowindow(marker, infowindow) {
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.open(map, marker);
        });
      }
      function getRandomLatLng() {
        var bounds = map.getBounds();
        var southWest = bounds.getSouthWest();
        var northEast = bounds.getNorthEast();
        var lngSpan = northEast.lng() - southWest.lng();
        var latSpan = northEast.lat() - southWest.lat();
        var latLng = new google.maps.LatLng(
            southWest.lat() + latSpan * Math.random(),
            southWest.lng() + lngSpan * Math.random());
        return latLng;
      }
      function addOverlays() {
        // Add some markers
        for (var i = 0; i < 5; i++) {
          var marker = new google.maps.Marker({
            position: getRandomLatLng(),
            draggable: true,
            title: 'this is a marker',
            icon: 'https://google-developers.appspot.com/maps/documentation/javascript/examples/full/images/beachflag.png'
          });
          var infowindow = new google.maps.InfoWindow({
            content: 'This is the infowindow for a marker'
          });
          addInfowindow(marker, infowindow);
          marker.setMap(map);
        }
        // Add a polyline
        var polyOptions = {
          strokeWeight: 9,
          strokeColor: '#FFCC30'
        };
        var polyline = new google.maps.Polyline(polyOptions);
        polyline.setMap(map);
        for (i = 0; i < 2; i++) {
          polyline.getPath().push(getRandomLatLng());
        }
        // Add a polygon
        polyOptions.fillColor = '#FF0000';
        var polygon = new google.maps.Polygon(polyOptions);
        polygon.setMap(map);
        for (i = 0; i < 3; i++) {
          polygon.getPath().push(getRandomLatLng());
        }
        // Add a circle
        var circle = new google.maps.Circle(polyOptions);
        circle.setMap(map);
        circle.setCenter(getRandomLatLng());
        circle.setRadius(9000);
        // Add a rectangle
        var rectangle = new google.maps.Rectangle();
        rectangle.setMap(map);
        rectangle.setBounds(map.getBounds());
        // Add a kml layer
        var ctaLayer = new google.maps.KmlLayer(
            'https://gmaps-samples.googlecode.com/svn/trunk/ggeoxml/cta.kml',
            {
              preserveViewport: true
            });
        ctaLayer.setMap(map);
        // Add a groundoverlay
        var imageBounds = new google.maps.LatLngBounds();
        imageBounds.extend(getRandomLatLng());
        imageBounds.extend(getRandomLatLng());
        var oldmap = new google.maps.GroundOverlay(
            'https://www.lib.utexas.edu/maps/historical/newark_nj_1922.jpg',
            imageBounds);
        oldmap.setMap(map);
      }
      google.maps.event.addDomListener(window, 'load', init);
    </script>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-12846745-20']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
  <body>
    <h1>Earth API in V3</h1>
    <div id="map"></div>
  </body>
</html>