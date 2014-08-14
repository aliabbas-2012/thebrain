<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('radius_test');
if (!$con) {
    die('Could not connect: ' . mysql_error());
}




$latitude = "33.7133348";
$longitude = "73.0619261";

$range = "5";

if ($latitude != "" && $longitude != "") {
// Find Max - Min Lat / Long for Radius and zero point and query  
    $lat_range = $range / 69.172;
    $lon_range = abs($range / (cos($latitude) * 69.172));
    $min_lat = number_format($latitude - $lat_range, "4", ".", "");
    $max_lat = number_format($latitude + $lat_range, "4", ".", "");
    $min_lon = number_format($longitude - $lon_range, "4", ".", "");
    $max_lon = number_format($longitude + $lon_range, "4", ".", "");

    $query = "SELECT * FROM my_listings  WHERE 
(latitude >= '" . $min_lat . "' AND  latitude<= '" . $max_lat . "' ) AND  
(longitude >= '" . $min_lon . "' AND longitude <= '" . $max_lon . "' ) ";
   
    $sqlstr = mysql_query($query);
    if(is_resource($sqlstr)){
         echo $query;
    }
   
    if (mysql_num_rows($sqlstr) != 0) {
        while ($row = mysql_fetch_array($sqlstr)) {
            ?>  
            <p><?= $row['title'] ?></p>  
            <p><?= $row['address'] ?></p>  
            <?php
        }
    }
}

?>