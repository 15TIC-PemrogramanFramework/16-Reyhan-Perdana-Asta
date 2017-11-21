<?php 	
/**
* 	
*/
class user_model extends CI_Model
{
	public $nama_table 		='customer';
	public $id_cstmr		= 'id_cstmr';
	public $order			= 'DESC';

	function __construct()
	{
		parent ::__construct();
	}

		//Unutk mengambil data seluruh mahasiswa
	function ambil_data()
	{
		# code... 
		$this->db->order_by($this->id_cstmr,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
		//Untuk mengambil data epr id dari seluruh mahasiswa
	function ambil_data_id($id_cstmr)
	{
		# code... 
		$this->db->where($this->id_cstmr,$id_cstmr);
		return $this->db->get($this->nama_table)->result();
	}

		//Untuke manmbahkan data ke table mahasiswa
	function tambah_data($data){
		return $this->db->insert($this->nama_table ,$data);	
	}

		//Untuk mengapus data table mahasiswa

	function hapus_data($id_cstmr)
	{
		$this->db->where($this->id_cstmr,$id_cstmr);
		return	$this->db->delete($this->nama_table);
	}

	function edit_data($id_cstmr,$data)
	{
		$this->db->where($this->id_cstmr,$id_cstmr);
		$this->db->update($this->nama_table,$data);
	}
	
	function ambil_cek_login ($id_cstmr,$nama_cstmr)
	{
		# code... 
		$this->db->where('id_cstmr',$id_cstmr);
		$this->db->where('nama_cstmr',$nama_cstmr);
		return $this->db->get($this->nama_table)->row();
	}
	
}
 ?>