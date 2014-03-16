<html>
    <head>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
        </script>
        <script>
            function initialize(lat, lon)
            {
                var myCenter = new google.maps.LatLng(0.55, 0.44);
                var mapProp = {
                    center: myCenter,
                    zoom: 12,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };

                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

                var marker = new google.maps.Marker({
                    position: myCenter,
                });
                marker.setMap(map);

                var circle = new google.maps.Circle({
                    map: map,
                    radius: 16093, // 10 miles in metres
                    fillColor: '#AA0000'
                });
                circle.bindTo('center', marker, 'position');
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <div id="googleMap" style="width:500px;height:380px;"></div>
    </body>
</html>