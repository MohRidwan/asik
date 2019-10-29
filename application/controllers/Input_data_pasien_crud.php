<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Input_data_pasien_crud extends CI_Controller {
	
	public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('Input_data_pasien_model');
	 	}
		
	public function create_pasien()
	{	
	 if($this->input->is_ajax_request()){ 		 
	   $nama_depan = trim(strip_tags(stripcslashes($this->input->post('nama_depan'))));
	   $nama_belakang = trim(strip_tags(stripcslashes($this->input->post('nama_belakang'))));
	   $nama = $nama_depan.' '.$nama_belakang;
	   $sapaan = $this->input->post('sapaan');
	   $nik = trim(strip_tags(stripcslashes($this->input->post('nik'))));
	   $tempat_lahir = trim(strip_tags(stripcslashes($this->input->post('tempat_lahir'))));
	   $tanggal_lahir = $this->input->post('tanggal_lahir');
	   $bulan_lahir = date("m",strtotime($tanggal_lahir)); //untuk medrec
	   $dateTime = new DateTime($tanggal_lahir);
	   $tanggal_lahir=date_format ( $dateTime, 'Y-m-d' );//seusuaikan format tanggal tabel
	   $jenis_kelamin = $this->input->post('jenis_kelamin');
	   $alamat = trim(strip_tags(stripcslashes($this->input->post('alamat'))));
	   $agama = trim(strip_tags(stripcslashes($this->input->post('agama'))));
	   $suku = trim(strip_tags(stripcslashes($this->input->post('suku'))));
	   $pekerjaan = trim(strip_tags(stripcslashes($this->input->post('pekerjaan'))));
	   $no_tlp = trim(strip_tags(stripcslashes($this->input->post('no_tlp'))));
	   $no_ponsel = trim(strip_tags(stripcslashes($this->input->post('no_ponsel'))));
	   $email = trim(strip_tags(stripcslashes($this->input->post('email'))));
	   $golongan_darah = $this->input->post('golongan_darah');
	   $rhesus = $this->input->post('rhesus');
	   $alergi = trim(strip_tags(stripcslashes($this->input->post('alergi'))));
	   $penyakit = trim(strip_tags(stripcslashes($this->input->post('penyakit'))));
	   $operasi = trim(strip_tags(stripcslashes($this->input->post('operasi'))));
	   $nama_pj_depan = trim(strip_tags(stripcslashes($this->input->post('nama_pj_depan'))));
	   $nama_pj_belakang = trim(strip_tags(stripcslashes($this->input->post('nama_pj_belakang'))));
	   $sapaan_pj = $this->input->post('sapaan_pj');
	   $nik_pj = trim(strip_tags(stripcslashes($this->input->post('nik_pj'))));
	   $hubungan_pj = $this->input->post('hubungan_pj');
	   $alamat_pj = trim(strip_tags(stripcslashes($this->input->post('alamat_pj'))));
	   $no_tlp_pj = trim(strip_tags(stripcslashes($this->input->post('no_tlp_pj'))));
	   $no_ponsel_pj = trim(strip_tags(stripcslashes($this->input->post('no_ponsel_pj'))));
	   $catatan_khusus = trim(strip_tags(stripcslashes($this->input->post('catatan_khusus'))));
	   $author = $this->session->userdata('user_id');
	   $created = date("Y-m-d H:i:s");
	   
	   $m = $this->Input_data_pasien_model->create_medrec($jenis_kelamin,$bulan_lahir);
	   $medrec = $m->medrec;
	   if($medrec){
		   $post = array('medrec' => $medrec, 
		   				 'nama_depan' => $nama_depan,
		   				 'nama_belakang' => $nama_belakang,
						 'nama' => $nama,
		   				 'sapaan' => $sapaan,
						 'nik' => $nik,
						 'tempat_lahir' => $tempat_lahir,
						 'tanggal_lahir' => $tanggal_lahir,
						 'jenis_kelamin' => $jenis_kelamin,
						 'alamat' => $alamat,
						 'agama' => $agama,
						 'suku' => $suku,
						 'pekerjaan' => $pekerjaan,
						 'no_tlp' => $no_tlp,
						 'no_ponsel' => $no_ponsel,
						 'email' => $email,
						 'golongan_darah' => $golongan_darah,
						 'rhesus' => $rhesus,
						 'nama_pj_depan' => $nama_pj_depan,
						 'nama_pj_belakang' => $nama_pj_belakang,
						 'sapaan_pj' => $sapaan_pj,
						 'nik_pj' => $nik_pj,
						 'hubungan_pj' => $hubungan_pj,
						 'alamat_pj' => $alamat_pj,
						 'no_tlp_pj' => $no_tlp_pj,
						 'no_ponsel_pj' => $no_ponsel_pj,
						 'catatan_khusus' => $catatan_khusus,
						 'author' => $author,
						 'created' => $created);
			$p = $this->Input_data_pasien_model->create_pasien('pasien',$this->security->xss_clean($post));
			if($p){ 
			  $halaman = base_url().'cari_pasien';
			  $result = array('pesan' => 'Input Data Pasien Berhasil &#x1F60A;','halaman' => $halaman);
			  echo json_encode($result);
			}else{
			  $result = array('pesan' => 'Input Data Pasien Gagal &#x1F622;');
			  echo json_encode($result);  
			}
			if(!empty($alergi)){  
				$this->Input_data_pasien_model->create_pasien_batch('pasien_alergi',$medrec,$alergi,$author,$created);
			}
			if(!empty($operasi)){  
				$this->Input_data_pasien_model->create_pasien_batch('pasien_operasi',$medrec,$operasi,$author,$created);
			}
			if(!empty($penyakit)){  
				$this->Input_data_pasien_model->create_pasien_batch('pasien_penyakit',$medrec,$penyakit,$author,$created);
			}	 
	   } 	   
	 }else{
	   redirect(base_url('logout'));
	 }
	}
	
}
/* End of file Input_data_pasien_crud.php */
/* Location: ./aplication/controllers/Input_data_pasien_crud.php */
