<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Login extends CI_Controller {
	
	public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('Login_model');
	 	}
		
	public function index(){
		$this->session->set_userdata('klinik_id', '1');
		$this->session->set_userdata('klinik_kode', 'A');
		$data = array('title' => 'ASIK v 1.0');
		$this->load->view('login_view',$data);
	}
	
	public function cek_user()
	{	
	 if($this->input->is_ajax_request()){			 	 
	   $post = array('username' => $this->input->post('username'),'klinik_id'=>$this->session->userdata('klinik_id'));
	   $u = $this->Login_model->cek_user($this->security->xss_clean($post));
	   echo json_encode($u);
	 }else{
	   redirect(base_url('logout'));
	 }
	}
	
	public function shift_waktu()
	{	
	 if($this->input->is_ajax_request()){			 	 
	   $post = array('layan_id' => $this->input->post('id'),'klinik_id'=>$this->session->userdata('klinik_id'));
	   $sw = $this->Login_model->shift_waktu($post);
	   echo json_encode($sw);
	 }else{
	   redirect(base_url('logout'));
	 }
	}
	
	public function signin(){
	  if($this->input->is_ajax_request()){
		$post = array('username' => $this->input->post('username'),
					  'password' => $this->input->post('password')					  
				);
				
		$shift_waktu = $this->input->post('shift_waktu');
		$layan = $this->input->post('layan');
		$layan_ruang = $this->input->post('layan_ruang');
		
		$data['user'] = $this->Login_model->signin($this->security->xss_clean($post));
		if($data['user']){
			foreach ($data as $d) {
			  $sess_data['user_id'] = $d->id;
			  $sess_data['shift_waktu_id'] = $shift_waktu;
			  $sess_data['layan_id'] = $layan;
			  $sess_data['layan_ruang_id'] = $layan_ruang;
			  $this->session->set_userdata($sess_data);
			}
			if($this->session->userdata('layan_id')){
				$page = $this->Login_model->page();			
				echo base_url(str_replace(' ','',$page->nama));
			}
		}else{
			return false;		
		}
	  }else{
	   redirect(base_url('logout'));
	  }	 
	}
}
/* End of file Login.php */
/* Location: ./aplication/controllers/Login.php */