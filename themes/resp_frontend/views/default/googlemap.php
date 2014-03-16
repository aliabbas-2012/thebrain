<html>
    <head>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>
        <script>
            var markers;
            var map;

            var myOptions = {
                zoom: 8,
                center: new google.maps.LatLng(23.0171240, 72.5330533),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            markers_array = {0: {lat: 0.55, long: 0.66}, 1: {lat: 0.25, long: 0.78}}
            function initialize() {
                var map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 10,
                    center: new google.maps.LatLng(23.0171240, 72.5330533),
                    mapTypeId: google.maps.MapTypeId.TERRAIN
                });

                var infowindow = new google.maps.InfoWindow();

                var marker, i;
                for (i in markers_array)
                {
                   
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(markers_array[i].lat,markers_array[i].long),
                        map: map
                    });

                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infowindow.setContent("TEST");
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                }

            }
            function addMarker(lat, lng) {
                var myLatlng = new google.maps.LatLng(lat, lng);

                var marker = new google.maps.Marker({
                    map: map,
                    position: myLatlng,
                    name: "test"
                });
                markers.push(marker);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <div id="map-canvas" style="width:500px;height:380px;"></div>
    </body>
</html>