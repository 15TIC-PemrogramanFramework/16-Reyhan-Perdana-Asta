<?php
/**
* 	
*/
class minum extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->model('minum_model');

			if(!$this->session->userdata('admin_logined') ||
			$this->session->userdata('admin_logined') != true) {
			redirect ('Login_admin');
		}
	}

	function index()
	{
		$data['data_mahasiswa']=$this->minum_model->ambil_data();
		$this->load->view('pemesanan/minum/minum_list',$data);
	}

	public function	tambah()
	{
		$data=array(
			'action'=>site_url('minum/tambah_aksi'),
			'id_mnm' => set_value ('id_mnm'),
			'nama_mnm' => set_value ('nama_mnm'),
			'harga' => set_value ('harga'),
			'button' => 'Tambah'						
			);

		$this->load->view('pemesanan/minum/minum_form',$data);
	}

	function tambah_aksi (){
		$data=array(

			'id_mnm' 		=>$this->input->post('id_mnm'),
			'nama_mnm' 		=>$this->input->post('nama_mnm'),
			'harga' 		=>$this->input->post('harga'),

			
			);

		$this->minum_model->tambah_data($data);
		redirect(site_url('minum'));
	}

	function delete ($id_mnm){
		$this->minum_model->hapus_data($id_mnm);
		redirect(site_url('minum'));
	}

	function edit ($id_mnm){
		$mhs=$this->minum_model->ambil_data_id($id_mnm);
		$data=array(
			'id_mnm' 		=>set_value('id_mnm',$mhs[0]->id_mnm),
			'nama_mnm' 		=>set_value('nama_mnm',$mhs[0]->nama_mnm),
			'harga' 		=>set_value('harga',$mhs[0]->harga)	,
			'action'		=>site_url('minum/edit_aksi'),
			'button'		=> 'Edit'		
			);

		$this->load->view('pemesanan/minum/minum_form',$data);

	}

	function edit_aksi () {
		$data=array(

			'id_mnm' 		=>$this->input->post('id_mnm'),
			'nama_mnm' 		=>$this->input->post('nama_mnm'),
			'harga' 		=>$this->input->post('harga')
			);
		$id_mnm=$this->input->post('id_mnm');
		$this->minum_model->edit_data($id_mnm,$data);
		redirect(site_url('minum'));

	}



}
?>