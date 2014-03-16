<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
<script>


    var offer_name = '<?php echo $model->name; ?>';
    var lat = <?php echo $model->lat; ?>;
    var lng = <?php echo $model->lng; ?>;


    function initialize()
    {


        var map =
                new google.maps.Map(document.getElementById('googleMap'), {zoom: 5, mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false});
        var bounds = new google.maps.LatLngBounds();
        var infowindow = new google.maps.InfoWindow();


        //setting middle content now 


        var latlng = new google.maps.LatLng(lat, lng);
        bounds.extend(latlng);

        var middle_marker = new google.maps.Marker({
            position: latlng,
            map: map,
            title: offer_name
        });


        google.maps.event.addListener(middle_marker, 'click', function() {
            infowindow.setContent(this.title);
            infowindow.open(map, this);
        });
         map.fitBounds(bounds);

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="googleMap" class="col-lg-12" style="height: 500px"></div>