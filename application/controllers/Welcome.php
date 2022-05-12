<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

	public function index()
	{
		$this->load->view('petugas/index');
	}
}
