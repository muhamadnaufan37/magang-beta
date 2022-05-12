<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superadmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai superadmin", "warning");');
            redirect('auth');
        }
    }

	public function index()
	{
		$this->load->model('M_data');
        $data = array(
			'jumlahakun' => $this->M_data->jumlahuser(),
			'jumlahadmin' => $this->M_data->jumlahsuperadmin(),
			'jumlahadminkab' => $this->M_data->jumlahadminkab(),
			'jumlahmhs' => $this->M_data->jumlahmhs(),
			'jumlahsiswa' => $this->M_data->jumlahsiswa(),
			'jumlahpeserta' => $this->M_data->jumlahpeserta(),
            'token' => $this->M_data->user_token(),
            'notif1' => $this->M_data->notif(),
        );

		$data['page_title'] ='Dashboard';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('template/meta', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar');
		$this->load->view('superadmin/index', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/js');
	}

    public function profile()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
	    $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim|max_length[12]', [
	        'max_length' => 'Number Max 12 Digit!'
	    ]);

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Dashboard';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar');
        $this->load->view('profile/index', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/js');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $telepon = $this->input->post('telepon');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/images/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('telepon', $telepon);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', 'swal("Selamat", "Your profile has been updated", "success");');
            redirect('superadmin/profile');
        }
    }

    public function passwordupdate()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('current_password', 'old password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'new password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Konfirmasi Password Baru', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
        $this->load->view('profile/index', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', 'swal("Warning!", "Wrong current password!", "warning");');
                redirect('superadmin/profile');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', 'swal("Warning!", "New password cannot be the same as current password!", "warning");');
                    redirect('superadmin/profile');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', 'swal("Berhasil!", "Password has been changed!", "success");');
                    redirect('superadmin/profile');
                }
            }
        }
    }

    public function emailupdate()
    {
        $p = $this->input->post();
        $user = [
            'id'            => $p['id'],
            'email'         => $p['email'],
            'v_email'       => 0,
            'is_active'     => 0,
        ];
        $this->db->trans_start();
        $this->db->update('user',$user,['id'=>$p['id']]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Email has been updated, Please check your email to activation account!", "success");');
        redirect('superadmin/logout');
    }

    public function account()
    {
        $this->load->model('M_data');
        $data = array(
            'jumlahakun' => $this->M_data->jumlahuser(),
            'alluser1' => $this->M_data->alluser(),
            'siswa3' => $this->M_data->peserta(),
            'superadmin1' => $this->M_data->superadmin(),
            'admin1' => $this->M_data->adminkab(),
            'kabid1' => $this->M_data->kabid(),
            'kadis1' => $this->M_data->kadis(),
            'pembimbing1' => $this->M_data->pembimbing(),
        );

        $data['page_title'] ='Account';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar');
        $this->load->view('superadmin/account/index', $data);
		$this->load->view('template/footer', $data);
		$this->load->view('template/js');
    }

    public function add_account_1() {

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('telepon', 'tTelepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Password too short'
        ]);

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah Account Superadmin';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/account/add_superadmin', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'v_email' => 0,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 0,
                'image' => 'admin.png',
                'add' => htmlspecialchars($this->input->post('add', true)),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created, Pleace verification email to activation account!", "warning");');
            redirect('superadmin/account');
        }
    }

    public function add_account_2() {

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('telepon', 'tTelepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Password too short'
        ]);

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah Account Petugas';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/account/add_petugas', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'v_email' => 0,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'image' => 'admin.png',
                'add' => htmlspecialchars($this->input->post('add', true)),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created, Pleace verification email to activation account!", "warning");');
            redirect('superadmin/account');
        }
    }

    public function add_account_3() {

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('telepon', 'tTelepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Password too short'
        ]);

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah Account Ketua Bidang';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/account/add_kabid', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'v_email' => 0,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 0,
                'image' => 'admin.png',
                'add' => htmlspecialchars($this->input->post('add', true)),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created, Pleace verification email to activation account!", "warning");');
            redirect('superadmin/account');
        }
    }

    public function add_account_4() {

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('telepon', 'tTelepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Password too short'
        ]);

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah Account Kasi';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/account/add_kasi', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'v_email' => 0,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 4,
                'is_active' => 0,
                'image' => 'admin.png',
                'add' => htmlspecialchars($this->input->post('add', true)),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created, Pleace verification email to activation account!", "warning");');
            redirect('superadmin/account');
        }
    }

    public function add_account_7() {

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('telepon', 'tTelepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Password too short'
        ]);

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah Account Pembimbing';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/account/add_pembimbing', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'v_email' => 0,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 7,
                'is_active' => 0,
                'image' => 'admin.png',
                'add' => htmlspecialchars($this->input->post('add', true)),
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created, Pleace verification email to activation account!", "warning");');
            redirect('superadmin/account');
        }
    }

    public function bidang()
    {
        $this->load->model('M_data');
        $data = array(
            'bidang1' => $this->M_data->bidang(),
        );

        $data['page_title'] ='Kelola Bidang';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/bidang/index', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
    }

    public function add_bidang()
    {
        $this->form_validation->set_rules('nama_bidang', 'nama_bidang', 'required|trim');
        $this->form_validation->set_rules('kode_bidang', 'kode_bidang', 'required|trim|is_unique[bidang.kode_bidang]', [
            'is_unique' => 'This kode has already!'
        ]);

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah Bidang';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/bidang/add', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'kode_bidang' => htmlspecialchars($this->input->post('kode_bidang', true)),
                'nama_bidang' => htmlspecialchars($this->input->post('nama_bidang', true)),
                's_bidang' => 1,
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'slot_siswa' => htmlspecialchars($this->input->post('slot_siswa', true)),
                'slot_mhs' => htmlspecialchars($this->input->post('slot_mhs', true)),
                'slot_mhs_penelitian' => htmlspecialchars($this->input->post('slot_mhs_penelitian', true)),
                'edit' => htmlspecialchars($this->input->post('edit', true)),
                'date_created' => time()
            ];
            $this->db->insert('bidang', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Bidang has been created!", "success");');
            redirect('superadmin/bidang');
        }
    }

    public function edit_bidang()
    {
        $this->form_validation->set_rules('nama_bidang', 'nama_bidang', 'required|trim');
        $this->form_validation->set_rules('kode_bidang', 'kode_bidang', 'required|trim|is_unique[bidang.kode_bidang]', [
            'is_unique' => 'This kode has already!'
        ]);

        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('bidang', ['id'=>$input])->row_array(),
        );
        $data['page_title'] ='Edit Bidang';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['bidang'] = $this->db->get('bidang')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/bidang/edit', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
    }

    public function update_bidang()
    {
        $p = $this->input->post();
            $data = [
                'id'                    => $p['id'],
                'kode_bidang'           => $p['kode_bidang'],
                'nama_bidang'           => $p['nama_bidang'],
                's_bidang'              => $p['s_bidang'],
                'deskripsi'             => $p['deskripsi'],
                'slot_siswa'            => $p['slot_siswa'],
                'slot_mhs'              => $p['slot_mhs'],
                'slot_mhs_penelitian'   => $p['slot_mhs_penelitian'],
                'edit'                  => $p['edit'],
            ];
            $this->db->trans_start();
            $this->db->update('bidang', $data,['id'=>$p['id']]);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Bidang has been updated!", "success");');
            redirect('superadmin/bidang');
    }

    public function delete_bidang($id)
    {
        $this->db->trans_start();
        $this->db->delete('bidang',['id'=>$id]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Bidang has been deleted!", "success");');
        redirect('superadmin/bidang');
    }

    public function pages()
    {
        $this->load->model('M_data');
        $data = array(
            'landing1' => $this->M_data->landing(),
        );

        $data['page_title'] ='Pages';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/page/index', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
    }

    public function add_pages()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim|is_unique[landing.judul]', [
            'is_unique' => 'Judul has already!'
        ]);
        // $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah Pages';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/page/add_page', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'judul' => htmlspecialchars($this->input->post('judul', true)),
                // 'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'is_active' => 1,
                'created_by' => htmlspecialchars($this->input->post('created_by', true))
            ];
            $this->db->insert('landing', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been created!", "success");');
            redirect('superadmin/pages');
        }
    }

    public function edit_pages()
    {
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');
        $this->form_validation->set_rules('judul', 'judul', 'required|trim|is_unique[landing.judul]', [
            'is_unique' => 'This kode has already!'
        ]);

        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('landing', ['id'=>$input])->row_array(),
        );
        $data['page_title'] ='Edit Pages';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['landing'] = $this->db->get('landing')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/page/edit_page', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
    }

    public function update_pages()
    {
        $p = $this->input->post();
            $data = [
                'id'                    => $p['id'],
                'judul'                 => $p['judul'],
                'deskripsi'             => $p['deskripsi'],
                'is_active'             => $p['is_active'],
                'update_in'             => $p['update_in'],
                'update_by'             => $p['update_by'],
            ];
            $this->db->trans_start();
            $this->db->update('landing', $data,['id'=>$p['id']]);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been updated!", "success");');
            redirect('superadmin/pages');
    }

    public function delete_pages($id)
    {
        $this->db->trans_start();
        $this->db->delete('landing',['id'=>$id]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('superadmin/pages');
    }

    public function add_notif()
    {
        $this->form_validation->set_rules('judul', 'judul', 'required|trim');
        $this->form_validation->set_rules('isi', 'isi', 'required|trim');

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Buat Notifikasi';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/notif/add', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'id'            => htmlspecialchars($this->input->post('id', true)),
                'judul'         => htmlspecialchars($this->input->post('judul', true)),
                'level'         => htmlspecialchars($this->input->post('level', true)),
                'isi'           => htmlspecialchars($this->input->post('isi', true)),
                'tujuan'        => htmlspecialchars($this->input->post('tujuan', true))
            ];
            $this->db->insert('notif', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been created!", "success");');
            redirect('superadmin');
        }
    }

    public function edit_notif($id)
    {
        $input =  $this->input->get('id_notif', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('notif', ['id_notif'=>$id])->row_array(),
        );

        $data['page_title'] ='Edit Notifikasi';
        $data['side_title'] ='APTIKA';
        $data['notif'] = $this->db->get('notif')->row_array();
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/notif/edit', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
    }

    public function update_notif()
    {
        $p = $this->input->post();
            $data = [
                'id_notif'              => $p['id_notif'],
                'id'                    => $p['id'],
                'judul'                 => $p['judul'],
                'level'                 => $p['level'],
                'isi'                   => $p['isi'],
                'tujuan'                => $p['tujuan'],
            ];
            $this->db->trans_start();
            $this->db->update('notif', $data,['id_notif'=>$p['id_notif']]);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been updated!", "success");');
            redirect('superadmin');
    }

    public function delete_notif($id)
    {
        $this->db->trans_start();
        $this->db->delete('notif',['id_notif'=>$id]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('superadmin');
    }

    public function faq()
    {
        $this->load->model('M_data');
        $data = array(
            'faq1' => $this->M_data->faq(),
        );

        $data['page_title'] ='Frequently Asked Questions';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/faq/index', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
    }

    public function add_faq()
    {
        $this->form_validation->set_rules('tanya', 'tanya', 'required|trim|is_unique[faq.tanya]', [
            'is_unique' => 'Judul has already!'
        ]);
        $this->form_validation->set_rules('jawab', 'jawab', 'required|trim');

        if ($this->form_validation->run() == false) {
        $data['page_title'] ='Tambah FAQ';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/faq/add_faq', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
        } else {
            $data = [
                'tanya' => htmlspecialchars($this->input->post('tanya', true)),
                'jawab' => htmlspecialchars($this->input->post('jawab', true)),
                'is_active' => 1,
                'created_by' => htmlspecialchars($this->input->post('created_by', true))
            ];
            $this->db->insert('faq', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been created!", "success");');
            redirect('superadmin/faq');
        }
    }

    public function edit_faq()
    {
        $this->form_validation->set_rules('jawab', 'jawab', 'required|trim');
        $this->form_validation->set_rules('tanya', 'tanya', 'required|trim|is_unique[faq.tanya]', [
            'is_unique' => 'This kode has already!'
        ]);

        $input =  $this->input->get('id', TRUE);
        $this->load->model('M_data');
        $data = array(
            'edit' => $this->db->get_where('faq', ['id'=>$input])->row_array(),
        );
        $data['page_title'] ='Edit FAQ';
        $data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['faq'] = $this->db->get('faq')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('template/meta', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar');
        $this->load->view('superadmin/faq/edit_faq', $data);
        $this->load->view('template/footer', $data);
        $this->load->view('template/js');
    }

    public function update_faq()
    {
        $p = $this->input->post();
            $data = [
                'id'                    => $p['id'],
                'tanya'                 => $p['tanya'],
                'jawab'                 => $p['jawab'],
                'is_active'             => $p['is_active'],
                'update_in'             => $p['update_in'],
                'update_by'             => $p['update_by'],
            ];
            $this->db->trans_start();
            $this->db->update('faq', $data,['id'=>$p['id']]);
            $this->db->trans_complete();
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been updated!", "success");');
            redirect('superadmin/faq');
    }

    public function delete_faq($id)
    {
        $this->db->trans_start();
        $this->db->delete('faq',['id'=>$id]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Data has been deleted!", "success");');
        redirect('superadmin/faq');
    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', 'swal("Berhasil!", "Email has been updated, Please check your email to activation account!", "success");');
        redirect('auth');
    }
}
