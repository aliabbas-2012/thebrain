<?php

if(isset($_GET['ajax'])){
    $_SERVER['QUERY_STRING']  = str_replace("ajax=1&iframe=1&","",$_SERVER['QUERY_STRING']);
}

$ifram_url = $this->createUrl('/web/offers/search/', array("iframe" => 1)) . "&" . $_SERVER['QUERY_STRING'];

echo '<iframe src="' . $ifram_url . '" style="position: relative; 
            height: 500px; width: 100%" scrolling="no" frameborder="0" /></iframe>';
?>
