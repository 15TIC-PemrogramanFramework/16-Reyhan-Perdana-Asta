		<?php 	
/**
* 	
*/
class member_model extends CI_Model
{
	public $member 		='member';
	public $user		= 'user';
	public $order			= 'DESC';

	function __construct()
	{
		parent ::__construct();
	}

		//Unutk mengambil data seluruh mahasiswa
	function ambil_data()
	{
		# code... 
		$this->db->order_by($this->user,$this->order);
		return $this->db->get($this->member)->result();
	}
		//Untuk mengambil data epr id dari seluruh mahasiswa
	function ambil_data_id($user)
	{
		# code... 
		$this->db->where($this->user,$user);
		return $this->db->get($this->member)->result();
	}

		//Untuke manmbahkan data ke table mahasiswa
	function tambah_data($data){
		return $this->db->insert($this->member ,$data);	
	}

		//Untuk mengapus data table mahasiswa

	function hapus_data($user)
	{
		$this->db->where($this->user,$user);
		return	$this->db->delete($this->member);
	}

	function edit_data($user,$data)
	{
		$this->db->where($this->user,$user);
		$this->db->update($this->member,$data);
	}

	function ambil_cek_login ($user,$pass)
	{
		# code... 
		$this->db->where('user',$user);
		$this->db->where('pass',$pass);
		return $this->db->get($this->member)->row();
	}

}
 ?>