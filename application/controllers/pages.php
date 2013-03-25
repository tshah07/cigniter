<?php

class Pages extends CI_Controller {

	public function view($page = 'home') {

		if (!file_exists('application/views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer', $data);
	}

	public function cart($page = 'create') {
		if (!file_exists('application/views/pages/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page);
		$this->load->library('cart');


		$data = array(
				'id' => 'sku_123ABC',
				'qty' => 1,
				'price' => 39.95,
				'name' => 'T-Shirt',
				'options' => array('Size' => 'L', 'Color' => 'Red')
		);
		$this->cart->insert($data);
		echo $this->cart->total();
		print_r($this->cart->contents());




		$this->load->library('javascript');




		$this->load->helper('captcha');
		$vals = array(
				'word' => 'Random word',
				'img_path' => './captcha/',
				'img_url' => 'http://example.com/captcha/',
				'font_path' => './path/to/fonts/texb.ttf',
				'img_width' => '150',
				'img_height' => 30,
				'expiration' => 7200
		);

		$cap = create_captcha($vals);
		echo $cap['image'];
	}

}
