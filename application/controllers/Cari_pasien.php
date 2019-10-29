<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cari_pasien extends MY_Controller {

  public function index(){
	$akses_halaman = array(10);   
	if(!empty($this->session->userdata('user_id'))){
		if (in_array($this->session->userdata('layan_id'), $akses_halaman))
		{
    		$this->render_page('cari_pasien');
		}else{
			redirect(base_url('logout'));	
		}
	}else{
		redirect(base_url('logout'));	
	}
	
  }
  
}
// print_r($this->session->all_userdata());
/* End of file Input_data_pasien.php */
/* Location: ./aplication/controllers/Input_data_pasien.php */