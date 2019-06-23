<?php
			$geolocation = $_REQUEST['loc'];
			$request = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$geolocation.'&sensor=false'; 
			$file_contents = file_get_contents($request);
			$json_decode = json_decode($file_contents);
			$resonse =array();
			echo $json_decode->results[0]->address_components[4]->long_name;
?>