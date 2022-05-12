<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petugas extends CI_Controller {

	public function index()
	{
		$this->load->model('M_data');
        $data = array(
            'notif1' => $this->M_data->notif(),
        );

		$data['page_title'] ='Dashboard';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template2/meta', $data);
        $this->load->view('template2/navbar', $data);
        $this->load->view('template2/sidebar');
		$this->load->view('petugas/index');
        $this->load->view('template2/js');
	}

	public function profile()
	{
		$this->load->model('M_data');
        $data = array(
            'notif1' => $this->M_data->notif(),
        );

		$data['page_title'] ='Profile';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template2/meta', $data);
        $this->load->view('template2/navbar', $data);
        $this->load->view('template2/sidebar');
		$this->load->view('profile/index1');
        $this->load->view('template2/js');
	}
}
