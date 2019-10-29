<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Input_data_pasien_model extends CI_Model
{ 
	
	public function __construct()
	{
		parent::__construct();
	} 
 
	public function create_medrec($j,$b) {  //funtion membuat medrec		
		$query = $this->db->query("SELECT CONCAT('".$this->session->userdata('klinik_kode')."','".$j."','".$b."',(SELECT LPAD((SELECT IFNULL(MAX(id), 0) + 1 FROM pasien),6,'0'))) AS medrec");
		if ($query->num_rows() > 0) {
			return $query->row();
		}else{
			return false;
		}
		$query->free_result();
    }
	
	public function create_pasien($table,$post) {		
		$this->db->insert($table,$post);
		$affected_rows = $this->db->affected_rows();
		if ($affected_rows > 0) {
			return $affected_rows;
		}else{
			return false;
		}
    }
	
	public function create_pasien_batch($table,$medrec,$data,$author,$created) {
		$ex = explode(",",$data);
		$post_batch = array();
		foreach ($ex as $row) {
			$a = array('medrec'=>$medrec,'nama'=>$row,'author'=>$author,'created'=>$created);
			array_push($post_batch,$a);
		}		
		$this->db->insert_batch($table,$post_batch);
    }
 
}
/* End of file Input_data_pasien_model.php */
/* Location: ./aplication/models/Input_data_pasien_model.php */