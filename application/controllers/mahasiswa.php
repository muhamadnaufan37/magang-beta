<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('Ciqrcode');
        $this->load->library('form_validation');
        if ($this->session->userdata('role_id') != '5') {
            $this->session->set_flashdata('message', 'swal("Ops!", "Anda harus login sebagai Mahasiswa", "warning");');
            redirect('auth');
        }
    }

	public function qrcode($kodenya)
	{
		//format png
		QRcode::png(
			$kodenya,
			$outfile = false,
			$level = QR_ECLEVEL_H,
			$size = 6,
			$margin = 2
		);
	}

	public function index()
	{
		$this->load->model('M_data');
        $data = array(
            'user_file1' => $this->M_data->user_file1(),
        );

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
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');

		$input =  $this->input->get('id', TRUE);
		$this->load->model('M_data');
        $data = array(
            'notif1' => $this->M_data->notif(),
			'jumlahnotif' => $this->M_data->jumlahnotif(),
            'user_file1' => $this->M_data->user_file1(),
        );

		if ($this->form_validation->run() == false) {
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
		} else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');

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

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', 'swal("Berhasil!", "data has been updated!", "success");');
            redirect('mahasiswa/profile');
        }
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
                'telepon'               => $p['telepon'],
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

	public function list_tiket()
	{
		$this->load->model('M_data');
        $data = array(
            'bidang1' => $this->M_data->bidang(),
            'user_tiket1' => $this->M_data->user_tiket(),
        );
		
		$data['page_title'] ='List Tiket';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/list_tiket', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

	public function add_tiket()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim');
		$this->form_validation->set_rules('perihal', 'perihal', 'required|trim');
		$this->form_validation->set_rules('bidang', 'bidang', 'required|trim');
		$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');

		$this->load->model('M_data');
        $data = array(
            'bidang1' => $this->M_data->bidang(),
        );

        if ($this->form_validation->run() == false) {
		$data['page_title'] ='Tiket Mahasiswa';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/add_tiket', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
		} else {

			$this->load->library('upload');
		    $dataInfo = array();
		    $files = $_FILES;
		    $cpt = count($_FILES['images']['name']);
		    for($i=0; $i<$cpt; $i++)
		    {           
		        $_FILES['images']['name']= $files['images']['name'][$i];
		        $_FILES['images']['type']= $files['images']['type'][$i];
		        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
		        $_FILES['images']['error']= $files['images']['error'][$i];
		        $_FILES['images']['size']= $files['images']['size'][$i];    

		        $this->upload->initialize($this->set_upload_options());
		        $this->upload->do_upload('images');
		        $dataInfo[] = $this->upload->data();
		    }

            $data = [
		        'lampiran1' => $dataInfo[0]['file_name'],
				'id' => htmlspecialchars($this->input->post('id', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'perihal' => htmlspecialchars($this->input->post('perihal', true)),
                'bidang' => htmlspecialchars($this->input->post('bidang', true)),
				'status' => 'Terkirim',
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true))
            ];

            $this->db->insert('tiket', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data Sudah Dikirim, Harap Menunggu Konfirmasi Selanjutnya", "success");');
            redirect('mahasiswa/list_tiket');
		}
	}

	private function set_upload_options()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = './assets/file_upload/tiket/';
	    $config['allowed_types'] = 'gif|jpg|png|pdf';
	    $config['max_size']      = '2048';
	    $config['overwrite']     = FALSE;

	    return $config;
	}

	public function magang_selesai()
	{
		$data['page_title'] ='Rapor Magang';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/magang_selesai', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

	public function rapor_detail()
	{
		$data['page_title'] ='Rapor Magang';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/rapor_detail', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

	public function rapor_print()
	{
		$data['page_title'] ='Rapor Magang';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('mahasiswa/page/rapor_print', $data);
	}

	public function esertifikat_print()
	{
		$data['page_title'] ='E - sertifikat Magang';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		
		$this->load->view('mahasiswa/page/esertifikat_print', $data);
	}

	public function doc_rek_kampus()
	{
		$this->load->model('M_data');
        $data = array(
            'user_file1' => $this->M_data->user_file1(),
        );

		$this->form_validation->set_rules('nama', 'nama', 'required|trim');

		if ($this->form_validation->run() == false) {
		$data['page_title'] ='Upload Surat Rekomendasi Kampus';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/doc_rek_kampus', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
		} else {

			$this->load->library('upload');
		    $dataInfo = array();
		    $files = $_FILES;
		    $cpt = count($_FILES['images']['name']);
		    for($i=0; $i<$cpt; $i++)
		    {           
		        $_FILES['images']['name']= $files['images']['name'][$i];
		        $_FILES['images']['type']= $files['images']['type'][$i];
		        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
		        $_FILES['images']['error']= $files['images']['error'][$i];
		        $_FILES['images']['size']= $files['images']['size'][$i];    

		        $this->upload->initialize($this->set_upload_doc1());
		        $this->upload->do_upload('images');
		        $dataInfo[] = $this->upload->data();
		    }

            $data = [
		        'doc_rek_kampus' => $dataInfo[0]['file_name'],
				'id' => htmlspecialchars($this->input->post('id', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'kampus' => htmlspecialchars($this->input->post('kampus', true)),
                'p_studi' => htmlspecialchars($this->input->post('p_studi', true)),
				'nim' => htmlspecialchars($this->input->post('nim', true)),
				'keperluan' => htmlspecialchars($this->input->post('keperluan', true))
            ];

            $this->db->insert('file1', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data Sudah Dikirim, Harap Menunggu Konfirmasi Selanjutnya", "success");');
            redirect('mahasiswa/doc_rek_kampus');
		}

	}

	private function set_upload_doc1()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = './assets/file_upload/doc_rekomendasi_kampus/';
	    $config['allowed_types'] = 'pdf';
	    $config['max_size']      = '2048';
	    $config['overwrite']     = FALSE;

	    return $config;
	}

    public function doc_rek_kampus_delete($id_surat)
    {
        $this->db->trans_start();
        $this->db->delete('file1',['id_surat'=>$id_surat]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Dokumen has been deleted!", "success");');
        redirect('mahasiswa/doc_rek_kampus');
    }

	public function doc_program()
	{
		$this->load->model('M_data');
        $data = array(
            'user_file2' => $this->M_data->user_file2(),
        );

		$this->form_validation->set_rules('nama', 'nama', 'required|trim');

		if ($this->form_validation->run() == false) {
		$data['page_title'] ='Upload Dokumen Program';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/doc_program', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
		} else {

			$this->load->library('upload');
		    $dataInfo = array();
		    $files = $_FILES;
		    $cpt = count($_FILES['images']['name']);
		    for($i=0; $i<$cpt; $i++)
		    {           
		        $_FILES['images']['name']= $files['images']['name'][$i];
		        $_FILES['images']['type']= $files['images']['type'][$i];
		        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
		        $_FILES['images']['error']= $files['images']['error'][$i];
		        $_FILES['images']['size']= $files['images']['size'][$i];    

		        $this->upload->initialize($this->set_upload_doc2());
		        $this->upload->do_upload('images');
		        $dataInfo[] = $this->upload->data();
		    }

            $data = [
		        'doc_program' => $dataInfo[0]['file_name'],
				'id' => htmlspecialchars($this->input->post('id', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'kampus' => htmlspecialchars($this->input->post('kampus', true)),
                'p_studi' => htmlspecialchars($this->input->post('p_studi', true)),
				'nim' => htmlspecialchars($this->input->post('nim', true)),
				'link_program' => htmlspecialchars($this->input->post('link_program', true))
            ];

            $this->db->insert('file2', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data Sudah Dikirim, Harap Menunggu Konfirmasi Selanjutnya", "success");');
            redirect('mahasiswa/doc_program');
		}
	}

	private function set_upload_doc2()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = './assets/file_upload/doc_program/';
	    $config['allowed_types'] = 'zip|rar';
	    $config['max_size']      = '100000';
	    $config['overwrite']     = FALSE;

	    return $config;
	}

    public function doc_program_delete($id_surat)
    {
        $this->db->trans_start();
        $this->db->delete('file2',['id_surat'=>$id_surat]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Dokumen has been deleted!", "success");');
        redirect('mahasiswa/doc_program');
    }

	public function doc_laporan()
	{
		$this->load->model('M_data');
        $data = array(
            'user_file3' => $this->M_data->user_file3(),
        );

		$this->form_validation->set_rules('nama', 'nama', 'required|trim');

		if ($this->form_validation->run() == false) {
		$data['page_title'] ='Upload Dokumen Laporan';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/doc_laporan', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
		} else {

			$this->load->library('upload');
		    $dataInfo = array();
		    $files = $_FILES;
		    $cpt = count($_FILES['images']['name']);
		    for($i=0; $i<$cpt; $i++)
		    {           
		        $_FILES['images']['name']= $files['images']['name'][$i];
		        $_FILES['images']['type']= $files['images']['type'][$i];
		        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
		        $_FILES['images']['error']= $files['images']['error'][$i];
		        $_FILES['images']['size']= $files['images']['size'][$i];    

		        $this->upload->initialize($this->set_upload_doc3());
		        $this->upload->do_upload('images');
		        $dataInfo[] = $this->upload->data();
		    }

            $data = [
		        'doc_laporan' => $dataInfo[0]['file_name'],
				'id' => htmlspecialchars($this->input->post('id', true)),
				'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
                'kampus' => htmlspecialchars($this->input->post('kampus', true)),
                'p_studi' => htmlspecialchars($this->input->post('p_studi', true)),
				'nim' => htmlspecialchars($this->input->post('nim', true))
            ];

            $this->db->insert('file3', $data);
            $this->session->set_flashdata('message', 'swal("Berhasil!", "Data Sudah Dikirim, Harap Menunggu Konfirmasi Selanjutnya", "success");');
            redirect('mahasiswa/doc_laporan');
		}
	}

	private function set_upload_doc3()
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = './assets/file_upload/doc_laporan/';
	    $config['allowed_types'] = 'pdf|docx';
	    $config['max_size']      = '2048';
	    $config['overwrite']     = FALSE;

	    return $config;
	}

    public function doc_laporan_delete($id_surat)
    {
        $this->db->trans_start();
        $this->db->delete('file3',['id_surat'=>$id_surat]);
        $this->db->trans_complete();
        $this->session->set_flashdata('message', 'swal("Berhasil!", "Dokumen has been deleted!", "success");');
        redirect('mahasiswa/doc_laporan');
    }

	public function logbook()
	{
		$data['page_title'] ='Logbook Harian';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/logbook', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}

	public function peserta()
	{
		$this->load->model('M_data');
        $data = array(
            'user_file' => $this->M_data->user_file1(),
            'peserta1' => $this->M_data->peserta2(),
        );

		$data['page_title'] ='Dashboard Penerimaan Peserta';
		$data['side_title'] ='APTIKA';
        $data['web'] = $this->db->get('web')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('mahasiswa/template/meta', $data);
        $this->load->view('mahasiswa/template/navbar', $data);
        $this->load->view('mahasiswa/template/sidebar');
		$this->load->view('mahasiswa/page/peserta', $data);
        $this->load->view('mahasiswa/template/footer');
        $this->load->view('mahasiswa/template/js');
	}
}
