<?php
/**
* 	
*/
class customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
			
		
		$this->load->model('user_model');

		
		if(!$this->session->userdata('admin_logined') ||
			$this->session->userdata('admin_logined') != true) {
			redirect ('Login_admin');
		}
		
	}
		
	

	function index()
	{
		$data['data_mahasiswa']=$this->user_model->ambil_data();
		$this->load->view('pemesanan/customer/cstmr_list',$data);

	}

	public function	tambah()
	{
		$data=array(
			'action'=>site_url('customer/tambah_aksi'),
			'id_cstmr' => set_value ('id_cstmr'),
			'nama_cstmr' => set_value ('nama_cstmr'),
			'id_mkn' => set_value ('id_mkn'),
			'nama_mkn' => set_value ('nama_mkn'),
			'jml_mkn' => set_value ('jml_mkn'),
			'id_mnm' => set_value ('id_mnm'),
			'nama_mnm' => set_value ('nama_mnm'),
			'jml_mnm' => set_value ('jml_mnm'),
			'alamat' => set_value ('alamat'),
			'status' => set_value ('status'),
			
			
			'button' => 'Tambah'						
			);
		$this->load->view('pemesanan/customer/cstmr_form',$data);
	
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

		$this->user_model->tambah_data($data);
		redirect(site_url('customer'));
	}

	function delete ($id_cstmr){
		$this->user_model->hapus_data($id_cstmr);
		redirect(site_url('customer'));
	}

	function edit ($id_cstmr){
		$mhs=$this->user_model->ambil_data_id($id_cstmr);
		$data=array(
			'id_cstmr' 		=>set_value('id_cstmr',$mhs[0]->id_cstmr),
			'id_mnm	' 		=>set_value('id_mnm',$mhs[0]->id_mnm),
			'id_mkn' 		=>set_value('id_mkn',$mhs[0]->id_mkn),
			'nama_cstmr' 	=>set_value('nama_cstmr',$mhs[0]->nama_cstmr),
			'alamat' 		=>set_value('alamat',$mhs[0]->alamat),
			'jml_mnm' 		=>set_value('jml_mnm',$mhs[0]->jml_mnm),
			'jml_mkn' 		=>set_value('jml_mkn',$mhs[0]->jml_mkn),
		
			'action'		=>site_url('customer/edit_aksi'),
			'button'		=> 'Edit'		
			);

		$this->load->view('pemesanan/customer/cstmr_form',$data);

	}

	function edit_aksi () {
		$data=array(

			'id_cstmr' 		=>$this->input->post('id_cstmr'),
			'nama_cstmr' 	=>$this->input->post('nama_cstmr'),
			'alamat' 	=>$this->input->post('alamat'),
			'jml_mkn' 	=>$this->input->post('jml_mkn'),
			'id_mkn' 		=>$this->input->post('id_mkn'),
			'id_mnm' 	=>$this->input->post('id_mnm'),
			'jml_mnm' 	=>$this->input->post('jml_mnm'),
			
			);
		$id_cstmr=$this->input->post('id_cstmr');
		$this->user_model->edit_data($id_cstmr,$data);
		redirect(site_url('customer'));

	}



}
?>