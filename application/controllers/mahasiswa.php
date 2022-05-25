<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '5') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai Mahasiswa", "warning");');
            redirect('auth');
        }
    }

	public function index()
	{
		$data['page_title'] ='Dashboard';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/index', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

	public function profile()
	{
		$input =  $this->input->get('id', TRUE);
		$this->load->model('M_data');
        $data = array(
            'notif1' => $this->M_data->notif(),
			'jumlahnotif' => $this->M_data->jumlahnotif(),
			'prov1' => $this->M_data->prov(),
        );

        $data['provinsi'] = $this->M_wilayah->get_all_provinsi();
        $data['page_title'] ='Profile';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/profile', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

    public function update_profile1()
    {
        $p = $this->input->post();
            $data = [
                'id'                    => $p['id'],
                'agama'                 => $p['agama'],
                'asal_sklh'             => $p['asal_sklh'],
            ];
            $this->db->trans_start();
            $this->db->update('user', $data,['id'=>$p['id']]);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
            redirect('mahasiswa/profile');
    }

    public function update_profile2()
    {
        $p = $this->input->post();
            $data = [
                'id'                    => $p['id'],
                'telepon'                 => $p['telepon'],
                'kode_pos'              => $p['kode_pos'],
                'alamat'             	=> $p['alamat'],
            ];
            $this->db->trans_start();
            $this->db->update('user', $data,['id'=>$p['id']]);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
            redirect('mahasiswa/profile');
    }

    public function update_profile3()
    {
        $p = $this->input->post();
            $data = [
                'id'                    => $p['id'],
                'kp_nama'               => $p['kp_nama'],
                'kp_posisi'             => $p['kp_posisi'],
                'kp_nomor'             	=> $p['kp_nomor'],
            ];
            $this->db->trans_start();
            $this->db->update('user', $data,['id'=>$p['id']]);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
            redirect('mahasiswa/profile');
    }

    public function passwordupdate()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('current_password', 'old password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'new password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Konfirmasi Password Baru', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
		$this->load->view('mahasiswa/profile', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', 'swal("Warning!", "Wrong current password!", "warning");');
                redirect('mahasiswa/profile');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', 'swal("Warning!", "New password cannot be the same as current password!", "warning");');
                    redirect('mahasiswa/profile');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

			        $this->session->unset_userdata('email');
			        $this->session->unset_userdata('role_id');
                    $this->session->set_flashdata('message', 'swal("Berhasil!", "Password has been changed, Pleace try login to start", "success");');
                    redirect('auth');
                }
            }
        }
    }

	public function jadwal()
	{
		$data['page_title'] ='Calender';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/jadwal', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}
}
