<?php
$latitude = "13.344262899999999";
$longitude = "74.7949515";
$geolocation = $latitude.','.$longitude;
$request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
$file_contents = file_get_contents($request);
$json_decode = json_decode($file_contents);
$resonse =array();
echo "<pre>";
print_r($json_decode);
echo "</pre>";
echo $json_decode->results[0]->address_components[2]->long_name
?>
