<?php 	
/**
* 	
*/
class minum_model extends CI_Model
{
	public $nama_table 		='minuman';
	public $id_mnm			= 'id_mnm';
	public $order			= 'DESC';

	function __construct()
	{
		parent ::__construct();
	}

		//Unutk mengambil data seluruh mahasiswa
	function ambil_data()
	{
		# code... 
		$this->db->order_by($this->id_mnm,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
		//Untuk mengambil data epr id dari seluruh mahasiswa
	function ambil_data_id($id_mnm)
	{
		# code... 
		$this->db->order_by($this->id_mnm,$id_mnm);
		return $this->db->get($this->nama_table)->result();
	}

		//Untuke manmbahkan data ke table mahasiswa
	function tambah_data($data){
		return $this->db->insert($this->nama_table ,$data);	
	}

		//Untuk mengapus data table mahasiswa

	function hapus_data($id_mnm)
	{
		$this->db->where($this->id_mnm,$id_mnm);
		return	$this->db->delete($this->nama_table);
	}

	function edit_data($id_mnm,$data)
	{
		$this->db->where($this->id_mnm,$id_mnm);
		$this->db->update($this->nama_table,$data);
	}

	function ambil_cek_login ($id_mnm,$password)
	{
		# code... 
		$this->db->where('id_mnm',$id_mnm);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

}
 ?>