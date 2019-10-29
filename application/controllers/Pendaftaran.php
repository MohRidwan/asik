<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftaran extends MY_Controller {

  public function index(){
	$akses_halaman = array(10);   
	if(!empty($this->session->userdata('user_id'))){
		if (in_array($this->session->userdata('layan_id'), $akses_halaman))
		{
    		$this->render_page('pendaftaran');
		}else{
			redirect(base_url('logout'));	
		}
	}else{
		redirect(base_url('logout'));	
	}
  }
  
  public function poliklinik(){	
	$akses_halaman = array(10);   
	if(!empty($this->session->userdata('user_id'))){
		if (in_array($this->session->userdata('layan_id'), $akses_halaman))
		{
    		$medrec = $this->security->xss_clean($this->uri->segment(3, 0));
			if(!empty($medrec)){
				$result = $this->cek_medrec('pasien',$medrec); //cek tabel pasien
				if ($result){
					if($result->status == 1){//jika status aktif
						$this->render_page_medrec('pendaftaran_poliklinik',$medrec);
					}else{//jika status yang lain
						redirect(base_url('cari_pasien'));
					}
				}else{
					redirect(base_url('cari_pasien'));
				}
			}else{
				redirect(base_url('cari_pasien'));	
			}			
		}else{
			redirect(base_url('logout'));	
		}
	}else{
		redirect(base_url('logout'));	
	}
  }
  
  public function laboratorium(){	
	$akses_halaman = array(1,2,10);   
	if(!empty($this->session->userdata('user_id'))){
		if (in_array($this->session->userdata('layan_id'), $akses_halaman))
		{
    		$medrec = $this->security->xss_clean($this->uri->segment(3, 0));
			if(!empty($medrec)){
				$result = $this->cek_medrec('pasien',$medrec); //cek tabel pasien
				if ($result){
					if($result->status == 1){//jika status aktif
						$this->render_page_medrec('pendaftaran_laboratorium',$medrec);
					}else{//jika status yang lain
						redirect(base_url('cari_pasien'));
					}
				}else{
					redirect(base_url('cari_pasien'));
				}
			}else{
				redirect(base_url('cari_pasien'));	
			}			
		}else{
			redirect(base_url('logout'));	
		}
	}else{
		redirect(base_url('logout'));	
	}
  }
  
}
// print_r($this->session->all_userdata());
/* End of file Pendaftaran.php */
/* Location: ./aplication/controllers/Pendaftaran.php */