<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {
		
	
	function alluser()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->result_array();
	}

	function banned()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','-1');
		return $this->db->get()->result_array();
	}
	
	function superadmin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','1');
		return $this->db->get()->result_array();
	}
	
	function adminkab()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','2');
		return $this->db->get()->result_array();
	}
	
	function kabid()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','3');
		return $this->db->get()->result_array();
	}

	function kadis()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','4');
		return $this->db->get()->result_array();
	}

	function mhs()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','5');
		return $this->db->get()->result_array();
	}

	function siswa()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','6');
		return $this->db->get()->result_array();
	}

	function peserta()
	{
		$this->db->select('*');
		$this->db->from('user');
		$role= array('5', '6');
		$this->db->where_in('role_id', $role);
		return $this->db->get()->result_array();
	}

	function pembimbing()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','7');
		return $this->db->get()->result_array();
	}
	
	function bidang()
	{
		$this->db->select('*');
		$this->db->from('bidang');
		return $this->db->get()->result_array();
	}
	
	function jumlahuser()
	{
		$this->db->select('*');
		$this->db->from('user');
		return $this->db->get()->num_rows();
	}

	function jumlahsuperadmin()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','1');
		return $this->db->get()->num_rows();
	}

	function jumlahadminkab()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','2');
		return $this->db->get()->num_rows();
	}
	
	function jumlahmhs()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','5');
		return $this->db->get()->num_rows();
	}
	
	function jumlahsiswa()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('role_id','6');
		return $this->db->get()->num_rows();
	}
	
	function jumlahpeserta()
	{
		$this->db->select('*');
		$this->db->from('user');
		$role= array('5', '6');
		$this->db->where_in('role_id', $role);
		return $this->db->get()->num_rows();
	}
	
	function user_token()
	{
		$this->db->select('*');
		$this->db->from('user_token');
		return $this->db->get()->result_array();
	}
	
	function callcenter()
	{
		$this->db->select('*');
		$this->db->from('callcenter');
		return $this->db->get()->result_array();
	}

	function web()
	{
		$this->db->select('*');
		$this->db->from('web');
		return $this->db->get()->result_array();
	}

	function notif()
	{
		$this->db->select('*');
		$this->db->from('notif');
		return $this->db->get()->result_array();
	}
	
	function jumlahnotif()
	{
		$this->db->select('*');
		$this->db->from('notif');
		return $this->db->get()->num_rows();
	}

	function landing()
	{
		$this->db->select('*');
		$this->db->from('landing');
		return $this->db->get()->result_array();
	}

	function faq()
	{
		$this->db->select('*');
		$this->db->from('faq');
		return $this->db->get()->result_array();
	}

	function prov()
	{
		$this->db->select('*');
		$this->db->from('lokas');
		$this->db->where('prov');
		return $this->db->get()->result_array();
	}

	function pt()
	{
		$this->db->select('*');
		$this->db->from('pt');
		$this->db->where('s_pt','Aktif');
		return $this->db->get()->result_array();
	}

	function tanggal()
	{
		$this->db->select('*');
		$this->db->from('tanggal');
		return $this->db->get()->result_array();
	}

	function bulan11()
	{
		$this->db->select('*');
		$this->db->from('bulan');
		return $this->db->get()->result_array();
	}

	function tahun()
	{
		$this->db->select('*');
		$this->db->from('tahun');
		return $this->db->get()->result_array();
	}

	function hari($hari){
 
	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;
 
		case 'Mon':			
			$hari_ini = "Senin";
		break;
 
		case 'Tue':
			$hari_ini = "Selasa";
		break;
 
		case 'Wed':
			$hari_ini = "Rabu";
		break;
 
		case 'Thu':
			$hari_ini = "Kamis";
		break;
 
		case 'Fri':
			$hari_ini = "Jumat";
		break;
 
		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}
 
		return $hari_ini;
	}

	function bulan($bulan){
 
	switch($bulan){
		case '1':
			$bulan_ini = "I";
		break;
 
		case '2':			
			$bulan_ini = "II";
		break;
 
		case '3':
			$bulan_ini = "III";
		break;
 
		case '4':
			$bulan_ini = "IV";
		break;
 
		case '5':
			$bulan_ini = "V";
		break;
 
		case '6':
			$bulan_ini = "VI";
		break;
 
		case '7':
			$bulan_ini = "VII";
		break;
 
		case '8':			
			$bulan_ini = "VIII";
		break;
 
		case '9':
			$bulan_ini = "IX";
		break;
 
		case '10':
			$bulan_ini = "X";
		break;
 
		case '11':
			$bulan_ini = "XI";
		break;
 
		case '12':
			$bulan_ini = "XII";
		break;
		
		default:
			$bulan_ini = "Tidak di ketahui";		
		break;
	}
 
		return $bulan_ini;
	}

	function tgl_indo($tanggal){
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);
		
		// variabel pecahkan 0 = tanggal
		// variabel pecahkan 1 = bulan
		// variabel pecahkan 2 = tahun
	 
		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}
}