<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

      function __construct() 
      {
       parent::__construct();
       
       $this->load->helper(array('url','html'));
       $this->load->model('m_wilayah');
       $this->load->library('form_validation');
      }

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
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->load->model('M_data');
        $data = array(
            'pt1' => $this->M_data->pt(),
        );

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|max_length[16]|is_unique[user.nik]', [
            'is_unique' => 'This nik has already registered!',
            'max_length' => 'Number Max 16 Digit/number you entered is wrong, Pleace check your code nik'
        ]);
        $this->form_validation->set_rules('nisn', 'nisn', 'required|trim|is_unique[user.nisn]', [
            'is_unique' => 'This nik has already registered!'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Your password must be 8-20 characters long.'
        ]);
        
        if ($this->form_validation->run() == false) {
        $data['provinsi']=$this->m_wilayah->get_all_provinsi();
        $data['page_title'] ='Siswa';
        $data['provinsi']=$this->m_wilayah->get_all_provinsi();
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('auth/page/siswa', $data);
        $this->load->view('auth/template/footer', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'email' => htmlspecialchars($this->input->post('email', true)),
                'v_email' => 0,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'nama_sekolah' => htmlspecialchars($this->input->post('nama_sekolah', true)),
                'jurusan' => htmlspecialchars($this->input->post('jurusan', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'nisn' => htmlspecialchars($this->input->post('nisn', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'provinsi' => htmlspecialchars($this->input->post('provinsi', true)),
                'kabupaten' => htmlspecialchars($this->input->post('kabupaten', true)),
                'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
                'desa' => htmlspecialchars($this->input->post('desa', true)),
                'kode_pos' => htmlspecialchars($this->input->post('kode_pos', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'role_id' => 6,
                'is_active' => 0,
                'image' => 'default.jpg',
                'date_created' => time()
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created, Pleace check verification email to activation account!", "warning");');
            redirect('auth');
        }
    }

    public function mahasiswa()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->load->model('M_data');
        $data = array(
            'pt1' => $this->M_data->pt(),
        );

        $this->form_validation->set_rules('nama', 'nama', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|max_length[16]|is_unique[user.nik]', [
            'is_unique' => 'This nik has already registered!',
            'max_length' => 'Number Max 16 Digit/number you entered is wrong, Pleace check your code nik'
        ]);
        $this->form_validation->set_rules('telepon', 'telepon', 'required|trim|max_length[12]|is_unique[user.telepon]', [
            'is_unique' => 'This Number has already registered!',
            'max_length' => 'Number Max 12 Digit!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]', [
            'min_length' => 'Your password must be 8-20 characters long.'
        ]);
        
        if ($this->form_validation->run() == false) {
        $data['provinsi']=$this->m_wilayah->get_all_provinsi();
        $data['page_title'] ='mahasiswa';
        $data['web'] = $this->db->get('web')->row_array();
        $this->load->view('auth/template/header', $data);
        $this->load->view('auth/page/mahasiswa', $data);
        $this->load->view('auth/template/footer', $data);
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'keperluan' => htmlspecialchars($this->input->post('keperluan', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'v_email' => 0,
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'agama' => htmlspecialchars($this->input->post('agama', true)),
                'jk' => htmlspecialchars($this->input->post('jk', true)),
                'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir', true)),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir', true)),
                'kampus' => htmlspecialchars($this->input->post('kampus', true)),
                'jenjang' => htmlspecialchars($this->input->post('jenjang', true)),
                'p_studi' => htmlspecialchars($this->input->post('p_studi', true)),
                'nim' => htmlspecialchars($this->input->post('nim', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'asal_sklh' => htmlspecialchars($this->input->post('asal_sklh', true)),
                'provinsi' => htmlspecialchars($this->input->post('provinsi', true)),
                'kabupaten' => htmlspecialchars($this->input->post('kabupaten', true)),
                'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
                'desa' => htmlspecialchars($this->input->post('desa', true)),
                'kode_pos' => htmlspecialchars($this->input->post('kode_pos', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'role_id' => 5,
                'is_active' => 0,
                'image' => 'default.jpg',
                'date_created' => time()
            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', 'swal("Berhasil!", "Account has been created, Pleace check verification email to activation account!", "warning");');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'muhamadnaufan39@gmail.com',
            'smtp_pass' => 'cimen1234',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->email->initialize($config);

        $this->email->from('muhamadnaufan39@gmail.com', 'SUPPORT Team');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('<p>Halo Membership,</p>
            <p>Silakan klik tombol di bawah untuk memverifikasi alamat email Anda</p>
            <p><a href="' . base_url() . 'register/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Aktifkan Akun Anda</a></p>
            <p>Jika Anda tidak membuat akun, Anda tidak perlu melakukan apapun.</p>
            <p>salam,</p>
            <p>Team Magang.</p>');
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
            $this->email->message('<p>Halo Membership,</p>
            <p>Ada permintaan untuk mengubah password anda!</p>
            <p>Ikuti link ini untuk menyetel ulang sandi.</p>
            <p><a href="' . base_url() . 'auth/resetPassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Reset Password</a></p>
            <p>Jika Anda tidak mengajukan permintaan ini, abaikan saja email ini. Jika iya, silahkan klik tombol di bawah ini untuk mengubah Password Anda</p>
            <p>Salam,</p>
            <p>Team Magang.</p>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->set('v_email', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', 'swal("Berhasil!", "Email: ' . $email . ' has been activated! Please login", "success");');
                    redirect('auth');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', 'swal("Danger!", "Account activation failed! Token expired!", "error");');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', 'swal("Danger!", "Account activation failed! Wrong token!", "error");');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', 'swal("Danger!", "Account activation failed! Wrong email!", "error");');
            redirect('auth');
        }
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
