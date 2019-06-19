<?php
include('Geocoder.php');

$key = '132263499722151279541x1';
$geocoder = new Geocoder($key);

//Forward geocoding example
$resp=$geocoder->geocode('Ma io stasera volevo cenare al lume di candela, non cucinarci! #Milano #blackout');
print_r($resp);


$batcharr=array("Ma io stasera volevo cenare al lume di candela, non cucinarci! #Milano #blackout",
		"Po un doja proper pica sot, jo kete mut tirane",
		"Nothing to do in Durres today, lets go to #Kruja",
		"Po KuzumBabai ca do tek api jot");
$resp=$geocoder->batchgeocode($batcharr);
print_r($resp);

/*

//Reverse Geocoding example
$resp=$geocoder->reversegeocode('55.68,12.59');

//Geoparsing example
$resp=$geocoder->geoparse("The most important part of Rome are located at san marco plazza");
print_r($resp);


//Sentiment Analyzis example
$resp=$geocoder->sentiment("In the bestselling novel Crazy Rich Asians, author Kevin Kwan fills his pages with juicy drama involving Singaporeâs elite families, and he almost devotes the same amount of space to the Southeast Asian nationâs mouthwatering food");
print_r($resp);
*/
?>
