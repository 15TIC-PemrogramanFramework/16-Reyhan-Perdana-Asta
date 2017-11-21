<?php
/**
* 	
*/
class customer2 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->database();

		$this->load->helper(array('url'));
		$this->load->model('customer_model');

		if(!$this->session->userdata('customer_logined') ||
			$this->session->userdata('customer_logined') != true) {
			redirect ('login');
		}
	
	
		}
		
	

	function index()
	{
		$data['data_mahasiswa']=$this->customer_model->ambil_data();
		$this->load->view('pemesanan/customer/cstmr_list2',$data);

	}

	public function	tambah()
	{
		$data=array(
			'action'=>site_url('customer2/tambah_aksi'),
			'id_cstmr' => set_value ('id_cstmr'),
			'nama_cstmr' => set_value ('nama_cstmr'),
			'id_mkn' => set_value ('id_mkn'),
			'nama_mkn' => set_value ('nama_mkn'),
			'jml_mkn' => set_value ('jml_mkn'),
			'id_mnm' => set_value ('id_mnm'),
			'nama_mnm' => set_value ('nama_mnm'),
			'jml_mnm' => set_value ('jml_mnm'),
			'alamat' => set_value ('alamat'),
			
			
			'button' => 'Tambah'						
			);
		$this->load->view('pemesanan/customer/cstmr2_form',$data);
	
	}

	function tambah_aksi (){
		$data=array(

			'id_cstmr' 		=>$this->input->post('id_cstmr'),
			'nama_cstmr' 	=>$this->input->post('nama_cstmr'),
			'id_mkn' 		=>$this->input->post('id_mkn'),
			'nama_mkn' 		=>$this->input->post('nama_mkn'),
			'jml_mkn' 		=>$this->input->post('jml_mkn'),
			'id_mnm' 		=>$this->input->post('id_mnm'),
			'nama_mnm' 		=>$this->input->post('nama_mnm'),
			'jml_mnm' 		=>$this->input->post('jml_mnm'),
			'alamat' 		=>$this->input->post('alamat'),
						

			
			);

		$this->customer_model->tambah_data($data);
		redirect(site_url('customer2'));
	}








}
?>