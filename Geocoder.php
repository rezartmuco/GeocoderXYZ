<?php
class Geocoder
{
private $geocodingservice;	
private $key;
public $query;

function __construct($authkey,$host="https://geocode.xyz"){
	$this->geocodingservice=$host;
	$this->key=$authkey;
	if(!$this->_is_curl_installed()){echo "curl not installed"; die;}
 
}
 
private function _is_curl_installed() {
    if  (in_array  ('curl', get_loaded_extensions())) {
        return true;
    }
    else {
        return false;
    }
} 


 public function curlreq($query,$simplegeocodig=true,$additionalfields=array()){
	 
   $curl = curl_init();
   $simplegeocodig==true?$locfield="locate":$locfield="scantext";

   $curloptions=array(); 	
   $curloptions['geoit']='JSON';
   $curloptions['auth']=$this->key;
   $curloptions[$locfield]=$query;
   foreach($additionalfields as $fname=>$fval){
    $curloptions[$fname]=$fval;
   }
 
 curl_setopt_array($curl, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $this->geocodingservice,
    CURLOPT_USERAGENT => 'API REQUEST FROM GEOCODEphpLib',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $curloptions
 ]);
 //=============================================
   
 $resp = curl_exec($curl);
 curl_close($curl);
 return $resp;
 }


 public function geocode($query){
  return json_decode($this->curlreq($query),TRUE);
 }

 public function reversegeocode($query){
  return json_decode($this->curlreq($query),TRUE);
 }

 public function geoparse($query){
   return json_decode($this->curlreq($query,false),TRUE);
 }

 public function sentiment($query){
    return json_decode($this->curlreq($query,false),TRUE);
 }

 public function batchgeocode($queryarray){
 $result=array();	
        foreach($queryarray as $query){
           $result[]=$this->geocode($query);
        }	
 return $result;
 }

}

