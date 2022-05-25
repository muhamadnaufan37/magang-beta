<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ketuabidang extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '3') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai ketuabidang", "warning");');
            redirect('auth');
        }
    }

	public function index()
	{
		$this->load->model('M_data');
        $data = array(
            'notif1' => $this->M_data->notif(),
			'jumlahnotif' => $this->M_data->jumlahnotif(),
        );

		$data['page_title'] ='Dashboard';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template2/meta', $data);
        $this->load->view('template2/navbar', $data);
        $this->load->view('template2/sidebar');
		$this->load->view('ketuabidang/index');
        $this->load->view('template2/js');
	}

	public function verifemail()
	{
		$data['page_title'] ='Verif';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('ketuabidang/page/verifemail', $data);
	}

	public function profile()
	{
		$this->load->model('M_data');
        $data = array(
            'notif1' => $this->M_data->notif(),
			'jumlahnotif' => $this->M_data->jumlahnotif(),
			'prov1' => $this->M_data->prov(),
			'bidang1' => $this->M_data->bidang(),
        );

		$data['provinsi'] = $this->M_wilayah->get_all_provinsi();
    	$data['path'] = base_url('assets');
		$data['page_title'] ='Profile';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template2/meta', $data);
        $this->load->view('template2/navbar', $data);
        $this->load->view('template2/sidebar', $data);
		$this->load->view('profile/index1', $data);
        $this->load->view('template2/js', $data);
	}
  
	  function add_ajax_kab($id_prov){
	      $query = $this->db->get_where('wilayah_kabupaten',array('provinsi_id'=>$id_prov));
	      $data = "<option value=''>- Select Kabupaten -</option>";
	      foreach ($query->result() as $value) {
	          $data .= "<option value='".$value->id."'>".$value->nama."</option>";
	      }
	      echo $data;
	  }
	  
	  function add_ajax_kec($id_kab){
	      $query = $this->db->get_where('wilayah_kecamatan',array('kabupaten_id'=>$id_kab));
	      $data = "<option value=''> - Pilih Kecamatan - </option>";
	      foreach ($query->result() as $value) {
	          $data .= "<option value='".$value->id."'>".$value->nama."</option>";
	      }
	      echo $data;
	  }
	  
	  function add_ajax_des($id_kec){
	      $query = $this->db->get_where('wilayah_desa',array('kecamatan_id'=>$id_kec));
	      $data = "<option value=''> - Pilih Desa - </option>";
	      foreach ($query->result() as $value) {
	          $data .= "<option value='".$value->id."'>".$value->nama."</option>";
	      }
	      echo $data;
  }
}