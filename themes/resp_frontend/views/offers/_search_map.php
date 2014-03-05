<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<?php
$locations = array();
$items = $dataProvider->getData();
foreach ($items as $item):
    if (!empty($item->lat) && !empty($item->lng)) {
        $locations[] = array("lat" => $item->lat, "lng" => $item->lat, "title" => $item->name);
    }
endforeach;
$locations = CJSON::encode($locations);
echo $locations;
?>
<script>
    var locations = <?php echo $locations; ?>

    function initialize()
    {

        var map =
                new google.maps.Map(document.getElementById('googleMap'), {zoom: 2, mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false});
        var bounds = new google.maps.LatLngBounds();
        var infowindow = new google.maps.InfoWindow();

        for (var i in locations)
        {
            var latlng = new google.maps.LatLng(locations[i]['lat'], locations[i]['lng']);
            bounds.extend(latlng);

            var marker = new google.maps.Marker({
                position: latlng,
                map: map,
                title: locations[i]['title']
            });

            var circle = new google.maps.Circle({
                //center: center,
                map: map,
                radius: 100000,
                fillColor: 'transparent',
                fillOpacity: .6,
                strokeColor: '#313131',
                strokeOpacity: .4,
                strokeWeight: .8
            });
            circle.bindTo('center', marker, 'position');
            bounds = circle.getBounds();
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(this.title);
                infowindow.open(map, this);
            });
        }

        map.fitBounds(bounds);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="googleMap" class="col-lg-12" style="height: 500px"></div>