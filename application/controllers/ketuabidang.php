<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ketuabidang extends CI_Controller {

	public function index()
	{
		$data['page_title'] ='Dashboard';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/meta', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar');
		$this->load->view('ketuabidang/index');
		$this->load->view('template/footer', $data);
		$this->load->view('template/js');
	}
}
