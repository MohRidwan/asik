<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_model extends CI_Model
{ 
	
	public function __construct()
	{
		parent::__construct();
	} 
 
	public function cek_user($post)
    {	
		//1.
		/*$this->db->select('user_name'); 
		$this->db->from('user');
		$this->db->where('user_name', $user_name);
		$query = $this->db->get();*/
		//2. $query = $this->db->query("select * from user where username = '".$data['username']."'");
		//3. $query= $this->db->get_where('user',$post);
		$this->db->select('t1.username,t2.layan_id,t3.nama layan_nama,t4.id layan_ruang_id,t4.nama layan_ruang_nama');
		$this->db->from('user t1'); 
		$this->db->join('user_role t2', 't2.user_id=t1.id', 'left');
		$this->db->join('layan t3', 't2.layan_id=t3.id', 'left');
		$this->db->join('layan_ruang t4', 't4.layan_id=t3.id', 'left');
		$this->db->where($post);      
		$query = $this->db->get();
		//return $query->result();
		if( $query->num_rows() > 0 ){
        	return $query->result();		
		}else{
			return false;
		}
    }	

	public function shift_waktu($post) {  //funtion menampilkan shift
		$this->db->select('id shift_waktu_id,nama shift_waktu_nama');//as
		$this->db->from('shift_waktu'); 
		$this->db->where($post);      
		$query = $this->db->get(); 
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
    }
	
	public function signin($post) {  //funtion signin
      	$query= $this->db->get_where('user',$post);
		if( $query->num_rows() > 0 ){
        	return $query->row();		
		}else{
			return false;
		}
    }
	
	public function page() {  //funtion halaman awal
      	$query= $this->db->get_where('layan',array('id'=>$this->session->userdata('layan_id'))); 
		if( $query->num_rows() > 0 ){
        	return $query->row();		
		}else{
			return false;
		}
    }
 
}
/* End of file Login_model.php */
/* Location: ./aplication/models/Login_model.php */