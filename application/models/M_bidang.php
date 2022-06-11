<?php 
 if (!defined('BASEPATH'))exit('No direct script access allowed');

 class M_bidang extends CI_Model {
  
  function __construct() {
   parent::__construct();
  }
  
  function get_all_ketua() {
   $this->db->select('*');
   $this->db->from('ketua');
   $query = $this->db->get();
   
   return $query->result();
  }
 }
?>