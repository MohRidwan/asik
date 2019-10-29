<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
class Cari_pasien_crud extends CI_Controller {
	
	public function __construct()
	 	{
	 		parent::__construct();
	 		$this->load->model('Cari_pasien_model');
	 	}
		
	public function create_pasien() //dummy pasien
	{	
	 $jumlah_data = 100000;
        for ($i=1;$i<=$jumlah_data;$i++){
            $data   =   array(
				"nama" => "nama ke".$i,
                "medrec"         =>  'A101'.$i,
                "nik"          =>  "3273".$i,
				"tanggal_lahir"=> "1980-09-01",
				"alamat" => "alamat ke".$i);
            $this->db->insert('pasien',$data); 
        }
        echo $i.' Data Berhasil Di Insert';
	}
	
	function get_data_pasien()
	{
		$list = $this->Cari_pasien_model->get_datatables();
		$data = array();
		$no = $_POST['start']; //paging
		foreach ($list as $field) {
			//$no++;
			$row = array();
			//$row[] = $no;
			$row[] = $field->medrec;
			
			$nama = $field->nama.' '.$field->sapaan;
			$row[] = $nama;
			
			$row[] = $field->nik;
			
			$dateTime = new DateTime($field->tanggal_lahir);
	   		$tanggal_lahir=date_format ( $dateTime, 'd-m-Y' );
			$row[] = $tanggal_lahir;
			
			$row[] = $field->alamat;
			
			$status = $field->status;
			if($status == 1){
		    	/*$info = "<a href=\"javascript:void(0);\" class=\"bs-tooltip rekam_medis_pasien\" data-medrec=\"$field->medrec\" data-ttl=\"$field->tanggal_lahir\" data-placement=\"right\" data-original-title=\"Rekam Medis Pasien\" style=\"z-index:100\">
				<button class=\"btn btn-xs\"><i class=\"fa fa-stethoscope\" aria-hidden=\"true\"></i></button>
				</a>";*/
				$info = "<a href=\"javascript:void(0);\" class=\"bs-tooltip rekam_medis_pasien\" data-medrec=\"$field->medrec\" data-ttl=\"$field->tanggal_lahir\" data-jenis_kelamin=\"$field->jenis_kelamin\" data-placement=\"right\" data-original-title=\"Rekam Medis Pasien\" style=\"z-index:100\">
				<span class=\"fa-stack\">
				  <i class=\"fa fa-circle-o fa-stack-2x\"></i>
				  <i class=\"fa fa-stethoscope fa-stack-1x\"></i>
				</span></a>"; 
			}elseif($status != 0){
				$info = "<a href=\"javascript:void(0);\" class=\"bs-tooltip rekam_medis_pasien\" data-medrec=\"$field->medrec\" data-ttl=\"$field->tanggal_lahir\" data-jenis_kelamin=\"$field->jenis_kelamin\" data-placement=\"right\" data-original-title=\"Pasien Non Aktif\">
<span class=\"fa-stack\">
  <i class=\"fa fa-stethoscope fa-stack-1x text-danger\"></i>
  <i class=\"fa fa-ban fa-stack-2x text-danger\"></i>
</span></a>";
			}
			$row[] = $info;
			
			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Cari_pasien_model->count_all(),
			"recordsFiltered" => $this->Cari_pasien_model->count_filtered(),
			"data" => $data		
		);
		//output dalam format JSON
		echo json_encode($output);
	}
	
  	public function informasi_pasien()
	{	
	 if($this->input->is_ajax_request()){			 	 
	   $post = array('medrec' => $this->input->post('medrec',true));
	   $result = $this->Cari_pasien_model->informasi_pasien($post);
	   echo json_encode($result);
	 }else{
	   redirect(base_url('logout'));
	 }
	}
	
	public function hapus_data_pasien()
	{	
	 if($this->input->is_ajax_request()){			 	 
	   $medrec = $this->input->post('medrec');
	   $where = array('medrec' => $medrec);
	   
	   $data = array('status' => 2);
	   
	   $result = $this->Cari_pasien_model->hapus_data_pasien($where,'pasien',$data);
	   $hasil = array('hapus' => $result);
	   echo json_encode($hasil);
	   
	   if($result){//jika sukses insert ke log pasien
			$data = array(
					'date' => date("Y-m-d H:i:s"),
					'medrec' => $medrec,
					'aksi' => 2,
					'author' => $this->session->userdata('user_id')
			);
			$this->Cari_pasien_model->create('pasien_log',$data);
	   }
	 }else{
	   redirect(base_url('logout'));
	 }
	}
	
	public function edit_data_pasien()
	{	if($this->input->is_ajax_request()){
			
		 $nama_depan = trim(strip_tags(stripcslashes($this->input->post('nama_depan'))));
		 $nama_belakang = trim(strip_tags(stripcslashes($this->input->post('nama_belakang'))));
		 $nama = $nama_depan.' '.$nama_belakang;
		 $sapaan = $this->input->post('sapaan');
		 $nik = trim(strip_tags(stripcslashes($this->input->post('nik'))));
		 $tempat_lahir = trim(strip_tags(stripcslashes($this->input->post('tempat_lahir'))));
		 $tanggal_lahir = $this->input->post('tanggal_lahir');
		 $dateTime = new DateTime($tanggal_lahir);
		 $tanggal_lahir = date_format($dateTime,'Y-m-d'); //seusuaikan format tanggal tabel
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
		 $medrec = $this->input->post('medrec2');
		 
		 $where = array ('medrec' => $medrec);
		 $data = array( 'nama_depan' => $nama_depan,
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
						 'catatan_khusus' => $catatan_khusus);
						 
		 $result = $this->Cari_pasien_model->update($where,'pasien',$this->security->xss_clean($data));
		 if($result > 0){
			 $hasil = array('pesan' => 'Edit Data Pasien Berhasil &#x1F60A;','medrec' => $medrec);
			 //insert pasien_log
			 $data = array(
					'date' => date("Y-m-d H:i:s"),
					'medrec' => $medrec,
					'aksi' => 3,
					'author' => $this->session->userdata('user_id')
			);
			$this->Cari_pasien_model->create('pasien_log',$data);		 
		 }else{
			 $hasil = array('pesan' => 'No Data Update');
		 }
		
		 echo json_encode($hasil);
		 
	    }else{
	    	redirect(base_url('logout'));
        }
	}
	
	public function edit_pasien_informasi(){
		if($this->input->is_ajax_request()){
			$tags = $this->input->post('tags');
			$medrec = $this->input->post('medrec');
			$table = $this->input->post('table');
			$aksi = $this->input->post('aksi');
			
			if($aksi == 'create'){
				$data = array('medrec' => $medrec,
							  'nama' => $tags,
							  'author' => $this->session->userdata('user_id'),
							  'created' =>	date("Y-m-d H:i:s")
						);
				$result = $this->Cari_pasien_model->create($table,$data);
				echo $result;
			}else if($aksi == 'delete'){
				$where = array('medrec' => $medrec, 'nama' => $tags); 
				$result  = $this->Cari_pasien_model->delete($where,$table);
				echo $result;
			}
		}				
	}
	
	public function update_sapaan_pasien(){
		if($this->input->is_ajax_request()){
			$medrec = $this->input->post('medrec');
			$sapaan = $this->input->post('sapaan');
			$where = array('medrec' => $medrec);
			$data = array('sapaan' => $sapaan);
			$result = $this->Cari_pasien_model->update($where,'pasien',$this->security->xss_clean($data));
			if ($result > 0){
				 $hasil = array('pesan' => 'yes');
			}else{
				 $hasil = array('pesan' => 'no');
			}
			echo json_encode($hasil);
		}				
	}
	
}
/* End of file Cari_pasien_crud.php */
/* Location: ./aplication/controllers/Cari_pasien_crud.php */
