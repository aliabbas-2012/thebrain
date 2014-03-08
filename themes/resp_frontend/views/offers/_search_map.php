<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
<?php
$locations = array();
$items = $dataProvider->getData();
foreach ($items as $item):
    if (!empty($item->lat) && !empty($item->lng)) {
        $locations[] = array("lat" => $item->lat, "lng" => $item->lat, "name" => $item->name);
    }
endforeach;

$middle = array();
if (count($locations) > 1) {

    $middle = $locations[round(count($locations) / 2)];
    unset($locations[round(count($locations) / 2)]);
} else if (count($locations) == 1) {
    $middle = $locations[0];
    $locations = array();
}
$jsonLoc = CJSON::encode($locations);
$middle = CJSON::encode($middle);
?>
<script>
    var locations = <?php echo $jsonLoc; ?>;
    
    var middle = <?php echo $middle; ?>;
    var radius = '<?php echo $radius ?>';

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
                title: locations[i]['name']
            });


            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(this.title);
                infowindow.open(map, this);
            });
        }

        //setting middle content now 

        
        var latlng = new google.maps.LatLng(middle['lat'], middle['lng']);
        bounds.extend(latlng);

        var middle_marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: middle['name']
        });


        google.maps.event.addListener(middle_marker, 'click', function() {
            infowindow.setContent(this.title);
            infowindow.open(map, this);
        });

        if (radius != "" & radius != "all") {
            radius = parseInt(radius);
            var circle = new google.maps.Circle({
                //center: center,
                map: map,
                radius: radius * 1000,
                fillColor: 'transparent',
                fillOpacity: .6,
                strokeColor: '#313131',
                strokeOpacity: .4,
                strokeWeight: .8
            });
            circle.bindTo('center', middle_marker, 'position');
            bounds = circle.getBounds();

            
        }
        map.fitBounds(bounds);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="googleMap" class="col-lg-12" style="height: 500px"></div>