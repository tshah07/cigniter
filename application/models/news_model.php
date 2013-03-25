<?php

class News_model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function get_news() {

		 
		$query = $this->db->query('select  *  from tbl_name LIMIT 30');
		$data = $query->result_array();

		return $data;
	}

}