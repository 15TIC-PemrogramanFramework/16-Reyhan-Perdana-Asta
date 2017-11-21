		<?php 	
/**
* 	
*/
class customer_model extends CI_Model
{
	public $customer 		='customer';
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
	 $id_cstmr= $this->session->userdata('id_cstmr'); // dapatkan id user yg login
  $this->db->select('*');
  $this->db->where('id_cstmr', $id_cstmr);//
  $this->db->from('customer');
  $query = $this->db->get();
  return $query->result();
	}
		//Untuk mengambil data epr id dari seluruh mahasiswa
	function ambil_data_id($user)
	{
		# code... 
		$this->db->where($this->id_cstmr,$id_cstmr);
		return $this->db->get($this->customer)->result();
	}

		//Untuke manmbahkan data ke table mahasiswa
	function tambah_data($data){
		return $this->db->insert($this->customer ,$data);	
	}

		//Untuk mengapus data table mahasiswa

	function hapus_data($user)
	{
		$this->db->where($this->user,$user);
		return	$this->db->delete($this->customer);
	}

	function edit_data($user,$data)
	{
		$this->db->where($this->id_cstmr,$user);
		$this->db->update($this->customer,$data);
	}

	function ambil_cek_login ($id_cstmr,$nama_cstmr)
	{
		# code... 
		$this->db->where('id_cstmr',$id_cstmr);
		$this->db->where('nama_cstmr',$nama_cstmr);
		return $this->db->get($this->customer)->row();
	}

}
 ?>