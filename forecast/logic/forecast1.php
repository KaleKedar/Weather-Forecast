<?php

	//Test coordinates
	//'34.5794,-118.1165'
	
	//Google Geocode API
	//https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=AIzaSyAG-uo-3_lrPbqs54YQTF5-ViCpWRto6ZQ

	$location=htmlentities($_POST['location']);

	$location=str_replace(' ', '+', $location);

	$geocode_url='https://maps.googleapis.com/maps/api/geocode/json?address='.$location.'key=AIzaSyAG-uo-3_lrPbqs54YQTF5-ViCpWRto6ZQ';

	$location_data=json_decode(file_get_contents($geocode_url));

	$coordinates=$location_data->results[0]->geometry->location;

	$coordinates1=$coordinates->lat.','.$coordinates->lng;

	$place=$location_data->results[0]->address_components[0]->long_name;
	

	$api_url='https://api.darksky.net/forecast/2465b3281b54209e8a50fafc230c4a07/'.$coordinates1;

	$forecast=json_decode(file_get_contents($api_url));
	
	//echo '<pre>';
	//print_r($forecast);
	//echo '</pre>';

	// Current Conditions
	$temperature_current=round($forecast->currently->temperature);
	$summary_current=$forecast->currently->summary;
	$windspeed_current=round($forecast->currently->windSpeed);
	$humidity_current=$forecast->currently->humidity*100;

	//Set time zone based on location searched
	date_default_timezone_set($forecast->timezone);