<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pendaftaran_model extends CI_Model
{ 
	var $table = 'pendaftaran';
	//var $table2 ='layan_ruang';
	var $column_order = array('antrian','medrec','nama','jenis_asuransi','layanan','jadwal',null);
	var $order = array('id' => 'desc');
	
	public function __construct()
	{
		parent::__construct();
		$this ->load->database();
	}
	
	function get_layanan_list()
	{			 
		$hasil = $this->db->query("select * FROM layan_ruang WHERE klinik_id =".$this->session->userdata('klinik_id')." and layan_id != '10'");
		return $hasil->result();
	}
	
	function get_waktu_layan()
	{
		//$layan_ruang_id = $this->input->post('layan_ruang_id');
		$this->db->select('waktu'); //memeilih field
		$this->db->from('waktu_layan');
		$this->db->join('layan_ruang','waktu_layan.layan_ruang_id = layan_ruang.id');
		
		$query = $this->db->get(); 
        if ($query->num_rows() > 0){
			
			return $query->result();
		} else{
			return false;
			}
	}		
	
 
	public function get_datatables($post)
    {	
		$this->db->select('antrian,medrec,nama,jenis_asuransi,layanan,jadwal',null);
		$this->db->from('pendaftaran'); 
		$this->db->where($post);      
		$query = $this->db->get(); 
		if( $query->num_rows() > 0 ){
        	return $query->result();		
		}else{
			return false;
		}
    }	
	
	public function tampil($table,$data)
	{
		return$this->db->get('pendaftaran');
		
	}
	
}
/* End of file Pendaftaran_model.php */
/* Location: ./aplication/models/Pendaftaran_model.php */