<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Pendaftaran_crud extends CI_Controller {
	
	public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('Pendaftaran_model');
	 	}
	
	public function tampil_layan()
	{
		if($this->input->is_ajax_request()){
			 $result=$this->Pendaftaran_model->get_layanan_list();		 
			 echo json_encode($result);		
		}else{
			 redirect(base_url('logout'));
		}
	}
	
	public function tampil_waktu()
	{
	 if($this->input->is_ajax_request()){
	 $result=$this->Pendaftaran_model->get_waktu_layan();
	 echo json_encode($result);
	
		}else{
		redirect(base_url('logout'));
		}
	}
	
	
	
	
	
	
}
/* End of file Pendaftaran_crud.php */
/* Location: ./aplication/controllers/Pendaftaran_crud.php */
