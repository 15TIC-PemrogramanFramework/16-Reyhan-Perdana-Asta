<?php
/**
* 	
*/
class makanan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
			
		
		$this->load->model('makanan_model');

		
		if(!$this->session->userdata('admin_logined') ||
			$this->session->userdata('admin_logined') != true) {
			redirect ('Login_admin');
		}
	}

	function index()
	{
		$data['data_mahasiswa']=$this->makanan_model->ambil_data();
		$this->load->view('pemesanan/makanan/makanan_list',$data);
	}

	public function	tambah()
	{
		$data=array(
			'action'=>site_url('makanan/tambah_aksi'),
			'id_mkn' => set_value ('id_cstmr'),
			'nama_mkn' => set_value ('nama_cstmr'),
			'harga' => set_value ('harga'),
			'button' => 'Tambah'						
			);

		$this->load->view('pemesanan/makanan/makanan_form',$data);
	}

	function tambah_aksi (){
		$data=array(

			'id_mkn' 		=>$this->input->post('id_mkn'),
			'nama_mkn' 		=>$this->input->post('nama_mkn'),
			'harga' 		=>$this->input->post('harga'),

			
			);

		$this->makanan_model->tambah_data($data);
		redirect(site_url('makanan'));
	}

	function delete ($id_mkn){
		$this->makanan_model->hapus_data($id_mkn);
		redirect(site_url('makanan'));
	}

	function edit ($id_mkn){
		$mhs=$this->makanan_model->ambil_data_id($id_mkn);
		$data=array(
			'id_mkn' 		=>set_value('id_mkn',$mhs[0]->id_mkn),
			'nama_mkn' 		=>set_value('nama_mkn',$mhs[0]->nama_mkn),
			'harga' 		=>set_value('harga',$mhs[0]->harga)	,
			'action'		=>site_url('makanan/edit_aksi'),
			'button'		=> 'Edit'		
			);

		$this->load->view('pemesanan/makanan/makanan_form',$data);

	}

	function edit_aksi () {
		$data=array(

			'id_mkn' 		=>$this->input->post('id_mkn'),
			'nama_mkn' 		=>$this->input->post('nama_mkn'),
			'harga' 		=>$this->input->post('harga')
			);
		$id_mkn=$this->input->post('id_mkn');
		$this->makanan_model->edit_data($id_mkn,$data);
		redirect(site_url('makanan'));

	}



}
?>