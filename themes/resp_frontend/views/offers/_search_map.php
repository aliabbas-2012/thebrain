<script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/jquery-1.10.2.min.js"></script> 
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=" type="text/javascript"></script>


<?php
$locations = array();
$items = $dataProvider->getData();
foreach ($items as $item):
    if (!empty($item->lat) && !empty($item->lng)) {
        $locations[] = array("lat" => $item->lat, "lng" => $item->lng, "name" => $item->name);
    }
endforeach;

$middle = array();
if (count($locations) > 1) {

    $middle = $locations[round(count($locations) / 2)];
   
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
    search_city = '<?php echo $search_model->location; ?>';
    var lat_s = '<?php echo $search_model->lat; ?>';
    var lng_s = '<?php echo $search_model->lng; ?>';


</script>

<script src="<?php echo Yii::app()->theme->baseUrl ?>/dist/js/map.js">
</script>

<div id="googleMap" class="col-lg-12" style="height: 500px"></div>

<style>

    button.search-collaps.btn.btn-success.btn-lg {
        background: url("<?php echo Yii::app()->theme->baseUrl ?>/images/map.png") no-repeat scroll -2px -6px rgba(0, 0, 0, 0);
        border: 1px solid #d7d7d7;
        color: #7f8b8d;
        font-size: 15px;
        font-weight: bold;
        height: 35px;
        line-height: 12px;
        min-width: 100px;
        text-align: right;
    }
    .search-collaps {
        float: right;
    }
</style>    