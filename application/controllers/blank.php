<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blank extends CI_Controller {

	public function index()
	{
        $data['web'] = $this->db->get('web')->row_array();
		$this->load->view('blank/index', $data);
	}
}
