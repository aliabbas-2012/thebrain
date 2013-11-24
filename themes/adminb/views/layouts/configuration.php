<?php

$aquardian = array();
$aquardian['accessControl'] = array(
    'Access Control' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/accessControl/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/accessControl/create')) . '</li>' .
    '</ul>',
    'User Groups' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/userGroups/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/userGroups/create')) . '</li>' .
    '</ul>',
    'Users' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/users/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/users/create')) . '</li>' .
    '</ul>'
);
echo "<div>";

$aquardian['userGroups'] = $aquardian['accessControl'];
$aquardian['users'] = $aquardian['accessControl'];

$aquardian_c['accessControl'] = 0;
$aquardian_c['userGroups'] = 1;
$aquardian_c['users'] = 2;


/** second menu * */
$aquardian['maintainceGroup'] = array(
    'Maintenance Group' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/maintainceGroup/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/maintainceGroup/create')) . '</li>' .
    '</ul>',
    'Maintenance Items' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/maintainceItems/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/maintainceItems/create')) . '</li>' .
    '</ul>',
    'Maintenance Brands' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/maintainceBrands/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/maintainceBrands/create')) . '</li>' .
    '</ul>',
    'Maintenance Types' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/maintenanceTypes/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/maintenanceTypes/create')) . '</li>' .
    '</ul>',
    'Location' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/location/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/location/create')) . '</li>' .
    '</ul>',
    'Supervisors' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/supervisors/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/supervisors/create')) . '</li>' .
    '</ul>',
    'Technicians' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/technicians/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/technicians/create')) . '</li>' .
    '</ul>',
);

$aquardian['maintainceItems'] = $aquardian['maintainceGroup'];
$aquardian['maintainceBrands'] = $aquardian['maintainceGroup'];
$aquardian['supervisors'] = $aquardian['maintainceGroup'];

$aquardian['maintenanceTypes'] = $aquardian['maintainceGroup'];
$aquardian['technicians'] = $aquardian['maintainceGroup'];
$aquardian['location'] = $aquardian['maintainceGroup'];


$aquardian_c['maintainceGroup'] = 0;
$aquardian_c['maintainceItems'] = 1;
$aquardian_c['maintainceBrands'] = 2;
$aquardian_c['maintenanceTypes'] = 3;
$aquardian_c['location'] = 4;
$aquardian_c['supervisors'] = 5;
$aquardian_c['technicians'] = 6;

/** third menu * */
$aquardian['maintenanceActivityItems'] = array(
    'Maintenance Activity' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/maintenanceActivity/index')) . '</li>' .
    '<li>' . CHtml::link('Create', array('/maintenanceActivity/create')) . '</li>' .
    '</ul>',
    'Items used in maintenance' => '<ul class="accordion-ul">' .
    '<li>' . CHtml::link('Listing', array('/maintenanceActivityItems/index')) . '</li>' .
    //'<li>' . CHtml::link('Create', array('/maintenanceActivityItems/create')) . '</li>' .
    '</ul>',
);


$aquardian['maintenanceActivity'] = $aquardian['maintenanceActivityItems'];

$aquardian_c['maintenanceActivityItems'] = 0;

$aquardian_c['maintenanceActivity'] = 2;


if (isset($aquardian[$this->id])) {

    $this->widget('zii.widgets.jui.CJuiAccordion', array(
        'panels' => $aquardian[$this->id],
        // additional javascript options for the accordion plugin
        'cssFile' => Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl . '/css/jq-aquradian.css'),
        'options' => array(
//                        'animated' => 'bounceslide',
            'autoHeight' => false,
            'navigation' => true,
            'clearStyle' => true,
            'resize' => true,
            'active' => $aquardian_c[$this->id],
        ),
        'htmlOptions' => array('style' => 'font-size:12px;margin-top:0')
    ));
}

echo "</div>";
?>
