<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

	public function index()
	{
		$data['page_title'] ='Register';
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('auth/page/register');
        $this->load->view('auth/template/footer', $data);
	}

    public function siswa()
    {
        $data['page_title'] ='Register';
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('auth/page/siswa');
        $this->load->view('auth/template/footer', $data);
    }

    public function mahasiswa()
    {
        $data['page_title'] ='Register';
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('auth/page/mahasiswa');
        $this->load->view('auth/template/footer', $data);
    }
}
