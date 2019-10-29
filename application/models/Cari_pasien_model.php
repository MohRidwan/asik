<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Cari_pasien_model extends CI_Model
{ 

	var $table = 'pasien'; //nama tabel dari database
	var $column_order = array('medrec','nama','nik','tanggal_lahir','alamat',null); //field yang ada di table pasien
	var $column_search = array('medrec','nama','sapaan','nik','tanggal_lahir','alamat'); //field yang diizin untuk pencarian 
	var $order = array('id' => 'desc'); // default order
	

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{ 
		if(empty($_POST['search']['value'])){
			$this->db->from($this->table);
			$this->db->limit(10);
		}else{
			$this->db->from($this->table);		
		}	
		$i = 0;
	
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
		return $query->result();
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}
	
	public function informasi_pasien($post)
	{
		$query['pasien'] = $this->db->get_where('pasien',$post)->row();
		$query['pasien_alergi'] = $this->db->get_where('pasien_alergi',$post)->result();
		$query['pasien_operasi'] = $this->db->get_where('pasien_operasi',$post)->result();
		$query['pasien_penyakit'] = $this->db->get_where('pasien_penyakit',$post)->result();
		
		//dummy
		$list = $this->db->get_where('penatajasa_dummy',$post)->result();
		if($list){
		foreach ($list as $field) {
			$row = array();
			$row[] = $field->tanggal;
			$row[] = $field->layanan;
			$row[] = $field->diagnosis;
			$row[] = $field->dokter;
			$row[] = $field->medrec;
			$data[] = $row;
		}
		$query['penatajasa'] = $data;
		}
		 $kunjungan = $this->db->query("SELECT 
		  COUNT(*) as kunjungan
		FROM
		  penatajasa_dummy 
		WHERE CONCAT(YEAR(tanggal), '/', MONTH(tanggal)) = CONCAT(YEAR(NOW()), '/', MONTH(NOW())) 
		and medrec ='".$post['medrec']."'
		GROUP BY YEAR(tanggal),
		  MONTH(tanggal)")->row();
		 if($kunjungan){ 
		  $query['kunjungan'] = $kunjungan->kunjungan;
		 }
		
		return $query;
	}
	
	public function hapus_data_pasien($where,$table,$data)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
		$affected_rows = $this->db->affected_rows();
		if ($affected_rows > 0) {
			return $affected_rows;
		}else{
			return false;
		}
	}
	
	public function create($tbl, $data) {
		$this->db->insert($tbl, $data);
		return $this->db->insert_id();
	}
	
	public function update($where,$table,$data) {
		$this->db->where($where);
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}
	
	public function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
		return $this->db->affected_rows();
	}
}
/* End of file Cari_pasien_model.php */
/* Location: ./aplication/models/Cari_pasien_model.php */