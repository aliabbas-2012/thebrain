<?php

/**
 * @author Ali Abbas
 * @abstract use for 
 *  setting new  module
 *  
 */
$modules = array(
    // uncomment the following to enable the Gii tool
    // uncomment the following to enable the Gii tool

    'web',
    'gii' => array(
        'class' => 'system.gii.GiiModule',
        'password' => '123',
        // If removed, Gii defaults to localhost only. Edit carefully to taste.
        'ipFilters' => array('127.0.0.1', '::1'),
        'generatorPaths' => array(
            'ext.giix-core', // giix generators
        ),
    ),
    'Backup',
);
?>
