<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
		if ($this->session->userdata('email')) {
            redirect('blank');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $this->load->model('M_data');
        $data = array(
            'landing1' => $this->M_data->landing(),
            'faq1' => $this->M_data->faq(),
        );

    	if ($this->form_validation->run() == false) {
		$data['page_title'] ='Magang';
        $data['web'] = $this->db->get('web')->row_array();
		$this->load->view('auth/template/header', $data);
		$this->load->view('auth/index', $data);
        $this->load->view('auth/template/footer', $data);
        } else {
            //validasinya success
            $this->_login();
        }
	}

    public function register()
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

    public function pengumuman()
    {
        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('landing', ['id'=>$input])->row_array(),
        );
        
        $data['page_title'] ='Announcement';
        $data['web'] = $this->db->get('web')->row_array();
        $data['landing'] = $this->db->get('landing')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('landing/pengumuman');
        $this->load->view('auth/template/footer', $data);
    }

    public function announcement()
    {
        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('landing', ['id'=>$input])->row_array(),
            'landing1' => $this->M_data->landing(),
        );
        
        $data['page_title'] ='Announcement';
        $data['web'] = $this->db->get('web')->row_array();
        $data['landing'] = $this->db->get('landing')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('landing/pengumumanall');
        $this->load->view('auth/template/footer', $data);
    }

    public function program()
    {
        $this->load->model('M_data');
        $data = array(
            'bidang1' => $this->M_data->bidang(),
        );
        
        $data['page_title'] ='Program';
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('landing/program');
        $this->load->view('auth/template/footer', $data);
    }

    public function disclaimer()
    {
        $data['page_title'] ='Disclaimer';
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('landing/disclaimer');
        $this->load->view('auth/template/footer', $data);
    }

    public function visimisi()
    {
        $data['page_title'] ='Visi & Misi';
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('landing/visimisi');
        $this->load->view('auth/template/footer', $data);
    }


	private function _login() {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        // usernya ada
        if($user) {

            // usernya aktif
            if($user['is_active'] == 1){
                //cek password
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'v_email' => $user['v_email'],
                        'role_id' => $user['role_id'],
                        'id' => $user['id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('superadmin');
                    } elseif ($user['role_id'] == 2) {
                        redirect('petugas');
                    } elseif ($user['role_id'] == 3) {
                        redirect('ketuabidang');
                    } elseif ($user['role_id'] == 4) {
                        redirect('kasi');
                    } elseif ($user['role_id'] == 5) {
                        redirect('mahasiswa');
                    } elseif ($user['role_id'] == 6) {
                        redirect('siswa');
                    } else {
                        redirect('pembimbing');
                    }
                } else {
                $this->session->set_flashdata('message', 'swal("Danger!", "Wrong Password!", "error");');
                redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', 'swal("Danger!", "This email has not been activated!", "error");');
                redirect('auth');
            }

        } else {
            $this->session->set_flashdata('message', 'swal("Danger!", "Email is not registered!", "error");');
                redirect('auth');
        }
    }

	public function register1()
	{
        if ($this->session->userdata('email')) {
            redirect('blank');
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
		$data['page_title'] ='Register';
		$data['page_cover'] ='Sign Up';
        $data['web'] = $this->db->get('web')->row_array();
		$this->load->view('template/meta', $data);
		$this->load->view('auth/register', $data);
        $this->load->view('template/js', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Congratulation!", "Account has been created, please check your email!", "success");');
            redirect('auth');
        }
	}

	public function forgotpass()
	{
		$data['page_title'] ='Forgotpass';
		$data['page_cover'] ='Forgot Password';
        $data['web'] = $this->db->get('web')->row_array();
		$this->load->view('auth/template/meta', $data);
		$this->load->view('auth/forgotpass', $data);
	}

	public function recovery()
	{
		$data['page_title'] ='Recovery';
		$data['page_cover'] ='Recovery Password';
        $data['web'] = $this->db->get('web')->row_array();
		$this->load->view('auth/template/meta', $data);
		$this->load->view('auth/recovery', $data);
	}

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', 'swal("Berhasil!", "You have been logged out!", "success");');
        redirect('auth');
    }
}
