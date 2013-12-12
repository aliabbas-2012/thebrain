<?php
/* @var $this BspItemController */
/* @var $model BspItem */

$this->breadcrumbs = array(
    'Bsp Items' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List BspItem', 'url' => array('index')),
    array('label' => 'Create BspItem', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#bsp-item-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
<script>
    // This example adds a search box to a map, using the Google Place Autocomplete
    // feature. People can enter geographical searches. The search box will return a
    // pick list containing a mix of places and predicted search terms.

    function initialize() {

        var markers = [];
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });



//                // Create the search box and link it to the UI element.
        var input = /** @type {HTMLInputElement} */(
                document.getElementById('BspItem_loc_name'));
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        var searchBox = new google.maps.places.SearchBox(
                /** @type {HTMLInputElement} */(input));

        // [START region_getplaces]
        // Listen for the event fired when the user selects an item from the
        // pick list. Retrieve the matching places for that item.
        google.maps.event.addListener(searchBox, 'places_changed', function() {
            var places = searchBox.getPlaces();

            jQuery("#BspItem_lat").val(places[0].geometry.location.nb);
            jQuery("#BspItem_lng").val(places[0].geometry.location.ob);


        });
        // [END region_getplaces]

        // Bias the SearchBox results towards places that are within the bounds of the

    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>
<style>
    #target {
        width: 345px;
    }
    .controls {
        margin-top: 16px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #BspItem_loc_name {
        background-color: #fff;
        padding: 0 11px 0 13px;
        width: 400px;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        text-overflow: ellipsis;
    }

    #BspItem_loc_name:focus {
        border-color: #4d90fe;
        margin-left: -1px;
        padding-left: 14px;  /* Regular padding-left + 1. */
        width: 401px;
    }

    .pac-container {
        font-family: Roboto;
    }

    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
    }

    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }


</style>
<div id="map-canvas"></div>
<h1>Manage Bsp Items</h1>



<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'bsp-item-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'cssFile' => Yii::app()->theme->baseUrl . "/assets/css/gridview.css",
    'pager' => array(
        'cssFile' => '',
    ),
    'columns' => array(
        array('name' => 'group_id', 'value' => '!empty($data->group) ? $data->group->name : ""'),
        array('name' => 'category_id', 'value' => !empty($data->category) ? $data->category->name : ""),
        array('name' => 'sub_category_id', 'value' => '!empty($data->sub_category) ? $data->sub_category->name : ""'),
        array('name' => 'per_price', 'value' => '!empty($data->_per_price_options[$data->per_price]) ? $data->_per_price_options[$data->per_price] : ""'),
        'name',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
