<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class hotel_json {

    public function createUrl()
    {
    	
    }
    
    public function getData($url){
    	$data = file_get_contents($url);
    	$data = json_decode($data);
    	print_r($data);
    }
}