<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
  function render_page($page, $data = NULL){
			//print_r($this->session->all_userdata());
            $header['title'] = 'ASIK v 1.0';
			$header['klinik'] = $this->db->get_where('klinik',array('id'=>$this->session->userdata('klinik_id')))->row();
			$header['user'] = $this->db->get_where('user',array('id'=>$this->session->userdata('user_id')))->row();
			$header['shift_waktu'] = $this->db->get_where('shift_waktu',array('id'=>$this->session->userdata('shift_waktu_id')))->row();
			$header['layan_ruang'] = $this->db->get_where('layan_ruang',array('id'=>$this->session->userdata('layan_ruang_id')))->row();		
							
			$data['headernya'] = $this->load->view("$page/header", $header, TRUE);		
			$data['menunya'] = $this->load->view("$page/menu", $data, TRUE);
			$data['contentnya'] = $this->load->view("$page/content", $data, TRUE);					
			$this->load->view("$page/index", $data);	
    }
	
	function cek_medrec($table,$medrec){
		return $this->db->get_where($table,array('medrec' => $medrec))->row();		
	}
	
	function render_page_medrec($page, $medrec, $data = NULL){
			//print_r($this->session->all_userdata());
            $header['title'] = 'ASIK v 1.0';
			$header['klinik'] = $this->db->get_where('klinik',array('id'=>$this->session->userdata('klinik_id')))->row();
			$header['user'] = $this->db->get_where('user',array('id'=>$this->session->userdata('user_id')))->row();
			$header['shift_waktu'] = $this->db->get_where('shift_waktu',array('id'=>$this->session->userdata('shift_waktu_id')))->row();
			$header['layan_ruang'] = $this->db->get_where('layan_ruang',array('id'=>$this->session->userdata('layan_ruang_id')))->row();		
			
			$content['pasien'] = $this->db->get_where('pasien',array('medrec' => $medrec))->row();
							
			$data['headernya'] = $this->load->view("$page/header", $header, TRUE);		
			$data['menunya'] = $this->load->view("$page/menu", $data, TRUE);
			$data['contentnya'] = $this->load->view("$page/content", $content, TRUE);					
			$this->load->view("$page/index", $data);	
    }
}
/* End of file MY_Controller.php */
/* Location: ./aplication/core/MY_Controller.php */