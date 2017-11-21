<?php 	
/**
* 	
*/
class Admin_model extends CI_Model
{
	public $nama_table 		='admin';
	public $username		= 'username';
	public $order			= 'DESC';

	function __construct()
	{
		parent ::__construct();
	}

		//Unutk mengambil data seluruh mahasiswa
	function ambil_data()
	{
		# code... 
		$this->db->order_by($this->username,$this->order);
		return $this->db->get($this->nama_table)->result();
	}
		//Untuk mengambil data epr id dari seluruh mahasiswa
	function ambil_data_id($username)
	{
		# code... 
		$this->db->where($this->username,$username);
		return $this->db->get($this->nama_table)->result();
	}

		//Untuke manmbahkan data ke table mahasiswa
	function tambah_data($data){
		return $this->db->insert($this->nama_table ,$data);	
	}

		//Untuk mengapus data table mahasiswa

	function hapus_data($username)
	{
		$this->db->where($this->username,$username);
		return	$this->db->delete($this->nama_table);
	}

	function edit_data($username,$data)
	{
		$this->db->where($this->username,$username);
		$this->db->update($this->nama_table,$data);
	}

	function ambil_cek_login ($username,$password)
	{
		# code... 
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

}
 ?>