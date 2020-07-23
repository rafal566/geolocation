<?php

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	include('openCage/AbstractGeocoder.php');
	include('openCage/Geocoder.php');

	$geocoder = new \OpenCage\Geocoder\Geocoder('356f759672fc4bc28b04674d1ccc7aa8');

	// displaying coordinates using address
	// $result = $geocoder->geocode('15 Frederick Road, Oldbury');
	// echo json_encode($result['results'], JSON_UNESCAPED_UNICODE);

	//displaying address using coordinates
	$result1 = $geocoder->geocode('52.46650,-1.98742');
	echo json_encode($result1['results'][0]['components'], JSON_UNESCAPED_UNICODE);

?>
