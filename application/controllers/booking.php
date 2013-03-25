<?php

class booking extends CI_Controller {

	public function index() {


		$this->load->view('booking/index');
	}

	
	public function create_new() {
		

		//$url = 'http://api.ean.com/ean-services/rs/hotel/v3/list?minorRev=14&apiKey=d2j7ufn9b6c5e2muza2bv83r&cid=392498&IP=64.202.61.13&locale=en_us&city=long+island+city&stateProvince=ny&countryCode=usa&numberOfResults=20&searchRadius=50&supplierCacheTolerance=MED_ENHANCED&arrivalDate=03-27-2013&departureDate=03-29-2013&room1=2';
		
		$newdata = array(
				'username'  => 'tejas',
				'email'     => 'tj@tejas.com',
				'logged_in' => TRUE
		);
		
		$this->session->set_userdata($newdata);
		print_r( $this->session->all_userdata());


	}

}

