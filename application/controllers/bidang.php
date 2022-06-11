<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bidang extends CI_Controller {

	public function index()
	{
		$data['page_title'] ='Tentang Magang';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('bidang/index');
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

	public function register()
	{
		$this->load->model('M_data');
        $data = array(
            'bidang1' => $this->M_data->bidang(),
        );

		$data['page_title'] ='Bidang DISKOMINFO';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('bidang/register/index');
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

	public function register_mahasiswa()
	{
		$input =  $this->input->get('id_bidang', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('bidang', ['id_bidang'=>$input])->row_array(),
            'user_file1' => $this->M_data->user_file1(),
            'peserta1' => $this->M_data->peserta2(),
        );
        
		$data['page_title'] ='Bidang DISKOMINFO';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('bidang/register/mahasiswa');
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

    public function proses_mahasiswa()
    {
        $p = $this->input->post();
        $data = [
            'id_bidang'             => $p['id_bidang'],
            'kode_bidang'           => $p['kode_bidang'],
            'nama_bidang'           => $p['nama_bidang'],
            'id_ketua'              => $p['id_ketua'],
            'nip'                   => $p['nip'],
            'nama_ketua'            => $p['nama_ketua'],
            'email_ketua'           => $p['email_ketua'],
            'telepon_ketua'         => $p['telepon_ketua'],
            'reward'             	=> $p['reward'],
            'keperluan'             => $p['keperluan'],
            'id'             		=> $p['id'],
            'nama'            		=> $p['nama'],
            'email'              	=> $p['email'],
            'telepon'   			=> $p['telepon'],
            'kampus'                => $p['kampus'],
            'p_studi'               => $p['p_studi'],
            'nim'                   => $p['nim'],
            'nik'                  	=> $p['nik'],
            'acc_peserta'           => $p['acc_peserta'],
        ];
        $data2 = [
            'id'             => $p['id'],
            's_magang'       => $p['s_magang'],
        ];
        $this->db->trans_start();
        $this->db->insert('peserta', $data,['id_bidang'=>$p['id_bidang']]);
        $this->db->update('user', $data2,['id'=>$p['id']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Yeay, Kamu sudah mendaftar, stay tune ya dashboard kamu lalu cek secara berkala agar tidak ketinggalan info <p>&#128519</p><p>&#128521</p>", "success");');
        redirect('mahasiswa');
    }

	public function view()
	{
		$input =  $this->input->get('id_bidang', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('bidang', ['id_bidang'=>$input])->row_array(),
        );

		$data['page_title'] ='View Bidang';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('bidang/view/index');
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}
}
